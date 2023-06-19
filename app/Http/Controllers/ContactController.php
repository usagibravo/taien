<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\User;

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

        $adminEmail = User::where('name', 'Administrator')->first()->email;
        //dd($adminEmail);
        

        // DBにデータを保存
        //$contact = new Contact();
        //$contact->fill($input);
        //$contact->save();

        // 問い合わせ者にメール送信
        Mail::to($input['email'])->send(new ContactMail('mails.contact', 'お問い合わせありがとうございます', $input));

        // 問い合わせ者にメール送信
        Mail::to($adminEmail)->send(new ContactMail('mails.admin', '問い合わせメールが届きました', $input));

        return redirect()->route('contact.complete');

    }

    public function complete() {
        
        // ありがとう画面
        return view('contact.complete');
    }
}
