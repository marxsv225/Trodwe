


    <div class="header_top">
		  <div class="col-sm-9 h_menu4">
				<ul class="megamenu skyblue">
					  <li><a class="color7" href="{{ route('shop.index') }}">La Boutique</a></li>	
				      <li><a class="color7" href="#">A propos</a></li>
				<li><a class="color7" href="#">Blog</a></li>
				<li><a class="color7" href="#">Contact</a></li>
			  </ul>
			</div>
			<div class="col-sm-3 header-top-right">
   			    <div class="register-info text-right">
					   @if (auth()->user())
						<div class="drop_buttons">
							<a href="{{ route('myprofile') }}"><img class="card-img-top" src="{{ asset('storage/'.auth()->user()->avatar) }}" alt="Card image" style="width:30px"></a>
						</div>
					   @else
					   <ul>
							<li><a href="{{ route('login') }}">Connexion</a></li>
						</ul>
					   @endif
				    
			    </div>
				<div class="clearfix"> </div>
   			 </div>
   			 <div class="clearfix"> </div>
	    </div>
        <div class="header_bootm">
            <div class="col-sm-4 span_1">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{asset('images/logo2.png')}}" alt=""/></a>
            </div>
            </div>
            <div class="col-sm-8 row_2">
            <div class="header_bottom_right">
                <div class="search">
					@include('partials.search')
                </div>
                <ul class="bag">
                    <a href="{{ route('cart.index') }}"><i class="bag_left"> 
						<span class="label label-danger" style="float:right; font-size:18px">
							@if(Cart::instance('default')->count())
								{{ Cart::instance('default')->count() }}
							@endif
						</span> 
					</i></a>
                    <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
            </div>
            </div>
            <div class="clearfix"></div>
        </div>