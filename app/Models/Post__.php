<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Eko Pramono",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse obcaecati, nam nemo error beatae inventore dolor deleniti perspiciatis. Earum accusantium quasi deserunt ratione repudiandae dolor facere incidunt voluptates, ipsa quidem quod, corporis nesciunt, dolore adipisci omnis perferendis suscipit non nobis consectetur. Minima repellat adipisci corrupti vitae nemo laborum similique fuga vel dicta. Unde, labore ab ipsum assumenda voluptas dolorem sequi sunt ipsam sapiente facilis corporis repudiandae repellat eveniet accusantium optio in, eaque voluptatem eum aspernatur! Maxime dolores eveniet dolorem a."
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "manunggal galuh",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic asperiores veritatis alias enim corporis ullam laborum ipsum neque facilis aliquid tenetur voluptate obcaecati optio sint similique quaerat quidem, blanditiis eos maxime ex? Soluta maxime autem ex harum blanditiis officia porro distinctio vel est fugiat, necessitatibus provident ut laborum hic. Impedit accusantium aliquam, suscipit natus inventore cumque porro libero. Magni aliquam repellendus reiciendis unde mollitia soluta quisquam illo hic accusamus eaque quae beatae ab asperiores voluptates, sunt totam quasi debitis! In hic laborum, ipsa tenetur aperiam praesentium doloribus sed minus maiores quae quidem dolor tempora, aliquam nobis! Itaque nemo beatae eaque."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
