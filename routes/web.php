<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Models\produk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/', [ProdukController::class, 'index']);
// route:: get('/produk/edit/{{$id}}', [ProdukController::class, 'edit']);
// Route::resource('produk', ProdukController::class);
// Route::resource('kategori', KategoriController::class);

//buat 2 routes baru
//1. /blog, 2 artikel
//2. contact, emai/sosmed



Route::get('/dashboard', function () {
    return view('Dashboard', ['title' => 'Daftar Pengajuan'] );
});

Route::get('/jurusan', function () {
    return view('jurusan', ['title' => 'Halaman Jurusan']);
});


Route::get('/posts', function(){
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'title' => 'Artikel 1',
            'author' => 'Eval Putra Parasdika',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia.'
        ],
        [
            'title' => 'Artikel 2',
            'author' => 'Eval Putra Parasdika',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia. ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia '
        ]
    ]]);
});

Route::get('/prodi', function(){
    return view('prodi', ['title' => 'Program Studi']);
});

Route::get('/mahasiswa', function(){
    return view('mahasiswa', ['title' => 'Daftar Mahasiswa']);
});  

Route::get('/staff', function(){
    return view('staff', ['title' => 'Daftar Staff']);
});  

Route::get('/form-mahasiswa', function(){
    return view('form-mahasiswa', ['title' => 'Form Input Mahasiswa']);
});  

Route::get('/form-staff', function(){
    return view('form-staff', ['title' => 'Form Input Staff']);
});

Route::get('/form-prodi', function(){
    return view('form-prodi', ['title' => 'Form Input Prodi']);
});  

Route::get('/', function(){
    return view('login', ['title' => 'Form Input Prodi']);
});  

Route::get('/form-jurusan', function(){
    return view('form-jurusan', ['title' => 'Form Input Jurusan']);
});  

Route::get('/form-pengajuan', function(){
    return view('form-pengajuan', ['title' => 'Form Pengajuan Cuti']);
});

Route::get('/riwayat', function(){
    return view('riwayat', ['title' => 'Riwayat Cuti Mahsiswa']);
});  