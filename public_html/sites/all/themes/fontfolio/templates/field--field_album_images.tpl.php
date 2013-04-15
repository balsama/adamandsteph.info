<?php

/**
 * @file field--image.tpl.php
 * Default template implementation for all fields of type image.
 */
 // In FontFolio the default node teasers galleries  can use only
 // one image. So for teasers view-mode we want to display only the
 // first image (the first item in $items).
 if ( $element['#view_mode'] == 'teaser') {
  // Make $items to contain only 1 item;
  $items = array_slice($items, 0, 1);
 }
?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="field-items"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
      <?php print l('Download Original', 'sites/all/themes/fontfolio/download.php', array('query' => array('path' => file_create_url($item['#item']['uri'])), 'attributes' => array('class' => 'download-link'))); ?>
    <?php endforeach; ?>
  </div>
</div>

