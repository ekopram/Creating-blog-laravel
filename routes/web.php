<?php

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

// menit 27:07

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "name" => "EKO PRAMONO",
        "email" => "ekopram@yahoo.com",
        "images" => "chaewon.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Eko Pramono", 
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse obcaecati, nam nemo error beatae inventore dolor deleniti perspiciatis. Earum accusantium quasi deserunt ratione repudiandae dolor facere incidunt voluptates, ipsa quidem quod, corporis nesciunt, dolore adipisci omnis perferendis suscipit non nobis consectetur. Minima repellat adipisci corrupti vitae nemo laborum similique fuga vel dicta. Unde, labore ab ipsum assumenda voluptas dolorem sequi sunt ipsam sapiente facilis corporis repudiandae repellat eveniet accusantium optio in, eaque voluptatem eum aspernatur! Maxime dolores eveniet dolorem a."
        ],
        [
            "title" => "Judul Post kedua",
            "author" => "manunggal galuh", 
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic asperiores veritatis alias enim corporis ullam laborum ipsum neque facilis aliquid tenetur voluptate obcaecati optio sint similique quaerat quidem, blanditiis eos maxime ex? Soluta maxime autem ex harum blanditiis officia porro distinctio vel est fugiat, necessitatibus provident ut laborum hic. Impedit accusantium aliquam, suscipit natus inventore cumque porro libero. Magni aliquam repellendus reiciendis unde mollitia soluta quisquam illo hic accusamus eaque quae beatae ab asperiores voluptates, sunt totam quasi debitis! In hic laborum, ipsa tenetur aperiam praesentium doloribus sed minus maiores quae quidem dolor tempora, aliquam nobis! Itaque nemo beatae eaque."
        ],
    ];
    return view('post', [
        "title" => 'post',
        "posts" => $blog_posts
    ]);
});
