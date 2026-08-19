<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('pages.home', compact('title'));
    }

    public function about()
    {
        $title = 'About';
        return view('pages.about', compact('title'));
    }
    
    public function blog()
    {
        $Blog_Posts = [
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

        $title = 'Posts';
        return view('pages.posts', compact('title', 'Blog_Posts'));
    }

    public function show($slug)
    {
        $title = 'Post';
        $Blog_Posts = [
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

        foreach($Blog_Posts as $post){
            if($post['slug'] == $slug){
                $new_post[] = $post;
            }
        }


        return view('pages.post', compact('title', 'new_post'));
    }
}
