<html>
    <head>
        <title>yo-objeto</title>

        <!-- Se incluyen los estilos -->
        <link rel="stylesheet" type="text/css" href="css/general.css">
        
        <!-- Se incluyen los scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/eraser/jquery.eraser.js"></script>
        
        <script>
            $( document ).ready(function() {
                $('#top').eraser();
            });
        </script>
    </head>
    <body>
        <h1>Yo-objeto</h1>        
        <div id="images">
            <img id="bottom" class="image" src="images/like.jpg" />
            <img id="top" class="image" src="images/robot.jpg" />
        </div>
    </body>
</html>