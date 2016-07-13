<?php
foreach ($nodes as $node) :
    ?>
    <div class="col-md-3 col-sm-6">
        <div class="service-item" id="<?php print $node->field_color['und'][0]['value'] ?>">
            <div class="service-icon">
                <i class="<?php print $node->field_button['und'][0]['value'] ?>"></i>
            </div> <!-- /.service-icon -->
            <div class="service-content">
                <div class="inner-service">
                    <h3><?php print $node->title; ?></h3>
                    <p><?php print $node->body['und'][0]['value'] ?></p> 
                </div>
            </div> <!-- /.service-content -->
        </div> <!-- /#service-1 -->
    </div> <!-- /.col-md-3 -->
<?php endforeach; ?>