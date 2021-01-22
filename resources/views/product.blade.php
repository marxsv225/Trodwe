@extends('layouts.app')

@section('title', $product->name)

@section('content')

    <div class="content-box">
        <div class="col-md-12">
            <div class="alert alert-info" style="margin-top:20px;">
                <a href="{{ route('home') }}" class="section">Home</a>
                <i class="right angle icon divider"> > </i>
                <a href="{{ route('shop.index') }}" class="section">Shop</a>
                <i class="right angle icon divider"> > </i>
                <span class="active section">{{ $product->name }}</span>
            </div>
        </div>
    </div>
{{-- 
    <div class="ui vertical segment product">
        <div class="ui stackable grid container">
            <div class="row">

                <div class="six wide column">
                    <img src="/images/laptop.jpg" class="ui large bordered rounded image">
                </div>

                <div class="ten wide right floated column">
                    <h1 class="ui header">{{ $product->name }}</h1>
                    <p class="lead">{{ $product->details }}</p>

                    <h1 class="ui green header">{{ $product->present_price }}</h2>

                    <div class="ui product-content">
                        {{ $product->description }}
                    </div>
                    
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">

                        <button class="ui button" type="submit">
                            <i class="shopping cart icon"></i>
                            Ajouter au panier
                        </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    @include('partials.might-like') --}}


<div class="content_box">
	<div class="men">
	  <div class="single_top">
	       <div class="col-md-9 single_right">
	   	       <div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" width="300" src="/images/laptop.jpg" class="img-responsive" />
									{{-- <img class="etalage_source_image" width="150" src="/images/laptop.jpg" class="img-responsive" title="" /> --}}
								</a>
							</li>
							{{-- <li>
								<img class="etalage_thumb_image" width="150" src="/images/laptop.jpg" class="img-responsive" />
								<img class="etalage_source_image" width="150" src="/images/laptop.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" width="150" src="/images/laptop.jpg" class="img-responsive"  />
								<img class="etalage_source_image" width="150" src="/images/laptop.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" width="150" src="/images/laptop.jpg" class="img-responsive"  />
								<img class="etalage_source_image" width="150" src="/images/laptop.jpg"class="img-responsive"  />
							</li> --}}
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				    <h1>{{ $product->name }}</h1>
				    <p class="m_5">{{ $product->details }} <span class="reducedfrom">{{ $product->present_price }}</span> <a href="#">click for offer</a></p>
				    <div class="btn_form">
						<form action="{{ route('cart.store') }}" method="POST">
                            @csrf

                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">

                            <button class="btn btn-success" type="submit">
                                <i class="shopping cart icon"></i>
                                Ajouter au panier
                            </button>
                        </form>
					 </div>
					 <span class="m_link"><a href="#">Connectez-vous pour ajouter à votre liste favoris</a> </span>
					 <p class="m_text2">{{ $product->description }}</p>
				  </div>
				  <div class="clearfix"></div>	
       </div>
       <div class="col-md-3">
      	<!-- FlexSlider -->
              <section class="slider_flex">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="{{asset('images/lap1.jpg')}}" class="img-responsive" alt="1"/></li>
						<li><img src="{{asset('images/lap4.jpg')}}" class="img-responsive" alt="2"/></li>
						<li><img src="{{asset('images/lap5.jpg')}}" class="img-responsive" alt="3"/></li>
						<li><img src="{{asset('images/laptop.jpg')}}" class="img-responsive" alt="4"/></li>
				    </ul>
				  </div>
	          </section>
<!-- FlexSlider -->
      </div>
      <div class="clearfix"> </div>
     </div>
       <div class="toogle">
     	<h2>Product Details</h2>
     	<p class="m_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
     </div>
        <div class="single_span_3">
                @include('partials.might-like')
            <div class="clearfix"></div>
        </div>
    </div>

@endsection
