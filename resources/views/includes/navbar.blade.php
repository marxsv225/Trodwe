<!-- Following Menu -->
{{-- <div class="ui grid top fixed large menu">
    <div class="ui container">
        <a class="active item" href="{{ route('home') }}">TODWE</a>
        <a class="item" href="{{ route('shop.index') }}">Boutique</a>
        <a class="item">A propos</a>
        <a class="item">Blog</a>

        <div class="right menu">
            <div class="item">
                <div class="ui transparent icon input">
                  <i class="search icon"></i>
                  <input type="text" placeholder="Search">
                </div>
            </div>

            <div class="item">
                <a class="ui button" href="{{ route('cart.index') }}">
                    <i class="shopping cart icon"></i> Panier

                    @if(Cart::instance('default')->count())
                        <div class="floating ui red circular label">
                            {{ Cart::instance('default')->count() }}
                        </div>
                    @endif
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="active item">Home</a>
    <a class="item">Work</a>
    <a class="item">Company</a>
    <a class="item">Careers</a>
    <a class="item">Login</a>
    <a class="item">Signup</a>
</div> --}}


{{-- <div class="header_top">
		  <div class="col-sm-9 h_menu4">
				<ul class="megamenu skyblue">
					  <li class="active grid"><a class="color8" href="{{ route('shop.index') }}">New</a></li>	
				      <li><a class="color1" href="#">Men</a><div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Accessories</a></li>
										<li><a href="men.html">Bags</a></li>
										<li><a href="men.html">Caps & Hats</a></li>
										<li><a href="men.html">Hoodies & Sweatshirts</a></li>
										<li><a href="men.html">Jackets & Coats</a></li>
										<li><a href="men.html">Jeans</a></li>
										<li><a href="men.html">Jewellery</a></li>
										<li><a href="men.html">Jumpers & Cardigans</a></li>
										<li><a href="men.html">Leather Jackets</a></li>
										<li><a href="men.html">Long Sleeve T-Shirts</a></li>
										<li><a href="men.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Shirts</a></li>
										<li><a href="men.html">Shoes, Boots & Trainers</a></li>
										<li><a href="men.html">Shorts</a></li>
										<li><a href="men.html">Suits & Blazers</a></li>
										<li><a href="men.html">Sunglasses</a></li>
										<li><a href="men.html">Sweatpants</a></li>
										<li><a href="men.html">Swimwear</a></li>
										<li><a href="men.html">Trousers & Chinos</a></li>
										<li><a href="men.html">T-Shirts</a></li>
										<li><a href="men.html">Underwear & Socks</a></li>
										<li><a href="men.html">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="men.html">Levis</a></li>
										<li><a href="men.html">Persol</a></li>
										<li><a href="men.html">Nike</a></li>
										<li><a href="men.html">Edwin</a></li>
										<li><a href="men.html">New Balance</a></li>
										<li><a href="men.html">Jack & Jones</a></li>
										<li><a href="men.html">Paul Smith</a></li>
										<li><a href="men.html">Ray-Ban</a></li>
										<li><a href="men.html">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
					</li>
				    <li class="grid"><a class="color2" href="#">Women</a>
					  <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Accessories</a></li>
										<li><a href="men.html">Bags</a></li>
										<li><a href="men.html">Caps & Hats</a></li>
										<li><a href="men.html">Hoodies & Sweatshirts</a></li>
										<li><a href="men.html">Jackets & Coats</a></li>
										<li><a href="men.html">Jeans</a></li>
										<li><a href="men.html">Jewellery</a></li>
										<li><a href="men.html">Jumpers & Cardigans</a></li>
										<li><a href="men.html">Leather Jackets</a></li>
										<li><a href="men.html">Long Sleeve T-Shirts</a></li>
										<li><a href="men.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Shirts</a></li>
										<li><a href="men.html">Shoes, Boots & Trainers</a></li>
										<li><a href="men.html">Shorts</a></li>
										<li><a href="men.html">Suits & Blazers</a></li>
										<li><a href="men.html">Sunglasses</a></li>
										<li><a href="men.html">Sweatpants</a></li>
										<li><a href="men.html">Swimwear</a></li>
										<li><a href="men.html">Trousers & Chinos</a></li>
										<li><a href="men.html">T-Shirts</a></li>
										<li><a href="men.html">Underwear & Socks</a></li>
										<li><a href="men.html">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="men.html">Levis</a></li>
										<li><a href="men.html">Persol</a></li>
										<li><a href="men.html">Nike</a></li>
										<li><a href="men.html">Edwin</a></li>
										<li><a href="men.html">New Balance</a></li>
										<li><a href="men.html">Jack & Jones</a></li>
										<li><a href="men.html">Paul Smith</a></li>
										<li><a href="men.html">Ray-Ban</a></li>
										<li><a href="men.html">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
				<li><a class="color4" href="404.html">Accessories</a></li>				
				<li><a class="color6" href="contact.html">Conact</a></li>
			  </ul> 
			</div>
			<div class="col-sm-3 header-top-right">
			     <div class="drop_buttons">
			  	   	<select class="drop-down "> 
				       <option value="1">Dollar</option>
				       <option value="2">Euro</option>
					</select>
   				    <select class="drop-down drop-down-in">
						<option value="1">English</option>
						<option value="2">French</option>
						<option value="3">German</option>
					</select>
   			       <div class="clearfix"></div>
   			    </div>
   			    <div class="register-info">
				    <ul>
						<li><a href="login.html">Login</a></li>
					</ul>
			    </div>
				<div class="clearfix"> </div>
   			 </div>
   			 <div class="clearfix"> </div>
	</div> --}}


    {{-- <div class="header_bootm">
		<div class="col-sm-4 span_1">
		  <div class="logo">
			<a href="{{ route('home') }}"><img src="images/logo.png" alt=""/></a>
		  </div>
		</div>
		<div class="col-sm-8 row_2">
		  <div class="header_bottom_right">
			<div class="search">
			  <input type="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
			  <input type="submit" value="">
	  		</div>
	  		<ul class="bag">
	  			<a href="cart.html"><i class="bag_left"> 
                    <a class="ui button" href="{{ route('cart.index') }}">
                        <i class="shopping cart icon"></i> Panier

                        @if(Cart::instance('default')->count())
                            <div class="floating ui red circular label">
                                {{ Cart::instance('default')->count() }}
                            </div>
                        @endif
                    </a>
                  
                  </i></a>
	  			<a href="cart.html"><li class="bag_right"><p>205.00 $</p> </li></a>
	  			<div class="clearfix"> </div>
	  		</ul>
	  		<div class="clearfix"> </div>
		   </div>
		</div>
		 <div class="clearfix"></div>
	</div> --}}


    {{-- <div class="header_top">
        <div class="col-sm-9 h_menu4">
            <ul class="megamenu skyblue">
                    <li class="active grid"><a class="color8" href="index.html">New</a></li>	
                    <li><a class="color1" href="{{ route('shop.index') }}">Men</a><div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <ul>
                                    <li><a href="men.html">Accessories</a></li>
                                    <li><a href="men.html">Bags</a></li>
                                    <li><a href="men.html">Caps & Hats</a></li>
                                    <li><a href="men.html">Hoodies & Sweatshirts</a></li>
                                    <li><a href="men.html">Jackets & Coats</a></li>
                                    <li><a href="men.html">Jeans</a></li>
                                    <li><a href="men.html">Jewellery</a></li>
                                    <li><a href="men.html">Jumpers & Cardigans</a></li>
                                    <li><a href="men.html">Leather Jackets</a></li>
                                    <li><a href="men.html">Long Sleeve T-Shirts</a></li>
                                    <li><a href="men.html">Loungewear</a></li>
                                </ul>	
                            </div>							
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <ul>
                                    <li><a href="men.html">Shirts</a></li>
                                    <li><a href="men.html">Shoes, Boots & Trainers</a></li>
                                    <li><a href="men.html">Shorts</a></li>
                                    <li><a href="men.html">Suits & Blazers</a></li>
                                    <li><a href="men.html">Sunglasses</a></li>
                                    <li><a href="men.html">Sweatpants</a></li>
                                    <li><a href="men.html">Swimwear</a></li>
                                    <li><a href="men.html">Trousers & Chinos</a></li>
                                    <li><a href="men.html">T-Shirts</a></li>
                                    <li><a href="men.html">Underwear & Socks</a></li>
                                    <li><a href="men.html">Vests</a></li>
                                </ul>	
                            </div>							
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Popular Brands</h4>
                                <ul>
                                    <li><a href="men.html">Levis</a></li>
                                    <li><a href="men.html">Persol</a></li>
                                    <li><a href="men.html">Nike</a></li>
                                    <li><a href="men.html">Edwin</a></li>
                                    <li><a href="men.html">New Balance</a></li>
                                    <li><a href="men.html">Jack & Jones</a></li>
                                    <li><a href="men.html">Paul Smith</a></li>
                                    <li><a href="men.html">Ray-Ban</a></li>
                                    <li><a href="men.html">Wood Wood</a></li>
                                </ul>	
                            </div>												
                        </div>
                        </div>
                    </div>
                </li>
                <li class="grid"><a class="color2" href="#">Women</a>
                    <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <ul>
                                    <li><a href="men.html">Accessories</a></li>
                                    <li><a href="men.html">Bags</a></li>
                                    <li><a href="men.html">Caps & Hats</a></li>
                                    <li><a href="men.html">Hoodies & Sweatshirts</a></li>
                                    <li><a href="men.html">Jackets & Coats</a></li>
                                    <li><a href="men.html">Jeans</a></li>
                                    <li><a href="men.html">Jewellery</a></li>
                                    <li><a href="men.html">Jumpers & Cardigans</a></li>
                                    <li><a href="men.html">Leather Jackets</a></li>
                                    <li><a href="men.html">Long Sleeve T-Shirts</a></li>
                                    <li><a href="men.html">Loungewear</a></li>
                                </ul>	
                            </div>							
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <ul>
                                    <li><a href="men.html">Shirts</a></li>
                                    <li><a href="men.html">Shoes, Boots & Trainers</a></li>
                                    <li><a href="men.html">Shorts</a></li>
                                    <li><a href="men.html">Suits & Blazers</a></li>
                                    <li><a href="men.html">Sunglasses</a></li>
                                    <li><a href="men.html">Sweatpants</a></li>
                                    <li><a href="men.html">Swimwear</a></li>
                                    <li><a href="men.html">Trousers & Chinos</a></li>
                                    <li><a href="men.html">T-Shirts</a></li>
                                    <li><a href="men.html">Underwear & Socks</a></li>
                                    <li><a href="men.html">Vests</a></li>
                                </ul>	
                            </div>							
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Popular Brands</h4>
                                <ul>
                                    <li><a href="men.html">Levis</a></li>
                                    <li><a href="men.html">Persol</a></li>
                                    <li><a href="men.html">Nike</a></li>
                                    <li><a href="men.html">Edwin</a></li>
                                    <li><a href="men.html">New Balance</a></li>
                                    <li><a href="men.html">Jack & Jones</a></li>
                                    <li><a href="men.html">Paul Smith</a></li>
                                    <li><a href="men.html">Ray-Ban</a></li>
                                    <li><a href="men.html">Wood Wood</a></li>
                                </ul>	
                            </div>												
                        </div>
                        </div>
                    </div>
            </li>
            <li><a class="color4" href="404.html">Accessories</a></li>				
            <li><a class="color6" href="contact.html">Conact</a></li>
            </ul> 
        </div>
        <div class="col-sm-3 header-top-right">
                <div class="drop_buttons">
                <select class="drop-down "> 
                    <option value="1">Dollar</option>
                    <option value="2">Euro</option>
                </select>
                <select class="drop-down drop-down-in">
                    <option value="1">English</option>
                    <option value="2">French</option>
                    <option value="3">German</option>
                </select>
                <div class="clearfix"></div>
            </div>
            <div class="register-info">
                <ul>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
	    </div>
        <div class="header_bootm">
		<div class="col-sm-4 span_1">
		  <div class="logo">
			<a href="{{ route('home') }}"><img src="/images/logo2.png" alt="LOGO"/></a>
		  </div>
		</div>
		<div class="col-sm-8 row_2">
		  <div class="header_bottom_right">
			<div class="search">
			  <input type="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
			  <input type="submit" value="">
	  		</div>
	  		<ul class="bag">
	  			<a href="cart.html"><i class="glyphicon glyphicon-basket bag_left"> </i></a>
	  			<a href="cart.html">
                  <li class="bag_right">
                    <p>
                        @if(Cart::instance('default')->count())
                            <div class="floating ui red circular label">
                                {{ Cart::instance('default')->count() }}
                            </div>
                        @endif
                    </p> 
                  </li>
                </a> --}}

                {{-- <a class="ui button" href="{{ route('cart.index') }}">
                    <i class="shopping cart icon"></i> Panier

                    @if(Cart::instance('default')->count())
                        <div class="floating ui red circular label">
                            {{ Cart::instance('default')->count() }}
                        </div>
                    @endif
                </a> --}}

	  			{{-- <div class="clearfix"> </div>
	  		</ul>
	  		<div class="clearfix"> </div>
		   </div>
		</div>
		 <div class="clearfix"></div>
	</div> --}}



    <div class="header_top">
		  <div class="col-sm-9 h_menu4">
				<ul class="megamenu skyblue">
					  <li class="active grid"><a href="{{ route('shop.index') }}">La Boutique</a></li>	
				      <li><a class="color1" href="#">A propos</a><div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Blog</a></li>
										<li><a href="men.html">Bags</a></li>
										<li><a href="men.html">Caps & Hats</a></li>
										<li><a href="men.html">Hoodies & Sweatshirts</a></li>
										<li><a href="men.html">Jackets & Coats</a></li>
										<li><a href="men.html">Jeans</a></li>
										<li><a href="men.html">Jewellery</a></li>
										<li><a href="men.html">Jumpers & Cardigans</a></li>
										<li><a href="men.html">Leather Jackets</a></li>
										<li><a href="men.html">Long Sleeve T-Shirts</a></li>
										<li><a href="men.html">Loungewear</a></li>
									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="men.html">Shirts</a></li>
										<li><a href="men.html">Shoes, Boots & Trainers</a></li>
										<li><a href="men.html">Shorts</a></li>
										<li><a href="men.html">Suits & Blazers</a></li>
										<li><a href="men.html">Sunglasses</a></li>
										<li><a href="men.html">Sweatpants</a></li>
										<li><a href="men.html">Swimwear</a></li>
										<li><a href="men.html">Trousers & Chinos</a></li>
										<li><a href="men.html">T-Shirts</a></li>
										<li><a href="men.html">Underwear & Socks</a></li>
										<li><a href="men.html">Vests</a></li>
									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="men.html">Levis</a></li>
										<li><a href="men.html">Persol</a></li>
										<li><a href="men.html">Nike</a></li>
										<li><a href="men.html">Edwin</a></li>
										<li><a href="men.html">New Balance</a></li>
										<li><a href="men.html">Jack & Jones</a></li>
										<li><a href="men.html">Paul Smith</a></li>
										<li><a href="men.html">Ray-Ban</a></li>
										<li><a href="men.html">Wood Wood</a></li>
									</ul>
								</div>
							</div>
						  </div>
						</div>
					</li>
				<li><a class="color6" href="#">Blog</a></li>
				<li><a class="color6" href="contact.html">Conact</a></li>
			  </ul>
			</div>
			<div class="col-sm-3 header-top-right">
			     <div class="drop_buttons">
			  	   	<select class="drop-down ">
				       <option value="1">Dollar</option>
				       <option value="2">Euro</option>
				       <option value="2">F cfa</option>
					</select>
   				    <select class="drop-down drop-down-in">
						<option value="1">English</option>
						<option value="2">French</option>
						<option value="3">German</option>
					</select>
   			       <div class="clearfix"></div>
   			    </div>
   			    <div class="register-info">
				    <ul>
						<li><a href="login.html">Login</a></li>
					</ul>
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
                <input type="text" value="Votre mot clé" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Votre mot clé';}">
                <input type="submit" value="">
                </div>
                <ul class="bag">
                    <a href="cart.html"><i class="bag_left"> </i></a>
                    <a href="cart.html"><li class="bag_right"><p>20500 F</p> </li></a>
                    <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
            </div>
            </div>
            <div class="clearfix"></div>
        </div>