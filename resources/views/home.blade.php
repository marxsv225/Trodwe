@extends('layouts.app')

@section('content')
    
    <div class="grid_1">
		<div class="col-md-3 banner_left">
			<img src="images/laptop.jpg" class="img-responsive" alt=""/>
			<div class="banner_desc">
				<h1>Lenovo </h1>
				<h2>Inspire 18900 Pcv</h2>
				<h5>900 000 Fcfa
					</h5>
			    <a href="#" class="btn1 btn4 btn-1 btn1-1b">+ Détails</a>
			</div>
		</div>
		<div class="col-md-9 banner_right">
			 <!-- FlexSlider -->
              <section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="{{asset('images/lap3.jpg')}}" alt="Visuel1"/></li>
						<li><img src="{{asset('images/lap4.jpg')}}" alt="visuel2"/></li>
						<img src="{{ asset('images/lap3.jpg') }}" class="img-responsive" alt=""/>
					</ul>
				  </div>
	          </section>
              <!-- FlexSlider -->
		</div>
		<div class="clearfix"></div>
	</div>
    <div class="content">
    <br/><br/>
    <div class="row content_box">
    
        <div class="grid_2">
			<div style="text-align:center; margin-bottom:20px "><h2>Nos produits en vedette <br/><span class="caret"></span></h2></div>
            @foreach ($products as $product)

                @include('partials.product')
            
            @endforeach

            <center><a  href="{{ route('shop.index') }}" class="btn btn-primary btn-lg">Voir les autres produits</a></center>
            <div class="clearfix"> </div>
        </div>
	    <div class="grid_3">
		<div class="col-md-6 box_2">
			<div class="section_group">
		      	<div class="col_1_of_2 span_1_of_2">
		      		<img src="images/lap1.jpg" class="img-responsive" alt=""/>
		        </div>
                <div class="col_1_of_2 span_1_of_2">
		      		<img src="images/lap5.jpg" class="img-responsive" alt=""/>
		        </div>
                <div class="clearfix"> </div>
            </div>
		</div>
		<div class="col-md-6">
			<div class="box_3">
			  <div class="col_1_of_2 span_1_of_2 span_3">
		      		<h3>Promo 50%</h3>
                  <h4>200 000 F</h4>
                  <p>Lorem Ipsummmmmmmmmm</p>
                  <a href="#" class="btn1 btn6 btn-1 btn1-1b">Ajouter au panier</a>
		        </div>
                <div class="col_1_of_2 span_1_of_2 span_4">
                   <div class="span_5">
		      		 <img src="images/pic9.png" class="img-responsive" alt=""/>
		      	    </div>
		        </div>
                <div class="clearfix"> </div>
            </div>
		</div>
		<div class="clearfix"> </div>
	</div>
    
@endsection
