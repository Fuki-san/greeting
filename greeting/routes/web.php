<?php

use App\Http\Controllers\GreetController;
use Illuminate\Support\Facades\Route;
//greetのRouteここから

Route::get('/comments/random', [GreetController::class, 'random_greet']);

Route::get('/comments/{time}', [GreetController::class, 'time_greet']);

Route::get('/comments/freeword/{word}', [GreetController::class, 'freeword']);


//真ん中のルーティングは一番上のルーティングを包括している。でもアクションは別にしたい。{time}のルーティングが一番上だと
//'time_greet'actionも一緒にしてしまうから、'/random'ルーティングを一番上にする！
