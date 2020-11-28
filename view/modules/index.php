

<header> 
    <?php
        include_once('view/nav.php');
    ?>
</header>

<body>
  <?php
    $mvc = new viewController();
    $mvc -> enlacesPaginasController();
  ?>
</body>

<footer>

  <?php
  
  include_once('view/footer.php');
  ?>

</footer>
   

