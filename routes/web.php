<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\RegisterController;


Route::post ('newsletter', function () {

    request () ->validate( ['email' => 'required|email'] );
    $mailchimp = new \MailchimpMarketing\ApiClient();
    $mailchimp->setConfig([
        'apikey' => config('services.mailchimp.key'),
        'server' => 'us17'
    ]);
    try {
        $newsletter=new \App\Services\Newsletter();
        $newsletter->subscribe(request('email'));
    } catch (\Exception $e){

    }

    return redirect('/')
        ->with('success', 'You are now subscribed to our newsletter!');
});

Route::get('/', [PostController::class,'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class,'show']);

Route:: post ('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('authors/{author:username}', function (User $author) {
    return view('posts.index', [
        'posts' => $author->posts
    ]);


});

Route:: get ('register', [RegisterController::class,'create'])->middleware('guest');
Route:: post ('register', [RegisterController::class,'store'])->middleware('guest');
Route:: get ('login', [SessionsController:: class, 'create'])->middleware('guest');
Route:: post ('sessions', [SessionsController:: class, 'store'])->middleware('guest');
Route:: post ('logout', [SessionsController:: class, 'destroy'])->middleware('auth');

Route::get('admin/posts/create', [PostController::class, 'create'])->middleware('admin');
