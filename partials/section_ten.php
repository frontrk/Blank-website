<?php require 'section_ten_array_of_posts.php'; ?>



<section id="posts">

    <div class="row sec_tabs_hed flex-column justify-content-center marg">
        <h4>NEWS</h4>
        <h3>Latest Post</h3>
    </div>

    <div class="owl-carousel owl-theme">

    <?php foreach ($posts as $post) { ?>

    <div class="post">
        <img src="img/post1.jpg" class="img-fluid">
        <h3><?php echo $post['title']; ?></h3>
        <p><?php echo $post['content']; ?></p>
        <span class="post-date">April 1, 2018</span>
        <span class="post-comment">1</span>
        <span class="post-like">181</span>
    </div>
    <?php } ?>  

</section>