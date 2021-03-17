@extends('layouts.app')

@section('content')

<div class="content-box">
    <div class="col-md-12">
        <div class="alert alert-info" style="margin-top:20px">
            <a href="{{ route('home') }}" class="section">Home</a>
            <i class="right angle icon divider"> > </i>
            <a href="{{ route('shop.index') }}" class="section">Shop</a>
            <i class="right angle icon divider"> > </i>
            <a class="active section">{{ $categoryName }}</a>
        </div>
    </div>
</div>

<div class="ui divider"></div>
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
    </dl>

    </div>
</div>
</div>
<div class="col-md-9">
	<div class="mens-toolbar">
          	<div class="sort">
               	<div class="sort-by">
		            {{-- <label>Sort By</label>
		            <select>
                            <option value="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}"><a class="item" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">
                            Plus Bas -> Plus Grand
                        </a></option>
                        
                            <option value=""><a class="item" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">
                            Plus Grand -> Plus Bas
                        </a></option>
		            </select> --}}
                    {{-- <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" data-toggle="dropdown">Trier du
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="item" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">
                                    Plus Bas -> Plus Grand
                                </a>
                            </li>
                            <li>
                                <a class="item" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">
                                    Plus Grand -> Plus Bas
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="ui dropdown item m-3">
                    Tri Par prix
                    <div class="menu m-2">
                        
                        <a class="item btn btn-primary mb-2" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">
                            Plus Bas -> Plus Grand
                        </a>
                        <a class="item btn btn-primary" href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">
                            Plus Grand -> Plus Bas
                        </a>
                    </div>
                </div>
		        </div>
    		</div>
	        <div class="pager">

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
