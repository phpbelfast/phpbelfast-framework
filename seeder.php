<?php
require "setup.php";

use Illuminate\Database\Capsule\Manager as DB;

$schema = DB::schema();

$schema->dropIfExists('posts');
$schema->dropIfExists('events');
$schema->dropIfExists('urls');
$schema->dropIfExists('authors');

$schema->create('posts', function(\Illuminate\Database\Schema\Blueprint $table){
    $table->bigIncrements('id');
    $table->string('title');
    $table->text('summary');
    $table->string('image');
    $table->bigInteger('author_id');
    $table->timestamps(); // created_at & updated_at
});

$schema->create('events', function(\Illuminate\Database\Schema\Blueprint $table){
    $table->bigIncrements('id');
    $table->string('title');
    $table->text('summary');
    $table->string('image');
    $table->dateTime('start_time');
    $table->bigInteger('author_id');
    $table->timestamps(); // created_at & updated_at
});


$schema->create('urls', function(\Illuminate\Database\Schema\Blueprint $table){
    $table->bigIncrements('id');
    $table->string('url')->unique();
    $table->string('short')->unique();
    $table->timestamps(); // created_at & updated_at
});

$schema->create('authors', function(\Illuminate\Database\Schema\Blueprint $table){
    $table->bigIncrements('id');
    $table->string('name')->unique();
    $table->timestamps();
});

$faker = Faker\Factory::create();

$authors = [];
foreach (range(1, 5) as $idx) {
    $author = new \PhpBelfast\Models\Author();
    $author->name = $faker->name();
    $author->save();
    $authors[] = $author;
}

foreach (range(1, 20) as $idx) {
    $post = new \PhpBelfast\Models\Post();
    $post->title = $faker->name() . ' ' . $faker->catchphrase();
    $post->created_at = $faker->dateTimeThisMonth();
    $post->summary = $faker->paragraph();

    $cats = ['abstract', 'animals', 'business', 'cats', 'city', 'food',
        'nightlife', 'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    $category = $faker->randomElement($cats);
    $post->image = $faker->imageUrl(300, 200, $category)
                    . $faker->randomDigitNotNull();
    $post->author_id = $faker->randomElement($authors)->id;
    $post->save();

    $event = new \PhpBelfast\Models\Event();
    $event->title = $faker->name() . ' ' . $faker->catchphrase();
    $event->created_at = $faker->dateTimeThisMonth();
    $event->summary = $faker->paragraph();

    $cats = ['abstract', 'animals', 'business', 'cats', 'city', 'food',
        'nightlife', 'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    $category = $faker->randomElement($cats);
    $event->image = $faker->imageUrl(300, 200, $category)
        . $faker->randomDigitNotNull();
    $event->author_id = $faker->randomElement($authors)->id;
    $event->start_time = $faker->dateTimeBetween('today','next year');
    $event->save();

}

/*R::nuke();


*/
