<div class="title">
    {{ $product->name }}
</div>
<div class="flex-center">
    {{ $product->desc }}
</div>
<div>
    Цена: {{ $product->price }}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ \Illuminate\Support\Facades\URL::route('product_buy', ['id' => $product->id]) }}">
        @csrf
        <input type="number" max="{{ $product->count }}" min="1" name="count" required="required" value="1">
        <input type="submit" name="save" value="Купить">
    </form>
</div>
