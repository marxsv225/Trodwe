
<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class=""><img src="{{asset('images/'.$product->image)}}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-body">
            <h4>{{ $product->name }}</h4>
            <p>{{ $product->details }}</p>
            <p>{{ $product->price }} F cfa</p>
        </div>
        <a href="{{ $product->path() }}" class="btn btn-success btn-block rounded">
            <div class=" panel-heading">Voir les détails du produit</div>
        </a>
    </div>
</div>
