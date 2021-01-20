{{-- <div class="card">
    <a href="{{ $product->path() }}" class="image">
        <img src="/images/laptop.jpg">
    </a>
    <div class="content">
        <a href="{{ $product->path() }}" class="header">{{ $product->name }}</a>
        <div class="meta">
            <span class="date">Coworker</span>
        </div>
        <div class="description">
            {{ $product->details }}
        </div>
    </div>
    <div class="extra content">
        <span class="right floated">
            Price {{ $product->present_price }}
        </span>
        <span>
            <i class="user icon"></i>
            35 Friends
        </span>
    </div>
</div> --}}
{{-- <div class="col_1_of_single1 span_1_of_single1">
    <a href="{{ $product->path() }}">
        <img src="/images/laptop.jpg" class="img-responsive" alt=""/>
        <h3>parum clari</h3>
        <p>Duis autem vel eum iriure</p>
        <h4>Rs.399</h4>
    </a>
</div> --}}
{{-- <div class="col-md-4">
    <a href="{{ $product->path() }}">
        <img src="images/laptop.jpg" class="img-responsive" alt=""/>
        <h4>{{ $product->name }}</h4>
		<p>{{ $product->details }}</p>
        <span class="btn5">{{ $product->price }}</span>
    </a>
</div> --}}
<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class=""><img src="{{asset('images/laptop.jpg')}}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-body">
            <h4>{{ $product->name }}</h4>
            <p>{{ $product->details }}</p>
            <p>{{ $product->price }} F cfa</p>
        </div>
        <a href="{{ $product->path() }}" class="btn btn-success btn-block">
            <div class=" panel-heading">Voir les détails du produit</div>
        </a>
    </div>
</div>

{{-- <ul class="grid_2">
    <a href="single.html"><li><img src="images/pic2.png" class="img-responsive" alt=""/>
        <span class="btn5">$120</span>
        <p>Bikroy Tshirt - Roundneck</p>
    </li></a>
    <a href="single.html"><li><img src="images/pic3.png" class="img-responsive" alt=""/>
        <span class="btn5">$340</span>
        <p>Park Tshirt - Partygrandd</p>
    </li></a>
    <a href="single.html"><li><img src="images/pic4.png" class="img-responsive" alt=""/>
        <span class="btn5">$250</span>
        <p>Gray Tshirt Roundneckdd</p>
    </li></a>
    <a href="single.html"><li><img src="images/pic5.png" class="img-responsive" alt=""/>
        <span class="btn5">$378</span>
        <p>Marivo Tshirt - Roundneck</p>
    </li></a>
    <a href="single.html"><li class="last1"><img src="images/pic6.png" class="img-responsive" alt=""/>
        <span class="btn5">$428</span>
        <p>Strict TshirtSoft, Pure Cotton</p>
    </li></a>
    <div class="clearfix"> </div>
</ul> --}}
