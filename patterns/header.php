<?php
/**
 * Title: Header
 * Slug: kaddora-organic-block-theme/header
 * Categories: header
 */
?>
<!-- wp:group {"className":"kaddora-header","layout":{"type":"default"}} -->
<div class="wp-block-group kaddora-header"><!-- wp:group {"className":"top-bar","style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"0","bottom":"0"}},"color":{"background":"#325026"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"1rem"}},"textColor":"base-2","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center","flexWrap":"wrap"}} -->
<div id="top-bar" class="wp-block-group top-bar has-base-2-color has-text-color has-background has-link-color" style="background-color:#325026;margin-top:0;margin-bottom:0;font-size:1rem"><!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit"}}} -->
<p class="has-text-align-center"><strong>🚚 Free delivery on orders over ₹499</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>📞 call us: 1800-123-FOOD</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-main","style":{"spacing":{"padding":{"top":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","orientation":"horizontal"}} -->
<div class="wp-block-group header-main" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"site-identity","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group site-identity"><!-- wp:site-logo {"width":68} /-->

<!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#417c29"},"elements":{"link":{"color":{"text":"#417c29"}}}}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#417c29"><strong>Kaddora TecH</strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"search-actions","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group search-actions"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search for products","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"25px"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-align-center wp-element-button">Login</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Sign UP</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-nav has-link-color","style":{"color":{"background":"#6bb252"},"spacing":{"padding":{"top":"0rem","bottom":"0rem","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"textColor":"base","fontSize":"large","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div id="site-navigation" class="wp-block-group header-nav has-link-color has-base-color has-text-color has-background has-large-font-size" style="background-color:#6bb252;padding-top:0rem;padding-right:var(--wp--preset--spacing--30);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--30)"><!-- wp:navigation {"metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"typography":{"fontSize":"1.4rem"}},"fontFamily":"system-sans-serif","layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-between"}} -->
<!-- wp:navigation-link {"label":"Home","url":"/"} /-->

<!-- wp:navigation-link {"label":"Shop","url":"/shop"} /-->

<!-- wp:navigation-link {"label":"My Cart","url":"/cart"} /-->

<!-- wp:navigation-link {"label":"Blogs","url":"/blog"} /-->

<!-- wp:navigation-link {"label":"About","url":"/about"} /-->

<!-- wp:navigation-link {"label":"Contact","url":"/Contact"} /-->
<!-- /wp:navigation -->

<!-- wp:group {"style":{"typography":{"fontSize":"1.3rem"},"spacing":{"padding":{"top":"0rem","bottom":"0rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
<div class="wp-block-group" style="padding-top:0rem;padding-bottom:0rem;font-size:1.3rem"><!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"alt","iconClass":"wc-block-customer-account__account-icon","fontSize":"large"} /-->

<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","hasHiddenPrice":false,"productCountVisibility":"always"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->