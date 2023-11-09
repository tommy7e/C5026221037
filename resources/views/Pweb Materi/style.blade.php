<html>
    <head>
        <title>CSS</title>
        <link rel="stylesheet" href="src_Materi/myStyle.css">
        <style>
            body {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                color: blueviolet;
            }
            p, div {
                text-align: center;
            }

            .salam {
                font-size: larger;
                text-align: right;
                font-weight: bold;
                text-transform: uppercase;
            }
            .garisbawah {
                text-decoration: underline;
                color: salmon;
            }
        </style>
    </head>
    <body>
        <!-- Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda-->
        Hallo <b style=
        "color:red;
        text-decoration: underline;
        text-shadow: 2px 1px black"
        >apa</b> kabar?
        <!-- Inpage CSS digunakan jika yang berbeda hanya di 1 halaman-->
        <div class="salam garisbawah">Hallo apa kabar?</div>
        <!-- External File, digunakan untuk global 1 situs-->
        <span class="sembunyi">Hallo apa kabar?</span>
        <p>Hallo apa kabar?</p>
    </body>
</html>
