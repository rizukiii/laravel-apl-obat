<!doctype html>
<html lang="en">
    @include('backend.partials.head')
    @stack('head')

    <body>
        @include('backend.partials.header')
        @yield('content')
        {{-- @include('backend.partials.footer') --}}
        @include('backend.partials.script')
        @stack('script')
    </body>
</html>
