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

<div class="row" style="margin-bottom:20px">

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
                <button class="btn btn-danger" data-remove-cart="{{ $item->rowId }}">
                <i class="trash icon"></i> Supprimer
                </button>

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