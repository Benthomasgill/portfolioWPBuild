<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header();
?>

<div class="homepage-hero ">
    <div class="hero-overlay-text">
        <p class="hello">Hello, I'm</p>
        <p class="p-front"><span class="front">Ben Thomas-Gill <br>I build for the web.</span><br>
        </p>
        <p>I'm a Front-End Developer, Web Designer, Digital Project Manager, SEO Enthusiast & UI/UX student.</p>
        <a href="#featured-products" class="cta"><svg><rect x="0" y="0" fill="none" width="180" height="55" /></svg>View My Work</a>
    </div>


    <!-- Grid to target the add squares function -->
    <div class="grid"></div>
</div>

<div class="ct-flex intro-block">
    <div class="ct-1-2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/benthomasgill.jpg">
    </div>
    <div class="ct-1-2">
        <h2>About me.</h2><br>
        <p>Over the past six years, I have established myself as a front-end developer with a diverse and enriching professional journey. My career began at <a target="_new" href="https://www.brandcollective.com.au/">Brand Collective</a>, an esteemed Fashion Apparel company, where I honed my expertise working across various projects.<br><br>
           During my tenure, I devoted my efforts to constructing, enhancing, and managing ten distinct <strong>Bigcommerce</strong> eCommerce websites. Additionally, I took charge of crafting marketing and automated emails using platforms such as <strong>Salesforce, Mailchimp, Campaign Monitor,</strong> and <strong>Mandrill</strong>.<br><br>
           Presently, I am an integral part of the <a target="_new" href="https://stormbox.com.au/">Stormbox agency</a>, located in Perth. My responsibilities encompass the creation and maintenance of bespoke <strong>Wordpress</strong> and <strong>Shopify</strong> sites, along with the development of impactful marketing emails. Notably, I have taken on a leadership role, successfully project managing the development team for the past six months.<br><br>
        </p>
    </div>
</div>

<div id="featured-products" class="colour-banner">
    <span class="one"></span>
    <span class="two"></span>
    <span class="three"></span>
    <span class="four"></span>
    <span class="five"></span>
</div>

<div class="coloured-background">
    <div class="container featured-projects">
        <div class="headline">
            <h2 class="headline-copy">Featured Projects</h2>
        </div>
        <div class="slide">
            <div class="ct-flex slider-block slider-block-white">
                <div class="ct-1-2">
                    <img style="max-width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/inawe.webp">
                </div>
                <div class="ct-1-2 slider-text">
                    <h3><strong>In Awe Australia</strong><br>
                    Website Design, Co-build, SEO<br>
                    Woocommerce & Wordpress
                    </h3>
                    <p>In Awe Australia is an in-house brand I was lucky enough to help build from the brands inception.<br><br>
                    I faced challenges designing, building and adjusting the websites direction based on data collected from hotjar and other analytics tools.
                    </p>
                </div>
            </div>
            <div class="colour-banner">
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
                <span class="four"></span>
                <span class="five"></span>
            </div>
        </div>
        <div class="ct-flex slider-block rev-slider">
            <div class="ct-1-2 second-block slider-text">
                <h3><strong>Tag Finance Group</strong><br>
                Website Build<br>
                Wordpress
                </h3>
                <p>In Awe Australia is an in house brand I was lucky enough to help build from the brands inception. <br><br>
                I faced challenges designing, building and adjusting the websites direction based on data collected from hotjar and other analyitcs tools.
                </p>
            </div>
            <div class="ct-1-2">
                <img style="max-width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/taggroup.webp">
            </div>
        </div>
        <div class="slide">
        <div class="ct-flex slider-block slider-block-white">
            <div class="ct-1-2">
                <img style="max-width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/hushpuppies.webp">
            </div>
            <div class="ct-1-2 slider-text">
                <h3><strong>Hush Puppies</strong><br>
                Campaign Pages Build<br>
                BigCommerce
                </h3>
                <p>The Hush Puppies Community pages were a great project around the brand's sustainability focus. Its designs utilised a news article design with custom font and tricky div layouts to be built.<br><br>
                I enjoyed creating these pages not only for the different designs but also because of the great concept they represented.
                </p>
            </div>
        </div>
        <div class="colour-banner">
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
                <span class="four"></span>
                <span class="five"></span>
            </div>
        </div>
        <div class="ct-flex slider-block rev-slider">
            <div class="ct-1-2 second-block slider-text">
                <h3><strong>SALT Property Group</strong><br>
                Redesign/Project Management
                </h3>
                <p>In Awe Australia is an in house brand I was lucky enough to help build from the brands inception. <br><br>
                I faced challenges designing, building and adjusting the websites direction based on data collected from hotjar and other analytics tools.
                </p>
            </div>
            <div class="ct-1-2">
                <img style="max-width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/SALT.webp">
            </div>
        </div>
    </div>
