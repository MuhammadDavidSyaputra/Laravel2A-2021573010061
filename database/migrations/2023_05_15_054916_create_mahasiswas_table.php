<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function insert(){
      $mahasiswa = new Mahasiswa;
      $mahasiswa->nim = '19003036';
      $mahasiswa->nama = 'Sari Citra Lestari';
      $mahasiswa->tanggal_lahir = '2001-12-31';
      $mahasiswa->ipk = 3.5;
      $mahasiswa->save();
      }
      
}
