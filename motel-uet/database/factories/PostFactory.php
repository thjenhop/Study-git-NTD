<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $genderUser = ['None', 'Male', 'Female'];
    $postStatus = ['Approved', 'Pending', 'Denied'];
    $serviceType = ['Day', 'Week', 'Month'];
    return [
        'category_id' => rand(1, 2),
        'title' => $faker->text(30),
        'description' => $faker->paragraph,
        'province_id' => rand(),
        'district_id' => rand (),
        'street_id' => rand(),
        'ward_id' => rand(),
        'address' => $faker->address,
        'price' => rand(1, 100000),
        'area' => rand(10, 1000),
        'gender_user' => $genderUser[rand(0, 2)],
        'is_public' => rand(0, 1),
        'is_booked' => rand(0, 1),
        'is_delete' => rand(0, 1),
        'in_duration' => rand(0, 1),
        'status' => $postStatus[rand(0, 2)],
        'creator_id' => rand(11, 30),
        'processor_id' => rand(1, 10),
        'start_date' => $faker->dateTime,
        'finish_date' => $faker->dateTime,
        'service_id' => rand(1, 5),
        'service_type' => $serviceType[rand(0, 2)],
        'number_day_up' => rand(5, 100),
        'slug' => $faker->slug

    ];
});
