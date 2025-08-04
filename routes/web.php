<?php
// untuk mengatur jalur website atau rute nya
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

// mencoba untuk membuat class model
// untuk eager loading nya berada di post model

// ini adalah route halaman awal atau root (bagian paling atas dari url)
Route::get('/', function () {
    // ini dia akan (return) mencari di folder views dengan nama welcome.blade.php
    return view('home', ['title' => 'Home Page']);
});

// route blog
Route::get('/posts', function () {
    // membuat array nya disini
    // untuk melihat tampilan terbaru array posts di view posts
    // ini menggunakan with biar tidak lazy loading dan menjadi eager loading
    // eager loading berarti loading nya semangat terus dan tidak diawal saja

    // $posts = Post::with(['author', 'category'])->latest()->get(); 

    // ini cara boros query
    $posts =  Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

// membuat rute baru untuk menangkap semuanya by id
// atau menangkap URL dengan bentuk wildcard
Route::get('/posts/{post:slug}', function(Post $post){

    // untuk mencari model post berdasarkan id nya
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// rute untuk menampilkan si author nulis postingan apa aja
Route::get('/authors/{user:username}', function (User $user) {
    // membuat lazy eager loading
    // $posts = $user->posts->load('category', 'author');

    // ini cara boros query
    return view('posts', ['title' => count($user->posts) . ' Article by ' .
    $user->name, 'posts' => $user->posts]);
});

// bikin routing untuk get post by category
Route::get('/categories/{category:slug}', function (Category $category) {
    // membuat lazy eager loading untuk category
    //  $posts = $category->posts->load('category', 'author');

    // ini cara boros query
    return view('posts', ['title' => 'Category in  ' .
    $category->name, 'posts' => $category->posts]);
});

// route about
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

// route contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});

Route::get('/hello', function () {
    // ini aku cuman iseng aja nampilin rute hello doang terus keluar hello semuanya
    return 'hello semuanya';
});