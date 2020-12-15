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
                <ul class="ab">
                    <li><a data-toggle="modal"><i class="fa fa-angle-right"></i> Kapasitas : {{$dat->kapasitas}} orang</a></li>
                    <li><a data-toggle="modal"><i class="fa fa-angle-right"></i> Status : {{$dat->status}}</a></li>
                    <li><a data-toggle="modal"><i class="fa fa-angle-right"></i> Biaya : Rp. {{$dat->biaya}}</a></li>
                    <li><a href="/detail/{{$dat->IDtempat}}/booking"> Book Now</a></li>
                </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection