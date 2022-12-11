<?php

namespace Database\Seeders;

use App\Models\RouteVehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            
        [ 'routeNo' => '617431',
        'plateNo' => 'DEE-124',
        'fare' => '100.00',
        'departureDate' => '2022-12-08',
        'departureTime' => '17:30:00',
        'returnDate' => '2022-12-10' ],

        [ 'routeNo' => '123456',
        'plateNo' => 'ASA-442',
        'fare' => '100.00',
        'departureDate' => '2022-12-09',
        'departureTime' => '7:30:00',
        'returnDate' => '2022-12-10' ],

        [ 'routeNo' => '494218',
        'plateNo' => 'ASA-442',
        'fare' => '100.00',
        'departureDate' => '2022-12-10',
        'departureTime' => '10:00:00',
        'returnDate' => '2022-12-10' ],

        [ 'routeNo' => '231315',
        'plateNo' => 'ASA-442',
        'fare' => '200.00',
        'departureDate' => '2022-12-11',
        'departureTime' => '15:30:00',
        'returnDate' => '2022-12-12' ],
        [ 'routeNo' => '823217',
        'plateNo' => 'AOF-224',
        'fare' => '150.00',
        'departureDate' => '2022-12-12',
        'departureTime' => '9:30:00',
        'returnDate' => '2022-12-13' ],

        [ 'routeNo' => '617431',
        'plateNo' => 'DEE-124',
        'fare' => '100.00',
        'departureDate' => '2022-12-12',
        'departureTime' => '9:30:00',
        'returnDate' => '2022-12-13' ],

        [ 'routeNo' => '191877',
        'plateNo' => 'XOE-1432',
        'fare' => '50.00',
        'departureDate' => '2022-12-13',
        'departureTime' => '13:00:00',
        'returnDate' => '2022-12-13' ],

        [ 'routeNo' => '494218',
        'plateNo' => 'ASA-442',
        'fare' => '100.00',
        'departureDate' => '2022-12-14',
        'departureTime' => '10:00:00',
        'returnDate' => '2022-12-15' ],

        [ 'routeNo' => '617431',
        'plateNo' => 'DEE-124',
        'fare' => '100.00',
        'departureDate' => '2022-12-15',
        'departureTime' => '16:00:00',
        'returnDate' => '2022-12-15' ],

        [ 'routeNo' => '191877',
        'plateNo' => 'XOE-1432',
        'fare' => '50.00',
        'departureDate' => '2022-12-16',
        'departureTime' => '16:40:00',
        'returnDate' => '2022-12-16' ],

        [ 'routeNo' => '660267',
        'plateNo' => 'ASA-442',
        'fare' => '200.00',
        'departureDate' => '2022-12-17',
        'departureTime' => '12:30:00',
        'returnDate' => '2022-12-18' ],

        [ 'routeNo' => '823217',
        'plateNo' => 'AOF-224',
        'fare' => '150.00',
        'departureDate' => '2022-12-18',
        'departureTime' => '8:40:00',
        'returnDate' => '2022-12-18' ],

        [ 'routeNo' => '105158',
        'plateNo' => 'XOE-1432',
        'fare' => '50.00',
        'departureDate' => '2022-12-19',
        'departureTime' => '11:30:00',
        'returnDate' => '2022-12-19' ],

        [ 'routeNo' => '617431',
        'plateNo' => 'DEE-124',
        'fare' => '100.00',
        'departureDate' => '2022-12-20',
        'departureTime' => '14:00:00',
        'returnDate' => '2022-12-20' ],


        [ 'routeNo' => '617431',
        'plateNo' => 'DEE-124',
        'fare' => '100.00',
        'departureDate' => '2022-12-21',
        'departureTime' => '9:00:00',
        'returnDate' => '2022-12-21' ],

        [ 'routeNo' => '660267',
        'plateNo' => 'ASA-442',
        'fare' => '200.00',
        'departureDate' => '2022-12-21',
        'departureTime' => '15:00:00',
        'returnDate' => '2022-12-22' ],

        [ 'routeNo' => '494218',
        'plateNo' => 'ASA-442',
        'fare' => '100.00',
        'departureDate' => '2022-12-22',
        'departureTime' => '9:00:00',
        'returnDate' => '2022-12-22' ],

        [ 'routeNo' => '105158',
        'plateNo' => 'XOE-1432',
        'fare' => '50.00',
        'departureDate' => '2022-12-22',
        'departureTime' => '18:00:00',
        'returnDate' => '2022-12-23' ],

        [ 'routeNo' => '823217',
        'plateNo' => 'AOF-224',
        'fare' => '150.00',
        'departureDate' => '2022-12-23',
        'departureTime' => '13:30:00',
        'returnDate' => '2022-12-23' ],

        [ 'routeNo' => '617431',
        'plateNo' => 'DEE-124',
        'fare' => '100.00',
        'departureDate' => '2022-12-23',
        'departureTime' => '18:00:00',
        'returnDate' => '2022-12-24' ],

        [ 'routeNo' => '823217',
        'plateNo' => 'AOF-224',
        'fare' => '150.00',
        'departureDate' => '2022-12-24',
        'departureTime' => '7:30:00',
        'returnDate' => '2022-12-24' ],

        [ 'routeNo' => '231315',
        'plateNo' => 'ASA-442',
        'fare' => '200.00',
        'departureDate' => '2022-12-24',
        'departureTime' => '13:30:00',
        'returnDate' => '2022-12-25' ],

        [ 'routeNo' => '123456',
        'plateNo' => 'ASA-442',
        'fare' => '100.00',
        'departureDate' => '2022-12-25',
        'departureTime' => '9:00:00',
        'returnDate' => '2022-12-25' ],

        [ 'routeNo' => '494218',
        'plateNo' => 'ASA-442',
        'fare' => '100.00',
        'departureDate' => '2022-12-25',
        'departureTime' => '15:00:00',
        'returnDate' => '2022-12-26' ],

        [ 'routeNo' => '191877',
        'plateNo' => 'XOE-1432',
        'fare' => '50.00',
        'departureDate' => '2022-12-26',
        'departureTime' => '9:00:00',
        'returnDate' => '2022-12-26' ],

        [ 'routeNo' => '105158',
        'plateNo' => 'XOE-1432',
        'fare' => '50.00',
        'departureDate' => '2022-12-26',
        'departureTime' => '18:00:00',
        'returnDate' => '2022-12-27' ],

        [ 'routeNo' => '660267',
        'plateNo' => 'ASA-442',
        'fare' => '200.00',
        'departureDate' => '2022-12-27',
        'departureTime' => '5:00:00',
        'returnDate' => '2022-12-27' ],

        [ 'routeNo' => '231315',
        'plateNo' => 'ASA-442',
        'fare' => '200.00',
        'departureDate' => '2022-12-27',
        'departureTime' => '13:30:00',
        'returnDate' => '2022-12-27' ],

        [ 'routeNo' => '660267',
        'plateNo' => 'ASA-442',
        'fare' => '200.00',
        'departureDate' => '2022-12-27',
        'departureTime' => '18:00:00',
        'returnDate' => '2022-12-28' ],

        [ 'routeNo' => '617431',
        'plateNo' => 'DEE-124',
        'fare' => '100.00',
        'departureDate' => '2022-12-28',
        'departureTime' => '5:00:00',
        'returnDate' => '2022-12-28' ],

        [ 'routeNo' => '823217',
        'plateNo' => 'AOF-224',
        'fare' => '150.00',
        'departureDate' => '2022-12-28',
        'departureTime' => '15:00:00',
        'returnDate' => '2022-12-29' ],



        [ 'routeNo' => '123456',
        'plateNo' => 'ASA-442',
        'fare' => '100.00',
        'departureDate' => '2022-12-29',
        'departureTime' => '9:00:00',
        'returnDate' => '2022-12-29' ],

        [ 'routeNo' => '191877',
        'plateNo' => 'XOE-1432',
        'fare' => '50.00',
        'departureDate' => '2022-12-29',
        'departureTime' => '13:30:00',
        'returnDate' => '2022-12-30' ],

        [ 'routeNo' => '231315',
        'plateNo' => 'ASA-442',
        'fare' => '200.00',
        'departureDate' => '2022-12-29',
        'departureTime' => '18:00:00',
        'returnDate' => '2022-12-30' ],

        [ 'routeNo' => '823217',
        'plateNo' => 'AOF-224',
        'fare' => '150.00',
        'departureDate' => '2022-12-31',
        'departureTime' => '9:00:00',
        'returnDate' => '2022-12-31' ],

        [ 'routeNo' => '617431',
        'plateNo' => 'DEE-124',
        'fare' => '100.00',
        'departureDate' => '2022-12-31',
        'departureTime' => '18:00:00',
        'returnDate' => null ]

        ];

        RouteVehicle::insert($list);
    }
}
