<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function insert(){
        $result = DB::table('mahasiswas')->insert(
        [
        'nim' => '19003036',
        'nama' => 'Sari Citra Lestari',
        'tanggal_lahir' => '2001-12-31',
        'ipk' => 3.5,
        'created_at' => now(),
        'updated_at' => now(),
        ]
        );
        }
        

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function insert(){
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = '19003036';
        $mahasiswa->nama = 'Sari Citra Lestari';
        $mahasiswa->tanggal_lahir = '2001-12-31';
        $mahasiswa->ipk = 3.5;
        $mahasiswa->save();
        }
        
}
