<div class="item" style="display:inline-block">
    
    

    
<table class="table table-hidden">
    <tr>
        <td>
            <div class="image">
                <img src="/images/laptop.jpg" class="img-responsive"  width="120">
            </div>
        </td>
        <td>
            <div class="content">
                <a class="header" href="{{ $item->model->path() }}">
                    {{ $item->name }}
                </a>

                <div class="description">
                    <p>{{ $item->model->details }}</p>
                </div>

                <div class="meta">
                    <span class="cinema red">{{ $item->model->present_price }}</span>
                </div>
            </div>
            <div class="quantity">
                <span class="badge">{{ $item->qty }}</span>    
            </div>
        </td>
    </tr>
</table>
</div>