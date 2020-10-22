<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datas = [
            [
                'name' => 'Dây Chuyền',
                'image' => 'https://file.hstatic.net/1000103292/collection/h2_cate_1_2eed2fdc9dea4dd782733174730b5d48.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Bông Tai',
                'image' =>'https://file.hstatic.net/1000103292/collection/h2_cate_2_cb6d02bec9eb480193bf6ed791c990d1.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Lắc Tay',
                'image' => 'https://file.hstatic.net/1000103292/collection/h2_cate_3_6b1155a6da1543f886a00523efc96650.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Nhẫn',
                'image' =>'https://file.hstatic.net/1000103292/collection/h2_cate_4_a3ccf1a885a744b6b3cbb9097c751d41.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Lắc Chân',
                'image' =>'https://file.hstatic.net/1000103292/collection/lac_chan_a9a3c8c9f35f4b159ccd3563474845c3.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Nhẫn Cặp',
                'image' =>'https://file.hstatic.net/1000103292/collection/h2_cate_6_65892746a4944083bc341047afdd89c2.jpg',
                'status' => 1,
            ]
        ];
        foreach($datas as $data){
            DB::table('categories')->insert([
                'name' => $data['name'],
                'image' => $data['image'],
                'status' => $data['status'],
                'created_at' => now()
            ]);
        }
    }
}
