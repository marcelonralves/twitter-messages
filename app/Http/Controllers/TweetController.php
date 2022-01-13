<?php

namespace App\Http\Controllers;

use DG\Twitter\Exception;
use DG\Twitter\Twitter;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function postMessage(Request $request)
    {
       if(!$request->message){
           return response()->json(["status" => false, "message" => "Você deve preencher a mensagem que deseja enviar!"], 400);
       }

       if(mb_strlen($request->message) > 120){
           return response()->json(["status" => false, "message" => "A mensagem deve conter no máximo 120 caracteres!"], 400);
       }

        try {
            $twitter = new Twitter(env("TWITTER_CONSUMER_KEY"), env("TWITTER_CONSUMER_SECRET"),
                env("TWITTER_ACCESS_TOKEN"), env("TWITTER_ACCESS_TOKEN_SECRET"));
            $twitter->send($request->message);
            return response()->json(["status" => true, "message" => "Recado enviado com sucesso!"]);

        } catch (Exception $e) {

            return response()->json(["status" => false, "message" => $e->getMessage()], 400);
        }


    }
}