</div>    


<!-- <p class="wavy-text"></p> -->

<div class="container-the-rest">
    <div class="the_rest">
        <h2>And The Rest...</h2>    
        <div class="ct-flex">
            <div class="ct-1-5"><a href="https://shoesandsox.com.au/" target="_new"><img alt="Shoes and Sox" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/sns.webp"></a></div>
            <div class="ct-1-5"><a href="https://www.allused.com.au/" target="_new"><img alt="All Used Equipmemt" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/allused.webp"></a></div>
            <div class="ct-1-5"><a href="https://cdspanel.com.au/" target="_new"><img alt="CDS Panel and Paint" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/cds.webp"></a></div>
            <div class="ct-1-5"><a href="https://clarks.com.au/" target="_new"><img alt="Clarks" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/clarks.webp"></a></div>
            <div class="ct-1-5"><a href="https://elkacollective.com/" target="_new"><img alt="Elka Collective" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/elka.webp"></a></div>
            <div class="ct-1-5"><img alt="Elwood (Site Retired)" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/elwood.webp"></div>
            <div class="ct-1-5"><a href="https://helenavalleylifestyle.com.au/" target="_new"><img alt="Helena Valley Resort" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/helenaValley.webp"></a></div>
            <div class="ct-1-5"><a href="https://hushpuppies.com.au/" target="_new"><img alt="Hush Puppies" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/hushpuppies.webp"></a></div>
            <div class="ct-1-5"><a href="https://juliusmarlow.com.au/" target="_new"><img alt="Julius Marlow" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/jm.webp"></a></div>
            <div class="ct-1-5"><a href="https://junglefloraandco.com/" target="_new"><img alt="Jungle Flora and Co" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/jungle.webp"></a></div>
            <div class="ct-1-5"><a href="https://parryscarpets.com.au/" target="_new"><img alt="Parrys Carpets" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/parrys.webp"></a></div>
            <div class="ct-1-5"><a href="https://membership.perthglory.com.au/" target="_new"><img alt="Perth Glory Store" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/perthglory.webp"></a></div>
            <div class="ct-1-5"><a href="https://providencelifestyle.com.au/" target="_new"><img alt="Providence Lifestyle" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/provmandurah.webp"></a></div>
            <div class="ct-1-5"><img alt="Sharkbay Dive (Site Retired)" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/sharkbay.webp"></div>
            <div class="ct-1-5"><a href="https://superdry.com.au/" target="_new"><img alt="Superdry" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/sd.webp"></a></div>
            <div class="ct-1-5"><a href="https://shoewarehouse.com.au/" target="_new"><img alt="Shoe Warehouse" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/swh.webp"</a></div>
            <div class="ct-1-5"><a href="https://volley.com.au/" target="_new"><img alt="Volley" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/volley.webp"></a></div>
            <div class="ct-1-5"><a href="https://elwd.com.au/" target="_new"><img alt="ELWD Workwear" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/elwd.webp"></a></div>
            <div class="ct-1-5"><a href="https://www.arasgroup.com.au/" target="_new"><img alt="ARAS Industrial Abseiling" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/aras.webp"></a></div>
            <div class="ct-1-5"><img alt="Sharkbay 4WD (Site Retired)" class="img" src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/4wd.webp"></div>
        </div>
    </div>


    <?php // get_template_part('inc/blog'); ?>
</div>  


