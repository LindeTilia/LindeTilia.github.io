

<!doctype html>
    <html lang=en>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <head>
        <title>Home</title>
        <link rel="stylesheet" href="homestyle2.css">
    </head>

    <body>
        <?php
    
        include ("standaard/header.html");
        include ("standaard/navbar.html");
        ?>

        <div class="article">
            <h3>Welkom op de homepagina van de hondencursus van Van Stal!</h3>
            <p>
            Op deze pagina vind je de links naar alle content van de cursus waar je je voor hebt ingeschreven.<br>
            Elk hoofstuk bevat een video en bijbehorende huiswerkopdrachten. Doe deze huiswerkopdrachten samen met je hond
            en maak een filmpje van de opdracht. Je kan de opdracht <a href="../upload_video/add_file.php">hier</a> inleveren,
            dan geven wij een reactie met tips en tops. Op deze manier begeleiden wij je zo snel mogelijk bij het trainen
            van je hond!<br>
            Heb je vragen? Stuur ze hier (moet nog link en file gemaakt worden) in.
            </p>
        </div>
                    </div>
                </div> 

                <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
                <script>
                    // Get the button
                    let mybutton = document.getElementById("myBtn");
                    
                    // When the user scrolls down 20px from the top of the document, show the button
                    window.onscroll = function() {scrollFunction()};
                    
                    function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 500) {
                        mybutton.style.display = "block";
                    } else {
                        mybutton.style.display = "none";
                    }
                    }
                    
                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                    }
                    </script>
            


            <footer>
                <p>Nog een footer, misschien e-mail adres en telefoonnummer ofzo?</p>
            </footer>
        </body>
        

    </html>
