<?php


return [
    'mail'=>[
        'mail_to' => env('MAIL_FROM_ADDRESS'),
        'mail_to_name'=> 'admin'
    ],

    'emailtemplate'=>'vendor.contactform.emailtemplate', //email template for 

    'subject_line' =>'Someone contacted you on your website',
    'thankyou_message' => 'Thank you for contacting us. We will get back to you shortly.'
];