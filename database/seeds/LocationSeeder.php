<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [[1,'BALI',-8.45547,115.072],[2,'BANGKA BELITUNG',-2.45858,106.978],[3,'BANTEN',-6.44608,105.94],[4,'BENGKULU',-3.83599,102.326],[5,'DI YOGYAKARTA',-7.80325,110.375],[6,'DKI JAKARTA',-6.22975,106.83],[7,'GORONTALO',0.534291,123.047],[8,'IRIAN JAYA BARAT',-1.62423,132.279],[9,'JAMBI',-1.7529,102.793],[10,'JAWA BARAT',-7.30715,110.124],[11,'JAWA TENGAH',-7.30715,110.124],[12,'JAWA TIMUR',-6.91473,113.583],[13,'KALIMANTAN BARAT',-0.51386,111.111],[14,'KALIMANTAN SELATAN',-3.02993,115.451],[15,'KALIMANTAN TENGAH',-1.38431,113.29],[16,'KALIMANTAN TIMUR',0.996888,116.431],[17,'KEPULAUAN RIAU',1.9657,106.221],[18,'LAMPUNG',-4.94619,104.745],[19,'MALUKU',-4.86205,130.316],[20,'MALUKU UTARA',0.083763,126.97],[21,'NANGGROE ACEH DARUSSALAM',4.04086,96.6489],[22,'NUSA TENGGARA BARAT',-8.59499,117.578],[23,'NUSA TENGGARA TIMUR',-9.53553,122.058],[24,'PAPUA',-4.08949,137.648],[25,'RIAU',0.880446,101.919],[26,'SULAWESI BARAT',-2.21022,119.315],[27,'SULAWESI SELATAN',-4.82709,119.439],[28,'SULAWESI TENGAH',-1.13279,121.815],[29,'SULAWESI TENGGARA',-4.49546,122.741],[30,'SULAWESI UTARA',2.92889,125.146],[31,'SUMATERA BARAT',-1.55635,100.245],[32,'SUMATERA SELATAN',-3.2754,104.082],[33,'SUMATERA UTARA',1.83129,98.7417]];
        $cities = [[1,1,'Kota Denpasar'],[2,1,'Kab. Jembrana'],[3,1,'Kab. Karangasem'],[4,1,'Kab. Badung'],[5,1,'Kab. Bangli'],[6,1,'Kab. Buleleng'],[7,1,'Kab. Klungkung'],[8,1,'Kab. Tabanan'],[9,1,'Kab. Gianyar'],[10,2,'Kab. Bangka Selatan'],[11,2,'Kab. Belitung'],[12,2,'Kab. Bangka'],[13,2,'Kota Pangkal Pinang'],[14,2,'Kab. Belitung Timur'],[15,2,'Kab. Bangka Barat'],[16,2,'Kab. Bangka Tengah'],[17,3,'Kab. Pandeglang'],[18,3,'Kab. Serang'],[19,3,'Kab. Tangerang'],[20,3,'Kab. Lebak'],[21,3,'Kota Tangerang'],[22,3,'Kota Cilegon'],[23,3,'Kota Serang'],[24,4,'Kab. Lebong'],[25,4,'Kab. Muko-Muko'],[26,4,'Kab. Bengkulu Utara'],[27,4,'Kab. Seluma'],[28,4,'Kota Bengkulu'],[29,4,'Kab. Kepahiang'],[30,4,'Kab. Rejang Lebong'],[31,4,'Kab. Kaur'],[32,4,'Kab. Bengkulu Selatan'],[33,6,'Kota Administrasi Jakarta Timur'],[34,6,'Kota Administrasi Jakarta Pusat'],[35,6,'Kota Administrasi Jakarta Barat'],[36,6,'Kota Administrasi Jakarta Selatan'],[37,6,'Kota Administrasi Jakarta Utara'],[38,6,'DKI Jakarta'],[39,6,'Kota Administrasi Kepulauan Seribu'],[40,7,'Kab. Gorontalo'],[41,7,'Kab. Gorontalo Utara'],[42,7,'Kota Bone Bolango'],[43,7,'Kab. Boalemo'],[44,7,'Kota Gorontalo'],[45,7,'Kab. Pahuwalo'],[46,9,'Kab. Tanjung Jabung Timur'],[47,9,'Kab. Muaro Jambi'],[48,9,'Kab. Tebo'],[49,9,'Kab. Kerinci'],[50,9,'Kab. Batang Hari'],[51,9,'Kab. Merangin'],[52,9,'Kab. Sarolangun'],[53,9,'Kab. Bungo'],[54,9,'Kab. Tanjung Jabung Barat'],[55,9,'Kota Jambi'],[56,10,'Kab. Purwakarta'],[57,10,'Kab. Bekasi'],[58,10,'Kab. Garut'],[59,10,'Kota Banjar'],[60,10,'Kab.Ciamis'],[61,10,'Kota Bekasi'],[62,10,'Kab. Sukabumi'],[63,10,'Kab. Tasikmalaya'],[64,10,'Kab. Karawang'],[65,10,'Kota Sukabumi'],[66,10,'Kab. Bandung Barat'],[67,10,'Kota Depok'],[68,10,'Kab. Subang'],[69,10,'Kota Bogor'],[70,10,'Kab. Sumedang'],[71,10,'Kab. Kuningan'],[72,10,'Kota Tasikmalaya'],[73,10,'Kota Cimahi'],[74,10,'Kota Cirebon'],[75,10,'Kab. Cianjur'],[76,10,'Kota Bandung'],[77,10,'Kab. Indramayu'],[78,10,'Kab. Majalengka'],[79,10,'Kab. Bandung'],[80,10,'Kab. Cirebon'],[81,10,'Kab. Bogor'],[82,11,'Kota Salatiga'],[83,11,'Kab. Kudus'],[84,11,'Kab. Purworejo'],[85,11,'Kab. Sukoharjo'],[86,11,'Kab. Bojonegoro'],[87,11,'Kab. Batang'],[88,11,'Kab. Magelang'],[89,11,'Kab. Jepara'],[90,11,'Kab. Blora'],[91,11,'Kab. Brebes'],[92,11,'Kab. Banjarnegara'],[93,11,'Kota Surakarta'],[94,11,'Kab. Temanggung'],[95,11,'Kota Semarang'],[96,11,'Kab. Pati'],[97,11,'Kab. Wonogiri'],[98,11,'Kab. Klaten'],[99,11,'Kab. Purbalingga'],[100,11,'Kab. Kendal'],[101,11,'Kab. Pekalongan'],[102,11,'Kab. Demak'],[103,11,'Kab. Grobogan'],[104,11,'Kab. Rembang'],[105,11,'Kab. Karang Anyar'],[106,11,'Kab. Wonosobo'],[107,11,'Kab. Kebumen'],[108,11,'Kab. Sragen'],[109,11,'Kab. Cilacap'],[110,11,'Kota Magelang'],[111,11,'Kab. Tegal'],[112,11,'Kota Tegal'],[113,11,'Kab. Banyumas'],[114,11,'Kota Pekalongan'],[115,11,'Kab. Semarang'],[116,11,'Kab. Boyolali'],[117,11,'Kab. Pemalang'],[118,12,'Kab. Ponorogo'],[119,12,'Kab. Lamongan'],[120,12,'Kab. Nganjuk'],[121,12,'Kab. Blitar'],[122,12,'Kab. Madiun'],[123,12,'Kab. Sidoarjo'],[124,12,'Kab.Gresik'],[125,12,'Kab. Tuban'],[126,12,'Kab. Jombang'],[127,12,'Kab. Tulungagung'],[128,12,'Kab. Banyuwangi'],[129,12,'Kab. Mojokerto'],[130,12,'Kab. Probolinggo'],[131,12,'Kab. Kediri'],[132,12,'Kab. Sampang'],[133,12,'Kab. Magetan'],[134,12,'Kota Batu'],[135,12,'Kab. Pamekasan'],[136,12,'Kab. Trenggalek'],[137,12,'Kab. Bondowoso'],[138,12,'Kota Malang'],[139,12,'Kab. Ngawi'],[140,12,'Kota Pasuruan'],[141,12,'Kab. Lumajang'],[142,12,'Kota Probolinggo'],[143,12,'Kab. Jember'],[144,12,'Kota Madiun'],[145,12,'Kab. Sumenep'],[146,12,'Kota Kediri'],[147,12,'Kab. Malang'],[148,12,'Kota Blitar'],[149,12,'Kab Situbondo'],[150,12,'Kota Mojokerto'],[151,12,'Kab. Pacitan'],[152,12,'Kab. Pasuruan'],[153,12,'Kab. Bangkalan'],[154,12,'Kota Surabaya'],[155,13,'Kab. Sekadau'],[156,13,'Kab. Bengkayang'],[157,13,'Kab. Sambas'],[158,13,'Kab. Pontianak'],[159,13,'Kota Pontianak'],[160,13,'Kab. Kayong Utara'],[161,13,'Kota Singkawang'],[162,13,'Kab. Landak'],[163,13,'Kab. Ketapang'],[164,13,'Kab. Sintang'],[165,13,'Kab. Melawi'],[166,13,'Kab. Kapuas Hulu'],[167,13,'Kab. Sanggau'],[168,13,'Kab. Kubu Raya'],[169,14,'Kota Banjarbaru'],[170,14,'Kota Banjarmasin'],[171,14,'Kab. Tabalong'],[172,14,'Kab. Hulu Sungai Tengah'],[173,14,'Kab. Tanah Laut'],[174,14,'Kab. Tanah Bambu'],[175,14,'Kab. Barito Selatan'],[176,14,'Kab. Barito Utara'],[177,14,'Kab. Kota Baru'],[178,14,'Kab. Murung Raya'],[179,14,'Kab. Barito Kuala'],[180,14,'Kab. Banjar'],[181,14,'Kab. Hulu Sungai Utara'],[182,14,'Kab. Hulu Sungai Selatan'],[183,14,'Kab. Barito Timur'],[184,14,'Kab. Balangan'],[185,14,'Kab. Tampin'],[186,15,'Kab. Seruyan'],[187,15,'Kab. Gunung Mas'],[188,15,'Kab. Katingan'],[189,15,'Kab. Kotawaringin Timur'],[190,15,'Kab. Kotawaringin Barat'],[191,15,'Kab. Sukamara'],[192,15,'Kab. Pulang Pisau'],[193,15,'Kab. Kapuas'],[194,15,'Kota Palangkaraya'],[195,15,'Kab. Lamandau'],[196,16,'Kota Bontang'],[197,16,'Kab. Malinau'],[198,16,'Kab. Nunukan'],[199,16,'Kota Samarinda'],[200,16,'Kab. Bulungan'],[201,16,'Kab. Tana Tidung'],[202,16,'Kota Tarakan'],[203,16,'Kab. Kutai Kartanegara'],[204,16,'Kab. Panajam Paser Utara'],[205,16,'Kota Balikpapan'],[206,16,'Kab. Kutai Barat'],[207,16,'Kab. Kutai Timur'],[208,16,'Kab. Paser'],[209,16,'Kab. Berau'],[210,17,'Kab. Bintan'],[211,17,'Kota Batam'],[212,17,'Kota Tanjung Pinang'],[213,17,'Kab. Natuna'],[214,17,'Kab. Karimun'],[215,17,'Kab. Lingga'],[216,18,'Kab. Lampung Timur'],[217,18,'Kab. Tulang Bawang'],[218,18,'Kab. Pesawaran'],[219,18,'Kota Metro'],[220,18,'Kab. Lampung Utara'],[221,18,'Kab. Tanggamus'],[222,18,'Kab. Lampung Tengah'],[223,18,'Kab. Way Kanan'],[224,18,'Kab. Lampung Selatan'],[225,18,'Kab. Lampung Barat'],[226,18,'Kota Bandar Lampung'],[227,19,'Kab. Maluku Tenggara'],[228,19,'Kab. Buru'],[229,19,'Kab. Maluku Tengah'],[230,19,'Kota Ambon'],[231,19,'Kab. Seram Bagian Timur'],[232,19,'Kab. Maluku Tenggara Barat'],[233,19,'Kab. Kepulauan Aru'],[234,19,'Kab. Seram Bagian Barat'],[235,20,'Kota Tidore'],[236,20,'Kab. Halmahera Selatan'],[237,20,'Kab. Halmahera Utara'],[238,20,'Kab. Halmahera Tengah'],[239,20,'Kab. Halmahera Barat'],[240,20,'Kab. Halmahera Timur'],[241,20,'Kab. Kepulauan Sula'],[242,20,'Kota Ternate'],[243,24,'Kab. Yahukimo'],[244,24,'Kab. Yapen Waropen'],[245,24,'Kab. Keerom'],[246,24,'Kab. Mappi'],[247,24,'Kab. Pegunungan Bintang'],[248,24,'Kab. Mamberamo Raya'],[249,24,'Kab. Puncak Jaya'],[250,24,'Kab. Biak Numfor'],[251,24,'Kab. Talikora'],[252,24,'Kab. Sarmi'],[253,24,'Kab. Waropen'],[254,24,'Kab. Deiyai'],[255,24,'Kab. Jayapura'],[256,24,'Kab. Nabire'],[257,24,'Kab. Bo1en Digoel'],[258,24,'Kab. Merauke'],[259,24,'Kab. Dogiyai'],[260,24,'Kab. Supiori'],[261,24,'Kab. Jayawijaya'],[262,24,'Kota Jayapura'],[263,24,'Kab. Asmat'],[264,24,'Kab. Mimika'],[265,24,'Kab. Paniai'],[266,24,'Kab. Intan Jaya'],[267,24,'Kab. Manokwari'],[268,25,'Kota Dumai'],[269,25,'Kota Pekanbaru'],[270,25,'Kab. Siak'],[271,25,'Kab. Palalawan'],[272,25,'Kab. Meranti'],[273,25,'Kab. Rokan Hilir'],[274,25,'Kab. Kampar'],[275,25,'Kab. Rokan Hulu'],[276,25,'Kab. Bengkalis'],[277,25,'Kab. Indragiri Hulu'],[278,25,'Kab. Indragiri Hilir'],[279,25,'Kab. Kuantan Sengingi'],[280,26,'Kab. Polewali Mandar'],[281,26,'Kab. Mamasa'],[282,26,'Kab. Mamuju Utara'],[283,26,'Kab. Majene'],[284,26,'Kab. Mamuju'],[285,27,'Kab. Goa'],[286,27,'Kab. Pangkajene Kepulauan'],[287,27,'Kab. Barru'],[288,27,'Kab. Bantaeng'],[289,27,'Kab. Maros'],[290,27,'Kab. Sindenreng Rappang'],[291,27,'Kab. Pinrang'],[292,27,'Kab. Wajo'],[293,27,'Kab. Selayar'],[294,27,'Kota Makassar'],[295,27,'Kab. Tana Toraja'],[296,27,'Kab. Bulukumba'],[297,27,'Kab. Sinjai'],[298,27,'Kab. Soppeng'],[299,27,'Kab. Takalar'],[300,27,'Kota Palopo'],[301,27,'Kab. Bone'],[302,27,'Kab. Enrekang'],[303,27,'Kab. Luwu Timur'],[304,27,'Kab. Jeneponto'],[305,27,'Kab. Tana Toraja Utara'],[306,27,'Kota Pare-Pare'],[307,27,'Kab. Luwu Utara'],[308,28,'Kab. Buol'],[309,28,'Kab. Poso'],[310,28,'Kota Palu'],[311,28,'Kab. Tojo Una-Una'],[312,28,'Kab. Parigi Moutong'],[313,28,'Kab. Morowali'],[314,28,'Kab. Donggala'],[315,28,'Kab. Banggai'],[316,28,'Kab. Banggai Kepulauan'],[317,28,'Kab. Toli-Toli'],[318,29,'Kab. Kolaka'],[319,29,'Kab. Wakatobi'],[320,29,'Kab. Bombana'],[321,29,'Kota Kendari'],[322,29,'Kab. Konawe'],[323,29,'Kab. Konawe Utara/ Selatan'],[324,29,'Kab. Muna'],[325,29,'Kab. Buton & Buton Utara'],[326,29,'Kab. Kolaka Utara'],[327,29,'Kab. Kota Bau-Bau'],[328,30,'Kota Bitung'],[329,30,'Kota Manado'],[330,30,'Kab. Minahasa'],[331,30,'Kota Tomohon'],[332,30,'Kab. Minahasa Utara'],[333,30,'Kab. Minahasa Selatan'],[334,30,'Kab. Minahasa Tenggara'],[335,30,'Kab. Kepulauan Talaud'],[336,30,'Kab. Kepulauan Sangihe'],[337,30,'Kab. Bolaang Mongondow'],[338,30,'Kab. Bolaang Mongondow Utara'],[339,31,'Kab. Pesisir Selatan'],[340,31,'Kab. Tanah Datar'],[341,31,'Kab. Pasaman'],[342,31,'Kota Padang'],[343,31,'Kab. Pasaman Barat'],[344,31,'Kab. Sijunjung'],[345,31,'Kab. Dharmasraya'],[346,31,'Kab. Solok Selatan'],[347,31,'Kota Solok'],[348,31,'Kota Padang Panjang'],[349,31,'Kab. Kepulauan Mentawai'],[350,31,'Kota Pariaman'],[351,31,'Kota Payakumbuh'],[352,31,'Kab. Padang Pariaman'],[353,31,'Kab. Lima Puluh Kota'],[354,31,'Kab. Agam'],[355,31,'Kab. Solok'],[356,31,'Kota Bukit Tinggi'],[357,31,'Kab. Pasuruan'],[358,31,'Kota Sawahlunto'],[359,32,'Kab. Ogan Komering Ulu Timur'],[360,32,'Kab. Musi Rawas'],[361,32,'Kota Prabumulih'],[362,32,'Kota Pagar Alam'],[363,32,'Kab. Ogan Ilir'],[364,32,'Kab. Lahat'],[365,32,'Kab. Empat Lawang'],[366,32,'Kota Lubuk Linggau'],[367,32,'Kab. Muara Enim'],[368,32,'Kab. Ogan Komering Ilir'],[369,32,'Kota Palembang'],[370,32,'Kab. Musi Banyuasin'],[371,32,'Kab. Ogan Komering Ulu Selatan'],[372,32,'Kab. Banyuasin'],[373,32,'Kab. Ogan Komering Ulu'],[374,33,'Kab. Toba Samosir'],[375,33,'Kab. Nias Selatan'],[376,33,'Kab. Langkat'],[377,33,'Kab. Humbang Hasudutan'],[378,33,'Kab. Simalungun'],[379,33,'Kab. Serdang Bedagai'],[380,33,'Kab. Deli Serdang'],[381,33,'Kab. Padang Lawas'],[382,33,'Kab. Karo'],[383,33,'Kab. Mandailing Natal'],[384,33,'Kab. Padang Lawas Utara'],[385,33,'Kab. Dairi'],[386,33,'Kota Binjai'],[387,33,'Kota Tanjung Balai'],[388,33,'Kab. Samosir'],[389,33,'Kab. Pakpak Barat'],[390,33,'Kota Medan'],[391,33,'Kab. Tebing Tinggi'],[392,33,'Kota Padang Sidempuan'],[393,33,'Kota Pematangsiantar'],[394,33,'Kota Sibolga'],[395,33,'Kota Tebing Tinggi'],[396,33,'Kab. Tapanuli Utara'],[397,33,'Kab. Tapanuli Tengah'],[398,33,'Kab. Tapanuli Selatan'],[399,33,'Kab. Asahan'],[400,33,'Kab. Labuhan Batu'],[401,33,'Kab. Nias'],[402,33,'Kab. Batubara'],[403,5,'Kab. Bantul'],[404,5,'Kab. Gunung Kidul'],[405,5,'Kab. Kulon Progo'],[406,5,'Kab. Sleman'],[407,5,'Kota Yogyakarta'],[408,22,'Kab. Bima'],[409,22,'Kab. Dompu'],[410,22,'Kab. Lombok Barat'],[411,22,'Kab. Lombok Tengah'],[412,22,'Kab. Lombok Timur'],[413,22,'Kab. Sumbawa'],[414,22,'Kab. Sumbawa Barat'],[415,22,'Kota Bima'],[416,22,'Kota Mataram'],[417,23,'Kab. Alor'],[418,23,'Kab. Belu'],[419,23,'Kab. Ende'],[420,23,'Kab. Flores Timur'],[421,23,'Kab. Kupang'],[422,23,'Kab. Lembata'],[423,23,'Kab. Manggarai'],[424,23,'Kab. Manggarai Barat'],[425,23,'Kab. Manggarai Timur'],[426,23,'Kab. Nagekeo'],[427,23,'Kab. Ngada'],[428,23,'Kab. Rote Ndao'],[429,23,'Kab. Sikka'],[430,23,'Kab. Sumba Barat'],[431,23,'Kab. Sumba Barat Daya'],[432,23,'Kab. Sumba Tengah'],[433,23,'Kab. Sumba Timur'],[434,23,'Kab. Timor Tengah Selatan'],[435,23,'Kab. Timor Tengah Utara'],[436,23,'Kota Kupang'],[460,21,'Kab. Aceh Barat'],[461,21,'Kab. Aceh Barat Daya'],[462,21,'Kab. Aceh Besar'],[463,21,'Kab. Aceh Jaya'],[464,21,'Kab. Aceh Selatan'],[465,21,'Kab. Aceh Singkil'],[466,21,'Kab. Aceh Tamiang'],[467,21,'Kab. Aceh Tengah'],[468,21,'Kab. Aceh Tenggara'],[469,21,'Kab. Aceh Timur'],[470,21,'Kab. Aceh Utara'],[471,21,'Kab. Bener Meriah'],[472,21,'Kab. Bireuen'],[473,21,'Kab. Gayo Lues'],[474,21,'Kab. Nagan Raya'],[475,21,'Kab. Pidie'],[476,21,'Kab. Pidie Jaya'],[477,21,'Kab. Simeuleu'],[478,21,'Kota Banda Aceh'],[479,21,'Kota Langsa'],[480,21,'Kota Lhokseumawe'],[481,21,'Kota Sabang'],[482,21,'Kota Subulussalam']];

        $dataProvince = [];
        $dataCities = [];
        foreach($provinces as $province) {
            $itemProvince = [
                "id" => $province[0],
                "title" => $province[1],
                "longitude" => $province[2],
                "latitude" => $province[3],
            ];
            array_push($dataProvince, $itemProvince);
        }

        foreach($cities as $city) {
            $itemCity = [
                "id" => $city[0],
                "province_id" => $city[1],
                "title" => $city[2],
            ];
            array_push($dataCities, $itemCity);
        }

        DB::table('provinces')->insert($dataProvince);
        DB::table('cities')->insert($dataCities);
    }
}
