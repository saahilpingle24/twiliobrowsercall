<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Response;

class CallController extends Controller
{
    public function index() {
        $accountSid = getenv('TWILIO_ACCOUNT_SID');
        $authToken  = getenv('TWILIO_AUTH_TOKEN');
        $clientName = getenv('TWILIO_CLIENT_NAME');
        $capability = new \Services_Twilio_Capability($accountSid, $authToken);
        $capability->allowClientOutgoing(getenv('TWILIO_APP_SID'));
        $token = $capability->generateToken();        
        return view('initiate',['token'=>$token, 'clientName'=>$clientName]);
    }
    
    public function outbound(Request $request) {
        $sayMessage = 'Initiating call'; 
        $number = $request->input('PhoneNumber');

        $twiml = new \Services_Twilio_Twiml();
        $twiml->say($sayMessage, array('voice' => 'alice'));
        $twiml->dial($number,['callerId'=>getenv('TWILIO_NUMBER')]);

        $response = Response::make($twiml, 200);
        $response->header('Content-Type', 'text/xml');
        return $response;
    }
}
