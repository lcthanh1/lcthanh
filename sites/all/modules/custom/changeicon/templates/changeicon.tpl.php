<?php
foreach ($nodes as $node) :
  ?>
  <li><a href="<?php print $node->field_path['und'][0]['value'] ?>" 
         class="<?php print $node->field_icon['und'][0]['value'] ?>"></a></li>
<?php endforeach; ?>