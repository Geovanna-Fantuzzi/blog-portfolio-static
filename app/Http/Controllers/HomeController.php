<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {

        $data = array();

        $data['title'] = 'Início';
        $data['subtitle'] = ' - Portfolio Pessoal';

        return view('home', $data);
    }

    public function about()
    {
        $data = array();

        $data['title'] = 'Sobre mim';
        $data['subtitle'] = ' - Portfolio Pessoal';

        return view('about', $data);
    }

    public function send_email(Request $r)
    {
        $sent = Mail::to('geovanna.fantuzzi@gmail.com', 'Geovanna')->send(new Contact([
            'fromName' => $r->name,
            'fromEmail' => $r->email,
            'subject' => $r->subject,
            'message' => $r->message,

        ]));
        if ($sent) {
            return redirect()->back()->with('message', 'Mensagem enviada com sucesso.');
        } else {
            return redirect()->back()->with('message', 'Ocorreu um erro e sua mensagem não pode ser enviada.');
        }
    }
}
