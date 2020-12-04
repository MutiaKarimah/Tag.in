@extends('admin/layout')

@section('title', 'Data Admin')

@section('container')
        <div class="bs-docs-example">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Admin</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $res)
                    <tr>
                        <td>{{$res->IDadmin}}</td>
                        <td>{{$res->username}}</td>
                        <td>{{$res->password}}</td>
                        <td>
                            <a href="{{url('/admin/edit/')}}" class="btn btn-inline btn-warning-outline">Edit
                            </a>                                    
                            <a href="{{url('/admin/delete/')}}" class="btn btn-inline btn-danger-outline">Delete
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