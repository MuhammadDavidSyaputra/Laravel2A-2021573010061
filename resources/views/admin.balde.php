<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>
<body>
    
<div class="container text-center mt-3 p-4 bg-white">
    <h1>Halaman Admin</h1>
    <div class="row">
        <div class="col-12">

        @component('layout.alert') 
        @slot('class') warning 
        @end slot 100 data mahasiswa perlu diperbaiki 
        @end component 

        @component('layout.alert') 
        @slot('class') 
        danger @endslot Hari ini deadline laporan perjalanan dinas! 
        @endcomponent 
        
        @component('layout.alert')
        @slot('class')
        success @endslot Bulan depan cuti panjang...
        @endcomponent 

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bund le.min.js" integrity="sha384-w76AqPfDkMBDXo30j515gez6pr3x5M1Q1ZAGC+nuZB+EYdgRZgiwxhTBTkF7C XvN" crossorigin="anonymous"></script> 

</body>
</html>