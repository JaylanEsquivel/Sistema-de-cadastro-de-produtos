<html>
    <head>
        <title>Principal</title>
    </head>
    <body>
         @section('sidebar')
           Topo Princpal
         @show
         <div class="container">
             @yield('content')
         </div>
         @section('rodape')
           Rodape Princpal
         @show
    </body>
</html>
