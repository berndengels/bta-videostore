<html>
    <head>
        <title>First Layout</title>
        <style>
            * { font-family: Verdana; color: #666; }
            h1 { color: red; }
        </style>
    </head>
    <body>
        <header>
            @section('meinHeader')
                <h1>Parent Header</h1>
            @show
        </header>

        <div>
            @yield('meinInhalt')
        </div>
    </body>
</html>
