<?php

namespace Database\Seeders;
use App\Models\Contact;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     $data = collect(
    //         [
    //             [
    //                 'name' => 'ALiyan',
    //                 'email'=> 'aliyan@gmail.com',
    //                 'address'=>'Korangi',
    //                 'age'=>18,
    //                 'created_at'=>now(),
    //                 'updated_at'=>now()
    //             ],
    //             [
    //                 'name' => 'Qasim',
    //                 'email'=> 'qasim@gmail.com',
    //                 'address'=>'Korangi',
    //                 'age'=>18,
    //                 'created_at'=>now(),
    //                 'updated_at'=>now()
    //             ],
    //             [
    //                 'name' => 'zain',
    //                 'email'=> 'zain@gmail.com',
    //                 'address'=>'Korangi',
    //                 'age'=>18,
    //                 'created_at'=>now(),
    //                 'updated_at'=>now()
    //             ],
    //             [
    //                 'name' => 'afnan',
    //                 'email'=> 'afnan@gmail.com',
    //                 'address'=>'Korangi',
    //                 'age'=>18,
    //                 'created_at'=>now(),
    //                 'updated_at'=>now()
    //             ],
    //             [
    //                 'name' => 'taha',
    //                 'email'=> 'taha@gmail.com',
    //                 'address'=>'Korangi',
    //                 'age'=>18,
    //                 'created_at'=>now(),
    //                 'updated_at'=>now()
    //             ]

    //         ]
    //     );
    //  $data->each(function($contact)
    //  {
    //   Contact::create($contact);
    //  });


    for ($x=1;$x<100;$x++)
    {
        Contact::create(
            [
                'name'=>fake()->name(),
                'email'=>fake()->safeEmail(),
                'address'=>fake()->streetAddress(),
                'age'=>fake()->numberBetween(18,45),
                'created_at'=>fake()->dateTime(),
                'updated_at'=>fake()->dateTime(),
            ]
        );
    }
    }
}
