@extends('layouts.app')
@section('content')

<div class="content-box">

    <div class="col-md-12">
        <div class="alert alert-info" style="margin-top:20px">
            <a href="{{ route('home') }}" class="section">Home</a>
            <i class="right angle icon divider"></i>
            <a class="active section">Cart</a>
        </div>
    </div>

</div>





    <div class="content_box">
        <div class="grid_1 men">
            @include('partials.alert-message')
            <div class="col-md-12 box_2">
                <div class="section_group">
                    @if(Cart::count())

                        <h1 class="ui header">{{ Cart::count() }} article(s) dans mon panier</h1>
                        <p class="lead">Vous avez des articles dans votre panier</p>

                        <div class="clearfix"></div>

                        <div class="grid_2">

                            @foreach (Cart::content() as $item)

                                @include('partials.cart-item')

                            @endforeach

                        </div>

                        @include('partials.coupon-section')

                        <div class="clearfix"></div> <hr/>

                        <div class="">
                            <div class="row">
                                <div class="col-md-6">
                                    Nous vous offrons la livraison. :)
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>Sous-total:</td>
                                                <td>{{ $subtotal }}</td>
                                            </tr>

                                            @if(session()->has('coupon'))
                                                <tr>
                                                    <td>Remise ({{ $code }}):</td>
                                                    <td>{{ $discount }}</td>
                                                </tr>

                                                <tr>
                                                    <td>Nouveau Sous-total:</td>
                                                    <td>{{ $newSubtotal }}</td>
                                                </tr>
                                            @endif
            
                                            <tr>
                                                <td>Taxe ({{ $tax }}):</td>
                                                <td>{{ $newTax }}</td>
                                            </tr>

                                            <tr>
                                                <td><h4 class="ui header">Total:</h2></td>
                                                <td><h4 class="ui header">{{ $newTotal }}</h4></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><hr/>
            
                        <div class="clearfix"></div>
            
                        <div>
                            <a style="height:35px" class="btn btn-info" href="{{ route('shop.index') }}">
                                <i class="shopping cart icon"></i>
                                Continuer la visite
                            </a>
                            <a style="float:right" href="{{ route('checkout.index') }}" class="ui right floated primary btn btn-primary">
                                <i class="cc visa icon"></i> Proceder au payement
                            </a>
                        </div>

                    @else

                        <h1 class="ui header">Aucun article dans votre panier !</h1>
                        <p class="lead">Visitez notre boutique pour choisir vos produits</p>

                        <a style="height:35px" class="btn btn-info" href="{{ route('shop.index') }}">
                            <i class="shopping cart icon"></i>
                            Continuer la visite
                        </a>

                    @endif

                    <div class="clearfix"></div>

                    @if(Cart::instance('saveForLater')->count())

                        <h1 class="ui header">
                            {{ Cart::instance('saveForLater')->count() }} article(s) enregistré(s) pour plus tard
                        </h1>
                        <p class="lead">Vous avez quelques articles dans votre panier</p>

                        <div class="clearfix"></div>

                        <div class="ui divided items">

                            @foreach (Cart::instance('saveForLater')->content() as $item)

                                @include('partials.saved-for-later-item')

                            @endforeach

                        </div>

                    @else

                        <h1 class="ui header">Pas d'articles enregistrés pour plus tard!</h1>
                        <p class="lead">Visitez notre boutique pour choisir vos produits</p>

                    @endif
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="grid_2">@include('partials.might-like')</div>
        <div class="grid_3">3</div>
    </div>

@endsection

@section('footer')
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
<script type="text/javascript" src="{{asset('js/newjquery.js')}}"></script>

<script>
   
    jQuery(document).ready(function(){
  
  $("#quantity" ).change(function() {
  var quantity = $("#quantity").val() ;
  var id = $(this).attr("data-id"); 
  var url = '{{ route("cart.update", ":id") }}';

  url = url.replace(':id',id);
  
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $.ajax({
        url: url,
        method: 'patch',
            data: {
                quantity: quantity,
            },
            success: function(result){
                location.reload();
            }
    });    
      
    
    });

  });


  
  
      
  //   requete ajax
  
  </script>
  
@endsection