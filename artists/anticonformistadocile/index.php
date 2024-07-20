<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/.php/google-analytics.php'; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Iosif Mihaescu">
    <title>SMÜZN + ANTICONFORMISTA DOCILE</title>
    <link href="/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/.php/preloads.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/.php/make-ie-recognize-html5-tags.php'; ?>
    <style>

        /* INIZIO schermata di caricamento */
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100dvh;
            background-color: #FF0054;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-out;
        }
        .loader {
            width: 50vw;
            height: auto;
            animation: spin 1.5s linear infinite;
            transition: scale 0.3s ease;
        }

        .corner-logo {
            position: absolute;
            width: auto;
            height: 10dvh;
            margin: calc(1vw + 1dvh);
            transition: scale 0.3s ease;
        }
        .top-left {
            top: 0;
            left: 0;
        }
        .top-right {
            top: 0;
            right: 0;
        }
        .bottom-left {
            bottom: 0;
            left: 0;
        }
        .bottom-right {
            bottom: 0;
            right: 0;
        }

        /* logo che gira al caricamento: */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        /* FINE schermata di caricamento*/

        /* INIZIO variazioni in base a dimensione viewport: */
        @media (max-width: 1200px) {

            .corner-logo {
                position: absolute;
                width: auto;
                height: 7dvh;
                transition: all 0.3s ease;
            }

            .top-left {
                top: 0;
                left: 0;
            }
            .top-right {
                top: 0;
                right: 0;
            }
            .bottom-left {
                bottom: 0;
                left: 0;
            }
            .bottom-right {
                bottom: 0;
                right: 0;
            }

        }

        @media (max-width: 968px) {

            .loader {
                width: 80vw;
                height: auto;
            }

        }
        /* FINE variazioni in base a dimensione viewport */

        /*  STILE PRINCIPALE  */
        body {
            width: 100vw;
            font-family: "Aboriginal Serif", serif;
            font-weight: 400;
            font-style: normal;
            background-color: var(--bgc);
            color: var(--text-color) !important;
            margin: 0;
            padding: 0;
            scrollbar-width: thin;
            scrollbar-color: #FF0054 #f1f1f1;
            overflow-x: hidden;
        }

        /* Webkit-based browsers */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #FF0054;
            border: 1px solid white;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #e6004c; /* Slightly darker shade for hover effect */
        }

        ::-webkit-scrollbar-button {
            background: #ddd;
        }

        ::-webkit-scrollbar-button:hover {
            background: #bbb;
        }

    </style>
</head>

<body>
    <!--SCHERMATA DI CARICAMENTO, nascondi scrollbar -->
    <script>
        // Nascondiamo la scrollbar
        const body = document.body;
        body.style.overflow = 'hidden';
    </script>
    <div id="loading-screen">
        <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="Logo" class="corner-logo top-left">
        <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="Logo" class="corner-logo top-right">
        <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="Logo" class="corner-logo bottom-left">
        <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="Logo" class="corner-logo bottom-right">
        <img src="https://www.smuzn.xyz/.images/SVG/smuzn_logo.svg" alt="Loading" class="loader">
    </div>
    <script>
        //        SCHERMATA DI CARICAMENTO VELOCE
        window.addEventListener('load', function() {
            const loadingScreen = document.getElementById('loading-screen');
            loadingScreen.style.opacity = '0';
            setTimeout(function() {
                // Nascondiamo lo schermo di caricamento
                loadingScreen.style.opacity = '0';
                setTimeout(() => {
                    loadingScreen.style.display = 'none';
                    body.style.overflow = '';
                }, 500);
            });
        });
    </script><!--SCHERMATA DI CARICAMENTO VELOCE-->

    <div class="webpage">
        <section class="pages">
            <section class="section1" id="section1">
                <section class="sub-section1" id="sub-section1">
                    <section class="box1">
                        <img src="https://www.smuzn.xyz/.images/JPG/artists/anticonformistadocile.jpg" alt="plus" class="image1">
<!--                        <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="plus" class="plus plus-destra">-->
                        <img src="https://www.smuzn.xyz/.images/SVG/menu-smuzn.svg" alt="menu smuzn" class="menu-smuzn1">
    <!--                    <section class="menu-box1"><button class="menu">menu<br><section class="menu-sub2-box1"> smuzn</section></button></section>-->
                        <div class="sub1-box1">
                            <p class="text1">
<!--                                <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="plus" class="plus plus-g-design">-->
                                GRAPHIC DESIGNER</p>
                        </div>
                        <div class="sub2-box1">
                            <p class="text2">ANTICONFORMISTA<br>DOCILE
<!--                                <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="plus" class="plus plus-david">-->
                            </p>
                        </div>
                    </section>
                </section>
            </section>
            <section class="section2" id="section2">
                <section class="sub-section2" id="sub-section2">
                    <div class="box2">
                        <p class="text3">
                            Lorem ipsum dolor sit amet. Aut iste facere in tempora similique et autem molestiae in provident nihil. Est illum enim et praesentium fuga qui fugiat deleniti sed voluptatum quae. Et nulla assumenda est sequi corporis est officia nulla ut delectus accusantium qui fuga eius. Vel autem illum sed illum repudiandae ut quam mollitia ut voluptas quia!

                            Id sunt reprehenderit et blanditiis quos eum reprehenderit modi eos rerum illum est galisum nesciunt. Eum enim nesciunt est rerum sunt ut fugiat tempora.

                            Est nemo placeat ea voluptates sunt et repellat iusto et repellendus totam aut dolorum quos sed autem molestiae nam dolore illo! Id modi expedita ea numquam rerum sed dolores inventore et quia nobis. Hic beatae enim quo consequatur unde hic illo fugit et blanditiis ducimus ab vitae dolor in aspernatur quia est repudiandae voluptatum.
                        </p>
                    </div>
                </section>
            </section>
        </section>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/.php/scripts.php"; ?>

</body>
</html>