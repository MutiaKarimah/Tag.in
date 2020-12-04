@extends('admin/layout')

@section('title', 'Data Pengguna')

@section('container')
        <div class="bs-docs-example">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Pengguna</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama Lengkap</th>
                        <th>No. HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ses as $res)
                    <tr>
                        <td>{{$res->IDpengguna}}</td>
                        <td>{{$res->username}}</td>
                        <td>{{$res->password}}</td>
                        <td>{{$res->nama_lengkap}}</td>
                        <td>{{$res->nohp}}</td>
                        <td><a href="{{url('/admin_pengguna/edit/')}}" class="btn btn-inline btn-warning-outline">Edit
                            </a>                                    
                            <a href="{{url('/admin_pengguna/delete/')}}" class="btn btn-inline btn-danger-outline">Delete
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