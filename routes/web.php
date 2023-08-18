<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;

Route::get('/posts', function () {
    Illuminate\Support\Facades\DB::listen(function ($query) {
        logger($query->sql, $query->bindings);
    });
    return view('posts', [
        'posts' => Post::latest()->get()
    ]);
});

Route::get('posts/{post}', function ($id) {
    return view('post' , [
        'post' => Post::findorfail($id)
    ]);
});
                                            //this is route-model-bounding
Route::get('categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author:username}', function(User $author) {
    return view('posts', [
        'posts' => $author->posts
    ]);
});