<div class="lcPageContentRow">
    <div class="lcPageContentCol">
        <div class="lcPageContentCol__check">
            <label class="check-inp">
                {{ Form::checkbox('product_id[]', $product->id, '', ['class' => 'product-chek']) }}
                <span></span>
            </label>

        </div>
    </div>
    <div class="lcPageContentCol">
        <a href="{{ route('products.edit', $product->id) }}">
            @if($product->getImageSrc('thumb') != '')
                <img alt="" src="{{ $product->getImageSrc('thumb') }}">
            @endif
        </a>
    </div>
    <div class="lcPageContentCol">
        <a href="{{ route('products.edit', $product->id) }}">{{ $product->title }}</a>
    </div>
    <div class="lcPageContentCol">
        {{ $product->getCost() }}
    </div>
    <div class="lcPageContentCol">
        {{ $product->part_cashback }}%
    </div>
    <div class="lcPageContentCol">
        @lang('products/status.' . $product->status)
    </div>
    <div class="lcPageContentCol">
        <div class="lcPageContentCol__more">
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="17px" height="5px">
                <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                      d="M14.250,4.219 C13.232,4.219 12.406,3.393 12.406,2.375 C12.406,1.357 13.232,0.531 14.250,0.531 C15.268,0.531 16.094,1.357 16.094,2.375 C16.094,3.393 15.268,4.219 14.250,4.219 ZM8.375,4.219 C7.357,4.219 6.531,3.393 6.531,2.375 C6.531,1.357 7.357,0.531 8.375,0.531 C9.393,0.531 10.219,1.357 10.219,2.375 C10.219,3.393 9.393,4.219 8.375,4.219 ZM2.469,4.219 C1.450,4.219 0.625,3.393 0.625,2.375 C0.625,1.357 1.450,0.531 2.469,0.531 C3.487,0.531 4.312,1.357 4.312,2.375 C4.312,3.393 3.487,4.219 2.469,4.219 Z"/>
            </svg>
            <div class="lcPageContentCol__drop">
                <span>
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="16px" height="16px">
                        <path fill-rule="evenodd" fill="rgb(174, 174, 180)"
                              d="M15.013,3.923 L14.346,4.590 L11.233,1.478 L11.900,0.810 C12.196,0.514 12.641,0.514 12.938,0.810 L15.013,2.886 C15.309,3.182 15.309,3.627 15.013,3.923 ZM6.080,12.896 L2.935,9.751 L10.168,2.519 L13.312,5.663 L6.080,12.896 ZM0.412,15.412 L1.894,10.816 L5.007,13.929 L0.412,15.412 Z"/>
                   </svg>
                   <a href="{{ route('products.edit', $product->id) }}">
                        Редактировать
                   </a>
                </span>
                <span>
                    <svg width="14px" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                         style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M62.29,180l26.27,291.07C90.7,494.41,109.95,512,133.39,512H378.6c23.44,0,42.69-17.59,44.83-40.93L449.7,180H62.29z     M178.95,451.99c-0.24,0.01-0.47,0.01-0.68,0.01c-7.97,0-14.62-6.27-14.97-14.31l-9.55-212c-0.38-8.28,6.01-15.29,14.3-15.67    c9.37-0.27,15.29,6.05,15.64,14.29l9.55,212C193.62,444.59,187.24,451.61,178.95,451.99z M271,437c0,8.29-6.71,15-15,15    c-8.29,0-15-6.71-15-15V225c0-8.29,6.71-15,15-15c8.29,0,15,6.71,15,15V437z M348.69,437.69c-0.35,8.04-7,14.31-14.97,14.31    c-0.2,0-0.44,0-0.67-0.01c-8.29-0.38-14.68-7.4-14.3-15.68l9.55-212c0.38-8.24,6.33-14.44,15.65-14.29    c8.29,0.38,14.67,7.39,14.29,15.67L348.69,437.69z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M406,60h-45V45c0-24.81-20.19-45-45-45H196c-24.82,0-45,20.19-45,45v15h-45c-41.37,0-75,33.65-75,75v15h450v-15    C481,93.65,447.36,60,406,60z M331,60H181V45c0-8.28,6.73-15,15-15h120c8.26,0,15,6.72,15,15V60z"/>
                            </g>
                        </g>

                        </svg>
                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                            <button onclick="return confirm('Точно удалить?')" type="submit"  class="btn-delete" title="">Удалить</button>
                        {!! Form::close() !!}

                </span>
                <!--span>
                    <svg width="14px" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                         style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M376.098,0h-300c-24.814,0-45,20.186-45,45v362.001c0,19.53,12.578,36.024,30,42.237V147.422    c0-20.024,7.808-38.862,21.973-53.027l42.422-42.422C139.658,37.808,158.496,30,178.52,30h239.815    C412.122,12.578,395.628,0,376.098,0z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M436.102,60.199c-132.53,0-93.96,0-225,0v104.8c0,8.29-6.71,15.2-15,15.2h-105V467c0,24.82,20.18,45,45,45h300    c24.81,0,44.8-20.18,44.8-45V104.999C480.902,80.189,460.912,60.199,436.102,60.199z M406.102,422h-240c-8.29,0-15-6.71-15-15    c0-8.29,6.71-15,15-15h240c8.29,0,15,6.71,15,15C421.102,415.29,414.392,422,406.102,422z M406.102,362h-240    c-8.29,0-15-6.71-15-15c0-8.29,6.71-15,15-15h240c8.29,0,15,6.71,15,15C421.102,355.29,414.392,362,406.102,362z M406.102,302    h-240c-8.29,0-15-6.71-15-15c0-8.29,6.71-15,15-15h240c8.29,0,15,6.71,15,15C421.102,295.29,414.392,302,406.102,302z     M406.102,242h-240c-8.29,0-15-6.71-15-15s6.71-15,15-15h240c8.29,0,15,6.71,15,15S414.392,242,406.102,242z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M178.52,60c-12.012,0-23.32,4.688-31.816,13.184l-42.422,42.422c-10.001,10-13.184,21.182-13.184,34.394h90V60H178.52z"/>
                            </g>
                        </g>

                        </svg>
                    <a href="">
                        Копировать
                    </a>
                </span-->
            </div>
        </div>
    </div>
</div>
