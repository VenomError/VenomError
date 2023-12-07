<?php

namespace App\Models;

class Post
{
    private  static $post_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-Post-Pertama",
            "author" => "Wawan Julianto",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam illo aperiam, dolore eos quae harum quibusdam doloremque fugit incidunt hic provident a perspiciatis molestias ullam dolor exercitationem officia? Dolores illo, eligendi consectetur laborum magnam quo eum voluptatem dignissimos! Asperiores amet voluptatum tempore? Incidunt, magni! Cum unde, quo accusantium quod, sint alias vel optio in, provident maxime eaque. Corrupti aperiam voluptas delectus fugit eveniet numquam? Optio labore maxime quos voluptatibus fuga. Nostrum dolores obcaecati sint nemo vero blanditiis quis, necessitatibus libero? "
        ],
        [
            "title" => "Judul Post wawab",
            "slug" => "judul-Post-Kedua",
            "author" => "Dimas Kounter",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam illo aperiam, dolore eos quae harum quibusdam doloremque fugit incidunt hic provident a perspiciatis molestias ullam dolor exercitationem officia? Dolores illo, eligendi consectetur laborum magnam quo eum voluptatem dignissimos! Asperiores amet voluptatum tempore? Incidunt, magni! Cum unde, quo accusantium quod, sint alias vel optio in, provident maxime eaque. Corrupti aperiam voluptas delectus fugit eveniet numquam? Optio labore maxime quos voluptatibus fuga. Nostrum dolores obcaecati sint nemo vero blanditiis quis, necessitatibus libero? onem officia? Dolores illo, eligendi consectetur laborum magnam quo eum voluptatem dignissimos! Asperiores amet voluptatum tempore? Incidunt, magni! Cum unde, quo accusantium quod, sint alias vel optio in, provident maxime eaque. Corrupti aperiam voluptas delectus fugit eveniet numquam? Optio labore maxime quos voluptatibus fuga. Nostrum dolores obcaecati sint nemo vero blanditiis quis, necessitatibus libero? "
        ]
    ];

    public static function all()
    {
        return collect(self::$post_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
