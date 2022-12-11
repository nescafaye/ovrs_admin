<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seat;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $seat = [

            ['seatCode' => 'A1', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'A2', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B1', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B2', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B3', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B4', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C1', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C2', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C3', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C4', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D1', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D2', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D3', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D4', 'assignedVehicle' => 'DEE-124', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],

            ['seatCode' => 'A1', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'A2', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B1', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B2', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B3', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B4', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C1', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C2', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C3', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C4', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D1', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D2', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D3', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D4', 'assignedVehicle' => 'XOE-1432', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],

            ['seatCode' => 'A1', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'A2', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B1', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B2', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B3', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'B4', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C1', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C2', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C3', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'C4', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D1', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D2', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D3', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seatCode' => 'D4', 'assignedVehicle' => 'AOF-224', 'isAvailable' => 1, 'created_at' => now(), 'updated_at' => now()],     
            
        ];

        Seat::insert($seat);

    }
}
