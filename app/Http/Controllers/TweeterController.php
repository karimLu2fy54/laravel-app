<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweets;

class TweeterController extends Controller
{
    public function readAllTweets(){
       // return response()->json(Tweets::get(), 200);
       return response()->json(Tweets::simplePaginate(25), 200);
    }

    public function readAllTweetsOnPage($page){
        return response()->json(Tweets::paginate(25,['*'],'page',$page), 200);
    }

    public function readAnumberOfTweetsOnPage($count,$page){
        return response()->json(Tweets::paginate($count,['*'],'page',$page), 200);
    }


    public function readTweetsByAuthor($author){

        $tweets = Tweets::where('author',$author)->get();

        /*
        var_dump($tweets);
        echo '</br>';
        echo '</br>';
        var_dump(count($tweets));
        */

        if(count($tweets) < 1){

            return response()->json('this author doesn t exist!',404);
        }

        return response()->json($tweets,200);
    }



    public function readTweetsByHashtag($hashtag){

        //dd($hashtag);

        $hashtag_extraction = explode(",", $hashtag);

        

        $hashtagArechercher = implode(" #", $hashtag_extraction);
        

        $tweets = Tweets::where('hashtag', 'LIKE', "%{$hashtagArechercher}%")->get();

        if(count($tweets) < 1){

            return response()->json('this hashtag doesn t exist!',404);
        }

        //return response()->json(Tweets::where('hashtag',$hashtag)->get(),200);
        return response()->json(Tweets::where('hashtag', 'LIKE', "%{$hashtag}%")->get(),200);

        
    }


    public function createTweet(Request $request){

        $tweets = Tweets::create([
            'author' => $request->input('author'),
            'message' => $request->input('message'),
            'hashtag' => $request->input('hashtag'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return response()->json($tweets,200);
    }
}
