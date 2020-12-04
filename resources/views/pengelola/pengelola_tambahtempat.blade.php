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
            <form method="POST" action="#">
                @csrf
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Nama Tempat</h5>
                        <div class="name">
                            <input id="name" type="text" name="name" placeholder="Masukkan Nama Tempat" autofocus>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Deskripsi Tempat</h5>
                        <div class="name">
                            <input id="name" type="text" name="name" placeholder="Masukkan Deskripsi Tempat" autofocus>
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
                            <input id="name" type="number" name="name" placeholder="Masukkan Kapasitas Tempat" autofocus>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                    <div class="agileits_grid">
                        <h5>Status</h5>
                        <select id="category1" name="category1" required="">
                            <option value="category1">Not Booked</option>
                            <option value="category2">Booked</option>
                            <option value="category3">Coming Soon</option>
                        </select>
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Biaya Tempat (Rupiah)</h5>
                        <div class="name">
                            <input id="name" type="number" name="name" placeholder="Masukkan Biaya Tempat" autofocus>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="aitssubmitw3ls">
                    <input type="submit" name="submit" value="Input">
                </div>
            </form>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!-- //main-section -->

@endsection
