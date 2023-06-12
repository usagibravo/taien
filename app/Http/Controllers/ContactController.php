<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    // Contact Form
    //
    public function edit()
    {
        return view('contact.edit');
    }

    public function send(Request $request)
    {
        //dd($request);
        $input  = $request->except('submit');

        // DBにデータを保存
        //$contact = new Contact();
        //$contact->fill($input);
        //$contact->save();

        // メール送信
        Mail::to($input['email'])->send(new ContactMail('mails.contact', 'お問い合わせありがとうございます', $input));

        return redirect()->route('contact.complete');

    }

    public function complete() {
        
        // ありがとう画面
        return view('contact.complete');
    }
}
