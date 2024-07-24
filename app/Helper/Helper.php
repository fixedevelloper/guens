<?php


namespace App\Helper;


use Illuminate\Support\Facades\Mail;

class Helper
{

    public static function send_contact($data)
    {
        $data_ = array('email' => $data['email'],
            'name' => $data['name'],'subject' => 'contact form','data' => $data['message']);
        Mail::send(['html' => 'mails.contact'], $data_, function ($message)
        use ($data) {
            $message->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $message->from($data['email'], $data['name'])->subject("Contact form");
                  });

    }
}
