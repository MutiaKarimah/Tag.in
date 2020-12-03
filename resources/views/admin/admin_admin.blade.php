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
                    <tr>
                        <td>1</td>
                        <td>Azka Azka Azka</td>
                        <td>xxxxxxxx</td>
                        <td>Edit | Delete</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mutia Mutia Mutia</td>
                        <td>xxxxxxxx</td>
                        <td>Edit | Delete</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Felia Felia Felia</td>
                        <td>xxxxxxxx</td>
                        <td>Edit | Delete</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="clearfix"> </div>
        </div>

@endsection