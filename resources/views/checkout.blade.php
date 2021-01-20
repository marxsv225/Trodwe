@extends('layouts.app')

@section('header')

    <script src="https://js.stripe.com/v3/"></script>

@endsection

@section('content')

<div class="content-box">

    <div class="col-md-12">
        <div class="alert alert-success" style="margin-top:20px">
            <a href="{{ route('home') }}" class="section">Home</a>
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

                <form class="form-horizontal" action="/action_page.php">
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
                        <button type="submit" class="btn btn-success">Completer la commande</button>
                    </div>
                    </div>

                    
                </form>

                {{-- <form class="ui " id="payment-form">
                    <div class="field form-group" style="margin-bottom:10">
                        <label class="col-md-4">Adresse Email</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="email" placeholder="Entrer votre Email">
                        </div>
                    </div>

                    <div class="field form-group">
                        <label class="col-md-4">Nom</label>
                        <div class="col-md-8">
                            <input type="text" name="name" placeholder="Entrer Votre nom">
                        </div>
                    </div>

                    <div class="field">
                        <label>Addresse</label>
                        <input type="text" name="address" placeholder="Entrer votre addresse">
                    </div>

                    <div class="field">
                        <div class="two fields">
                            <div class="field">
                                <label>Commune</label>
                                <input type="text" name="city" placeholder="Entrer votre commune">
                            </div>
                            <div class="field">
                                <label>Province</label>
                                <input type="text" name="province" placeholder="Enter Province">
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="two fields">
                            <div class="field">
                                <label>Code postal</label>
                                <input type="text" name="postal_code" placeholder="Entrer votre code postal">
                            </div>
                            <div class="field">
                                <label>Téléphone</label>
                                <input type="text" name="phone_number" placeholder="Entrer votre numéro de téléphone">
                            </div>
                        </div>
                    </div>

                    

                    <button class="ui fluid button" type="submit">Completer la commande</button>
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
                    <div class="row two columns">
                        <div class="column col-md-6">
                            <div class="ui list">
                                <div class="item">Sous-total</div>

                                @if(session()->has('coupon'))
                                    <div class="item">Remise ({{ $code }})</div>

                                    <div class="item">Nouveau Sous-total </div>
                                @endif

                                <div class="item">Taxe</div>

                                <div class="item">
                                    <div class="header">Total</div>
                                </div>
                            </div>
    
                        </div>
                        
                        <div class="column right aligned col-md-6">
                            <div class="ui list">
                                <div class="item">{{ $subtotal }}</div>

                                @if(session()->has('coupon'))
                                    <div class="item">{{ $discount }}</div>

                                    <div class="item">{{ $newSubtotal}}</div>
                                @endif

                                <div class="item">{{ $newTax }}</div>

                                <div class="item">
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

    <script src="/js/stripe-checkout.js"></script>

@endsection
