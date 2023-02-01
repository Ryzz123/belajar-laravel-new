<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Sandhika",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. At omnis labore cupiditate quos, dignissimos harum dolorem numquam eaque voluptatibus! Amet cupiditate error omnis facere, laudantium nemo nisi ea tempora incidunt!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Febri Ananda Lubis",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere officia praesentium dolor ipsam pariatur voluptatem quasi odio tempore iusto? Obcaecati, minus illo? Unde distinctio voluptate provident eligendi, quibusdam animi corrupti est incidunt ducimus itaque recusandae sapiente possimus debitis. At alias tempora quod! Labore repudiandae optio fugit consectetur dignissimos at aspernatur."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);
    }
}
