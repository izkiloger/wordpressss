<?php
/**
 * Title: Pricing Column - List with Price at Top
 * Slug: crosswinds-framework/pricing-column-list-price-top
 * Categories: crosswinds-framework-elements
 * Viewport Width: 370
 * Inserter: true
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|xxx-small"}},"backgroundColor":"neutral","className":"pricing-column pricing-column-list-price-top","layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"last-bottom","cbFillHeight":true} -->
<div class="wp-block-group pricing-column pricing-column-list-price-top has-neutral-background-color has-background last-bottom-layout cb-fill-height-parent" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:heading {"fontSize":"large","level":3} -->
<h3 class="wp-block-heading has-large-font-size"><?php _e( 'Plan Title', 'crosswinds-framework' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"max-36"} -->
<p class="has-max-36-font-size" style="font-style:normal;font-weight:700">$100/mo</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php _e( 'Sign U', 'crosswinds-framework' ); ?>p</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
