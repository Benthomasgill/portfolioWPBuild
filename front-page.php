<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header();
?>

<div class="homepage-hero ">
    <div class="hero-overlay-text">
        <p><span class="front glow">Hello I'm Ben Thomas-Gill <br>I'm a Front-End Dev.</span><br>
        <!-- <span class="living">LIVING IN   </span> <span class="perth">Perth</span><br><span class="west">Western Australia</span> -->
        </p>
        <!-- <div class="ct-flex">
            <div class="ct-1-3"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/concept.svg"><p>concept</p></div>
            <div class="ct-1-3"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/design.svg"><p>design</p></div>
            <div class="ct-1-3"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/build.svg"><p>build</p></div>
        </div> -->
        <a class="cta">
            <svg>
                <rect x="0" y="0" fill="none" width="180" height="55" />
            </svg>
            Get In Touch
        </a>
    </div>
    <?php get_template_part('inc/hero-overlay'); ?>

</div>

<div class="ct-flex intro-block">
    <div class="ct-1-2"></div>
    <div class="ct-1-2">
        <h2>About me.</h2><br>
        <p>Over the past six years, I have established myself as a front-end developer with a diverse and enriching professional journey. My career began at <a target="_new" href="https://www.brandcollective.com.au/">Brand Collective</a>, an esteemed Fashion Apparel company, where I honed my expertise working across various projects.<br><br>
           During my tenure, I devoted my efforts to constructing, enhancing, and managing ten distinct <strong>Bigcommerce</strong> eCommerce websites. Additionally, I took charge of crafting marketing and automated emails using platforms such as <strong>Salesforce, Mailchimp, Campaign Monitor,</strong> and <strong>Mandrill</strong>.<br><br>
           Presently, I am an integral part of the <a target="_new" href="https://stormbox.com.au/">Stormbox agency</a>, located in Perth. My responsibilities encompass the creation and maintenance of bespoke <strong>Wordpress</strong> and <strong>Shopify</strong> sites, along with the development of impactful marketing emails. Notably, I have taken on a leadership role, successfully project managing the development team for the past six months.<br><br>
           As part of my continuous professional growth, I have ventured into the realms of SEO and UX, expanding my skill set and contributing further value to the projects I undertake.</p>
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

