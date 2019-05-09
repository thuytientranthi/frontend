<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>
    <body>
        <div class="container">
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
    </body>
</html>
