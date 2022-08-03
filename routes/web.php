<?php

use App\Http\Livewire\Admin\AddCollegeDetails;
use App\Http\Livewire\Admin\CommentList;
use App\Http\Livewire\Admin\FeedBackList;
use App\Http\Livewire\Admin\User;
use App\Http\Livewire\CollegeList;
use App\Http\Livewire\Feedback as LivewireFeedback;
use App\Http\Livewire\Home;
use App\Http\Livewire\MoreDetails;
use App\Models\FeedBack;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',Home::class)->name('home');
Route::get('/feedback',LivewireFeedback::class)->name('feedback');
Route::get('/collegelist',CollegeList::class)->name('collegelist');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/addcollegedetails',AddCollegeDetails::class)->name('addcollege');
    Route::get('/userdetails',User::class)->name('userdetails');
    Route::get('/moredetails/{college_id}',MoreDetails::class)->name('moredetails');
    Route::get('/feedbacklist',FeedBackList::class)->name('feedbacklist');
    Route::get('/commentlist',CommentList::class)->name('commentlist');


    
});
