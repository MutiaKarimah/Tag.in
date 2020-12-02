@extends('layout/user')

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
                    <form action="#" method="post" class="w3_form_post">
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <div class="agileits_grid">
                                <h5>Nama Tempat</h5>
                                    <input type="text" name="namatempat" placeholder="ex : gedung bale santika" required="">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                            <div class="agileinfo_grid">
                            <h5>Check In &amp; Date *</h5>

                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                            <div class="agileits_w3layouts_grid">
                                <h5>Lama Reservasi (Hari)</h5>
                                <select id="category1" name="category1" required="">
                                    <option value="category1">01</option>
                                    <option value="category2">02</option>
                                    <option value="category3">03</option>
                                    <option value="category4">04</option>
                                    <option value="category2">05</option>
                                    <option value="category3">06</option>
                                    <option value="category3">07</option>
                                    <option value="category3">08</option>
                                    <option value="category3">09</option>
                                    <option value="category3">10</option>
                                </select>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                            <div class="agileinfo_grid">
                            <h5>Check Out &amp; Date *</h5>

                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <input class="date" id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="w3_main_grid">

                            <div class="w3_main_grid_right">
                                <input type="submit" value="Search">
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