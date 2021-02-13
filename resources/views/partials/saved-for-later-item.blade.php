<div class="item row">
    <div class="image col-md-4 col-xs-12">
        <img src="/images/laptop.jpg" class="img-responsive" width="200" height="100">
    </div>
    <div class="content col-md-8 col-xs-12">
        <a class="header" href="{{ $item->model->path() }}">
            {{ $item->name }} - {{ $item->model->present_price }}
        </a>

        <div class="meta">
            <span class="cinema">{{ $item->model->details }}</span>
        </div>

        <div class="extra" style="display:flex">
            <button class="ui red tiny button remove-save-for-later btn btn-danger" data-remove-save-for-later="{{ $item->rowId }}">
                <i class="trash icon"></i> Supprimer
            </button>

            <form action="{{ route('saveforlater.destroy', $item->rowId) }}" style="display: none" method="POST" 
                id="remove-save-for-later-{{ $item->rowId }}" class="ui left floated">
                @csrf @method('delete')
            </form>

            <div class="ui right floated">
                <button class="ui tiny button move-to-cart btn btn-info" style="margin-left:10px" data-move-to-cart="{{ $item->rowId }}">
                    <i class="shopping cart icon"></i>Renvoyer au panier
                </button>
    
                <form action="{{ route('saveforlater.movetocart', $item->rowId) }}" style="display: none" method="POST" 
                    id="move-to-cart-{{ $item->rowId }}" class="ui left floated">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div><br/>