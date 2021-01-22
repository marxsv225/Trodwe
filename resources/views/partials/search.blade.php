<form action="{{route('product.search')}}" method="">
    <input type="text" name="q" value = " {{ request()->q ?? ''}} ">
    <input type="submit" value="">
</form>