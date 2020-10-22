<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
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
                'category_id' => 1,
                'name' => 'Dây Chuyền Bạc 925 Hanada N34.N.X.A.380. 0601 Bướm Xà Cừ',
                'price' => 1342000,
                'description' => 'Dây Chuyền Bạc 925 Hanada N34.N.X.A.380. 0601 Bướm Xà Cừ',
                'quantity' => 100,
                'image' => 'http://product.hstatic.net/1000103292/product/chd7416__3__c11b2c4e311b4dc5b95a0619a0bcb4b0_large.jpg',
                'status' => 1
            ],
            [
                'category_id' => 1,
                'name' => 'Dây Chuyền Bạc 925 Hanada N34.N.X.S.380.0607 Cánh Cánh Chim Xà Cừ',
                'price' => 3342000,
                'description' => 'Dây Chuyền Bạc 925 Hanada N34.N.X.S.380.0607 Cánh Cánh Chim Xà Cừ',
                'quantity' => 100,
                'image' => 'https://product.hstatic.net/1000103292/product/d7085_l_-_copy_cd683ad4ed7f4007ae003fbe2e04a11e.jpg',
                'status' => 1
            ],
            [
                'category_id' => 1,
                'name' => 'Dây Chuyền Bạc 925 Hanada N1234.N.1.S.300. 0608 Lá Thư I Love You',
                'price' => 3542000,
                'description' => 'Dây Chuyền Bạc 925 Hanada N1234.N.1.S.300. 0608 Lá Thư I Love You',
                'quantity' => 100,
                'image' => 'https://product.hstatic.net/1000103292/product/chd7297__5__1426411b4a124f79b8452f0e6667ad19_large.jpg',
                'status' => 1
            ],
            [
                'category_id' => 1,
                'name' => 'Dây Chuyền Bạc 925 Hanada N1234.N.2.S.340. 0602 Tròn Đá Nhỏ Giữa',
                'price' => 642000,
                'description' => 'Dây Chuyền Bạc 925 Hanada N1234.N.2.S.340. 0602 Tròn Đá Nhỏ Giữa',
                'quantity' => 100,
                'image' => 'https://product.hstatic.net/1000103292/product/chd7242-1__1__c7559779b32f4cc4abae664bd8afb215_large.jpg',
                'status' => 1
            ],
            [
                'category_id' => 1,
                'name' => 'Dây Chuyền Bạc 925 Hanada N1234.N.X.S.380. 0609 Vòng Tròn Đá Và Xà Cừ',
                'price' => 842000,
                'description' => 'Dây Chuyền Bạc 925 Hanada N1234.N.X.S.380. 0609 Vòng Tròn Đá Và Xà Cừ',
                'quantity' => 100,
                'image' => 'https://product.hstatic.net/1000103292/product/chd7197__3__-_copy_e75026b892e34c5297398dbd2f1bdf0d_large.jpg',
                'status' => 1
            ],[
                'category_id' => 1,
                'name' => 'Dây Chuyền Bạc 925 Hanada N1234.N.2.S.300. 0605 Dây Chuyền Thánh Gía Đá',
                'price' => 342000,
                'description' => 'Dây Chuyền Bạc 925 Hanada N1234.N.2.S.300. 0605 Dây Chuyền Thánh Gía Đá',
                'quantity' => 100,
                'image' => 'https://product.hstatic.net/1000103292/product/chd6495-1__5__da8181c2379743bb8bcf8f4a2b7b2028_large.jpg',
                'status' => 1
            ],
            [
                'category_id' => 1,
                'name' => 'Dây Chuyền Bạc 925 Hanada Họa Tiết Vuông',
                'price' => 642000,
                'description' => 'Dây Chuyền Bạc 925 Hanada Họa Tiết Vuông',
                'quantity' => 100,
                'image' => 'https://product.hstatic.net/1000103292/product/d4359.com_6e517d13988d483fbfaf35101733d751_large.png',
                'status' => 1
            ],[
                'category_id' => 1,
                'name' => 'Dây Chuyền Bạc 925 Hanada Bi Bạc',
                'price' => 542000,
                'description' => 'Dây Chuyền Bạc 925 Hanada Bi Bạc',
                'quantity' => 100,
                'image' => 'https://product.hstatic.net/1000103292/product/d393_592dce96ea9047aabf0bc8ab2faeb371_large.png',
                'status' => 1
            ]
        ];
        foreach($datas as $data){
            DB::table('products')->insert([
                'category_id' => $data['category_id'],
                'name' => $data['name'],
                'price' => $data['price'],
                'description' => $data['description'],
                'quantity' => $data['quantity'],
                'image' => $data['image'],
                'status' => $data['status'],
                'created_at' => now()
            ]);
        }
    }
}
