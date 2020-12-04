@extends('pengguna/layout')

@section('title', 'Detail Tempat')

@section('container')

<div class="main-textgrids">
    <div class="container">
        <div class="wthree_head_section">
            <h3 class="w3l_header">Detail <span>Tempat</span></h3>
            <p></p>
        </div>
        <div class="statements">
            <div class="col-md-5 facts">
                <img src="images/1.jpg" alt=" " />
            </div>
                <h4>{{$dat->IDtempat}}</h4>
            <div class="col-md-7 mission">
                <h4>{{$dat->nama_tempat}}</h4>
                <p>{{$dat->deskripsi_tempat}}</p>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection