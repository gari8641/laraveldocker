<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>授乳室.jp - @yield('title')</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="/common/inc/css/style.css">

  <link rel="stylesheet" href="@yield('cssfile')">

  <!-- favicon -->
  <!-- <link rel="shortcut icon" href="favicon.ico"> -->

  <!-- スマホ用アイコン光沢あり -->
  <link rel="apple-touch-icon" href="common/inc/images/logo-jp-40.png" />
  <!-- スマホ用アイコン光沢なし -->
  <link rel="apple-touch-icon-precomposed" href="common/inc/images/logo-jp-40.png" />

</head>
<body>
    @yield('content')
    <footer class="text-center text-muted py-4">
      Copyright 2018-<?php echo date("Y"); ?> 授乳室.jp
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- google map -->
    <!-- <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDFjBO45AsEAQUZvU04RdJ7GilfMjUbEjE&callback=initMap" async></script> -->
    <script src="//maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDFjBO45AsEAQUZvU04RdJ7GilfMjUbEjE&callback=initMap"></script>
    <script type="text/javascript" src="js/googlemap-mark.js"></script>
</body>
</html>
