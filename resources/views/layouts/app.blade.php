<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>
    <body>
        <div class="container" id="app">
            <div class="row">
                @include('layouts.nav')
            </div>
            <div class="row content">
                <div class="col-md-3 sidenav menu-left">
                    @yield('menu-left')
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.foot')
    </body>
</html>
