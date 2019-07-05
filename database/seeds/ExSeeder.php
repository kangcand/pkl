<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Siswa;
use Faker\Factory as Faker;

class ExSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rahasia')
        ]);

        $faker = Faker\Factory::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            $siswa = new Siswa;
            $siswa->nama = $faker->name($gender);
            $siswa->nis = $faker->nik; //$faker->numberBetween($min = 10000, $max = 90000);
            if ($gender === "male") {
                $gender = "Laki-laki";
            } elseif ($gender == "female") {
                $gender = "Perempuan";
            }
            $siswa->jenis_kelamin = $gender;
            $siswa->alamat = $faker->address;
            $siswa->tgl_lahir = $faker->date;
            $siswa->save();
        }
    }
}
