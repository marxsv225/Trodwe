
<div class="row grid_2">
    <div class="col-md-12">
        <h2 class="">Vous aimeriez aussi</h2>
    </div>
    @foreach ($mightLike as $product)

        @include('partials.product')

    @endforeach
</div>

