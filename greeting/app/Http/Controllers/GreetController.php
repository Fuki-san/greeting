<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function time_greet($time)
    {
        $greetword = '';
        if ($time == 'morning') {
            $greetword = 'おはようございます';
            $time = '朝';
        } elseif ($time == 'afternoon') {
            $greetword = 'こんにちは';
            $time = '昼';
        } elseif ($time == 'evening') {
            $greetword = 'こんばんは';
            $time = '夕方';
        } elseif ($time == 'night') {
            $greetword = 'おやすみ';
            $time = '夜';
        }
        $fromGreet = 'のあいさつ';
        return view('greet', [
            'greetword' => $greetword,
            'time' => $time,
            'displaymode' => 'greet',
            'fromGreet' => $fromGreet
        ]);
        //
    }

    public function freeword($word)
    {
        if ($word == '来週も') {
            $word = '来週も';
        } else if ($word == 'がんばって') {
            $word = 'がんばって';
        } else if ($word == 'いきま') {
            $word = 'いきま';
        } else if ($word == 'しょう') {
            $word = 'しょう';
        }
        $freeMsg = '自由なメッセージ';
        return view('greet', [
            'word' => $word,
            'displaymode' => 'wording',
            'freeMsg' => $freeMsg
        ]);
    }

    public function random_greet()
    {
        $greets = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $greets_key = array_rand($greets, 1);
        $result = $greets[$greets_key];
        
        $randomMsg = 'ランダムなメッセージ';
        return view('greet', [
            'displaymode' => 'random',
            'result' => $result,
            'randomMsg' => $randomMsg
        ]);
    }
}
