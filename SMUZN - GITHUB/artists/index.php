<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/.php/google-analytics.php'; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Iosif Mihaescu">
    <title>SMÜZN</title>
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
            height: 100svh;
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
            height: 10svh;
            margin: calc(1vw + 1svh);
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
                height: 7svh;
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
            height: 100svh;
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

<!--SCHERMATA DI CARICAMENTO, scroll fino alla fine senza timer -->

<nav class="container-menu3" id="id-container-menu3">
    <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="+" class="plus-icon" id="plusIcon">
    <div class="menu3" id="menu3">
        <ul>
            <li><a href="#articles">Articles</a></li>
            <li><a href="#artists">Artists</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#events">Events</a></li>
        </ul>
    </div>
</nav>

<div class="webpage">
    <section class="pages">
        <header class="section1" is="section1">
            <div class="box1">

            </div>
        </header>

        <nav class="menu2-container" id="menu2-container">
            <div class="menu2" id="menu2">
                <div class="nav2" id="nav2">
                    <a href="#articles">Articles</a>
                    <a href="#artists">Artists</a>
                    <a href="#smuzn" class="central-img-link-nav2" id="central-img-link-nav2">
                        <img class="central-img-nav2" id="central-img-nav2" src="https://www.smuzn.xyz/.images/SVG/smuzn_logo_min.svg" alt="">
                    </a>
                    <a href="#projects">Projects</a>
                    <a href="#events">Events</a>
                </div>
            </div>
        </nav>
        <nav class="menu-container" id="menu-container">
            <div class="menu" id="menu">
                <div class="nav" id="nav">
                    <a href="#articles">Articles</a>
                    <a href="https://smuzn.xyz/artists/davidmihaescu/">David</a>
                    <a href="#smuzn" class="central-img-link-nav" id="central-img-link-nav">
                        <img class="central-img-nav" id="central-img-nav" src="https://www.smuzn.xyz/.images/SVG/smuzn_logo_min.svg" alt="">
                    </a>
                    <a href="#projects">Projects</a>
                    <a href="#events">Events</a>
                </div>
            </div>
        </nav>

        <div class="section2" id="section2">
            <div class="box2">

            </div>
        </div>

    </section>

</div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/.php/scripts.php'; ?>
</body>
</html>