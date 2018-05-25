<html>
    <head>
        <script src="/assets/js/jquery.js"></script>
        <script src="/assets/js/udfw.js"></script>
    </head>
    <body>

    <h1>Page 2</h1>
        <h2>URL parameter but pass by POST</h2>
        <pre>
            {$param|debug_print_var}
        </pre>
        <h2>Form data but pass by GET</h2>
        <pre>
            {$data|debug_print_var}
        </pre>

        <a udfw udfw-module="app" udfw-controller="app" udfw-action="index" href="/node/123/mode/full" >Vers Page 1</a>

    </body>
</html>