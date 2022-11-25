<!DOCTYPE html>
<head>
    <title>{{ $title ?? '' }}</title>
    @stack('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <main class="py-4">
        @yield('content')
    </main>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
@stack('js')
</body>
</html>
