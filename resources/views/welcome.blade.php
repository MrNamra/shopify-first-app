@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
@endsection

@section('scripts')
    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection