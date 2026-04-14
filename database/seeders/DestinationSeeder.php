<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        Destination::create([
            'name' => 'Cikaso Waterfall',
            'description' => 'Cikaso Waterfall adalah air terjun yang terletak di daerah pegunungan, menawarkan pemandangan alam yang indah dan udara yang sejuk.',
            'location' => 'Sukabumi',
            'working_days' => 'Setiap hari',
            'working_hours' => '07.00-17.00',
            'ticket_price' => 15000,
        ]);
        Destination::create([
            'name' => 'Air Terjun Aek Matua',
            'description' => 'Air terjun ini memiliki keunikan dan keistimewaan tersendiri, yaitu memiliki tiga tingkatan. Setiap level memiliki ukuran dan tinggi yang berbeda-beda. Ketinggiannya berkisar dari 15 meter hingga tertinggi mencapai 40 meter. Dengan keunikan dan keistimewaan tersebut, banyak wisatawan yang menyebut Air Terjun Aek Martua sebagai Air Terjun Seribu Tangga.',
            'location' => 'Dusun Huta Padang, Kecamatan Bangun Purba, Rokan Hulu, Provinsi Riau.',
            'working_days' => 'Setiap hari',
            'working_hours' => '07.00-16.00',
            'ticket_price' => 30000,
        ]);
        Destination::create([
            'name' => 'Alam Mayang',
            'description' => 'Alam Mayang Pekanbaru terletak di Jalan Imam Munandar Km 8, Kelurahan Tangkerang, Kecamatan Bukit Raya, Kota Pekanbaru, Provinsi Riau. Kawasan Alam Mayang Pekanbaru merupakan taman rekreasi yang cukup terkenal yang menawarkan konsep wisata alam hijaunya.',
            'location' => 'Pekanbaru',
            'working_days' => 'Setiap hari',
            'working_hours' => '24/7',
            'ticket_price' => 5000,
        ]);
        Destination::create([
            'name' => 'Asia Heritage',
            'description' => 'Asia Heritage Pekanbaru merupakan destinasi wisata terintegrasi seluas 7 hektar yang menggabungkan waterpark bertaraf internasional dengan desa budaya Asia Tenggara. Dibuka pada 2019, tempat ini menawarkan pengalaman rekreasi, edukasi, dan hiburan keluarga dengan tema Melayu Riau, Cina, India, Dayak, Jepang, serta Korea.',
            'location' => 'Pekanbaru',
            'working_days' => 'Weekend',
            'working_hours' => '07:00-17:00',
            'ticket_price' => 30000,
        ]);
        Destination::create([
            'name' => 'Stone Garden Citatah',
            'description' => 'Bukit batu purba dengan pemandangan luas, cocok buat sunrise/sunset.',
            'location' => 'Padalarang, Bandung Barat',
            'working_days' => 'Setiap hari',
            'working_hours' => '08.00-17.00',
            'ticket_price' => 15000,
        ]);

        for ($i = 0; $i <= 10; $i++) {
            Destination::create([
                'name' => fake(locale: 'id_ID')->name(),
                'description' => fake(locale: 'id_ID')->sentence(),
                'location' => fake(locale: 'id_ID')->address(),
                'working_days' => "Setiap hari",    
                'working_hours' => "08.00-17.00",
                'ticket_price' => rand(10000, 50000),
            ]);
        }
    }
}
