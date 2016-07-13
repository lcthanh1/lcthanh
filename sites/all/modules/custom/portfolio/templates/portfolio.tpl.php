
<?php
foreach ($nodes as $node) :
    ?>
    <div class="portfolio-item col-md-3 col-sm-6">
        <div class="portfolio-thumb">
            <img src="http://localhost/drupal10/sites/default/files/portfolio/<?php print $node->field_image['und'][0]['filename']; ?>" alt="">
            <div class="portfolio-overlay">
                <h3><?php print $node->title; ?></h3>
                <p><?php print $node->body['und'][0]['value'] ?></p>
                <a href="http://localhost/drupal10/sites/default/files/portfolio/<?php print $node->field_image['und'][0]['filename']; ?>" data-rel="lightbox" class="expand">
                    <i class="fa fa-search"></i>
                </a>
            </div> <!-- /.portfolio-overlay -->
        </div> <!-- /.portfolio-thumb -->
    </div> <!-- /.portfolio-item -->
<?php endforeach; ?>
