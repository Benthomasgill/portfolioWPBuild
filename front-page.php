<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header();

$star = get_template_directory_uri() . "/images/icons/star.svg";
?>

<div class="homepage-hero ">
    <div class="hero-overlay-text">
        <p class="hello">Hello, I'm</p>
        <p class="p-front"><span class="front">Ben Thomas-Gill <br>I build for the web.</span><br>
        </p>
        <p>I'm a Digital Project Manager, Front-End Developer, Web Designer, SEO Enthusiast & UI/UX student.</p>
        <a href="#featured-products" class="cta"><svg><rect x="0" y="0" fill="none" width="180" height="55" /></svg>View My Work</a>
    </div>


    <!-- Grid to target the add squares function -->
    <div class="grid"></div>
</div>

<div class="ct-flex intro-block">
    <div class="ct-1-2 image-container">
        <img class="lozad" alt="Ben Thomas-Gill" data-src="<?php echo get_template_directory_uri(); ?>/images/benthomasgill.jpg">
        <div class="cta-block">
            <div class="star-1"><img alt="star" class="lozad" data-src="<?php echo $star ?>"></div>
            <div class="star-2"><img alt="star" class="lozad" data-src="<?php echo $star ?>"></div>
            <div class="star-3"><img alt="star" class="lozad" data-src="<?php echo $star ?>"></div>
            <div class="star-4"><img alt="star" class="lozad" data-src="<?php echo $star ?>"></div>
            <div class="star-5"><img alt="star" class="lozad" data-src="<?php echo $star ?>"></div>
            <div class="star-6"><img alt="star" class="lozad" data-src="<?php echo $star ?>"></div>
            <div class="star-7"><img alt="star" class="lozad" data-src="<?php echo $star ?>"></div>
            <div class="star-8"><img alt="star" class="lozad" data-src="<?php echo $star ?>"></div>
            <div class="star-9"><img alt="star" class="lozad" data-src="<?php echo $star ?>"></div>
            <div class="star-10"><img alt="star" class="lozad" data-src="<?php echo $star ?>"></div>
            <a href="mailto:contact@benthomasgill.net"><p>GET IN<br>TOUCH</p></a>
        </div>
    </div>
    <div class="ct-1-2">
        <h2>About me.</h2><br>
        <p>Over the past six years, I have established myself as a Digital Project Manager with a diverse and enriching professional journey. My career began at <a target="_new" href="https://www.brandcollective.com.au/">Brand Collective</a>, an esteemed Fashion Apparel company, where I honed my front-end developer skills working across various projects.<br><br>
           During my tenure, I devoted my efforts to constructing, enhancing, and managing ten distinct <strong>Bigcommerce</strong> eCommerce websites. Additionally, I took charge of crafting marketing and automated emails using platforms such as <strong>Salesforce, Mailchimp, Campaign Monitor,</strong> and <strong>Mandrill</strong>.<br><br>
           Presently, I am an integral part of the <a target="_new" href="https://stormbox.com.au/">Stormbox agency</a>. Working remotely I have been tasked with managing a team of developers, making sure our team delivers high quality websites and supporting digital assets.<br><br>
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
                    <img style="max-width:100%;" class="lozad" alt="In Awe Australia" data-src="<?php echo get_template_directory_uri(); ?>/images/inawe.webp">
                </div>
                <div class="ct-1-2 slider-text">
                    <h3><strong>In Awe Australia</strong><br>
                    Website Design, Project Management, Co-build & SEO<br>
                    Woocommerce & Wordpress
                    </h3>
                    <p>In Awe Australia is an in-house brand I was lucky enough to help build from the brands inception.<br><br>
                    I faced challenges designing, building and adjusting the websites direction based on data collected from hotjar and other analytics tools.
                    </p>
                </div>
            </div>
        </div>

        <div class="ct-flex slider-block rev-slider">
            <div class="ct-1-2 second-block slider-text">
                <h3><strong>PCB Group Phase 1 Launch</strong><br>
                Project Management<br>
                
                </h3>
                <p>This project incorperated the launch of three separate websites (<a target="_new" href="https://pcbcontractors.com/">PCB Contractors</a>, <a target="_new" href="https://moombakipcb.com/">Moombaki PCB</a> & <a target="_new" href="https://pcbwq.com/">PCB Westquay</a>) for our client PCB group. <br><br>It involved coordinating designs and assets for three similar but different business identies each with their own unique visual elements.  
                </p>
            </div>
            <div class="ct-1-2">
                <img style="max-width:100%;" alt="Tag Group Finance" class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/PCB.webp">
            </div>
        </div>

        <div class="slide">
            <div class="ct-flex slider-block slider-block-white">
                <div class="ct-1-2">
                    <img style="max-width:100%;" class="lozad" alt="In Awe Australia" data-src="<?php echo get_template_directory_uri(); ?>/images/inawe.webp">
                </div>
                <div class="ct-1-2 slider-text">
                    <h3><strong>In Awe Australia</strong><br>
                    Website Design, Project Management, Co-build & SEO<br>
                    Woocommerce & Wordpress
                    </h3>
                    <p>In Awe Australia is an in-house brand I was lucky enough to help build from the brands inception.<br><br>
                    I faced challenges designing, building and adjusting the websites direction based on data collected from hotjar and other analytics tools.
                    </p>
                </div>
            </div>
        </div>


        <div class="ct-flex slider-block rev-slider">
            <div class="ct-1-2 second-block slider-text">
                <h3><strong>SALT Property Group</strong><br>
                Redesign/Project Management
                </h3>
                <p>I managed this project from end to end, running the initial client meetings, through to delivering and launching the final product.<br><br>
                   Working with a third-party property evaluation software company to provide additional functionality, we rolled out a site the client was very happy with.
                </p>
            </div>
            <div class="ct-1-2">
                <a target="_new" href="https://saltproperty.com.au/"><img class="lozad" alt="Salt Property Group Website" style="max-width:100%;" data-src="<?php echo get_template_directory_uri(); ?>/images/SALT.webp"></a>
            </div>
        </div>
        <div class="slide">
            <div class="ct-flex slider-block slider-block-white">
                <div class="ct-1-2">
                    <img title="Hush Puppies Landing Page (retired)" class="lozad" alt="Hush Puppies Sustainability Landing Pages" style="max-width:100%;" data-src="<?php echo get_template_directory_uri(); ?>/images/hushpuppies.webp">
                </div>
                <div class="ct-1-2 slider-text">
                    <h3><strong>Hush Puppies</strong><br>
                    Campaign Pages Build<br>
                    BigCommerce
                    </h3>
                    <p>The Hush Puppies Community pages were a great project around the brand's sustainability focus. It's designs utilised a news article layout and imported custom fonts.<br><br>
                    These were created using the front-end framework <strong>UIKit</strong>, and built into <strong>BigCommerce</strong> custom pages.  
                    </p>
                </div>
            </div>
        </div>
        <div class="ct-flex slider-block rev-slider">
            <div class="ct-1-2 second-block slider-text">
                <h3><strong>Tag Finance Group</strong><br>
                Website Build<br>
                Wordpress
                </h3>
                <p>The Tag Finance Group website was a giant undertaking with over thirty five content pages, a huge collecton of blog posts and a large collection of custom forms using <strong>Gravity Forms</strong> to validate and collect leads.
                </p>
            </div>
            <div class="ct-1-2">
                <img style="max-width:100%;" alt="Tag Group Finance" class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/taggroup.webp">
            </div>
        </div>


    </div>
