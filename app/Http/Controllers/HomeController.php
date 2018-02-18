<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creation;
use App\Article;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $creation = new Creation();

        $articles = Article::latest('id')->take(3)->get();
        $creations = $creation::latest('id')->take(3)->get();
        $galeryCreations = $creation->randCreations(3, $creations);

        return view('home', compact('articles', 'creations', 'galeryCreations'));
    }

    public function contact() {
        return view('contact');
    }

    public function sendMail(Request $request) {
        $this->validate($request, [
            'subject' => 'min:3',
            'email' => 'required|email',
            'email_content' => 'min:10'
        ]);

        $data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'content' => $request->email_content
        ];

        Mail::send('emails.contact', $data, function($email) use ($data) {
            $email->from($data['email']);
            $email->to('rsathclub@gmail.com');
            $email->subject($data['subject']);
        });

        return back();
    }

}
