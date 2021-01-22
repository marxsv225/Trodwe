


    <div class="header_top">
		  <div class="col-sm-9 h_menu4">
				<ul class="megamenu skyblue">
					  <li class="active grid"><a href="{{ route('shop.index') }}">La Boutique</a></li>	
				      <li><a class="color1" href="#">A propos</a></li>
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
                    <a href="cart.html"><i class="bag_left"> 
						<span class="badge" style="float:right">
							@if(Cart::instance('default')->count())
								{{ Cart::instance('default')->count() }}
							@endif
						</span> 
					</i></a>
                    <a href="cart.html"><li class="bag_right"><p>20500 F</p> </li></a>
                    <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
            </div>
            </div>
            <div class="clearfix"></div>
        </div>