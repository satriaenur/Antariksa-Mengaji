<?php

use Illuminate\Database\Seeder;

class JalursableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('jalurs')->insert([
    			"name" => "Antariksa Online Reguler",
    			"code" => "JR",
    			"quota_male" => "150",
    			"quota_female" => "50"
    		]);
    	DB::table('jalurs')->insert([
    			"name" => "Antariksa Online Jalur Mandiri",
    			"code" => "JM",
    			"quota_male" => "150",
    			"quota_female" => "50"
    		]);
    	DB::table('jalurs')->insert([
    			"name" => "Sekolah Pengajar Antariksa",
    			"code" => "SPA",
    			"quota_male" => "150",
    			"quota_female" => "50"
    		]);
    	DB::table('jalurs')->insert([
    			"name" => "Layanan Roket Antariksa",
    			"code" => "RKT",
    			"quota_male" => "150",
    			"quota_female" => "50"
    		]);
    	DB::table('jalurs')->insert([
    			"name" => "Antariksa Offline Ruang Rumah Mengaji",
    			"code" => "RRM",
    			"quota_male" => "150",
    			"quota_female" => "50"
    		]);
    }
}
