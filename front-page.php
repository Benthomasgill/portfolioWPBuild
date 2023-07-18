<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header();
?>

<div class="homepage-hero">
    <div class="hero-overlay-text">
        <p><span class="front">FRONT-END DEV.</span><br>
        <span class="living">LIVING IN   </span> <span class="perth">Perth</span><br><span class="west">Western Australia</span>
        </p>
        <div class="ct-flex">
            <div class="ct-1-3"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/concept.svg"><p>concept</p></div>
            <div class="ct-1-3"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/design.svg"><p>design</p></div>
            <div class="ct-1-3"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/build.svg"><p>build</p></div>
        </div>
    </div>
</div>

<div class="ct-flex intro-block">
    <div class="ct-1-2"></div>
    <div class="ct-1-2">
        <h2>About me.</h2><br>
        <p>I have worked as a front-end developer for the last 6 years. I started my career working in-house for the Fashion Apparel company named Brand Collective.<br><br> 
           I spent my time building, maintaining, and upgrading 10 Bigcommerce eCommerce websites. I was also responsible for building both marketing and automated 
           emails in Salesforce, Mailchimp, Campaign Monitor and Mandrill. I am currently working for the Perth based agency Stormbox building and maintaining 
           custom Wordpress and Shopify sites.</p>
    </div>
</div>

<div class="colour-banner">
    <span class="one"></span>
    <span class="two"></span>
    <span class="three"></span>
    <span class="four"></span>
    <span class="five"></span>
</div>

<div class="container">
    <?php get_template_part('inc/hero-image'); ?>
    
    
    <!-- <div class="overlay-hero">
        <img id="star" src="<?php echo get_template_directory_uri(); ?>/images/starElement.png">
        <p>Copy Callout</p>
    </div> -->
 
</div>    

<div id="banner">
    <p id="text">Superdry &#65290; Elwood &#65290; Elka Collective &#65290; Clarks &#65290; Hush Puppies &#65290; Julius Marlow &#65290; Volley &#65290; Shoes and Sox &#65290; Shoe Warehouse &#65290; Sharkbay Dive &#65290; Sharkbay 4WD &#65290; SALT Property Group &#65290; TAG Financial &#65290; In Awe Australia &#65290; Perth Glory Online Store &#65290; CDS Panel and Paint &#65290; Providence Lifestyle Haynes &#65290; Providence Lifestyle Mandurah &#65290; Superdry &#65290; Elwood &#65290; Elka Collective &#65290; Clarks &#65290; Hush Puppies &#65290; Julius Marlow &#65290; Volley &#65290; Shoes and Sox &#65290; Shoe Warehouse &#65290; Sharkbay Dive &#65290; Sharkbay 4WD &#65290; SALT Property Group &#65290; TAG Financial &#65290; In Awe Australia &#65290; Perth Glory Online Store &#65290; CDS Panel and Paint &#65290; Providence Lifestyle Haynes &#65290; Providence Lifestyle Mandurah &#65290; Superdry &#65290; Elwood &#65290; Elka Collective &#65290; Clarks &#65290; Hush Puppies &#65290; Julius Marlow &#65290; Volley &#65290; Shoes and Sox &#65290; Shoe Warehouse &#65290; Sharkbay Dive &#65290; Sharkbay 4WD &#65290; SALT Property Group &#65290; TAG Financial &#65290; In Awe Australia &#65290; Perth Glory Online Store &#65290; CDS Panel and Paint &#65290; Providence Lifestyle Haynes &#65290; Providence Lifestyle Mandurah &#65290;</p>
</div>

<!-- <p class="wavy-text"></p> -->

<div class="container">
    <?php get_template_part('inc/hero-image'); ?>
    <?php get_template_part('inc/hero-image'); ?>
    <?php get_template_part('inc/hero-image'); ?>
    <?php // get_template_part('inc/blog'); ?>
</div>  


<?php
get_footer(); ?>

