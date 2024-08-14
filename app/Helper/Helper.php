<?php


namespace App\Helper;


use Illuminate\Support\Facades\Mail;
use Mailjet\LaravelMailjet\Facades\Mailjet;
use Mailjet\Resources;

class Helper
{

    public static function send_contact($data)
    {
        //logger(env('MAIL_FROM_ADDRESS'));
        $data_ = array('email' => $data['email'],
            'name' => $data['name'],'subject' => 'contact form','data' => $data['message']);
        Mail::send(['html' => 'mails.contact'], $data_, function ($message)
        use ($data) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $message->to($data['email'], $data['name'])->subject("Contact form");
                  });

    }
    public static function mailajet(){
        $mj = Mailjet::getClient();

        $body = [
            'FromEmail' => "contact@guens-education.com",
            'FromName' => "From name to be displayed in Inbox",
            'Subject' => "New Website Enquiry",
            'MJ-TemplateID' => 6207309,
            'MJ-TemplateLanguage' => true,
            'Vars' => json_decode(json_encode([]), true),
            'Recipients' => [['Email' => "rodriguembah13@gmail.com"]]
        ];

        $response = $mj->post(Resources::$Email, ['body' => $body]);

        if($response->success()){
           logger('success');
    } else {
        logger('echecc');
    }
    }
}
