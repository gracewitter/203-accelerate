<?php
/**
 * The template for displaying the 404 page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="four-oh-four-wrapper">
    <div id="four-oh-four-gif">

            <iframe id="uh-oh-cat" src="https://giphy.com/embed/vSSdLSLbGIXio" frameborder="0"   style="pointer-events:none;"></iframe>
        <p><a href="https://giphy.com/gifs/reactiongifs-vSSdLSLbGIXio">via GIPHY</a></p>

    </div><!-- #primary -->

    <div id="four-oh-four-text">
        <h1>uh-oh . . . there's nothing here!</h1>
        <h4>Do you to read our <a href="<?php echo site_url('/blog') ?>">blog</a> or look at our <a href="<?php echo site_url('/case-studies') ?>">work</a>?</h4>
    </div>
</div>

<?php get_footer(); ?>