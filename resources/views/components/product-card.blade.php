<div class="product-card" onclick="window.location.href =  '{{ $href ?? null}}'">
    <div class="preview">
        <img src="{{ $img ?? null }}">
    </div>
    <div class="information">
        <div class="title">{{ $slot }}</div>
        <div class="pricing">
            <div class="availability">IN STOCK</div>
            <div class="price">{{ $price }} IDR</div>
        </div>
    </div>
</div>