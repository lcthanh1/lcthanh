<div class="site-slider">
    <div class="slider">
        <div class="flexslider">
            <ul class="slides">
                <?php
                foreach ($nodes as $node) :
                    ?>
                    <li>
                        <div class="overlay"></div>
                        <img src="http://localhost/drupal10/sites/default/files/slideshow/<?php print $node->field_image['und'][0]['filename']; ?>" alt="">
                        <div class="slider-caption visible-md visible-lg">
                            <h2><?php print $node->title; ?></h2>
                            <p><?php print $node->body['und'][0]['value'] ?></p>
                            <a href="#" class="slider-btn"><?php print $node->field_button_name['und'][0]['value'] ?></a>
                        </div>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div> <!-- /.flexslider -->
    </div> <!-- /.slider -->
</div> <!-- /.site-slider -->

