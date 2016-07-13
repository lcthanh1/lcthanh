
<?php
foreach ($nodes as $node) :
    ?>
    <div class="team-member col-md-3 col-sm-6">
        <div class="member-thumb">
            <img src="http://localhost/drupal10/sites/default/files/our_team/<?php print $node->field_image['und'][0]['filename']; ?>" alt="">
            <div class="team-overlay">
                <h3><?php print $node->title; ?></h3>
                <span><?php print $node->body['und'][0]['value'] ?></span>
                <ul class="social">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div> <!-- /.team-overlay -->
        </div> <!-- /.member-thumb -->
    </div> <!-- /.team-member -->
    </div> <!-- /.row -->
    <?php endforeach; ?>