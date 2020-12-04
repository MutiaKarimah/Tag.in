@extends('admin/layout')

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
                    @foreach($users as $res)
                    <tr>
                        <td>{{$res->IDreservasi}}</td>
                        <td>{{$res->IDatempat}}</td>
                        <td>{{$res->IDpengguna}}</td>
                        <td>{{$res->lama_reservasi}}</td>
                        <td>{{$res->tanggal_reservasi}}</td>
                        <td>
                            <a href="{{url('/admin_reservasi/edit/')}}" class="btn btn-inline btn-warning-outline">Edit
                            </a>                                    
                            <a href="{{url('/admin_reservasi/delete/')}}" class="btn btn-inline btn-danger-outline">Delete
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