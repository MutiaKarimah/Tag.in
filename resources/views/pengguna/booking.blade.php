@extends('pengguna/layout')

@section('title', 'Booking')

@section('container')

<!-- main-section -->
<div class="head agile">
	       <div class="wthree_head_section">
				<h3 class="w3l_header">Booking <span>Form</span></h3>
			</div>
		<div class="login w3">
            <div class="login-top agileits">
                <h3>Silakan isi data berikut ini!</h3>
                <div class="w3layouts_main_grid">
                    <form action="/api/reservasi" method="post" id="Booking1" class="w3_form_post" enctype="multipart/form-data">
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <div class="agileits_grid">
                                <h5>Nama Tempat</h5>
                                    <input type="text" placeholder="ex : gedung bale santika" required="" value="{{$book->nama_tempat}}"readonly>
                            </div>
                        </div>
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <div class="agileits_grid">
                                <input type="hidden" name="IDtempat" required="" value="{{$book->IDtempat}}"readonly>
                        </div>
                        </div>
                        <div class="clear"></div>
                        <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                            <div class="agileinfo_grid">
                            <h5>Check In &amp; Date *</h5>

                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <input class="date" id="datepicker" name="tanggal_reservasi" type="text" value="yyyy/mm/dd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2016/08/13';}" required="">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                            <div class="agileits_w3layouts_grid">
                                <h5>Lama Reservasi (Hari)</h5>
                                    <input id="lama_reservasi" type="number" name="lama_reservasi" placeholder="" required="">
                            </div>
                        </div>
                        <div class="clear"></div>
                        {{-- <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                            <div class="agileinfo_grid">
                            <h5>Check Out &amp; Date *</h5>

                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <input class="date" id="datepicker1" name="Text" type="text" value="yyyy/mm/dd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div> --}}
                        <div class="w3_main_grid">

                            <div class="w3_main_grid_right">
                                <input type="submit" value="Book" href="{{url('#')}}">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
		</div>
		<div class="clear"></div>
	</div>
<!-- //main-section -->

@endsection