<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Models\Ostan;
use App\Models\Customer;
use App\Models\Equipment;
use App\Models\RequestWorkFiles;
use App\Models\RequestWork;
use App\Models\TypeEquipment;
use App\Models\Brand;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class RequestworkFilesController extends Controller
{

    public function uploadfiles(string $id)
    {   $reqworkFiles=RequestWorkFiles::where('requestwork',$id)->get();
        $requestwork = RequestWork::where('id', $id)->get()->first();
        return view('requestworkfileupload.uploadfiles', compact('requestwork','reqworkFiles'));
    }
    public function upload(Request $request, requestwork $requestwork)
    {
        $request->validate([
            //'file' => 'required|file|mimes:jpg,png,pdf|max:10048',
           'file' => 'required',
            'typefile' => 'required'
        ], $messages = [
                'file.required' => 'فایل نباید خالی باشد',
                'typefile.required' => 'نوع فایل نباید خالی باشد',
            ]);

         try {
            DB::beginTransaction();

            $v = verta();
            $filename = $v->timestamp . '_' . $request->file->getClientOriginalName();
            if ($request->typefile == "img")
                {$request->file->move(public_path(env('REQUESTWORK_IMAGES_UPLOAD_PATH')), $filename);}
            else
               { $request->file->move(public_path(env('REQUESTWORK_FILES_UPLOAD_PATH')), $filename);}

               RequestWorkFiles::create([
                'requestwork' =>  $requestwork->id,
                'typefile' =>  $request->typefile,
                'file' => $filename,
            ]);

                DB::commit();


            Alert::success('مدارک درخواستکار مورد نظر ایجاد شد', 'باتشکر');
            $requestwork = RequestWork::where('id', $requestwork->id)->get()->first();
            $reqworkFiles=RequestWorkFiles::where('requestwork',$requestwork->id)->get();
            return view('requestworkfileupload.uploadfiles', compact('requestwork','reqworkFiles'));
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            Alert::error('خطا در بارگذاری اطلاعات', 'خطا');
            return back();
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('خطا در بارگذاری اطلاعات', 'خطا');
            return redirect()->back();
        }
    }
    public function destroy(string $id)
    {
        $requestworkfile = RequestWorkFiles::where('id', $id)->get()->first();
        $requestwork = RequestWork::where('id', $requestworkfile->requestwork)->get()->first();
        $reqworkFiles=RequestWorkFiles::where('requestwork',$requestworkfile->requestwork)->get();
        $requestworkfile->delete($id);
        if($requestworkfile->typefile=="img")
        {File::delete(public_path(env('REQUESTWORK_IMAGES_UPLOAD_PATH'). $requestworkfile->file));}
        else{
            File::delete(public_path(env('REQUESTWORK_FILES_UPLOAD_PATH'). $requestworkfile->file));
        }
       alert()->success('فایل مورد نظر حذف شد', 'باتشکر');
       return redirect()->route('requestworkfileupload.index', ['id' => $requestwork->id])->with('requestwork', 'reqworkFiles');


    }




    public function index(string $id)
    {
        $reqworkFiles=RequestWorkFiles::where('requestwork',$id)->get();
        $requestwork = RequestWork::where('id', $id)->get()->first();
        return view('requestworkfileupload.index', compact('requestwork','reqworkFiles'));

    }

    public function downloadFile(string $id) : BinaryFileResponse
    {

         $reqworkFiles=RequestWorkFiles::where('id',$id)->get()->first();
         if($reqworkFiles->typefile=="img")
         return response()->download(public_path(env('REQUESTWORK_IMAGES_UPLOAD_PATH'). $reqworkFiles->file));
         else
         return response()->download(public_path(env('REQUESTWORK_FILES_UPLOAD_PATH'). $reqworkFiles->file));
    }


}
