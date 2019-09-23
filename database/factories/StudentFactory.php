<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
//use Faker\Generator as Faker;
use Faker\Factory as Faker;


$factory->define(Model::class, function (Faker $faker) {
    $faker= Faker::create('vi_VN');
    return [

        'MSSV'=> $faker->numberBetween(20171010,20174000),
        'FirstName'=>$faker->firstName,
        'LastName'=>$faker->lastName,
        'Telephone'=>$faker->phoneNumber,
        'Address'=>$faker->address,
        'Email'=>$faker->email,



    ];
});
