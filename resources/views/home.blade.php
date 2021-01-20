@extends('layouts.app')

@section('content')
    
    <div class="grid_1">
		<div class="col-md-3 banner_left">
			<img src="images/laptop.jpg" class="img-responsive" alt=""/>
			<div class="banner_desc">
				<h1>Lenovo </h1>
				<h2>Inspire 18900 Fc</h2>
				<h5>900 000 Fcfa
					</h5>
			    <a href="#" class="btn1 btn4 btn-1 btn1-1b">Panier</a>
			</div>
		</div>
		<div class="col-md-9 banner_right">
			 <!-- FlexSlider -->
              <section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/lap3.jpg" alt=""/></li>
						<li><img src="images/lap4.jpg" alt=""/></li>
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
            @foreach ($products as $product)

                @include('partials.product')
            
            @endforeach

            <center><button type="button" class="btn btn-primary btn-lg">Voir les autres produits</button></center>
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
		      		<h3>Paul Slim Fit Men
						Roundneck
						T-Shirt</h3>
                  <h4>$156</h4>
                  <p>Offer Available till Sunday 12 Nov 2014.</p>
                  <a href="#" class="btn1 btn6 btn-1 btn1-1b">Add To Cart</a>
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
