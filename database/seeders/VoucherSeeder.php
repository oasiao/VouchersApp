<?php

namespace Database\Seeders;

use App\Http\VoucherHelper;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = new VoucherHelper;

        $vouchers = [
            [
                'id' => $helper->str_random(15),
                'value' => 100,
                'valid_date' => Carbon::parse('2022-03-25'),
            ],
            [
                'id' => $helper->str_random(15),
                'value' => 150,
                'valid_date' => Carbon::parse('2022-04-25'),
            ]
        ];

        DB::table('vouchers')->insert($vouchers);
    }
}
