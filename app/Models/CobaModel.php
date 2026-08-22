<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CobaModel
{
    private static $Blog_Posts = [
            [
                'id' => '0',
                'title' => 'Judul Pertama',
                'slug' => 'judul-pertama',
                'author' => 'Gani Prasetyo',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis hic harum ullam iusto sunt pariatur fugiat! At veritatis fuga, deserunt perspiciatis, corrupti quaerat velit, doloremque eius blanditiis exercitationem consequatur similique! Pariatur velit fuga minus. Veritatis sint animi non voluptatem beatae. Voluptas saepe eos accusamus dolore ad delectus commodi perspiciatis laborum.',
            ],
            [
                'id' => '1',
                'title' => 'Judul Kedua',
                'slug' => 'judul-kedua',
                'author' => 'Dodi Prawido',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis hic harum ullam iusto sunt pariatur fugiat! At veritatis fuga, deserunt perspiciatis, corrupti quaerat velit, doloremque eius blanditiis exercitationem consequatur similique! Pariatur velit fuga minus. Veritatis sint animi non voluptatem beatae. Voluptas saepe eos accusamus dolore ad delectus commodi perspiciatis laborum.',
            ],
            [
                'id' => '2',
                'title' => 'Judul Ketiga',
                'slug' => 'judul-ketiga',
                'author' => 'Yono Prabowo',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis hic harum ullam iusto sunt pariatur fugiat! At veritatis fuga, deserunt perspiciatis, corrupti quaerat velit, doloremque eius blanditiis exercitationem consequatur similique! Pariatur velit fuga minus. Veritatis sint animi non voluptatem beatae. Voluptas saepe eos accusamus dolore ad delectus commodi perspiciatis laborum.',
            ]    
        ];
    
        public static function all()
        {
            return collect(self::$Blog_Posts);
        }

        public static function find($slug)
        {
            $posts = self::all();
            // foreach($posts as $post){
            //     if($post['slug'] == $slug){
            //         $new_post[] = $post;
            //     }
            // }
            return $posts->firstWhere('slug', $slug);
        }
}
