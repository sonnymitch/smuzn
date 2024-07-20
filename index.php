<html>

<head>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/.php/google-analytics.php"; ?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Iosif Mihaescu">
  <title>SMÜZN</title>
  <link href="bootstrap.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/.php/preloads.php"; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/.php/make-ie-recognize-html5-tags.php"; ?>
  <style>

    /* INIZIO schermata di caricamento */
    #loading-screen {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100dvh;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      animation: colore 20s linear infinite;
      transition: opacity 0.5s ease-out;
    }
    .loader {
      width: 50vw;
      height: auto;
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

    @keyframes colore {
        0% {
            filter: invert(0) sepia(0) saturate(0) hue-rotate(0deg);
        }
        25% {
            filter: invert(0.1) sepia(1) saturate(5) hue-rotate(90deg);
        }
        50% {
            filter: invert(0.8) sepia(1) saturate(5) hue-rotate(180deg);
        }
        75% {
            filter: invert(1) sepia(1) saturate(5) hue-rotate(270deg);
        }
        100% {
            filter: invert(0) sepia(0) saturate(0) hue-rotate(360deg);
        }
    }


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

      #loading-screen {
        height: 205vmin;
      }

    }
    /* FINE variazioni in base a dimensione viewport */

    /*  STILE PRINCIPALE  */
    body {
      width: 100vw;
      height: 100dvh;
      font-family: "Aboriginal Serif", serif;
      font-weight: 400;
      font-style: normal;
      background-color: #FF0054;
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

<div id="loading-screen">
  <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="Logo" class="corner-logo top-left">
  <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="Logo" class="corner-logo top-right">
  <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="Logo" class="corner-logo bottom-left">
  <img src="https://www.smuzn.xyz/.images/SVG/piu.svg" alt="Logo" class="corner-logo bottom-right">
  <img src="https://www.smuzn.xyz/.images/SVG/coming-soon.svg" alt="Loading" class="loader">
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/.php/scripts.php"; ?>
</body>
</html>