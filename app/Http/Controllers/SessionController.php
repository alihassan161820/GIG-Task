<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function checkSession(Request $request){

        if(!$request->exists('tab_id')){ 
            return json_encode(false);
        }
        $tabId =  (string)$request['tab_id'];
    
        if(session()->has('tab_id')){
            $sessionId = session('tab_id');
    
            if($sessionId != $tabId){
                return json_encode(false);
            }
    
            return json_encode(true);
    
        }else{
            session(['tab_id' => $tabId]);
            return json_encode(true);
        }

    }

    public function removeSession(Request $request){
        $request->session()->forget('tab_id');
        return redirect('/login');
    }
}
