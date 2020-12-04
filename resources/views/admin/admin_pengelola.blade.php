@extends('admin/layout')

@section('title', 'Data Pengelola')

@section('container')
        <div class="bs-docs-example">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Pengelola</th>
                        <th>ID Tempat</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $val)
                    <tr>
                        <td>{{$val->IDpengelola}}</td>
                        <td>{{$val->IDTempat}}</td>
                        <td>{{$val->username}}</td>
                        <td>{{$val->password}}</td>
                        <td>
                            <a href="{{url('/pengelola/edit/')}}" class="btn btn-inline btn-warning-outline">Edit
                            </a>                                    
                            <a href="{{url('/pengelola/delete/')}}" class="btn btn-inline btn-danger-outline">Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    {{-- <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>Mutia Mutia Mutia</td>
                        <td>xxxxxxxx</td>
                        <td>Edit | Delete</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>3</td>
                        <td>Felia Felia Felia</td>
                        <td>xxxxxxxx</td>
                        <td>Edit | Delete</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
        <div class="clearfix"> </div>
        </div>

@endsection