<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
//use Faker\Generator as Faker;
use Faker\Factory as Faker;


$factory->define(App\Student::class, function ( $faker) {
    $faker= Faker::create('vi_VN');
    $lastName= $faker->lastName;
    $midleName= $faker->middleNameMale;
    $firstName=$faker->firstName;
    $studentid= $faker->numberBetween(20171010,20174000);

    $phoneNumber= $faker->numberBetween(32343451,87999999);

    $email= $lastName.$studentid."@sis.hust.edu.vn";
    $password= "********";

    return [

        'Student ID'=> $studentid,
        'FirstName'=>$firstName." ".$midleName,
        'LastName'=>$lastName,
        'Telephone'=>"+84".$phoneNumber,
        'Address'=>$faker->address,
        'Email'=>$email ,
        'Password'=>$password,

    ];
});

