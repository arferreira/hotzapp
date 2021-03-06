<ul class="navbar-nav">
    @if(config('app.ordering'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="ni ni-tv-2 text-primary"></i> {{ __('Painel de Controle') }}
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/live">
                <i class="ni ni-basket text-success"></i> {{ __('Pedidos Ao-Vivo') }}<div class="blob red"></div>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ route('orders.index') }}">
                <i class="ni ni-basket text-orangse"></i> {{ __('Pedidos') }}
            </a>
        </li>
    @endif

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.restaurants.edit',  auth()->user()->restorant->id) }}">
            <i class="ni ni-shop text-info"></i> {{ __('Meu Estabelecimento') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('items.index') }}">
            <i class="ni ni-collection text-pink"></i> {{ __('Cardápio') }}
        </a>
    </li>

    @if (config('app.isqrsaas') && (!config('settings.qrsaas_disable_odering') || config('settings.enable_guest_log')))
        @if(!config('settings.is_whatsapp_ordering_mode'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.restaurant.tables.index') }}">
                    <i class="ni ni-ungroup text-red"></i> {{ __('Tables') }}
                </a>
            </li>
        @endif
    @endif

    @if (config('app.isqrsaas')&&!config('settings.is_whatsapp_ordering_mode'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('qr') }}">
                <i class="ni ni-mobile-button text-red"></i> {{ __('QR Builder') }}
            </a>
        </li>
        @if(config('settings.enable_guest_log'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.restaurant.visits.index') }}">
                <i class="ni ni-calendar-grid-58 text-blue"></i> {{ __('Customers log') }}
            </a>
        </li>
        @endif
    @endif

    @if(config('settings.enable_pricing'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('plans.current') }}">
                <i class="ni ni-credit-card text-orange"></i> {{ __('Plano') }}
            </a>
        </li>
    @endif

        @if(config('app.ordering')&&config('settings.enable_finances_owner'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('finances.owner') }}">
                    <i class="ni ni-money-coins text-blue"></i> {{ __('Financeiro') }}
                </a>
            </li>
        @endif

        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.restaurant.coupons.index') }}">
                <i class="ni ni-tag text-pink"></i> {{ __('Cupons de Descontos') }}
            </a>
        </li>
   


    <li class="nav-item">
            <a class="nav-link" href="{{ route('share.menu') }}">
                <i class="ni ni-send text-green"></i> {{ __('Compartilhar') }}
            </a>
    </li>

</ul>
