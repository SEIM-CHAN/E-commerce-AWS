<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PC Parts shop</title>

  <!-- Bootstrap CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Owl-carousel CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />

  <!-- font-awsome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />

  <!-- Custome CSS file -->
  <link rel="stylesheet" href="style.css">

  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <style>
    @charset "UTF-8";
    @import url("https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&family=Raleway&family=Rubik&display=swap");
    /* Sass Template */
    body {
      font-family: "Varela Round", sans-serif;
    }
    
    .form-control {
      box-shadow: none;
      font-weight: normal;
      font-size: 13px;
    }
    
    .form-control:focus {
      border-color: #33cabb;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }
    
    .navbar {
      background: #fff;
      padding-left: 16px;
      padding-right: 16px;
      border-bottom: 1px solid #dfe3e8;
      border-radius: 0;
    }
    
    .nav img {
      border-radius: 50%;
      width: 36px;
      height: 36px;
      margin: -8px 0;
      float: left;
      margin-right: 10px;
    }
    
    .navbar .navbar-brand, .navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
      padding-left: 0;
      font-size: 20px;
      padding-right: 50px;
    }
    
    .navbar .navbar-brand b {
      font-weight: bold;
      color: #33cabb;
    }
    
    .navbar .form-inline {
      display: inline-block;
    }
    
    .navbar .nav li {
      position: relative;
    }
    
    .navbar .nav li a {
      color: #888;
    }
    
    .search-box {
      position: relative;
    }
    
    .search-box input {
      padding-right: 35px;
      border-color: #dfe3e8;
      border-radius: 4px !important;
      box-shadow: none;
    }
    
    .search-box .input-group-addon {
      min-width: 35px;
      border: none;
      background: transparent;
      position: absolute;
      right: 0;
      z-index: 9;
      padding: 7px;
      height: 100%;
    }
    
    .search-box i {
      color: #a0a5b1;
      font-size: 19px;
    }
    
    .navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
      color: #fff;
      background: #33cabb;
      padding-top: 8px;
      padding-bottom: 6px;
      vertical-align: middle;
      border: none;
    }
    
    .navbar .nav .btn-primary:hover, .navbar .nav .btn-primary:focus {
      color: #fff;
      outline: none;
      background: #31bfb1;
    }
    
    .navbar .navbar-right li:first-child a {
      padding-right: 40px;
    }
    
    .navbar ul li i {
      font-size: 18px;
    }
    
    .navbar .dropdown-menu i {
      font-size: 16px;
      min-width: 22px;
    }
    
    .navbar ul.nav li.active a, .navbar ul.nav li.open > a {
      background: transparent !important;
    }
    
    .navbar .nav .get-started-btn {
      min-width: 120px;
      margin-top: 8px;
      margin-bottom: 8px;
    }
    
    .navbar ul.nav li.open > a.get-started-btn {
      color: #fff;
      background: #31bfb1 !important;
    }
    
    .navbar .dropdown-menu {
      border-radius: 1px;
      border-color: #e5e5e5;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }
    
    .navbar .nav .dropdown-menu li {
      color: #999;
      font-weight: normal;
    }
    
    .navbar .nav .dropdown-menu li a, .navbar .nav .dropdown-menu li a:hover, .navbar .nav .dropdown-menu li a:focus {
      padding: 8px 20px;
      line-height: normal;
    }
    
    .navbar .navbar-form {
      border: none;
    }
    
    .navbar .dropdown-menu.form-wrapper {
      width: 280px;
      padding: 20px;
      left: auto;
      right: 0;
      font-size: 14px;
    }
    
    .navbar .dropdown-menu.form-wrapper a {
      color: #33cabb;
      padding: 0 !important;
    }
    
    .navbar .dropdown-menu.form-wrapper a:hover {
      text-decoration: underline;
    }
    
    .navbar .form-wrapper .hint-text {
      text-align: center;
      margin-bottom: 15px;
      font-size: 13px;
    }
    
    .navbar .form-wrapper .social-btn .btn, .navbar .form-wrapper .social-btn .btn:hover {
      color: #fff;
      margin: 0;
      padding: 0 !important;
      font-size: 13px;
      border: none;
      transition: all 0.4s;
      text-align: center;
      line-height: 34px;
      width: 47%;
      text-decoration: none;
    }
    
    .navbar .social-btn .btn-primary {
      background: #507cc0;
    }
    
    .navbar .social-btn .btn-primary:hover {
      background: #4676bd;
    }
    
    .navbar .social-btn .btn-info {
      background: #64ccf1;
    }
    
    .navbar .social-btn .btn-info:hover {
      background: #4ec7ef;
    }
    
    .navbar .social-btn .btn i {
      margin-right: 5px;
      font-size: 16px;
      position: relative;
      top: 2px;
    }
    
    .navbar .form-wrapper .form-footer {
      text-align: center;
      padding-top: 10px;
      font-size: 13px;
    }
    
    .navbar .form-wrapper .form-footer a:hover {
      text-decoration: underline;
    }
    
    .navbar .form-wrapper .checkbox-inline input {
      margin-top: 3px;
    }
    
    .or-seperator {
      margin-top: 32px;
      text-align: center;
      border-top: 1px solid #e0e0e0;
    }
    
    .or-seperator b {
      color: #666;
      padding: 0 8px;
      width: 30px;
      height: 30px;
      font-size: 13px;
      text-align: center;
      line-height: 26px;
      background: #fff;
      display: inline-block;
      border: 1px solid #e0e0e0;
      border-radius: 50%;
      position: relative;
      top: -15px;
      z-index: 1;
    }
    
    .navbar .checkbox-inline {
      font-size: 13px;
    }
    
    @media (min-width: 1200px) {
      .form-inline .input-group {
        width: 300px;
        margin-left: 30px;
      }
    }
    @media (max-width: 768px) {
      .navbar .dropdown-menu.form-wrapper {
        width: 100%;
        padding: 10px 15px;
        background: transparent;
        border: none;
      }
    
      .navbar .form-inline {
        display: block;
      }
    
      .navbar .input-group {
        width: 100%;
      }
    
      .navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
        display: block;
      }
    }
    li > i {
      height: 30px;
      width: 30px;
    }
    
    /* typography classes */
    .font-baloo {
      font-family: "Baloo Thambi 2", cursive;
    }
    
    .font-rale {
      font-family: "Raleway", cursive;
    }
    
    .font-rubik {
      font-family: "Rubik", cursive;
    }
    
    .font-size-12 {
      font-size: 12px;
    }
    
    .font-size-14 {
      font-size: 14px;
    }
    
    .font-size-16 {
      font-size: 16px;
    }
    
    .font-size-20 {
      font-size: 20px;
    }
    
    /*  global classes*/
    button, button:focus {
      outline: none !important;
      box-shadow: none !important;
    }
    
    /* Create Account Form Grid*/
    body {
      color: #fff;
      font-family: "Roboto", sans-serif;
    }
    
    .form-control {
      height: 40px;
      box-shadow: none;
      color: #969fa4;
    }
    
    .form-control, .btn {
      border-radius: 3px;
    }
    
    .signup-form {
      width: 400px;
      margin: 0 auto;
      padding: 30px 0;
    }
    
    .signup-form h2 {
      color: #636363;
      margin: 0 0 15px;
      position: relative;
      text-align: center;
    }
    
    .signup-form h2:before, .signup-form h2:after {
      content: "";
      height: 2px;
      width: 16%;
      background: #d4d4d4;
      position: absolute;
      top: 50%;
      z-index: 2;
    }
    
    .signup-form h2:before {
      left: 0;
    }
    
    .signup-form h2:after {
      right: 0;
    }
    
    .signup-form .hint-text {
      color: #999;
      margin-bottom: 30px;
      text-align: center;
    }
    
    .signup-form form {
      color: #999;
      border-radius: 3px;
      margin-bottom: 15px;
      background: #f2f3f7;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      padding: 30px;
    }
    
    .signup-form .form-group {
      margin-bottom: 20px;
    }
    
    .signup-form input[type=checkbox] {
      margin-top: 3px;
    }
    
    .signup-form .btn {
      font-size: 16px;
      font-weight: bold;
      min-width: 140px;
      outline: none !important;
    }
    
    .signup-form .row div:first-child {
      padding-right: 10px;
    }
    
    .signup-form .row div:last-child {
      padding-left: 10px;
    }
    
    .signup-form a {
      color: #fff;
      text-decoration: underline;
    }
    
    .signup-form a:hover {
      text-decoration: none;
    }
    
    .signup-form form a {
      color: #33cabb;
      text-decoration: none;
    }
    
    .signup-form form a:hover {
      text-decoration: underline;
    }
    
    /*Color Template */
    .color-primary {
      color: #003859;
    }
    
    .color-primary-bg {
      background: #003859;
    }
    
    .color-second {
      color: #f5f5f5;
    }
    
    .color-second-bg {
      background: #f5f5f5;
    }
    
    .color-yellow {
      color: #389638;
    }
    
    .color-yellow-bg {
      background: #389638;
    }
    
    div#nav-L {
      width: 190px;
      /*幅の指定*/
      display: inline;
      /*IE6のマージン算出のバグ対策*/
      float: left;
      /*サブメニューのカラムを左寄せにする*/
      margin-top: 30px;
      margin-right: 30px;
      margin-bottom: 30px;
    }
    
    /*サブメニューのヘッダ部分（余白調整・背景画像・背景色・文字サイズなど）*/
    div#submenu_header {
      height: 26px;
      padding: 4px 0px 0px 0px;
      background-image: url("images/bg_submenu_header.gif");
      background-repeat: no-repeat;
      background-position: top;
      background-color: #cccccc;
      font-size: 90%;
      font-weight: bold;
      text-align: center;
    }
    
    /*サブメニューのボディ部分（余白調整・背景画像・背景色）*/
    ul#submenu_body {
      padding-left: 10px;
      padding-right: 15px;
      padding-bottom: 6px;
      background-repeat: no-repeat;
      background-position: bottom;
      background-color: #cccccc;
    }
    
    ul#submenu_body li {
      font-size: larger;
      /*文字サイズを90%にする*/
      list-style-type: none;
      /*リストマーカー無しにする*/
      display: inline;
      /*リスト項目をインライン表示にする*/
    }
    
    ul#submenu_body li a {
      display: block;
      /*リンクをブロック表示にする*/
      margin: 0px 4px 0px 4px;
      /*サブメニュー項目のマージン*/
      padding: 2px 0px 2px 20px;
      /*サブメニュー項目のパディング*/
      background-color: #eeeeee;
      /*サブメニュー項目の背景色*/
      text-decoration: none;
      /*リンクの下線を無くす*/
    }
    
    ul#submenu_body li a:hover {
      background-color: #ffffff;
      /*リンクにマウスが乗ったら色を変える*/
    }
    
    img {
      width: 190px;
    }
    
    #main-site {
      width: 1100px;
      float: left;
      margin: 30px 0;
      margin-left: 30px;
    }
    
    .slide {
      position: relative;
      width: 900px;
      height: 400px;
      overflow: hidden;
    }
    
    .slide img {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      height: auto;
    }
    
    @keyframes slideshow {
      0% {
        opacity: 0;
      }
      10% {
        opacity: 1;
      }
      28% {
        opacity: 1;
      }
      38% {
        opacity: 0;
      }
      100% {
        opacity: 0;
      }
    }
    .slide img {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      height: auto;
      opacity: 0;
      animation: slideshow 24s linear infinite;
    }
    
    .slide img:nth-child(2) {
      animation-delay: 8s;
    }
    
    .slide img:last-child {
      animation-delay: 16s;
    }
    
    table, th, td {
      border-collapse: collapse;
      border: 1px solid #ccc;
      line-height: 1.5;
    }
    
    table.type06 th {
      width: 150px;
      padding: 10px;
      font-weight: bold;
      vertical-align: top;
    }
    
    table.type06 td {
      width: 350px;
      padding: 10px;
      vertical-align: top;
    }
    
    tr:nth-child(even) {
      background: #d9d9d9;
    }
    
    #gallary ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    
    #gallary ul li {
      width: 220px;
      margin: 0 30px 30px 0;
      padding: 10px 0;
      border: solid 1px #242222;
      float: left;
      text-align: center;
      color: #b7a077;
      font-weight: bold;
      box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);
    }
    
    #gallary ui li:nth-child(3n) {
      margin-right: 0;
    }
    
    #table {
      width: 800px;
    }
    
    #B {
      width: 200px;
    }
    
    /*# sourceMappingURL=style.css.map */

  </style>
