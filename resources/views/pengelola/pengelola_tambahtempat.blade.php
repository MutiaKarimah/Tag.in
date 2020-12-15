@extends('pengelola/layout')

@section('title', 'Tambah Tempat')

@section('container')

<!-- main-section -->
<div class="head agile">
<div class="wthree_head_section">
            <h3 class="w3l_header">Tambah Data <span>Tempat</span></h3>
        </div>
    <div class="login w3">
        <div class="login-top agileinfo">
            <h2>Silakan Masukkan Data Tempat</h2>
            <form method="POST" action="{{url('/pengelolatambahtempat/store')}}">
                @csrf
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>ID Pengelola</h5>
                        <div class="name">
                            <select class="mdb-select md-form" id="name" type="text" name="IDpengelola" placeholder="Masukkan ID Pengelola" autofocus >
                                @foreach($data as $pengelola)
                                    <option value="{{$pengelola->IDpengelola}}">{{ $pengelola->IDpengelola }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>ID Tempat</h5>
                        <div class="name">
                            <input id="name" type="text" name="IDtempat" placeholder="Masukkan ID Tempat" autofocus>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Nama Tempat</h5>
                        <div class="name">
                            <input id="name" type="text" name="nama_tempat" placeholder="Masukkan Nama Tempat" autofocus>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Deskripsi Tempat</h5>
                        <div class="name">
                            <input id="name" type="text" name="deskripsi_tempat" placeholder="Masukkan Deskripsi Tempat" autofocus>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Dokumentasi Tempat</h5>
                        <div class="name">
                            <input type='file'>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Kapasitas Tempat</h5>
                        <div class="name">
                            <input id="kapasitas" type="number" name="kapasitas" placeholder="Masukkan Kapasitas Tempat" autofocus>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                    <div class="agileits_grid">
                        <h5>Status</h5>
                        <input type="text" id="status" name="status" required="">
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Biaya Tempat (Rupiah)</h5>
                        <div class="name">
                            <input id="name" type="number" name="biaya" placeholder="Masukkan Biaya Tempat" autofocus>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="aitssubmitw3ls">
                    <input type="submit" name="submit" value="Tambah Tempat">
                </div>
            </form>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!-- //main-section -->

@endsection
