<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSaveRequest;
use Mail;

class HomeController extends Controller
{
    public function send(ContactSaveRequest $request)
    {
    	$dados = $request->all();

    	Mail::send('emails.email', $dados, function($message) use ($dados) {
	        $message->to(env("MAIL_USERNAME"));
	        $message->subject('Contato feito pelo site');
	    });

	    return redirect()->back()->with(['message' => 'Contato enviado com sucesso!']);
    }
}
