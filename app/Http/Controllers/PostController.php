<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index(){
        $posts=Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $collection=collect($posts);
        $uniqueUserId=$collection->unique('userId');
        $countUnique=$collection->countBy('userId');
        dump($countUnique);
        return view('index', [
            'uniqueUserIds'=>$uniqueUserId,
            'countUnique'=>$countUnique
        ]);
    }

    public function show($id){
        $posts=Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $collection=collect($posts)->where('userId', $id);
        dump($collection);
        return view ('show',[
            'collections'=>$collection,
            'id'=>$id
        ]);

    }



}
