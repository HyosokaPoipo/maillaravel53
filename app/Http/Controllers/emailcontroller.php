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

        Mail::send('emailcontent', ['data'=>'data'], function ($message) {
            $message->subject("Default Email");
            $message->from('adiatstei07@gmail.com', 'Hisoka');
            $message->to('hyosoka187@gmail.com');
            $message->cc('maryadi@astrnt.co');
            $message->attachData('This is my pdf Data...','hisoka.pdf');
            log::info("End of mail processing...");
        });


        Log::info("Request cycle without Queues finished");
        return redirect()->back();

    }
}
