@extends('pengelola/layout')

@section('title', 'Data Reservasi')

@section('container')
        <div class="bs-docs-example">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Reservasi</th>
                        <th>ID Tempat</th>
                        <th>ID Pengguna</th>
                        <th>Lama Reservasi</th>
                        <th>Tanggal Reservasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $val)
                    <tr>
                        <td>{{$val->IDreservasi}}</td>
                        <td>{{$val->IDtempat}}</td>
                        <td>{{$val->IDpengguna}}</td>
                        <td>{{$val->lama_reservasi}}</td>
                        <td>{{$val->tanggal_reservasi}}</td>
                        <td>
                            <a href="{{url('/pengelolareservasi/edit/')}}" class="btn btn-inline btn-warning-outline">Edit
                            </a>                                    
                            <a href="{{url('/pengelolareservasi/delete/')}}" class="btn btn-inline btn-danger-outline">Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="clearfix"> </div>
        </div>

@endsection