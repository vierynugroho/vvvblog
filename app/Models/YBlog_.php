<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YBlog_ extends Model
{
    use HasFactory;

    private static $mainData = [
        'title' => 'Blog',
    ];

    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'post1',
            'author' => 'Author Pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati optio dolorum, reiciendis eos voluptate sunt reprehenderit cum deserunt aliquam laudantium quia aspernatur mollitia illo nobis enim quidem amet. Doloribus magni molestiae nisi? Officia, ut alias libero possimus laboriosam modi expedita fuga maxime quidem accusamus doloribus pariatur veniam voluptate explicabo commodi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati optio dolorum, reiciendis eos voluptate sunt reprehenderit cum deserunt aliquam laudantium quia aspernatur mollitia illo nobis enim quidem amet. Doloribus magni molestiae nisi? Officia, ut alias libero possimus laboriosam modi expedita fuga maxime quidem accusamus doloribus pariatur veniam voluptate explicabo commodi?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'post2',
            'author' => 'Author Kedua',
            'body' => 'Lorem ipsum dolor sit amet asd rawrr adipisicing elit. Commodi, cumque! Pariatur dolorum doloremque maiores molestias nihil nostrum iure, veritatis repellat natus vel hic molestiae commodi possimus id? Esse ducimus magni accusantium voluptatum hic nulla dicta deserunt, laboriosam amet quos voluptas vero laudantium obcaecati in maxime, minus, dolorem id non quia quo corporis unde est nesciunt. Ratione eos magnam expedita architecto dolorum nihil dicta iste recusandae similique voluptatum! Ipsum dolores error assumenda consequatur. Officia, asperiores! Minus perspiciatis reiciendis, corporis blanditiis non nemo a quibusdam impedit ab odit laborum sed quod laudantium eos saepe. Neque provident illo deleniti laudantium nam similique est. Lorem ipsum dolor sit amet asd rawrr adipisicing elit. Commodi, cumque! Pariatur dolorum doloremque maiores molestias nihil nostrum iure, veritatis repellat natus vel hic molestiae commodi possimus id? Esse ducimus magni accusantium voluptatum hic nulla dicta deserunt, laboriosam amet quos voluptas vero laudantium obcaecati in maxime, minus, dolorem id non quia quo corporis unde est nesciunt. Ratione eos magnam expedita architecto dolorum nihil dicta iste recusandae similique voluptatum! Ipsum dolores error assumenda consequatur. Officia, asperiores! Minus perspiciatis reiciendis, corporis blanditiis non nemo a quibusdam impedit ab odit laborum sed quod laudantium eos saepe. Neque provident illo deleniti laudantium nam similique est.'
        ],
    ];

    public static function mainData()
    {
        return collect(self::$mainData);
    }
    public static function posts()
    {
        return collect(self::$blog_posts);

    }
}