</head>

<body>

  <!-- start #header -->
  <header id="header">

    <!-- Primary Navigation -->
    <?php require 'navbar.php'; ?>


    <!-- Primary Navigation -->



  </header>
  <!-- start #header -->

  
  <!-- start #nav-L -->
  <?php require 'nav-L.php' ?>
  
  <!-- start #nav-L -->

  
  <!-- start #main-site -->
  <?php
	$id = $_REQUEST['id'];
	if (!isset($_SESSION['product'])) {
		$_SESSION['product'] = [];
	}
	$count = 0;
	if (isset($_SESSION['product'][$id])) {
		$count = $_SESSION['product'][$id]['count'];
	}
	$_SESSION['product'][$id] = [
		'item_name' => $_REQUEST['item_name'],
		'item_price' => $_REQUEST['item_price'],
		'count' => $count + $_REQUEST['count']
	];
	?>
	<p>カートに商品を追加しました。</p>
	<hr>
	<?php
	require 'cart.php';
	?>
 
  <!-- start #main-site -->

  <!-- start #footer -->
  <footer>

  </footer>
  <!-- start #footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Owl Carousel Js file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>

  <!-- isotope plugin cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
    crossorigin="anonymous"></script>


  <!-- Custo, javaScript -->
  <script src="./index.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Ajax jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>