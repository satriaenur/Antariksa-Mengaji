<?php

use Illuminate\Database\Seeder;

class JalurSeeder extends Seeder
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
    			"quota_female" => "50",
                "is_waiting" => true,
    			"description" => "Layanan belajar dan mengajar Al Quran melalui aplikasi WhatsApp. Pembelajaran 
    			dilakukan dalam bentuk group chat dengan metode pembelajaran berupa teori, praktek membaca dengan rekaman, 
    			dan evaluasi.<br/><br/>

    			Terdiri dari 3 level yaitu :<br/>
    			<ol>
    				<li> Level MERKURIUS (Mari Koreksi Serius)</li>
    				<li> Level PENUS (Pengajar Nusantara)</li>
    				<li> Level BUMI (Bekal Untuk Mengajar Disini)</li>
    			</ol><br/>

    			Masing-masing level terdiri dari 7 materi, dan setiap materi diadakan setiap sepekan sekali.<Br/><br/>

    			Jalur Reguler Memiliki batas kuota pendaftaran dan waiting list. Atau silahkan mendaftar di Jalur Mandiri jika ingin 
    			langsung belajar di angkatan selanjutnya."
    		]);
    	DB::table('jalurs')->insert([
    			"name" => "Antariksa Online Jalur Mandiri",
    			"code" => "JM",
    			"quota_male" => "150",
    			"quota_female" => "50",
    			"description" => "Layanan belajar dan mengajar Al Quran melalui aplikasi WhatsApp. Pembelajaran 
    			dilakukan dalam bentuk group chat dengan metode pembelajaran berupa teori, praktek membaca dengan rekaman, 
    			dan evaluasi.<br/><br/>

    			Terdiri dari 3 level yaitu :<br/>
    			<ol>
    				<li> Level MERKURIUS (Mari Koreksi Serius)</li>
    				<li> Level PENUS (Pengajar Nusantara)</li>
    				<li> Level BUMI (Bekal Untuk Mengajar Disini)</li>
    			</ol><br/>

    			Masing-masing level terdiri dari 7 materi, dan setiap materi diadakan setiap sepekan sekali.<Br/><br/>

    			Jalur Mandiri tanpa waiting list dan quota. Pendaftaran akan langsung disertakan pada angkatan pembelajaran selanjutnya."
    		]);
    	DB::table('jalurs')->insert([
    			"name" => "Sekolah Pengajar Antariksa",
    			"code" => "SPA",
    			"quota_male" => "150",
    			"quota_female" => "50",
    			"description" => "Program bimbingan dan rekruitasi pengajar Antariksa. Kami persembahkan sebagai bentuk penghargaan dan 
    			penghormatan kami kepada para guru mengaji.<Br/><br/>

				Mari bergabung bersama Antariksa untuk memberikan kemudahan pembelajaran cara membaca Al-Quran kepada jutaan muslim 
				yang ada diseluruh dunia."
    		]);
    	DB::table('jalurs')->insert([
    			"name" => "Layanan Roket Antariksa",
    			"code" => "RKT",
    			"quota_male" => "150",
    			"quota_female" => "50",
    			"description" => "Layanan belajar dan mengajar Al Quran melalui aplikasi WhatsApp. Pembelajaran 
    			dilakukan dalam bentuk group chat dengan metode pembelajaran berupa teori, praktek membaca dengan rekaman, 
    			dan evaluasi.<br/><br/>

    			Materi terdiri dari 4 judul pembelajaran yaitu:<br/>
    			<ol>
    				<li> Bimbingan membaca Al-Quran</li>
    				<li> Bimbingan menghafal Al-Quran</li>
    				<li> Bimbingan Pernikahan & Rumah Tangga</li>
    				<li> Nasihat dan Tausyiah</li>
    			</ol><br/>

    			Bentuk materi terdiri dari 3 jenis yaitu:<br/>
    			<ol>
    				<li> Tulisan</li>
    				<li> Rekaman</li>
    				<li> Gambar</li>
    			</ol><br/>
				
    			Jalur Mandiri tanpa waiting list dan quota. Pendaftaran akan langsung disertakan pada angkatan pembelajaran selanjutnya."
    		]);
    	DB::table('jalurs')->insert([
    			"name" => "Antariksa Offline Ruang Rumah Mengaji",
    			"code" => "RRM",
    			"quota_male" => "150",
    			"quota_female" => "50",
    			"description" => "Jadikan Rumah lebih bermanfaat dengan mengundang sahabat dan teman 
    			untuk belajar mengaji bersama.<br/><br/>

    			Cari lokasi RRM terdekat untuk memulai mengaji secara langsung."
    		]);
    }
}
