<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>
    <body>
        <div class="container" id="app">
            <header class="row">
                @include('layouts.nav')
            </header>
            <div class="row content">
                <div class="col-md-2 sidenav menu-left">
                    @yield('menu-left')
                </div>
                <div class="col-md-10">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.foot')
    </body>
</html>
