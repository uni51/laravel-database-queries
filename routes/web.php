<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $users = DB::table('users')->get();
    // $users = DB::table('users')->pluck('email');
    // $user = DB::table('users')->where('name', 'Hailee Hyatt')->first();
    // $user = DB::table('users')->where('name', 'Hailee Hyatt')->value('email');
    // $user = DB::table('users')->find(1);

    // $comments= DB::table('comments')->select('content as comment_content')->get();
    // $comments= DB::table('comments')->select('user_id')->distinct()->get();

    // $result = DB::table('comments')->count();
    $result = DB::table('comments')->where('content', 'content')->doesntExist();

    dump($result);

    return view('welcome');
});