<div id="banner">
    <p id="text">Superdry &#65290; Elwood &#65290; Elka Collective &#65290; Clarks &#65290; Hush Puppies &#65290; Julius Marlow &#65290; Volley &#65290; Shoes and Sox &#65290; Shoe Warehouse &#65290; Sharkbay Dive &#65290; Sharkbay 4WD &#65290; SALT Property Group &#65290; TAG Financial &#65290; In Awe Australia &#65290; Perth Glory Online Store &#65290; CDS Panel and Paint &#65290; Providence Lifestyle Haynes &#65290; Providence Lifestyle Mandurah &#65290; Superdry &#65290; Elwood &#65290; Elka Collective &#65290; Clarks &#65290; Hush Puppies &#65290; Julius Marlow &#65290; Volley &#65290; Shoes and Sox &#65290; Shoe Warehouse &#65290; Sharkbay Dive &#65290; Sharkbay 4WD &#65290; SALT Property Group &#65290; TAG Financial &#65290; In Awe Australia &#65290; Perth Glory Online Store &#65290; CDS Panel and Paint &#65290; Providence Lifestyle Haynes &#65290; Providence Lifestyle Mandurah &#65290; Superdry &#65290; Elwood &#65290; Elka Collective &#65290; Clarks &#65290; Hush Puppies &#65290; Julius Marlow &#65290; Volley &#65290; Shoes and Sox &#65290; Shoe Warehouse &#65290; Sharkbay Dive &#65290; Sharkbay 4WD &#65290; SALT Property Group &#65290; TAG Financial &#65290; In Awe Australia &#65290; Perth Glory Online Store &#65290; CDS Panel and Paint &#65290; Providence Lifestyle Haynes &#65290; Providence Lifestyle Mandurah &#65290;</p>
</div>

<div class="email-background">
    <div class="ct-flex email">
        <div class="ct-1-2">
            <h3>Email Marketing Expert</h3>
            <p>I have built countless marketing emails in <strong>Mailchimp</strong>, <strong>Campaign Monitor</strong> & <strong>Salesforce</strong> during my time as a front-end developer. <br><br>From the design, to the build, all the way down to the open and click through rate. I have a keen interest in email marketing and believe it's still a valuable part of any brands marketing strategy.</p>
        </div>
        <div class="ct-1-2">
            <img alt="Email marketing on three different devices" src="<?php echo get_template_directory_uri(); ?>/images/emailMockup.png">
        </div>
    </div>
</div>

<div class="platforms-block">
    <div class="container">
        <div class="ct-flex">
            <div class="ct-1-2">
                <div class="ct-flex logos">
                    <div class="ct-1-3"><img title="Wordpress" alt="Wordpress" src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/wp.png"></div>
                    <div class="ct-1-3"><img title="Shopify" alt="Shopify" src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/shopify.png"></div>
                    <div class="ct-1-3"><img title="BigCommerce" alt="BigCommerce" src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/bigCommerce.png"></div>
                    <div class="ct-1-3"><img title="Wix" alt="Wix" src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/wix.png"></div>
                    <div class="ct-1-3"><img title="Magento" alt="Magento" src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/magento.png"></div>
                    <div class="ct-1-3"><img title="Squarespace" alt="Squarespace" src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/squarespace.png"></div>
                </div>
            </div>
            <div class="ct-1-2">
                <h3>So Many Platforms</h3>
                <p>Although I started my development journey working with <strong>Magento</strong> and <strong>BigCommerce</strong>. Most recently I’ve been working with <strong>Wordpress</strong>, <strong>Shopify</strong> and <strong>WooCommerce</strong>.</p>
            </div>
        </div>
    </div>
</div>

<div class="skills-block">
    <h3>
        <span class="first">Nunchuck Skills, Bow Hunting Skills,</span><br>
        <span class="second">Computer Hacking Skills...</span>
    </h3>
    <p>During my time as a dev I’ve been tasked with setting up tools like Google Tag Manager, and the now retired Google Optimize. I’m keenly interested in A/B testing, the science of creating an amazing user experiences, optimising sales funnels and generally asking why?<br><br>
    I have also recently started to dip my toe into the world of SEO, and am greatly enjoying identifying oppurtunties and implementing improvements.</p>
</div>


<div class="homepage-contact">
    <div class="chat-block">
    <h3>Want to Have a Chat About a Project or <br>Better Yet Want me as Part of Your Team?</h3>
    <p><strong>Email:</strong> contact@benthomasgill.net<br>
       <strong>Phone:</strong> 0433359760
    </p>
</div>
</div>

<script>
jQuery(".img").wrap('<div class="alt-wrap"/>');

jQuery(".img").each(function() {
    jQuery(this).after('<p class="alt">' + jQuery(this).attr('alt') + '</p>');
})
</script>

<?php
 get_footer(); ?>

