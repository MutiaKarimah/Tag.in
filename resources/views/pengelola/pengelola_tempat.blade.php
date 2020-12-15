@extends('pengelola/layout')

@section('title', 'Pengelola Tempat')

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
                    @foreach($data as $val)
                    <tr>
                        <td>{{$val->IDtempat}}</td>
                        <td>{{$val->IDpengelola}}</td>
                        <td>{{$val->nama_tempat}}</td>
                        <td>{{$val->deskripsi_tempat}}</td>
                        <td>{{$val->dokumentasi_tempat}}</td>
                        <td>{{$val->kapasitas}}</td>
                        <td>{{$val->status}}</td>
                        <td>{{$val->biaya}}</td>
                        <td>
                            <a href="{{url('/pengelolatempat/edit/')}}" class="btn btn-inline btn-warning-outline">Edit
                            </a>                                    
                            <a href="{{url('/pengelolatempat/delete/')}}" class="btn btn-inline btn-danger-outline">Delete
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