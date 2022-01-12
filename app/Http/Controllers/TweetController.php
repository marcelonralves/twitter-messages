<?php

namespace App\Http\Controllers;

use DG\Twitter\Twitter;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function postMessage(Request $request)
    {
        $this->validate($request, [
            'message' => 'required|max:120'
        ]);

        $twitter = new Twitter(env(TWITTER_CONSUMER_KEY), env(TWITTER_CONSUMER_SECRET), env(TWITTER_ACCESS_TOKEN), env(TWITTER_ACCESS_TOKEN_SECRET));

        $twitter->send($request->message);

    }
}
