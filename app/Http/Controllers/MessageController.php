<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Mail\ContactMail;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), Message::rules());
               
        if ($validation->fails()) {
           
           request()->session()->flash('message',"Votre message n'est pas bien envoyé");
           request()->session()->flash('class',"alert-danger");

           return redirect()->back();
        }

        else{

             $message = Message::create($request->all());

             Mail::to('contact@akafranck.com')->send(new ContactMail($message));
             request()->session()->flash('message',"Votre message est bien envoyé");
             request()->session()->flash('class',"alert-success");
            return redirect()->back();

            
        }
        
    }

  
}
