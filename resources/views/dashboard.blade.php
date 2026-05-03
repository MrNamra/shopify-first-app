<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ \Osiset\ShopifyApp\Util::getShopifyConfig('app_name') }}</title>

        @vite(['resources/css/dashboard.css'])

        @yield('styles')
    </head>

    <body>
        <div class="app-wrapper">
            <div class="app-content">
                <main role="main">
                    <div class="dashboard-container">
                        <div class="glass-card">
                            <h1 class="hero-title">Laravel & Shopify</h1>
                            <p class="hero-subtitle">Welcome to your Shopify App powered by Laravel.</p>

                            <div class="shop-badge">
                                <i class="fas fa-store"></i> {{ $shopDomain ?? Auth::user()->name }}
                            </div>

                            <div class="stats-grid">
                                <div class="stat-item">
                                    <span class="stat-label">Total Sales</span>
                                    <span class="stat-value">$12,450</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-label">Total Orders</span>
                                    <span class="stat-value">158</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-label">New Customers</span>
                                    <span class="stat-value">42</span>
                                </div>
                            </div>

                            <div class="action-buttons">
                                <a href="https://github.com/osiset/laravel-shopify" target="_blank" class="btn btn-primary">Package</a>
                                <a href="https://laravel.com/docs" target="_blank" class="btn btn-outline">Laravel</a>
                                <a href="https://github.com/" target="_blank" class="btn btn-outline">GitHub</a>
                            </div>
                            <footer>
                                Chal be 
                            </footer>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        @if(\Osiset\ShopifyApp\Util::getShopifyConfig('appbridge_enabled'))
            <script src="https://unpkg.com/@shopify/app-bridge@3"></script>
            <script src="https://unpkg.com/@shopify/app-bridge-utils@3"></script>
            <script
                @if(\Osiset\ShopifyApp\Util::getShopifyConfig('turbo_enabled'))
                    data-turbo-eval="false"
                @endif
            >
                var AppBridge = window['app-bridge'];
                var actions = AppBridge.actions;
                var utils = window['app-bridge-utils'];
                var createApp = AppBridge.default;
                var app = createApp({
                    apiKey: "{{ \Osiset\ShopifyApp\Util::getShopifyConfig('api_key', $shopDomain ?? (Auth::user() ? Auth::user()->name : null)) }}",
                    host: "{{ Request::get('host') }}",
                    forceRedirect: true,
                });
            </script>

            @include('shopify-app::partials.token_handler')
        @endif

        <script>
            actions.TitleBar.create(app, { title: 'Dashboard' });
        </script>

        @yield('scripts')
    </body>
</html>