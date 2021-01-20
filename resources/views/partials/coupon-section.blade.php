<div class="row">
    <div class="col-md-12">
        @if(session()->has('coupon'))

            <div class="ui small header">Vous avez utilisé le coupon ci-dessous.</div>

            <div class="ui large blue label">
                {{ session('coupon')['name'] }}
                <i class="delete icon" onclick="document.getElementById('remove-coupon').submit()"></i>

                <form action="{{ route('coupon.destroy') }}" id="remove-coupon" method="POST" style="display: none">
                    @csrf @method('DELETE')
                </form>
            </div>

        @else

            <div class="ui small header">Avez-vous un code de coupon ?</div>

            <form class="ui form" action="{{ route('coupon.store') }}" method="POST">
                @csrf

                <div class="three fields form-group">
                    <div class="field col-md-6">
                        <input class="form-control" type="text" name="coupon" placeholder="Coupon Code" required>
                    </div>
                    <div class="field">
                        <button class="ui button btn btn-warning" type="submit">Appliquez le Code</button>
                    </div>
                </div>
            </form>

        @endif
    </div>
</div>