<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\Count;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['name' => 'Alpi Darul Hakim', 'title' => 'About']);
});


Route::get('/posts', function () {
    // $posts = Post::latest();

    // if(request('search')){
    //     $posts->where('title', 'like', '%' . request('search') . '%' );
    // }

    // biar lebih cpt pake :
// $posts = Post::with(['author', 'category'])->latest()->get();
    
    return view('posts',['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category' , 'author']))->latest()->paginate(9)->withQueryString()]);
});

 //post per user

Route::get('/authors/{user:username}', function(User $user){
    //biar lebih cpt pake :
    // $posts = $user->posts->load('category', 'author');

    return view('authors', ['title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
 });


Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});

Route::get('/posts/{post:title}', function(Post $post){

    // $post = Post::find($post);
 
         return view('post', ['title' => 'Single Post', 'post' => $post]);
 });

Route::get('/postsuser/{post:title}', function(Post $post){

    // $post = Post::find($post);
 
         return view('postuser', ['title' => 'Single Post', 'post' => $post]);
 });

 Route::get('/categories/{category:category}', function(Category $category){
    //biar lebih cpt pake:
    // $posts = $category->posts->load('category', 'author');
    return view('category', ['title' => count($category->posts) . ' Artikel ' . $category->category, 'posts' => $category->posts]);

 });

 Route::get('/postscategory/{post:title}', function(Post $post){

    // $post = Post::find($post);
 
         return view('postcategory', ['title' => 'Single Post', 'post' => $post]);
 });