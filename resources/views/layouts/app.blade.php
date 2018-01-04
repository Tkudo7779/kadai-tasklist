<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MessageBoard</title>
    </head>

    <body>
         @include('commons.navbar')
        
        <div class="container">
            @include('commons.error_messages')
            
            @yield('content')
        </div>
    </body>
</html>