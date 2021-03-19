
@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card"">
                <img class="card-img-top" src="{{ asset('storage/'.auth()->user()->avatar) }}" alt="Card image" style="width:180px; margin-top:50px">
                <div class="card-body">
                  <h4 class="card-title">{{ auth()->user()->name }}</h4>
                  <p class="card-text">{{ auth()->user()->email }}</p>
                  <form action="{{ route('logout') }}" method="post">
                      @csrf
                  <button type="submit" class="btn btn-danger">Se Deconnecter</button>
                    </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
