@extends('layouts.app')

@section('content')

<div class="content-box">
    <div class="col-md-12">
        <div class="alert alert-info" style="margin-top:20px">
            <a href="{{ route('home') }}" class="section">Home</a>
            <i class="right angle icon divider"> > </i>
            <a href="{{ route('shop.index') }}" class="section">Shop</a>
            <i class="right angle icon divider"> > </i>
            <a href="#" class="section">Search</a>
            <i class="right angle icon divider"> = </i>
            <a class="active section">{{ $q }}</a>
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

        {{-- @foreach ($categories as $category)
            <li>
                -> <a class="" href="{{ route('shop.index', ['category' => $category->slug]) }}">
                    <span class="price1 @if(request()->category == $category->slug) active @endif">{{ $category->name }}</span>
                </a>
            </li>
        @endforeach --}}
	</ol>
</dd>
    </dl>

    </div>
</div>
</div>
<div class="col-md-9">
	<div class="mens-toolbar">
          	@if (request()->input('q'))
                  <div class="sort-by" style="size:20px"> {{$products->total()}} resultat(s) pour la recherche de {{$q}}</div>
            @endif
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
                <h3 class="content">
                    Désolé ! Aucun produit ne correspond à votre recherche...
                    <div class="sub header">Essayez vos recherches par <a href="{{route('shop.index')}}"> catégorie</a>.</div>
                </h3>
            </div>

            @endif
            </div>
            <div class="clearfix"> </div>
            <center>
                    {{ $products->appends(request()->input())->links() }}
            </center>
    </div>
@endsection
