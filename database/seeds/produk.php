<?php

use Illuminate\Database\Seeder;

class produk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert(array(
            ['nama_produk' => 'sampo', 'harga_beli' => '1000', 'harga_jual' => '2000'],
            ['nama_produk' => 'sabun', 'harga_beli' => '4000', 'harga_jual' => '5000'],
            ['nama_produk' => 'burger', 'harga_beli' => '8000', 'harga_jual' => '10000'],
            ['nama_produk' => 'cereal', 'harga_beli' => '20000', 'harga_jual' => '22000'],
            ['nama_produk' => 'yoghurt', 'harga_beli' => '15000', 'harga_jual' => '20000'],
            ['nama_produk' => 'susu', 'harga_beli' => '10000', 'harga_jual' => '12000'],
            ['nama_produk' => 'baju', 'harga_beli' => '50000', 'harga_jual' => '75000'],
            ['nama_produk' => 'jaket', 'harga_beli' => '120000', 'harga_jual' => '150000']
        )) ;
    }
}
