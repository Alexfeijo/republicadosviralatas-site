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
	        $message->to('alexandroffeijo@gmail.com');
	        $message->from($dados['email']);
	        $message->subject('Contato feito pelo site');
	    });

	    return redirect()->back()->with(['message' => 'Contato enviado com sucesso!']);
    }
}
