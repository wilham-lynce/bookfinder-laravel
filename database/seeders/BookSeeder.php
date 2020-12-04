<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'volumeInfocategories0'=> 'Law',
            'volumeInfotitle'=> 'Doing Research on Crime and Justice',
            'volumeInfoauthors0'=>'Roy King,Emma Wincup',
            'volumeInfoinfoLink'=>'http://books.google.com/books?id=Il2GbeyQb5gC&dq=subject:crime&hl=&source=gbs_api',
            'volumeInfoimageLinksthumbnail'=>'http://books.google.com/books/content?id=Il2GbeyQb5gC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'etag'=>'0eXPIHBmQDs'
        ]);
    }
}
