<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

            <main class="mdl-layout__content">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--6-col  mdl-cell--3-offset">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>