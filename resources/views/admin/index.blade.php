@extends('layouts/master_admin')
@section('title')
Order-Dashboard
@endsection
@section('judul')
Booking event
@endsection
@section('content')
<br><br>
<table id="example" class="display mt-4" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Code booking</th>
                <th>Event</th>
                <th>Tanggal</th>
                <!-- <th>Kapasitas</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($event as $events)
            <tr>
                <td>{{$events->nama}}</td>
                <td>{{$events->code_booking}}</td>
                <td>{{$events->judul}}</td>
                <td>{{$events->jadwal}}</td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
@endsection