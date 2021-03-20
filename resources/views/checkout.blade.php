@extends('layouts.app')

@section('header')

    <script src="https://js.stripe.com/v3/"></script>

@endsection

@section('content')

<div class="content-box">

    <div class="col-md-12">
        <div class="alert alert-info" style="margin-top:20px">
            <a href="{{ route('home') }}" class="section">Accueil </a>
            <i class="right angle icon divider"> > </i>
            <a class="active section">Payement</a>
        </div>
    </div>

</div>

<div class="ui divider"></div>

<div class="main ui container">

    <h1 class="ui header">Passons au payement !</h1>

</div>


<div class="ui vertical segment product content">

    <div class="ui  row content_box">

        <div class="ui grid_1">
            @include('partials.alert-message')
            <div class="eight wide column col-md-7 box_2">

                <h3 class="ui header">Détails de la facturation</h3>

                {{-- <form class="form-horizontal" action="/action_page.php">
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Saisir email" name="email">
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Nom:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="name" placeholder="Saisir nom" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="adresse">Adresse:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="adresse" placeholder="Saisir adresse" name="adresse">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="commune">Commune:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="commune" placeholder="Saisir commune" name="commune">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="tel">Téléphone:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="tel" placeholder="Saisir numero de téléphone" name="tel">
                        </div>
                    </div>
                    
                    <h3 class="ui header">Détails du payement</h3>

                    <div class="field">
                        <label class="control-label col-sm-2" for="tel">Carte:</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Saisir email" name="email">
                    </div>
                    </div><br/><br/>

                    <div class="field">
                        <label for="card-element" class="control-label">Carte de crédit ou debit</label><br/>

                        <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                        
                    </div><br/><br/>

                    
                    <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                        <label><input type="checkbox" name="remember"> J'approuve les termes et conditions de payement.</label>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="{{route('checkout.store')}}" class="btn btn-success">Valider la commande</a>
                        <button type="submit" ></button>
                    </div>
                    </div>

                    
                </form> --}}

                

            </div>

            <div class="seven wide column right floated col-md-5 box_3">

                @if(Cart::count())

                    <h3 class="ui header">Votre commande</h3>

                    <div class="ui hidden divider"></div>

                    <div class="ui divided items">

                        @foreach (Cart::content() as $item)

                            @include('partials.order-item')

                        @endforeach

                    </div>

                @endif

                <div class="clearfix"></div><hr/>

                <div class="ui grid_2">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="">
                                <div class="">Sous-total</div>

                                @if(session()->has('coupon'))
                                    <div class="">Remise ({{ $code }})</div>

                                    <div class="">Nouveau Sous-total </div>
                                @endif

                                <div class="">Taxe</div>

                                <div class="">
                                    <div class="header">Total</div>
                                </div>
                            </div>
    
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="">
                                <div class="">{{ $subtotal }}</div>

                                @if(session()->has('coupon'))
                                    <div class="">{{ $discount }}</div>

                                    <div class="">{{ $newSubtotal}}</div>
                                @endif

                                <div class="">{{ $newTax }}</div>

                                <div class="">
                                    <div class="header">{{ $newTotal }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><hr/>
    
    
                <div class="clearfix"></div><br/>

                @include('partials.coupon-section')

            </div>

        </div>

    </div>
</div>

@endsection

@section('footer')

    <script src="{{asset('js/stripe-checkout.js')}}"></script>

@endsection
