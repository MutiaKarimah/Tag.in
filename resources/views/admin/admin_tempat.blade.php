@extends('admin/layout')

@section('title', 'Admin Tempat')

@section('container')
        <div class="bs-docs-example">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Tempat</th>
                        <th>ID Pengelola</th>
                        <th>Nama Tempat</th>
                        <th>Deskripsi</th>
                        <th>Dokumentasi</th>
                        <th>Kapasitas</th>
                        <th>Status</th>
                        <th>Biaya</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $res)
                    <tr>
                        <td>{{$res->IDtempat}}</td>
                        <td>{{$res->IDpengelola}}</td>
                        <td>{{$res->nama_tempat}}</td>
                        <td>{{$res->deskripsi_tempat}}</td>
                        <td>{{$res->dokumentasi_tempat}}</td>
                        <td>{{$res->kapasitas}}</td>
                        <td>{{$res->status}}</td>
                        <td>{{$res->biaya}}</td>
                        <td>
                            <a href="{{url('/admin_tempat/edit/')}}" class="btn btn-inline btn-warning-outline">Edit
                            </a>                                    
                            <a href="{{url('/admin_tempat/delete/')}}" class="btn btn-inline btn-danger-outline">Delete
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