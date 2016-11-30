<?php

/*
|--------------------------------------------------------------------------
| User Model Factory
|--------------------------------------------------------------------------
|
| Create a user model in the database.
|
*/
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $first = $faker->firstName,
        'last_name' => $last = $faker->lastName,
        'display_name' => $first.' '.$last,
        'job' => $faker->jobTitle,
        'birthday' => $faker->date('Y-m-d'),
        'email' => $faker->safeEmail,
        'twitter' => $faker->userName,
        'facebook' => $faker->userName,
        'github' => $faker->userName,
        'linkedin' => $faker->userName,
        'resume_cv' => $faker->url,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'country' => $faker->countryCode,
        'url' => $faker->url,
        'phone' => $faker->phoneNumber,
        'bio' => $faker->paragraph,
        'gender' => 'foo',
        'relationship' => 'foo',
        'password' => bcrypt('password'),
    ];
});

/*
|--------------------------------------------------------------------------
| Posts Model Factory
|--------------------------------------------------------------------------
|
| Create the Welcome post in the database.
|
*/
$factory->define(App\Models\Post::class, function () {
    return [
    'title' => 'Hello World',
    'slug' => 'hello-world',
    'subtitle' => 'Canvas is a simple, powerful blog publishing platform that lets you to share your stories with the world. Its beautifully designed interface allows you to create and publish your own blog, giving you tools that make it easy and even fun to do.',
    'page_image' => '/images/mocha.jpg',
    'content_raw' => view('frontend.blog.partials.welcome'),
    'published_at' => Carbon\Carbon::now(),
    'meta_description' => 'Let\'s get you up and running with Canvas!',
    'is_draft' => false,
  ];
});

/*
|--------------------------------------------------------------------------
| Tags Model Factory
|--------------------------------------------------------------------------
|
| Create tags for the Welcome post in the database.
|
*/
$factory->define(App\Models\Tag::class, function () {
    return [
    'tag' => 'Getting Started',
    'title' => 'Getting Started',
    'subtitle' => 'Getting started with Canvas',
    'meta_description' => 'Meta content for this tag.',
    'reverse_direction' => false,
    'created_at' => Carbon\Carbon::now(),
  ];
});
