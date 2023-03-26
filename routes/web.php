<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Symfony\Component\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('/Hello', function () {
    echo '<h1>Hello World';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/profil/coba', function () {
    echo '<h2 style="text-align: center"><u>Welcome Profil Coba</u></h2>';
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($jenis, $merek) {
    return "Cek sisa stok untuk $jenis $merek";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($a, $b) {
    echo "Cek sisa stok untuk $a $b";
});

Route::get('/stok_barang/{jenis?}/{merek?}', function ($a = 'smartphone', $b = 'samsung') {
    return "Cek sisa stok untuk $a $b";
});

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan $id";
});

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id =  $id";
})->where('id', '[0-9]+');

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');

Route::get('/hubungi-kami', function () {
    return "<h1>Hubungi Kami</h1>";
});

Route::redirect('/contact-us', '/hubungi-kami');

Route::get('/admin/mahasiswa', function () {
    return "<h1>Daftar Mahasiswa</h1>";
});
Route::get('/admin/dosen', function () {
    return "<h1>Daftar Dosen</h1>";
});
Route::get('/admin/karyawan', function () {
    return "<h1>Daftar Karyawan</h1>";
});

Route::prefix('/admin')->group(function () {
    Route::get(
        '/mahasiswa',
        function () {
            echo "<h1>Daftar Mahasiswa</h1>";
        }
    );
    Route::get(
        '/dosen',
        function () {
            echo "<h1>Daftar Dosen</h1>";
        }
    );
    Route::get(
        '/karyawan',
        function () {
            echo "<h1>Daftar Karyawan</h1>";
        }
    );
});

Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
});

Route::get('/buku/1',function(){
    return "Buku ke-1";
});
Route::get('/buku/1',function(){
    return "Buku saya ke-1";
});
Route::get('/buku/1',function(){
    return "Buku kita ke-1";
});

Route::get('/buku/{a}',function($a){
    return "Buku ke-$a";
});
Route::get('/buku/{b}',function($b){
    return "Buku saya ke-$b";
});
Route::get('/buku/{c}',function($c){
    return "Buku kita ke-$c";
});

Route::get('mahasiswa/andi',function(){
    echo "Halaman mahasiswa andi";
});
Route::get('/mahasiswa/andi',function(){
    echo "Halaman mahasiswa andi";
});*/

/*Route::get('/home',function(){
    return view('halaman_home');
});

Route::get('/mahasiswa',function(){
    return View::make('mahasiswa');
});

Route::get('/mahasiswa',function(){
    return view('kampus.mahasiswa');
});

Route::get('/mahasiswa',function(){
    return view('kampus/mahasiswa');
});

Route::get('/mahasiswa',function(){
    return view('kampus.mahasiswa',["mahasiswa01"=>"Maulana Sultansyah"]);
});

Route::get('/mahasiswa',function(){
    return view('kampus.mahasiswa',[
        "mahasiswa01"=>"Indra Kenz",
        "mahasiswa02"=>"Doni Salmanan",
        "mahasiswa03"=>"Ulfi Rizkia",
        "mahasiswa04"=>"Deliana Putri",
    ]);
});

Route::get('/mahasiswa',function(){
    $arrMahasiswa = [
        "mahasiswa01"=>"Indra Kenz",
        "mahasiswa02"=>"Doni Salmanan",
        "mahasiswa03"=>"Ulfi Rizkia",
        "mahasiswa04"=>"Deliana Putri"
    ];
    return view('kampus.mahasiswa',$arrMahasiswa);
});

Route::get('/mahasiswa',function(){
    $arrMahasiswa = ["Doni Sadikin","Syadzwina Sahara","Deliana Putri","Indra Kenz"];
    return view('kampus.mahasiswa',['mahasiswa'=>$arrMahasiswa]);
});

Route::get('/mahasiswa',function(){
    return view('kampus.mahasiswa')->with('mahasiswa01','Risa Lestari');
});

Route::get('/mahasiswa',function(){
    $arrMahasiswa = ["Doni Sadikin","Syadzwina Sahara","Deliana Putri","Indra Kenz"];
    return view('kampus.mahasiswa')->with('mahasiswa',$arrMahasiswa);
});

Route::get('/mahasiswa',function(){
    return view('kampus.mahasiswa')->with('mahasiswa01','Doni Sadikin')
    ->with('mahasiswa02','Syadzwina Sahara') ->with('mahasiswa03','Deliana Putri');
});

Route::get('/mahasiswa',function(){
    return view('kampus.mahasiswa')
    ->with('mahasiswa01','Doni Sadikin')
    ->with('mahasiswa02','Syadzwina Sahara')
    ->with('mahasiswa03','Deliana Putri');
});

Route::get('/mahasiswa',function(){
    return view('kampus.mahasiswa')->withmahasiswa01('Khairul Almeer');
});

Route::get('/mahasiswa',function(){
    return view('kampus.mahasiswa')
    ->with('mahasiswa01','Doni Sadikin')
    ->with('mahasiswa02','Syadzwina Sahara')
    ->with('mahasiswa03','Deliana Putri');
});

Route::get('/mahasiswa',function(){
    $mahasiswa01 = "Indra Kenz",
    $mahasiswa01 = "Doni Salmanan",
    $mahasiswa01 = "Ulfi Rizkina",
    $mahasiswa01 = "Deliana Putri"
 return view('kampus.mahasiswa',compact("mahasiswa01","mahasiswa02",
 "mahasiswa03","mahasiswa04"));
});

Route::get('/mahasiswa',function(){
    $mahasiswa01 = "Indra Kenz",
    $mahasiswa01 = "Doni Salmanan",
    $mahasiswa01 = "Ulfi Rizkina",
    $mahasiswa01 = "Deliana Putri"
 return view('kampus.mahasiswa'_)->with(compact("mahasiswa01","mahasiswa02",
 "mahasiswa03","mahasiswa04"));
});*/

// Route::get('/mahasiswa',function(){
//     $nama = 'John Paijo Simatupang';
//     $nilai =75;
//     return view('mahasiswa',compact('nama','nilai'));
// });

// Route::get('/mahasiswa',function(){
//     $nama = '<u>Elon Musk Batubara</u>';
//     $nilai =75;
//     return view('mahasiswa',compact('nama','nilai'));
// });

//Route::get('/mahasiswa',function(){
//   $nama = 'Elon Musk Batubara';
//   $nilai =0;
//    return view('mahasiswa',compact('nama','nilai'));
//});

//Route::get('/mahasiswa', function () { 
//    $nama = 'Vladimir Putin Harahap'; 
//    $nilai = [80,64,30,76,95]; 
//    return view('mahasiswa',compact('nama','nilai')); 
//    }); 

// Router::get('mahasiswa',function () {
//     $nama = 'Tya Kirana Putri';
//     $nilai = [80,64,30,76,95];
//     return view('mahasiswa',compact('nama','nilai'));
// });

//Route::get('mahasiswa', function () {
//   $arrMahasiswa = ["Luhut Panjaitan", "Dokowi", "Vladimir Putin", "Lisa Permata"];
// return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
//});

//Route::get('dosen', function () {
    //$arrDosen = ["Maya Fitrianti, M.M.", "Prof. Silvia Nst, M.Farm.", "Dr. Umar Agustinus", 
    //"Dr. Syahrial, M.Kom."];
    //return view('dosen')->with('dosen', $arrDosen);
//});
//Route::get('gallery', function () {
    //return view('gallery');
//});

Route::get('admin',function() {
    return view('admin');
});