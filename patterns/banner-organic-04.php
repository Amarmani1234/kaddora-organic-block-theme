<?php
/**
 * Title: Banner Organic 04
 * Slug: kaddora-organic-block-theme/banner-organic-04
 * Categories: Blog
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Our Recent Blogs</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"color":{"background":"#6bb252"},"border":{"radius":"15px"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons has-background" style="border-radius:15px;background-color:#6bb252"><!-- wp:button {"style":{"color":{"background":"#6bb252"},"border":{"radius":"25px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:25px;background-color:#6bb252">View All</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|10"},"shadow":"var:preset|shadow|natural","border":{"radius":"25px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-radius:25px;padding-top:30px;padding-right:var(--wp--preset--spacing--20);padding-bottom:30px;padding-left:var(--wp--preset--spacing--20);box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:post-featured-image /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"read more","excerptLength":24} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->