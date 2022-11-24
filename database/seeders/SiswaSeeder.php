<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class siswaSeeder extends Seeder
{
    public function run()
    {
    $data_siswa = [
    [
        'nama'  => 'Alief wafiudin',
        'kelas' => 'XI PPLG',
        'umur' => random_int(15, 30),
    ],
    [
        'nama'  => 'Anggara Prima',
        'kelas' => 'XI PPLG',
        'umur' => random_int(15, 30),
    ],
    [
        'nama'  => 'Nenni Destiani',
        'kelas' => 'XI PPLG',
        'umur' => random_int(15, 30),
    ],
];

    DB::table('siswa')->truncate();

    foreach ($data_siswa as $data) {
        DB::table('siswa')->insert([
            'nama' => $data['nama'],
            'kelas' => $data['kelas'],
            'umur' => $data['umur'],
        ]);
    }

    $siswa = DB::table('siswa')->get();
    dd($siswa);
}
}