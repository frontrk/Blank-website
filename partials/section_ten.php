
<section id="posts">

    <div class="row sec_tabs_hed flex-column justify-content-center marg">
        <h4>NEWS</h4>
        <h3>Latest Post</h3>
    </div>

    <div class="owl-carousel owl-theme">

    <?php
        $wpisy_zapytanie = "SELECT * FROM posts";
        $wpisy_array = mysqli_query($link,$wpisy_zapytanie);
        $wpisy_array_done = mysqli_fetch_array($wpisy_array);
    ?>
  
    <?php do { ?>
   
    <div class="post">
        <img src="img/post1.jpg" class="img-fluid">
        <h3><?php echo $wpisy_array_done["title"];?></h3>
        <p><?php echo $wpisy_array_done["content"];?></p>
        <span class="post-date">April 1, 2018</span>
        <span class="post-comment">1</span>
        <span class="post-like">181</span>
    </div>

 <?php } while ( $wpisy_array_done = mysqli_fetch_array($wpisy_array) ); ?>

</section>