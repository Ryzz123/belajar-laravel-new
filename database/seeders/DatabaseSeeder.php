<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => "Judul Pertama",
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dicta, natus amet mollitia tenetur voluptates incidunt odio dignissimos dolorem.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dicta, natus amet mollitia tenetur voluptates incidunt odio dignissimos dolorem. Voluptatem eum saepe vero provident alias odio minima, fugit corrupti eius nostrum reprehenderit aut facere omnis nihil rem ipsum, error ab nobis sint nemo officia deserunt excepturi ea quis. Quidem repudiandae error ea sit, sed vitae atque animi assumenda? Dicta hic quasi nam aut fugit eligendi esse consequuntur facilis fugiat rem reiciendis et, ipsum quibusdam ducimus possimus corrupti doloribus, debitis consequatur. Mollitia perspiciatis maxime maiores ut. Quia voluptatibus temporibus illo sed beatae, expedita veritatis dicta incidunt dolores nulla? Expedita, cumque iste.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "Judul ke Dua",
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dicta, natus amet mollitia tenetur voluptates incidunt odio dignissimos dolorem.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dicta, natus amet mollitia tenetur voluptates incidunt odio dignissimos dolorem. Voluptatem eum saepe vero provident alias odio minima, fugit corrupti eius nostrum reprehenderit aut facere omnis nihil rem ipsum, error ab nobis sint nemo officia deserunt excepturi ea quis. Quidem repudiandae error ea sit, sed vitae atque animi assumenda? Dicta hic quasi nam aut fugit eligendi esse consequuntur facilis fugiat rem reiciendis et, ipsum quibusdam ducimus possimus corrupti doloribus, debitis consequatur. Mollitia perspiciatis maxime maiores ut. Quia voluptatibus temporibus illo sed beatae, expedita veritatis dicta incidunt dolores nulla? Expedita, cumque iste.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "Judul Ke Tiga",
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dicta, natus amet mollitia tenetur voluptates incidunt odio dignissimos dolorem.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dicta, natus amet mollitia tenetur voluptates incidunt odio dignissimos dolorem. Voluptatem eum saepe vero provident alias odio minima, fugit corrupti eius nostrum reprehenderit aut facere omnis nihil rem ipsum, error ab nobis sint nemo officia deserunt excepturi ea quis. Quidem repudiandae error ea sit, sed vitae atque animi assumenda? Dicta hic quasi nam aut fugit eligendi esse consequuntur facilis fugiat rem reiciendis et, ipsum quibusdam ducimus possimus corrupti doloribus, debitis consequatur. Mollitia perspiciatis maxime maiores ut. Quia voluptatibus temporibus illo sed beatae, expedita veritatis dicta incidunt dolores nulla? Expedita, cumque iste.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "Judul Ke Empat",
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dicta, natus amet mollitia tenetur voluptates incidunt odio dignissimos dolorem.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dicta, natus amet mollitia tenetur voluptates incidunt odio dignissimos dolorem. Voluptatem eum saepe vero provident alias odio minima, fugit corrupti eius nostrum reprehenderit aut facere omnis nihil rem ipsum, error ab nobis sint nemo officia deserunt excepturi ea quis. Quidem repudiandae error ea sit, sed vitae atque animi assumenda? Dicta hic quasi nam aut fugit eligendi esse consequuntur facilis fugiat rem reiciendis et, ipsum quibusdam ducimus possimus corrupti doloribus, debitis consequatur. Mollitia perspiciatis maxime maiores ut. Quia voluptatibus temporibus illo sed beatae, expedita veritatis dicta incidunt dolores nulla? Expedita, cumque iste.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
