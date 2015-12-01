<html>
    <head>
        <title>yo-objeto</title>

        <!-- Se incluyen los estilos -->
        <link rel="stylesheet" type="text/css" href="css/general.css">
        <link rel="stylesheet" type="text/css" href="css/fullpage/jquery.fullPage.css">
        
        <!-- Se incluyen los scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/eraser/jquery.eraser.js"></script>
        <script src="js/fullpage/jquery.fullPage.min.js"></script>
        
        <script>
            $( document ).ready(function() {
                $('#top').eraser();
                $(".btn").click(function(){
                    $('#top').eraser('reset');
                });
                
                
                
                $('#fullpage').fullpage();

            });
        </script>
    </head>
    <body>
        
<!--        <div id="images">
            <img id="bottom" class="image" src="images/cielo.jpg" />
            <img id="top" class="image" src="images/edificio.jpg" />
        </div>
        <div id="buttons">
            <div class="btn"></div>
        </div>-->
        
        <div id="fullpage">
            <div class="section">
                <div class="slide"> Slide 1 </div>
                <div class="slide"> Slide 2 </div>
                <div class="slide"> Slide 3 </div>
                <div class="slide"> Slide 4 </div>
            </div>
        </div>
    </body>
</html>