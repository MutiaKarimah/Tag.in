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
                    <tr>
                        <td>1</td>
                        <td>azka</td>
                        <td>xxxxxxxx</td>
                        <td>Azka Azka Azka</td>
                        <td>000000000000</td>
                        <td>Edit | Delete</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>mutia</td>
                        <td>xxxxxxxx</td>
                        <td>Mutia Mutia Mutia</td>
                        <td>000000000000</td>
                        <td>Edit | Delete</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>felia</td>
                        <td>xxxxxxxx</td>
                        <td>Felia Felia Felia</td>
                        <td>000000000000</td>
                        <td>Edit | Delete</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="clearfix"> </div>
        </div>

@endsection