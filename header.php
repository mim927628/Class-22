<!DOCTYPE html>
<html <?php language_attributes( );?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    
</head>
<body>
    <!-- header part start -->

    <header class="slider container-fluid">
        <?php
        $qry=new wp_query([
            'post_type'=>'post',
            'category_name'=>'slid',
        ]);
        ?>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">

   
  <?php 
  $x=0;
  while($qry->have_posts()){the_post(); 
    $x++;
  ?>
    <div class="carousel-item <?=($x==1)?'active':''?>">
        <?php the_post_thumbnail();?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
  <?php } ?>

    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </header>
    <!-- header part end -->
    <!-- logo part start -->
    <section class="container-fluid logo pl-2">
        <div class="row">
            <div class="col-sm-6 logo_left">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6 logo_right text-end">
                <?php dynamic_sidebar('ltr');?>
            </div>
        </div>
    </section>
    <!-- logo part end -->
   



    <!-- menu part start -->
      <section class="container-fluid menu_1"> 
        <div class="row">
        <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">


    <?php 
      wp_nav_menu(array(
        'theme_location'=>'TM',
        'menu_class'=>'navbar-nav menu_item'
    ));
    ?>
        </div>
    </section>

    <!-- menu part end -->


    <section class="container search">
      <div class="row">
        <div class="col-sm-8">1</div>
        <div class="col-sm-4 text end">
          <form action=""><input type="text" value="<?php echo get_search_query();?>" name="s">
        <button>Search</button>
        </form>
        </div>
      </div>
    </section>