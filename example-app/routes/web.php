<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view(
        'home',
        [
            'title' => 'Home',

        ]
    );
});

Route::get('/about', function () {
    return view(
        'about',
        [
            'title' => 'About',
            "nama" => "wawan julianto",
            "email" => "Wawwan@gmail.com",
            "img" => "favicon.png"
        ]
    );
});

Route::get('/blog', function () {

    $blog_post =
        [
            [
                "title" => "Judul Post Pertama",
                "slug" => "Judul-Post-Pertama",
                "author" => "Wawan Julianto",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam illo aperiam, dolore eos quae harum quibusdam doloremque fugit incidunt hic provident a perspiciatis molestias ullam dolor exercitationem officia? Dolores illo, eligendi consectetur laborum magnam quo eum voluptatem dignissimos! Asperiores amet voluptatum tempore? Incidunt, magni! Cum unde, quo accusantium quod, sint alias vel optio in, provident maxime eaque. Corrupti aperiam voluptas delectus fugit eveniet numquam? Optio labore maxime quos voluptatibus fuga. Nostrum dolores obcaecati sint nemo vero blanditiis quis, necessitatibus libero? "
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-Post-Kedua",
                "author" => "Dimas Kounter",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam illo aperiam, dolore eos quae harum quibusdam doloremque fugit incidunt hic provident a perspiciatis molestias ullam dolor exercitationem officia? Dolores illo, eligendi consectetur laborum magnam quo eum voluptatem dignissimos! Asperiores amet voluptatum tempore? Incidunt, magni! Cum unde, quo accusantium quod, sint alias vel optio in, provident maxime eaque. Corrupti aperiam voluptas delectus fugit eveniet numquam? Optio labore maxime quos voluptatibus fuga. Nostrum dolores obcaecati sint nemo vero blanditiis quis, necessitatibus libero? onem officia? Dolores illo, eligendi consectetur laborum magnam quo eum voluptatem dignissimos! Asperiores amet voluptatum tempore? Incidunt, magni! Cum unde, quo accusantium quod, sint alias vel optio in, provident maxime eaque. Corrupti aperiam voluptas delectus fugit eveniet numquam? Optio labore maxime quos voluptatibus fuga. Nostrum dolores obcaecati sint nemo vero blanditiis quis, necessitatibus libero? "
            ]
        ];
    return view(
        'blog',
        [
            'title' => 'Blog',
            'posts' => $blog_post,

        ]
    );
});

//halaman single post

Route::get('posts/{slug}', function ($slug) {

    $blog_post =
        [
            [
                "title" => "Judul Post Pertama",
                "slug" => "Judul-Post-Pertama",
                "author" => "Wawan Julianto",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam illo aperiam, dolore eos quae harum quibusdam doloremque fugit incidunt hic provident a perspiciatis molestias ullam dolor exercitationem officia? Dolores illo, eligendi consectetur laborum magnam quo eum voluptatem dignissimos! Asperiores amet voluptatum tempore? Incidunt, magni! Cum unde, quo accusantium quod, sint alias vel optio in, provident maxime eaque. Corrupti aperiam voluptas delectus fugit eveniet numquam? Optio labore maxime quos voluptatibus fuga. Nostrum dolores obcaecati sint nemo vero blanditiis quis, necessitatibus libero? "
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-Post-Kedua",
                "author" => "Dimas Kounter",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam illo aperiam, dolore eos quae harum quibusdam doloremque fugit incidunt hic provident a perspiciatis molestias ullam dolor exercitationem officia? Dolores illo, eligendi consectetur laborum magnam quo eum voluptatem dignissimos! Asperiores amet voluptatum tempore? Incidunt, magni! Cum unde, quo accusantium quod, sint alias vel optio in, provident maxime eaque. Corrupti aperiam voluptas delectus fugit eveniet numquam? Optio labore maxime quos voluptatibus fuga. Nostrum dolores obcaecati sint nemo vero blanditiis quis, necessitatibus libero? onem officia? Dolores illo, eligendi consectetur laborum magnam quo eum voluptatem dignissimos! Asperiores amet voluptatum tempore? Incidunt, magni! Cum unde, quo accusantium quod, sint alias vel optio in, provident maxime eaque. Corrupti aperiam voluptas delectus fugit eveniet numquam? Optio labore maxime quos voluptatibus fuga. Nostrum dolores obcaecati sint nemo vero blanditiis quis, necessitatibus libero? "
            ]
        ];
    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view(
        'posts',
        [
            'title' => 'Sigle Post',
            'post' => $new_post

        ]
    );
});
