<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/gyms/index', function () {
    return view('gyms.index', [
    'kelas' => [
        [
            'no' => 1,
            'gambar' => asset('img/gambar1.png'),
            "nama" => "Body Combat",
            'instruktur' => 'Charli',
            'ruang' => 'Kelas A',
            'rating' => '4'
        ],
        [
            'no' => 2,
            'gambar' => asset('img/gambar2.jpg'),
            "nama" => "Bungee",
            'instruktur' => 'Ayas',
            'ruang' => 'Kelas B',
            'rating' => '3'
        ],
        [
            'no' => 3,
            'gambar' => asset('img/gambar3.jpg'),
            "nama" => "Yoga",
            'instruktur' => 'Bobob',
            'ruang' => 'Kelas C',
            'rating' => '4'
        ],
        [
            'no' => 4,
            'gambar' => asset('img/gambar4.jpeg'),
            "nama" => "Boxing",
            'instruktur' => 'Tio',
            'ruang' => 'Kelas D',
            'rating' => '5'
        ]
    ]
    ]);
});

Route::get('/gyms/presensi', function () {
    return view('gyms.presensi', [
    'instruktur' => 'Catherine',
    'ruang' => 'Kelas B',
    'totalMember' => [
        [
           'nama' => 'Luffy',
           'email' => 'Luffy@gmail.com',
           'noTelp' => '08123456789',
           'jenisKartu' => 'Gold',
           'metodePembayaran' => 'Hutang Teman',
        ],
        [
           'nama' => 'Zoro',
           'email' => 'Zoro@gmail.com',
           'noTelp' => '08223456789',
           'jenisKartu' => 'Silver',
           'metodePembayaran' => 'Langsung Bayar',
        ],
        [
            'nama' => 'Sanji',
            'email' => 'Sanji@gmail.com',
            'noTelp' => '08323456789',
            'jenisKartu' => 'Black',
            'metodePembayaran' => 'Hutang Teman',
        ],
        [
            'nama' => 'Jimbe',
            'email' => 'Jimbe@gmail.com',
            'noTelp' => '08423456789',
            'jenisKartu' => 'Black',
            'metodePembayaran' => 'Shoppe pay later',
        ],
        [
            'nama' => 'Usop',
            'email' => 'Sanji@gmail.com',
            'noTelp' => '08623456789',
            'jenisKartu' => 'Gold',
            'metodePembayaran' => 'Hutang Teman',
        ],
        [
            'nama' => 'Brock',
            'email' => 'Brock@gmail.com',
            'noTelp' => '08133456789',
            'jenisKartu' => 'Silver',
            'metodePembayaran' => 'Shoppe pay later',
        ],
    ],
    'rating' => '5',
    'tanggal' => date('l, d F Y'),
    ]);
});
