<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Accessibility') }}</title>

    
    {{-- {{ vite_assets() }} --}}
    <script src="https://unpkg.com/@shopify/app-bridge@3.0.0"></script>
    <script>
        var AppBridge = window['app-bridge'];
        // console.log(AppBridge);
        var createApp = AppBridge.default;

        window.shopify_app_bridge = createApp({
            apiKey: '{{ config('shopify-app.api_key') }}',
            shopOrigin: '{{ Auth::user()->name }}',
            forceRedirect: true,
            host: '{{ session('shopifyHost') }}'
        });
        
        window.shopify_app_bridge_config = {
            apiKey: '{{ config('shopify-app.api_key') }}',
            shopOrigin: '{{ Auth::user()->name }}',
            forceRedirect: true,
            host: '{{ session('shopifyHost') }}'
        }

        window.shopOrigin = '{{ Auth::user()->name }}'

    </script>
</head>

<body>
    <div id="app"></div>
    @vite('resources/js/app.js')
</body>

</html>