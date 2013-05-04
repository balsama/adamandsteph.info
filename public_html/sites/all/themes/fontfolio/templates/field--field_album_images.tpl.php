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

drupal_add_js(base_path() . drupal_get_path('theme', 'fontfolio') . '/libraries/fancybox/jquery.fancybox-1.3.4.js');
?>

<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="field-items"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
        <?php print l(render($item), file_create_url($item['#item']['uri']), array('html' => TRUE, 'attributes' => array('class' => 'box', 'rel' => 'gallery', 'title' => $item['#item']['fid'], 'alt' => 'foob'))); ?>
        <div class="photo-options">
          <a class="plusoneapi-votes" id="plusoneapi-votes-<?php print $item['#item']['fid']; ?>" rel="<?php print $item['#item']['fid']; ?>" title="Plus 1">
            <span class="heart">Votes:</span>
            <span class="count">
              <?php
              $votes = votingapi_recalculate_results('plusoneapi', $item['#item']['fid']);
              if (isset($votes[0])) {
                print $votes[0]['value'];
              }
              ?>
            </span>
          </a>
          <?php print l('Download Original', 'sites/all/themes/fontfolio/download.php', array('query' => array('path' => file_create_url($item['#item']['uri'])), 'attributes' => array('class' => 'download-link', 'title' => 'Download original file'))); ?>
        </div>
    <?php endforeach; ?>
  </div>
</div>
<?php
drupal_add_js(drupal_get_path('module', 'plusoneapi') . '/plusoneapi.js');
drupal_add_css(drupal_get_path('theme', 'fontfolio') . '/libraries/justified/justified.css');
drupal_add_js(drupal_get_path('theme', 'fontfolio') . '/libraries/justified/justified.js');
drupal_add_css(drupal_get_path('theme', 'fontfolio') . '/libraries/colorbox/colorbox.css');
drupal_add_js(drupal_get_path('theme', 'fontfolio') . '/libraries/colorbox/colorbox.js');
?>

<script>
jQuery(document).ready(function() {
  if (screen.width > 1024) {
    jQuery('img').fancybox({
      'type': 'image',
      'overlayColor': '#000',
      'overlayOpacity': '0.7',
      'padding': 0,
      'margin': 70,
      'centerOnScroll': true,
      'titlePosition': 'inside',
    });
  }
  else {
    jQuery('.box').click(function(e) {
      e.preventDefault();
    });
  }

  if (screen.width > 1024) {
    jQuery('.photo-options').html('');
    jQuery('.photo-options').hide();
    jQuery(".field-items").justifiedGallery({
      'sizeSuffixes' : {
            'lt100':'',
            'lt240':'',
            'lt320':'',
            'lt500':'',
            'lt640':'',
            'lt1024':''
      },
      'usedSuffix':'lt500',
      'rowHeight': 320,
      'captions': true,
      'lightbox': false,
    });
  }
});
</script>
