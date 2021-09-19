<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    private $formItems = ["name","email","body"];
    private $validator = [
        "name" => "required|string|max:100",
        "email" => "required|string|max:100",
        "body" => "required|string|max:300"
    ];

    function show(){
        return view("contact");
    }

    function post(Request $request){
        $input = $request->only($this->formItems);
        $validator = Validator::make($input, $this->validator);
        if($validator->fails()){
			return redirect()->route('contact.show')
				->withInput()
				->withErrors($validator);
		}
        $request->session()->put("form_input",$input);
        return redirect()->route('contact.confirm');
    }

    function confirm(Request $request){
        $input = $request->session()->get('form_input');
        if(!$input){
            return redirect()->route('contact.show');
        }
        return view('confirm',["input" => $input]);
    }

    function send(Request $request){
        $input = $request->session()->get('form_input');

        if($request->has("back")){
            return redirect()->route("contact.show")->withInput($input);
        }
        if(!$input){
            return redirect()->route('contact.show');
        }
        unset($input['_token']);

        Mail::to('fukagawatei3642@gmail.com')->send(new ContactMail('contact.mail', 'お問い合わせを受信しました', $input));
        Mail::to($input["email"])->send(new ContactMail('contact.mail', 'お問い合わせを受信しました', $input));

        $request->session()->forget('form_input');
        

        return redirect()->route('contact.complete');
    }

    function complete(){
        return view("complete");
    }
}
