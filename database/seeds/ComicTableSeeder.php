<?php

use App\Comic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comics = config('comics');
        foreach($array_comics as $comic_item){
            $new_comics = new Comic();
            $new_comics->title = $comic_item['title'];
            $new_comics->slug = Str::slug( $new_comics->title, '-');
            $new_comics->description = $comic_item['description'];
            $new_comics->type = $comic_item['type'];
            $new_comics->thumb = $comic_item['thumb'];
            $new_comics->save();
        }
    }
}