</div>    


<!-- <p class="wavy-text"></p> -->

<div class="container-the-rest">
    <div class="the_rest">
        <h2>And The Rest...</h2>    
        <div class="ct-flex">
            <div class="ct-1-5"><a href="https://shoesandsox.com.au/" target="_new"><img alt="Shoes and Sox" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/sns.webp"></a></div>
            <div class="ct-1-5"><a href="https://www.allused.com.au/" target="_new"><img alt="All Used Equipmemt" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/allused.webp"></a></div>
            <div class="ct-1-5"><a href="https://cdspanel.com.au/" target="_new"><img alt="CDS Panel and Paint" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/cds.webp"></a></div>
            <div class="ct-1-5"><a href="https://clarks.com.au/" target="_new"><img alt="Clarks" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/clarks.webp"></a></div>
            <div class="ct-1-5"><a href="https://elkacollective.com/" target="_new"><img alt="Elka Collective" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/elka.webp"></a></div>
            <div class="ct-1-5"><img alt="Elwood (Site Retired)" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/elwood.webp"></div>
            <div class="ct-1-5"><a href="https://helenavalleylifestyle.com.au/" target="_new"><img alt="Helena Valley Resort" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/helenaValley.webp"></a></div>
            <div class="ct-1-5"><a href="https://hushpuppies.com.au/" target="_new"><img alt="Hush Puppies" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/hushpuppies.webp"></a></div>
            <div class="ct-1-5"><a href="https://juliusmarlow.com.au/" target="_new"><img alt="Julius Marlow" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/jm.webp"></a></div>
            <div class="ct-1-5"><a href="https://junglefloraandco.com/" target="_new"><img alt="Jungle Flora and Co" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/jungle.webp"></a></div>
            <div class="ct-1-5"><a href="https://parryscarpets.com.au/" target="_new"><img alt="Parrys Carpets" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/parrys.webp"></a></div>
            <div class="ct-1-5"><a href="https://membership.perthglory.com.au/" target="_new"><img alt="Perth Glory Store" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/perthglory.webp"></a></div>
            <div class="ct-1-5"><a href="https://providencelifestyle.com.au/" target="_new"><img alt="Providence Lifestyle" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/provmandurah.webp"></a></div>
            <div class="ct-1-5"><img alt="Sharkbay Dive (Site Retired)" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/sharkbay.webp"></div>
            <div class="ct-1-5"><a href="https://superdry.com.au/" target="_new"><img alt="Superdry" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/sd.webp"></a></div>
            <div class="ct-1-5"><a href="https://shoewarehouse.com.au/" target="_new"><img alt="Shoe Warehouse" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/swh.webp"</a></div>
            <div class="ct-1-5"><a href="https://volley.com.au/" target="_new"><img alt="Volley" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/volley.webp"></a></div>
            <div class="ct-1-5"><a href="https://elwd.com.au/" target="_new"><img alt="ELWD Workwear" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/elwd.webp"></a></div>
            <div class="ct-1-5"><a href="https://www.arasgroup.com.au/" target="_new"><img alt="ARAS Industrial Abseiling" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/aras.webp"></a></div>
            <div class="ct-1-5"><img alt="Sharkbay 4WD (Site Retired)" class="img lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/screengrabs/4wd.webp"></div>
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
            <p>I have built countless marketing emails in <strong>Mailchimp</strong>, <strong>Campaign Monitor</strong> & <strong>Salesforce</strong> during my time as a front-end developer. <br><br>From the design, to the build, all the way down to reporting on open and click through rates. I have a keen interest in email marketing and believe it's still a valuable part of any brands marketing strategy.</p>
        </div>
        <div class="ct-1-2">
            <img alt="Email marketing on three different devices" class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/emailMockup.png">
        </div>
    </div>
