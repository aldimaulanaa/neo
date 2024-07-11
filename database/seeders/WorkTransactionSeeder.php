<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WorkTransaction;

class WorkTransactionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'submitted_by' => 'Abdul Rahman',
                'submitted_when' => '2024-06-24',
                'site_code' => 'R002',
                'activity' => 'Cincang 4" Tebal',
                'uom' => 'Pokok',
                'block' => 116,
                'task' => 'A1',
                'start' => '07:00',
                'end' => '17:00',
                'mesin_id' => 'LYK01',
                'fuel' => 200,
                'duty' => 'On Duty',
            ],
        ];

        foreach ($data as $item) {
            WorkTransaction::create($item);
        }
    }
}
