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
<br>
<center>
<h1 > Event </h1>
</center>

<a href="input_event"class="btn btn-warning ">
  Tambah Event
</a>
<div class="row pt-4">
@foreach($event as $events)
<a href="detail_event/{{$events->id}}">
    <div class="col-lg-4">
        <div class="card m-2" >
            <img class="card-img-top" src="../../{{$events->thumbnail}}" style="height:300px;" alt="Card image cap">
            <div class="card-body" style="height:50px;">
                <h5 class="card-title">{{$events->judul}} </h5>
            </div>
            <div class="card-body">
                <a href="edit_event/{{$events->id}}" class="card-link">Edit</a>
                <a href="delete_event/{{$events->id}}" class="card-link" onclick="myFunction()">Delete</a>
            </div>
        </div>
    </div>
</a>
@endforeach
</div>

<script>
function myFunction() {
  confirm("Yakin ingin hapus artikel ini ?");
}
</script>
@endsection