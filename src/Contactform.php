<?php

namespace adityar15\contactform;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Contactform extends Component{

    public $name, $email, $message, $success;

    protected $rules = [
        'name' => ['required', 'regex:/^[A-Za-z\s\.]+$/', 'max:35'],
        'email' => ['required', 'email:rfc,dns'],
        'message'=>['required', 'regex:/^[A-Za-z0-9\$\#\s\.\,\'\"\?]+$/', 'max:2500']
    ];

    public function render() {
        return view('vendor.contactform.contactform');
    }

    public function updated($property){
        $this->validateOnly($property);
    }

    public function sendmessage(){

        $this->validate();
        
        $mail = config('contactform.mail');
        $mailto = $mail['mail_to'];
        $nameto = $mail['mail_to_name'];

        $data = ['name'=>$nameto, 'fromname'=>$this->name, 'fromemail'=>$this->email, 'body'=>nl2br($this->message)];

        Mail::send(config('contactform.emailtemplate'), $data, function ($message) use($nameto, $mailto) {
            $message->from($mailto, $nameto);
            $message->sender($mailto, $nameto);
            $message->to($mailto, $nameto);
            $message->subject(config('contactform.subject_line'));
        });
        

        $this->success = config('contactform.thankyou_message');
    }
    
}