{{-- <div class="item cart">
    <div class="col-md-3">
        <img src="/images/laptop.jpg">
    </div>

    <div class="col-md-3">
        <a class="header" href="{{ $item->model->path() }}">
            {{ $item->name }} 
            <div class="ui green label">
                {{ $item->model->present_price }}
            </div>
        </a>
        

        <div class="meta">
            <span class="cinema">{{ $item->model->details }}</span>
        </div>

        <div class="extra">
            <button class="ui red tiny button remove-cart" data-remove-cart="{{ $item->rowId }}">
                <i class="trash icon"></i> Supprimer
            </button>

            <button class="ui tiny button save-for-later" data-save-for-later="{{ $item->rowId }}">
                <i class="heart icon"></i> Sauver pour plus tard
            </button>

            <form action="{{ route('cart.destroy', $item->rowId) }}" style="display: none" method="POST" 
                id="remove-cart-{{ $item->rowId }}" class="ui left floated">
                @csrf @method('delete')
            </form>

            <form action="{{ route('saveforlater.store', $item->rowId) }}" style="display: none" method="POST" 
                id="save-for-later-{{ $item->rowId }}" class="ui left floated">
                @csrf
            </form>

            <div class="ui right floated">
                <label for="quantity">quantité:</label>
                <select name="quantity" id="quantity" class="quantity" data-id="{{ $item->rowId }}">
                    @foreach (range(1, 5) as $index)
                        <option value="{{ $index }}" @if($item->qty == $index) selected @endif>{{ $index }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="row" style="margin-bottom:20px">

    <div class="col-md-7">

        <div class="col-md-4">
            <img src="/images/laptop.jpg" class="img-responsive">
        </div>
        <div class="col-md-8">
            <a class="header" href="{{ $item->model->path() }}">
                {{ $item->name }}
                <div class="" style="display:inline-block; background-color:green; color:white; padding:6px; border-radius:5px">
                    {{ $item->model->present_price }}
                </div>
            </a>
            <div class="" style="margin-top:5px">
                <span class="cinema">{{ $item->model->details }}</span>
            </div>
            <div style="display:inline-block; margin-top:5px">
                <a class="btn btn-danger" href="{{ $item->rowId }}">
                <i class="trash icon"></i> Supprimer
                </a>
    
                <button class="btn btn-default" data-save-for-later="{{ $item->rowId }}">
                    <i class="heart icon"></i> Sauver pour plus tard
                </button>

                <form action="{{ route('cart.destroy', $item->rowId) }}" style="display: none" method="POST" 
                id="remove-cart-{{ $item->rowId }}" class="ui left floated">
                    @csrf @method('delete')
                </form>

                <form action="{{ route('saveforlater.store', $item->rowId) }}" style="display: none" method="POST" 
                    id="save-for-later-{{ $item->rowId }}" class="ui left floated">
                    @csrf
                </form>
            </div>
        </div>

    </div>
    <div class="col-md-5">
        <div class="col-md-4" style="display:inline-block; margin-top:10px">
            <label for="quantity">quantité:</label>
            <select name="quantity" id="quantity" class="quantity" data-id="{{ $item->rowId }}">
                @foreach (range(1, 5) as $index)
                    <option value="{{ $index }}" @if($item->qty == $index) selected @endif>{{ $index }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
@section('extra-js')
<script>
var selects = document.querySelectorAll('#quantity');
Array.form(selects).forEach((element)=>{
    console.log(element);
    })

</script>
@endsection --}}

{{-- @section('extra_css')
<link href="{{asset('css/semantic.css')}}" rel='stylesheet' type='text/css' />
@endsection --}}

<div class="item cart row" style="display:flex">
    <div class="image col-md-4 col-xs-12">
        <img src="/images/laptop.jpg" width="200" height="100">
    </div>

    <div class="content col-md-8 col-xs-12">
        <a class="header" href="{{ $item->model->path() }}">
            {{ $item->name }}
            <div class="ui green label" style="background-color:black">
                {{ $item->model->present_price }}
            </div>
        </a>


        <div class="meta">
            <span class="cinema">{{ $item->model->details }}</span>
        </div>

        <div class="extra">
            <button class="ui red tiny button remove-cart btn btn-danger" data-remove-cart="{{ $item->rowId }}">
                <i class="trash icon"></i> Supprimer
            </button>

            <button class="ui tiny button save-for-later btn btn-info" data-save-for-later="{{ $item->rowId }}">
                <i class="heart icon"></i> Enregistrer
            </button>

            <form action="{{ route('cart.destroy', $item->rowId) }}" style="display: none" method="POST" 
                id="remove-cart-{{ $item->rowId }}" class="ui left floated">
                @csrf @method('delete')
            </form>

            <form action="{{ route('saveforlater.store', $item->rowId) }}" style="display: none" method="POST" 
                id="save-for-later-{{ $item->rowId }}" class="ui left floated">
                @csrf
            </form>

            <div class="ui right floated" style="float:right">
                <label for="quantity">quantity:</label>
                <select name="quantity" id="quantity" class="quantity" data-id="{{ $item->rowId }}">
                    @foreach (range(1, 5) as $index)
                        <option value="{{ $index }}" @if($item->qty == $index) selected @endif>{{ $index }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>