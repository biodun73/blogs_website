<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/aa5a7a351a.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <!--Heading of the website-->
        <header>
            <div class="heading">
                <h1>Nutriction and Care</h1>
            </div>
            <!--contain website tab buttons-->
            <nav>
                <a href="index.php">Home</a>
                <a href="bloggs.php">Blogs</a>
                <a href="contact.php">Contact</a>
            </nav>
        </header>
        
        <!--aside for relevant ads-->
        <aside class="aside-left">
        </aside>
        <!--contain text and photos for reading-->
        <article class="article">
            <h2>What to eat to give good health</h2>
            <img src="./photos/foodnutrient1.png" width="700px">
            <div id="demo1">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                <button type="button" onclick="loadFunction()">Read</button>
                </p>
            </div>
                        <img src="./photos/foodnutrient2.png" width="700px">
            <div id="demo2">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                <button type="button" onclick="loadFunction2()">Read</button>
                </p>
            </div>
              <img src="./photos/foodnutrient3.png" width="700px">
            <div id="demo3">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                <button type="button" onclick="loadFunction3()">Read</button>
                </p>
            </div>
        </article>
        <!--aside for relevant ads-->
        <aside class="aside-right">
        </aside>
        <!--footer of the website-->
        <footer class="footer">
            <p>Copyright&copy;2022</p>
            <div class="addres">
                <h4>Get in touch us</h4>
                <address>
                    Email : b@gmail.com<br>
                    Tel : +3069789655
                </address>
            </div>
            <div class="media">
                <a href=""><img src="./photos/youtube.png"></a>
                <a href=""><img src="./photos/twitter.png"></a>
                <a href=""><img src="./photos/instagram.png"></a>
                <a href=""><img src="./photos/facebook.png"></a>
            </div>
        </footer>
        <script src="javascript.js"></script>
        <?php
        // put your code here
        ?>
    </body>
</html>
