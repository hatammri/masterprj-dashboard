<?php
namespace App\Channels;

use Illuminate\Notifications\Notification;
use Ghasedak\Laravel\GhasedakFacade as Ghasedak;
class SmsChannel{
    public function send($notifiable, Notification $notification)
    {   //remove this code when app lanch in server
      $receptor=$notifiable->cellphone;
      $template="Test3";
      $param1=$notification->code;
      $response = Ghasedak::setVerifyType(Ghasedak::VERIFY_MESSAGE_TEXT)
      ->Verify(
        $receptor,  // receptor
        $template,  // name of the template which you've created in you account
        $param1,       // parameters (supporting up to 10 parameters)

      );
    }
}
