<!DOCTYPE html>
<html>
    <head>
        <title>這是標題</title>
        @include("layout.meta")
        <!-- Fonts -->
        
        @include("layout.css")

    </head>
    <body class="antialiased">
        @include("layout.nav")
        <div class="container">
            <!-- 內容用 配 section -->
            @yield('content')
        </div>

        @include("layout.footer")
        @include("layout.js")

    </body>
</html>
