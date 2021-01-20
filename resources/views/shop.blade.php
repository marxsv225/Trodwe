@extends('layouts.app')

@section('content')

<div class="content-box">

    <div class="col-md-12">
        <div class="alert alert-success" style="margin-top:20px">
            <a href="{{ route('home') }}" class="section">Home</a>
            <i class="right angle icon divider"> > </i>
            <a href="{{ route('shop.index') }}" class="section">Shop</a>
            <i class="right angle icon divider"> > </i>
            <a class="active section">{{ $categoryName }}</a>
        </div>
    </div>

</div>

<div class="ui divider"></div>

{{-- <div class="main ui container">
    <div class="ui grid">
        <div class="three wide column">
            <h4 class="ui header">Par Categories</h4>
            <div class="ui list">
                @foreach ($categories as $category)
                <a class="item" href="{{ route('shop.index', ['category' => $category->slug]) }}">
                    <div class="@if(request()->category == $category->slug) header @endif">{{ $category->name }}</div>
                </a>
                @endforeach
            </div>
        </div>

        <div class="thirteen wide column">

            <div class="ui menu">
                <div class="ui dropdown item">
                    Tri Par prix
                    <div class="menu">
                        <a class="item" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">
                            Plus Bas -> Plus Grand
                        </a>
                        <a class="item" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">
                            Plus Grand -> Plus Bas
                        </a>
                    </div>
                </div>

                <div class="right menu">
                    <div class="item">
                        <div class="ui transparent icon input">
                            <input type="text" placeholder="Search within category...">
                            <i class="search link icon"></i>
                        </div>
                    </div>
                </div>
            </div>

            @if($products->isNotEmpty())

            <div class="ui three doubling stackable link cards">

                @foreach ($products as $product)

                @include('partials.product')

                @endforeach

            </div>

            @else

            <h2 class="ui icon center aligned header">
                <i class="info circle icon"></i>
                <div class="content">
                    Sorry! No Products Found..
                    <div class="sub header">Try search on different categories.</div>
                </div>
            </h2>

            @endif

            <div class="ui divider"></div>

            {{ $products->appends(request()->input())->links() }}

        </div>

    </div>
</div> --}}

<div class="content">
  <div class="content_box">
	<div class="men">
	  <div class="col-md-3 sidebar">
	  	<div class="block block-layered-nav">
		    <div class="block-title">
		        <strong><span>Visiter par</span></strong>
		    </div>
    <div class="block-content">
        <dl id="narrow-by-list">
			<dt class="odd">Catégories</dt>
			<dd class="odd">
	<ol>

        @foreach ($categories as $category)
            <li>
                -> <a class="" href="{{ route('shop.index', ['category' => $category->slug]) }}">
                    <span class="price1 @if(request()->category == $category->slug) active @endif">{{ $category->name }}</span>
                </a>
            </li>
        @endforeach
	</ol>
</dd>
    {{-- <dt class="even">Manufacturer</dt>
<dd class="even">
<ol>
    <li>
        <a href="#">Calvin Klein</a>(2)
    </li>
    <li>
        <a href="#">Diesel</a>(1)
    </li>
    <li>
        <a href="#">Polo</a>(1)
    </li>
    <li>
        <a href="#">Tommy Hilfiger</a>(1)
    </li>
    <li>
        <a href="#">Versace</a>(1)
    </li>
</ol>
</dd> --}}
        {{-- <dt class="last odd">Color</dt>
<dd class="last odd">
<ol>
    <li>Black (0)</li>
    <li>
        <a href="#">Blue</a>(2)
    </li>
    <li>
        <a href="#">Green</a>(1)
    </li>
    <li>
        <a href="#">Grey</a>(1)
    </li>
    <li>
        <a href="#">Red</a> (1)
    </li>
    <li>
        <a href="#">White</a>(1)
    </li>
</ol>
</dd> --}}
    </dl>

    </div>
</div>
{{-- <div class="block block-cart">
        <div class="block-title">
        <strong><span> Carrello </span></strong>
    </div>
    <div class="block-content">
        <p class="empty"> You have no items in your shopping cart. </p>
    </div>
</div>
<div class="block block-list block-compare">
    <div class="block-title">
        <strong><span> Compare Products </span></strong>
    </div>
    <div class="block-content">
        <p class="empty"> You have no items to compare.</p>
    </div>
</div> --}}
</div>
<div class="col-md-9">
	<div class="mens-toolbar">
          	<div class="sort">
               	<div class="sort-by">
		            <label>Sort By</label>
		            <select>
                        <a class="" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">
                            <option value="">Plus Bas -> Plus Grand</option>
                        </a>
                        <a class="item" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">
                            <option value="">Plus Grand -> Plus Bas</option>
                        </a>
		            </select>
		        </div>
    		</div>
	        <div class="pager">
	            {{-- <div class="liter visible-desktop">
					<label>Show</label>
					<select>
	                    <option value="" selected="selected"> 9 </option>
	                    <option value=""> 15 </option>
	                    <option value=""> 30 </option>
	                </select> per page
	            </div> --}}
	       		{{-- <ul class="dc_pagination dc_paginationA dc_paginationA06">
				    <li><a href="#" class="previous">Pages</a></li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
			  	</ul> --}}
		   		<div class="clearfix"></div>
	    	</div>
     	    <div class="clearfix"></div>
	    </div>
            @if($products->isNotEmpty())
                <div class="span_2">
                    @foreach ($products as $product)

                        @include('partials.product')

                    @endforeach
                    <div class="clearfix"></div>
                </div>
            @else

            <div class="span_2">
                <span class="glyphicon glyphicon-info"></span>
                <h2 class="content">
                    Désolé ! Aucun produit trouvé...
                    <div class="sub header">Essayez vos recherches par catégorie.</div>
                </h2>
            </div>

            @endif
            </div>
            <div class="clearfix"> </div>
            <center>
                    {{ $products->appends(request()->input())->links() }}
            </center>
    </div>
@endsection
