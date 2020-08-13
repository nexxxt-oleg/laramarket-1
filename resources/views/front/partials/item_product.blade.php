<div class="popular">
    <a class="popular__img" href="{{ $product->getUrl() }}">
        @if($product->getImageSrc('medium') != '')
            <img alt="" src="{{ $product->getImageSrc('medium') }}">
        @endif
    </a>
    <div class="popular__name">
        {{ $product->category->title }}
    </div>
    <a class="popular__title" href="{{ $product->getUrl() }}">
        {{ $product->title }}
    </a>
    <div class="popular__inf">
        <div class="popular__price">
            {{ $product->getCost() }}
        </div>
        @if($product->old_price != '')
        <div class="popular__old">
            {{ $product->old_price }} руб
        </div>
        @endif
        <form action="{{ route('cart.store') }}" method="POST" class="js_add_product">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $product->id }}"  name="id">
            <input type="hidden" value="{{ $product->title }}"  name="name">
            <input type="hidden" value="{{ $product->price }}"  name="price">
            <input type="hidden" value="{{ $product->getImageSrc() }}"  name="img">
            <input type="hidden" value="{{ $product->getUrl() }}"  name="slug">
            <input type="hidden" value="1"  name="quantity">
            <button class="popular__cart btn" type="submit">
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="21px" height="17px">
                    <path fill-rule="evenodd"  fill="rgb(90, 84, 255)"
                          d="M17.949,10.719 L21.004,2.583 L6.110,2.583 L4.913,-0.007 L-0.000,-0.007 L-0.000,1.473 L3.819,1.473 L8.019,10.719 L17.949,10.719 ZM18.712,4.062 L16.803,9.240 L9.165,9.240 L6.492,4.062 L18.712,4.062 ZM9.924,12.207 C8.553,12.207 7.442,13.281 7.442,14.607 C7.442,15.932 8.553,17.006 9.924,17.006 C11.295,17.006 12.406,15.932 12.406,14.607 C12.406,13.281 11.295,12.207 9.924,12.207 ZM9.924,15.530 C9.398,15.530 8.969,15.116 8.969,14.607 C8.969,14.098 9.398,13.684 9.924,13.684 C10.450,13.684 10.879,14.098 10.879,14.607 C10.879,15.116 10.450,15.530 9.924,15.530 ZM16.416,12.207 C15.045,12.207 13.934,13.281 13.934,14.607 C13.934,15.932 15.045,17.006 16.416,17.006 C17.787,17.006 18.899,15.932 18.899,14.607 C18.899,13.281 17.787,12.207 16.416,12.207 ZM16.416,15.530 C15.890,15.530 15.461,15.116 15.461,14.607 C15.461,14.098 15.890,13.684 16.416,13.684 C16.943,13.684 17.371,14.098 17.371,14.607 C17.371,15.116 16.943,15.530 16.416,15.530 Z"/>
                </svg>
            </button>
        </form>

    </div>
</div>