<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        @switch($role)
            @case('admin')
                <h1>Anda adalah admin</h1>
                @break

            @case('editor')
                <p>Anda adalah editor</p>
                @break

            @default
                <p>Anda adalah user biasa</p>
        @endswitch

    </body>
</html>