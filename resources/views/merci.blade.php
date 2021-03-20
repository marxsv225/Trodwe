@extends('layouts.app')
@section('content')
    <center>
        <div class="alert alert-success">
            <h1 class="text-center">Merci !</h1>
            <strong>Votre commande a été enregistrée avec succès</strong> <br>
            <a href="{{ route('store.index') }}">Continuez votre visite</a>
        </div>
    </center>
@endsection
