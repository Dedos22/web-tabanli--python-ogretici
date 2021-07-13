<?php
include"baglan.php";
                $ayarlar=$db->prepare("SELECT *  FROM ayarlar");
                $ayarlar->execute();
                $ayarcek = $ayarlar->fetch(PDO::FETCH_ASSOC);

  ?>
  <head>
<style type="text/css">
  	pre {
    background: #f4f4f4;
    border: 1px solid #ddd;
    border-left: 5px solid #5c5c8a;
    color: black;
    page-break-inside: avoid;
    font-family: monospace;
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 1.6em;
    max-width: 100%;
    overflow: auto;
    padding: 1em 1.5em;
    display: block;
    word-wrap: break-word;
}
</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title><?php echo $ayarcek["site_title"]; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!--swart alert  -->
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.css">
    <script type="text/javascript" src="assets/js/sweetalert2.min.js"></script>
<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

<link rel="stylesheet" href="ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css" />

<script src="ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js" type="text/javascript"></script>

<script>hljs.initHighlightingOnLoad();</script>
  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <a href="index.php"><img src="../images/<?php echo $ayarcek["site_logo"] ?>" style="width: 150px" ></a>
              </div>
            </header>
            