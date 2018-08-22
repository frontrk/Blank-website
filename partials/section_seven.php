<?php require 'section_seven_array_of_authors.php'; ?>



            <section id="team" class="testowa">

                <div class="team_element_paralax"></div>


                <!-- container sam w soie CENTRUJE!!! -->
                <div class="team_container container">

                    <div class="row align-items-center flex-column justify-content-center align-items-center">
                        <h4>BEHIND</h4>
                        <h3>The Scene</h3>
                    </div>



                    <div class="row" style="align-content: center">


            <?php 
                $length = count($authors);
                for ($i = 0; $i < $length; $i++) {  ?>
                

                        <!-- 1zdj -->
                        <div class="col-12 col-md-3 zdj_1">
                            <div class="team_block_image">
                                <div class="team_block_image_overlay">
                                    <div class="row margin_zero align-items-center c_white d-flex">
                                        <p><?php echo $authors[$i]['content']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <!-- podpis zdjecia -->
                            <div class="row team_subtitle justify-content-center align-items-center flex-column">
                                <h3><?php echo $authors[$i]['author']; ?></h3>
                                <p><?php echo $authors[$i]['job']; ?></p>
                            </div>
                        </div>

  <?php } ?>  



                   
            </section>