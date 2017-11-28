<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>

    <body>

        @include('partials.nav')

        <div class="container">
            
            @yield('content')

            @include('partials.footer')

        </div><!-- End of .container -->    

        @include('partials.javascript')

        @yield('scripts')
    </body>
</html>