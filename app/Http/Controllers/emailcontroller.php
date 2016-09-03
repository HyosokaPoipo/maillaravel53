<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Log;
use Mail;

class emailcontroller extends Controller
{
    public function defaultSend()
    {
        Log::info("Request cycle without Queues started");

        // Mail::send('email.welcome', ['data'=>'data'], function ($message) {

        //     $message->from('adiatstei07@gmail.com', 'Hisoka');

        //     $message->to('hyosoka187@gmail.com');
        //     log::info("End of mail processing...");

        // });


        Mail::raw('This is emailcontent...asdfasdfasdfasdfasdfsdf. :D',function ($message) {

            $message->from('adiatstei07@gmail.com', 'Hisoka');

            $message->to('hyosoka187@gmail.com');

            log::info("End of mail processing...");

        });

        Log::info("Request cycle without Queues finished");
        return redirect()->back();

    }
}
