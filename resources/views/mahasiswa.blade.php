<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center p-4 bg-white">
    <h1 class="mb-3">Data Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6 m-auto">
        <ol class="list-group">
            @forelse($mahasiswa as $val)
            <li class="list-group-item">{{$val}}</li>
            @empty
            <div class="alert alert-dark d-inline-block">Tidak Ada Data...</div>
            @endforelse         
        </ol>
        </div>
    </div>
    </div>

</body>
</html>