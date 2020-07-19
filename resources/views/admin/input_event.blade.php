@extends('layouts/master_admin')
@section('content')

@if(session()->has('status'))
<div class="alert alert-warning" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@endif


<div class="container">
    <center>
        <h1 style="margin-bottom:70px;">INPUT EVENT</h1>
    </center>
    <form action="post_event" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Input</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Judul</th>
                    <td>
                        {{ csrf_field() }}


                        <div class="input-group mb-1 col-lg-5">
                            <input type="text" name="judul" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default" required>

                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Background</th>
                    <td>
                        <input type="file" name="thumbnail" class="ml-2" required>

                    </td>
                </tr>

                <tr>
                    <th scope="row">Lokasi</th>
                    <td>
                    <div class="input-group mb-1 col-lg-5">
 
                    <input type="text" name="lokasi" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default" required>
                    </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Kapasitas</th>
                    <td>
                    <div class="input-group mb-1 col-lg-5">
 
                    <input type="text" name="kapasitas" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default" required>
                    </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Harga</th>
                    <td>
                    <div class="input-group mb-1 col-lg-5">
 
                    <input type="number" name="harga" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default" required>
                    </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Jadwal</th>
                    <td>
                    <div class="input-group mb-1 col-lg-5">
 
                    <input type="date" name="jadwal" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default" required>
                    </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Mulai pembelian tiket</th>
                    <td>
                    <div class="input-group mb-1 col-lg-5">
 
                    <input type="date" name="start_register" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default" required>
                    </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Selesai pembelian tiket</th>
                    <td>
                    <div class="input-group mb-1 col-lg-5">
 
                    <input type="date" name="end_register" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default" required>
                    </div>
                    </td>
                </tr>
                <trheight="400px">
                    <th scope="row">Deskripsi</th>
                    <td><textarea name="deskripsi" style="height: 500px;width:100%;" required></textarea>
                    </td>
                    </tr>
                    
            </tbody>
        </table>
        <center>
            <button type="submit" class="btn btn-outline-danger px-2">
                <h3>submit</h3>
            </button>
        </center>

    </form>
</div>

@endsection