<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header();
?>

<div class="homepage-hero ">
    <div class="hero-overlay-text">
        <p><span class="front">Hello I'm Ben Thomas-Gill <br>I'm a Front-End Dev.</span><br>
        </p>
        <a class="cta"><svg><rect x="0" y="0" fill="none" width="180" height="55" /></svg>Get In Touch</a>
    </div>

    <!-- Grid to target the add squares function -->
    <div class="grid"></div>
</div>

<div class="ct-flex intro-block">
    <div class="ct-1-2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Ben-Thomas-Gill.png">
    </div>
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

<div class="coloured-background">
    <div class="container featured-projects">
        <h2>Featured Projects</h2>
        <div class="ct-flex">
            <div class="ct-1-2"></div>
            <div class="ct-1-2">
                <h3><strong>In Awe Australia</strong><br>
                Website Design, Co-build, SEO<br>
                Woocommerce & Wordpress
                </h3>
                <p>In Awe Australia is an in house brand I was lucky enough to help build from the brands inception.<br><br>
                I faced challenges designing, building and adjusting the websites direction based on data collected from hotjar and other analyitcs tools.
                </p>
            </div>
        </div>
        <div class="sb-flex">
            <div class="ct-1-2">
                <h3><strong>Tag Finance Group</strong><br>
                Website Build<br>
                Wordpress
                </h3>
                <p>In Awe Australia is an in house brand I was lucky enough to help build from the brands inception. <br><br>
                I faced challenges designing, building and adjusting the websites direction based on data collected from hotjar and other analyitcs tools.
                </p>
            </div>
            <div class="ct-1-2"></div>
        </div>
        <div class="ct-flex">
            <div class="ct-1-2"></div>
            <div class="ct-1-2">
                <h3><strong>Hush Puppies</strong><br>
                Campaign Pages Build<br>
                Big Commerce
                </h3>
                <p>The Hush Puppies Community pages were a great project around the brand's sustainability focus. Its designs utilised a news article design with custom font and tricky div layouts to be built.<br><br>
                I enjoyed creating these pages not only for the different designs but also because of the great concept they represented.
                </p>
            </div>
        </div>
        <div class="sb-flex">
            <div class="ct-1-2">
                <h3><strong>Tag Finance Group</strong><br>
                Website Build<br>
                Wordpress
                </h3>
                <p>In Awe Australia is an in house brand I was lucky enough to help build from the brands inception. <br><br>
                I faced challenges designing, building and adjusting the websites direction based on data collected from hotjar and other analyitcs tools.
                </p>
            </div>
            <div class="ct-1-2"></div>
        </div>
    </div>
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

