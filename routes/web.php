<?php

use App\Http\Controllers\ViewsController;
use App\Models\Member;
use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.index',[
        'members' => Member::all(),
        'testimonials'=>Testimonial::orderBy('created_at','desc')->limit(4)->get(),
        'latest_posts'=>Post::with('user')->orderBy('created_at','desc')->limit(3)->get(),
    ]);
})->name('home');
Route::get('/blogs', [ViewsController::class,'blogs'])->name('blogs');
Route::get('/blogs/{category}', [ViewsController::class,'blogsCategories'])->name('blogs.catgories');
Route::get('/blog/{slug}', [ViewsController::class,'blogDetails'])->name('blog.details');
Route::post('/blog/{slug}', [ViewsController::class,'comment'])->name('blog.comment');
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
