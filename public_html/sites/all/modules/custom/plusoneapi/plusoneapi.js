jQuery(document).ready(function() {
  jQuery('.plusoneapi-votes').click(function() {
    var id = jQuery(this).attr('rel');
    jQuery(this).children('.count').load('/plusoneapi-vote/set/' + id);
    jQuery(this).children('.heart').fadeTo(100, 0.33, function() {
      jQuery(this).fadeTo(100, 0.99, function() {
        jQuery(this).fadeTo("slow", 0.66);
      })
    });
  });
});
