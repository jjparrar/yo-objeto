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
                $(".btn").click(function(){
                    $('#top').eraser('reset');
                });
            });
        </script>
    </head>
    <body>
        <div id="buttons">
            <div class="btn">Reiniciar</div>
        </div>
        <div id="images">
            <img id="bottom" class="image" src="images/like.jpg" />
            <img id="top" class="image" src="images/robot.jpg" />
        </div>
        
    </body>
</html>