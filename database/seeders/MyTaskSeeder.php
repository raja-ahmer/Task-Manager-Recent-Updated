<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class MyTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new Task())->insert([
            [
                'taskId' => 7,
                'name' => 'MyTaskSeeder',
                'description' => 'Data through seeder',
                'startDate' => '2023-07-13',
                'endDate' => '2023-07-18',
                'categoryId' => 3,
                'userId' => 1,
                'created_at' => '2023-07-13 05:16:10',
                'updated_at' => '2023-07-13 09:39:55',
                'deleted_at' => null
            ],
            [
                'taskId' => 8,
                'name' => 'Seeding',
                'description' => 'Data through seeder',
                'startDate' => '2023-07-13',
                'endDate' => '2023-07-18',
                'categoryId' => 4,
                'userId' => 1,
                'created_at' => '2023-07-13 05:16:10',
                'updated_at' => '2023-07-13 09:39:55',
                'deleted_at' => null
            ],
            [
                'taskId' => 9,
                'name' => 'ABC Seeder',
                'description' => 'Data through seeder',
                'startDate' => '2023-07-13',
                'endDate' => '2023-07-18',
                'categoryId' => 1,
                'userId' => 1,
                'created_at' => '2023-07-13 05:16:10',
                'updated_at' => '2023-07-13 09:39:55',
                'deleted_at' => null
            ],
            [
                'taskId' => 10,
                'name' => 'DEF Seeder',
                'description' => 'Data through seeder',
                'startDate' => '2023-07-13',
                'endDate' => '2023-07-18',
                'categoryId' => 4,
                'userId' => 1,
                'created_at' => '2023-07-13 05:16:10',
                'updated_at' => '2023-07-13 09:39:55',
                'deleted_at' => null
            ],
            [
                'taskId' => 11,
                'name' => 'GHI Seeder',
                'description' => 'Data through seeder',
                'startDate' => '2023-07-13',
                'endDate' => '2023-07-18',
                'categoryId' => 1,
                'userId' => 1,
                'created_at' => '2023-07-13 05:16:10',
                'updated_at' => '2023-07-13 09:39:55',
                'deleted_at' => null
            ],
            [
                'taskId' => 12,
                'name' => 'JKL Seeder',
                'description' => 'Data through seeder',
                'startDate' => '2023-07-13',
                'endDate' => '2023-07-18',
                'categoryId' => 1,
                'userId' => 1,
                'created_at' => '2023-07-13 05:16:10',
                'updated_at' => '2023-07-13 09:39:55',
                'deleted_at' => null
            ],
            [
                'taskId' => 13,
                'name' => 'MNO Seeder',
                'description' => 'Data through seeder',
                'startDate' => '2023-07-13',
                'endDate' => '2023-07-18',
                'categoryId' => 1,
                'userId' => 1,
                'created_at' => '2023-07-13 05:16:10',
                'updated_at' => '2023-07-13 09:39:55',
                'deleted_at' => null
            ],
            [
                'taskId' => 14,
                'name' => 'PQR Seeder',
                'description' => 'Data through seeder',
                'startDate' => '2023-07-13',
                'endDate' => '2023-07-18',
                'categoryId' => 1,
                'userId' => 1,
                'created_at' => '2023-07-13 05:16:10',
                'updated_at' => '2023-07-13 09:39:55',
                'deleted_at' => null
            ],
            [
                'taskId' => 15,
                'name' => 'STU Seeder',
                'description' => 'Data through seeder',
                'startDate' => '2023-07-13',
                'endDate' => '2023-07-18',
                'categoryId' => 1,
                'userId' => 1,
                'created_at' => '2023-07-13 05:16:10',
                'updated_at' => '2023-07-13 09:39:55',
                'deleted_at' => null
            ],
            [
                'taskId' => 16,
                'name' => 'VWX Seeder',
                'description' => 'Data through seeder',
                'startDate' => '2023-07-13',
                'endDate' => '2023-07-18',
                'categoryId' => 1,
                'userId' => 1,
                'created_at' => '2023-07-13 05:16:10',
                'updated_at' => '2023-07-13 09:39:55',
                'deleted_at' => null
            ],
            [
                'taskId' => 17,
                'name' => 'YZ Seeder',
                'description' => 'Data through seeder',
                'startDate' => '2023-07-13',
                'endDate' => '2023-07-18',
                'categoryId' => 1,
                'userId' => 1,
                'created_at' => '2023-07-13 05:16:10',
                'updated_at' => '2023-07-13 09:39:55',
                'deleted_at' => null
            ]

        ]);
    }
}