</div>

<div class="platforms-block">
    <div class="container">
        <div class="ct-flex">
            <div class="ct-1-2">
                <div class="ct-flex logos">
                    <div class="ct-1-3"><img class="lozad" title="Wordpress" alt="Wordpress" data-src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/wp.png"></div>
                    <div class="ct-1-3"><img class="lozad" title="Shopify" alt="Shopify" data-src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/shopify.png"></div>
                    <div class="ct-1-3"><img class="lozad" title="BigCommerce" alt="BigCommerce" data-src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/bigCommerce.png"></div>
                    <div class="ct-1-3"><img class="lozad" title="Wix" alt="Wix" data-src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/wix.png"></div>
                    <div class="ct-1-3"><img class="lozad" title="Magento" alt="Magento" data-src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/magento.png"></div>
                    <div class="ct-1-3"><img class="lozad" title="Squarespace" alt="Squarespace" data-src="<?php echo get_template_directory_uri(); ?>/images/platformLogos/squarespace.png"></div>
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
    <div class="colour-banner">
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
                <span class="four"></span>
                <span class="five"></span>
            </div>
    <div class="skills-content">
        <h3>
            <span class="first">Nunchuck Skills, Bow Hunting Skills,</span><br>
            <span class="second">Computer Hacking Skills...</span>
        </h3>
        <p>During my time as a dev I’ve been tasked with setting up tools like Google Tag Manager, and the now retired Google Optimize. I’m keenly interested in A/B testing, the science of creating an amazing user experiences and generally asking why?<br><br>
        I have also recently started to dip my toe into the world of SEO, and am greatly enjoying identifying oppurtunties and implementing improvements.</p>
    </div>
</div>


<div class="homepage-contact">
    <div class="chat-block">
        <h3>Want to Have a Chat About a Project or <br>Better Yet Want me as Part of Your Team?</h3>
        <p>Email: <strong><a href="mailto:contact@benthomasgill.net">contact@benthomasgill.net</a></strong><br>
        Phone: <strong><a href="tel:0433359760">0433359760</a><strong>
        </p>
    </div>
</div>


<?php
 get_footer(); ?>

