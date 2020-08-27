<div class="lcPageMenu">
    <div class="lcPageMenuTop">
        <div class="lcPageMenuTop__img">
            <img src="{{ asset('img/photos/18.png') }}" alt="">
        </div>
        <div class="lcPageMenuTop__name">
            {{ auth()->user()->getName() }}
        </div>
    </div>

    @cannot('role-admin')

        <div class="lcPageMenuNav">
            @if(request()->is('dashboard/buyer/*'))
                @include('dashboard.partials.nav_bayer')
            @endif
            @if(request()->is('dashboard/shop/*'))
                @include('dashboard.partials.nav_seller')
            @endif
        </div>
        <div class="lcPageMenuCash">
            Баланс:
            <span>{{ auth()->user()->personal_account }} руб.</span>
        </div>

        @can('role-user')
            @if(auth()->user()->request_shop == 0)
                <a href="{{ route('application_to_sellers') }}" class="btn lcPageMenu__btn">Стать продавцом</a>
            @else
                <p>Заявка на продовца отправлена скоро будет расмотренна</p>
            @endif
        @endcan
        @can('is-partner')
        @else
            {{ Form::open(['route' => [ 'active_partner'], 'method' => 'get']) }}
            <button type="submit" class="btn lcPageMenu__btn">Стать партнером</button>
            {{ Form::close() }}
        @endif

    @endcannot

    @can('role-admin')
        @include('dashboard.admin.block.nav_admin')
    @endcan

</div>
