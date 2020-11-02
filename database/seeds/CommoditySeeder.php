<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CommoditySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'name' => 'Bạc',
                'image' => '',
            ],
            [
                'name' => 'Đồng Hồ',
                'image' => '',
            ]
        ];
        foreach($datas as $data){
            DB::table('commodities')->insert([
                'name' => $data['name'],
                'image' => $data['image'],
                'created_at' => now()
            ]);
        }
    }
}
