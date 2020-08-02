<!--/ ヘッダー -->
<?php 
	include(dirname(__FILE__).'/header.php'); 
?>
<!-- ヘッダー /-->

<body data-spy="scroll" data-offset="0" data-target="#theMenu">

  <!-- メニュー -->
  <nav class="menu" id="theMenu">
    <div class="menu-wrap">
      <h1 class="logo"><a href="index.html#home"></a></h1>
      <i class="fa fa-times-circle menu-close"></i>
      <a href="#home" class="smoothscroll">Home</a>
      <a href="#about" class="smoothscroll">About</a>
      <a href="#work" class="smoothscroll">Work</a>
      <a href="#contact" class="smoothscroll">Contact</a>
      <!--       -->
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-dribbble"></i></a>
      <a href="#"><i class="fa fa-envelope"></i></a>
    </div>

    <!-- メニュー ボタン -->
    <div id="menuToggle"><i class="fa fa-bars"></i></div>
  </nav>

  <!-- ========== HEADER SECTION ========== -->
  <section id="home" name="home"></section>
  <div id="headerwrap">
    <div class="container">
      <!--
      <div class="logo">
        <img src="img/logo.png">
      </div>
      -->
      <br>
      <div class="row">
        <h1>PORTFORIO</h1>
        <br>
        <h3></h3>
        <br>
        <br>
        
        <div class="col-lg-6 col-lg-offset-3"></div>
        
      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /headerwrap -->
  


<!-- アバウト /-->
<?php 
	include(dirname(__FILE__).'/about.php'); 
?>
<!--/ アバウト -->


<!-- ワーク /-->
<?php 
	include(dirname(__FILE__).'/work.php'); 
?>
<!--/ ワーク -->

<!-- コンタクト /-->
<?php 
	include(dirname(__FILE__).'/contact.php'); 
?>
<!--/ コンタクト -->

<!-- フッター /-->
<?php 
	include(dirname(__FILE__).'/footer.php'); 
?>
<!--/ フッター -->

</body>
</html>
