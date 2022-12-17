<?php
/* 
Template name: home
*/ 
get_header();?>


    <!-- hero part start -->
    <section class="container hero text-center">
      <div class="row hero_title">
        <?php dynamic_sidebar('h_title');?>
      </div>
      
      <div class="row hero_card mt-5">
          <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                  <?php dynamic_sidebar('card_img');?>
                    <div class="card-body">
                      <?php dynamic_sidebar('card_body');?>
                    </div>
                </div>
          </div>
          <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                  <?php dynamic_sidebar('card_img2');?>
                    <div class="card-body">
                      <?php dynamic_sidebar('card_body2');?>
                    </div>
                </div>
          </div>
          <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                  <?php dynamic_sidebar('card_img3');?>
                    <div class="card-body">
                      <?php dynamic_sidebar('card_body3');?>
                    </div>
                </div>
          </div>

      </div>
    </section>
    <!-- hero part end -->
    <!-- photo part start -->
    <section class="container photo mt-5 mb-5">
      <div class="row">
        <div class="col-sm-5">
        <img src="<?php echo get_template_directory_uri().'/accets/images/line.jpg'; ?>" alt="">
        </div>
        <div class="col-sm-2">
        <h4>Recent Photos</h4>
          <p>Some latest project pictures</p>
        </div>
        <div class="col-sm-5">
        <img src="<?php echo get_template_directory_uri().'/accets/images/line.jpg'; ?>" alt="">
        </div>
      </div>
      <div class="row">
      <div class="col-sm-4">
              <div class="card" style="width: 16rem;">
                  <?php dynamic_sidebar('photoimg1');?>
                    <div class="card-body">
                    <?php dynamic_sidebar('phototext1');?>
                    </div>
          </div>  
      </div>
     
     <div class="col-sm-4">
     <div class="card" style="width: 16rem;">
     <?php dynamic_sidebar('photoimg2');?>
  <div class="card-body">
  <?php dynamic_sidebar('phototext2');?>
  </div>
</div>
     </div>
     <div class="col-sm-4">
     <div class="card" style="width: 16rem;">
     <?php dynamic_sidebar('photoimg3');?>
  <div class="card-body">
  <?php dynamic_sidebar('phototext3');?>
  </div>
</div>
     </div>
    </section>
    
    <!-- photo part end -->
    <!-- news part start -->
    <section class="container news mb-5 mt-5">
      <div class="row">
      <div class="col-sm-5">
        <img src="<?php echo get_template_directory_uri().'/accets/images/line.jpg'; ?>" alt="">
        </div>
        <div class="col-sm-2">
        <h4>NEWS & EVENTS</h4>
          <p>CLICK HERE TO VIEW ALL</p>
        </div>
        <div class="col-sm-5">
        <img src="<?php echo get_template_directory_uri().'/accets/images/line.jpg'; ?>" alt="">
        </div>
      </div>
      <div class="row">
        <?php $qry2=new wp_query([
           'post_type'=>'post',
           'category_name'=>'news',
        ]);?>
      <header class="slider container-fluid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">

   
  <?php 
  $x=0;
  while($qry2->have_posts()){$qry2->the_post(); 
    $x++;
  ?>
    <div class="carousel-item <?=($x==1)?'active':''?>">
        <?php the_title();?>
    </div>
  <?php } ?>
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
      </div>
    </section>
    <!-- news part end -->
    <section class="container">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
    </section>

    <?php get_footer();?>

<?php wp_footer();?>
</body>
</html>