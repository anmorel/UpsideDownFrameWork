<html>
    <head>
        <script src="/assets/js/jquery.js"></script>
        <script src="/assets/js/udfw.js"></script>
    </head>
    <body>

        <h1>Page 1</h1>
        <h2>URL parameter but pass by POST</h2>
        <pre>
                {$param|debug_print_var}
        </pre>
        <h2>Link but call POST method</h2>
        <a udfw udfw-module="app" udfw-controller="app" udfw-action="index2" href="/category/movie" >Vers Page 2</a>

        <h2>Form but send data by GET method</h2>

        <form udfw udfw-module="app" udfw-controller="app" udfw-action="index2" method="post" action="/category/movie" >
            <input id="arg1" type="text" name="arg1" value="test1">
            <input id="arg2" type="text" name="arg2" value="test2">
            <select id="arg3" name="arg3" multiple>
                <option value="A">value A</option>
                <option value="B">value B</option>
                <option value="C">value C</option>
            </select>
            <input type="submit" name="submit" value="Go">
        </form>

    </body>
</html>