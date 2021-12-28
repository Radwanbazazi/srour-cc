<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session; 
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use mai;


class MailController extends Controller
{
    public function sendemail(Request $Request)
    {
    	

			    	// RECIVING THE Rquest and validating the data

			        $this->validate($Request,[
			            'name'=>'min:3',
			            'email'=>'required|email',
			            'message'=>'min:10'
			        ] );



			        // put the data in details array
			     	    $details  = array(
			            'name' =>$Request->name ,
			            'email' =>$Request->email ,
			            'bodymessage' =>$Request->message  );


			            
			     	// sending the email to the dest with the request data
			             Mail::send('emails.contactform',$details,function($message) use ($details){

			             $message->from($details['email']);
			             $message->to('services@srour-cc.com');
			             $message->subject($details['name']);

				         }
				        );
				             return view('contact');


					    }












}
