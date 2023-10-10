@extends('Layout.master')

@section('title', $title)

@section('content')
    <br>
    <table>
        <thead>
            <th>ID</th>
            <th>Nama Pemain</th>
            <th>Nomor Punggung</th>
            <th>Posisi</th>
        </thead>
        <tbody>
            @foreach($data as $pemain)
                <tr>
                    <td>{{$pemain -> id}}</td>
                    <td>{{$pemain -> nama_pemain}}</td>
                    <td>{{$pemain -> no_punggung}}</td>
                    <td>{{$pemain -> posisi}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection`