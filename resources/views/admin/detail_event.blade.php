@extends('layouts/master_admin')
@section('content')


@foreach($event as $events)
<div class="row">
<div class="col-lg-4 mx-auto mt-4 mb-4" >
   <h1 class="d-flex justify-content-center">{{$events->judul}}</h1>
<img class="card-img-top" src="/../../{{$events->thumbnail}}" style="height:300px;" alt="Card image cap">

</div></div>
<p> {{$events->deskripsi}}
    </p>
@endforeach
@endsection