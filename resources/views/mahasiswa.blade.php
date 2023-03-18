@include('layout.header')
    <div class="container text-center mt-3 p-4 bg-white">
        <hi class="mb-3">Data Mahasiswa</hi>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($mahasiswa as $val)
                    <li class="list-group-item">{{$val}}</li>
                    @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                    @forelse
                </ol>
            </div>
        </div>
    </div>
    @include('layout.footer')