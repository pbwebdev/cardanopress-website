<?php

/**
Template Name: Home page
Template Post Type: page
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

get_header();

?>


    <div id="banner" class="bd-masthead">
        <div class="container-xxl">
            <div class="col-md-8 mx-auto text-center">
                <div class="banner">
                    <h1>Integrating Cardano & WordPress</h1>
                    <p>Learn more about how you can connect your WordPress website to the Cardano blockchain creating unique integrated decentralised application experiences.</p>
                    <a class="btn btn-lg btn-primary" href="/products">Learn More</a>
                </div><!-- .banner -->
            </div>
        </div>
    </div>



    <div id="features" class="container">
        <div class="features">

            <h2 class="text-center">How Our Plugins Can Help</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <span class="fa-solid fa-wallet"></span>
                    </div>
                    <div>
                        <h3>Wallet Integration</h3>
                        <p>Integrated with popular Cardano wallets to allow for reading wallets, performing transactions and stake pool delegation.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <span class="fa-solid fa-lock"></span>
                    </div>
                    <div>
                        <h3>Access Control</h3>
                        <p>Allowing access control on a website based on stake pool delegation, access by tokens within a users wallet or interaction on the blockchain.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <span class="fa-solid fa-cube"></span>
                    </div>
                    <div>
                        <h3>Cardano Integration</h3>
                        <p>Unique plugins to perform ISPOs, On-chain Governance, whitelist NFT collection minting, purchasing & sales with ADA and much more...</p>
                    </div>
                </div>
            </div>

        </div><!-- .features -->
    </div>

    <div class="dark-background">
        <div id="case-studies"  class="container">
            <div class="case-studies  text-center">

                <h2 class="text-center">Learn how others are using CardanoPress.</h2>

            </div><!-- .case studies -->
        </div>
    </div>

    <div id="resources" class="container">
        <div class="resources  text-center">

            <h2 class="text-center">Need help?</h2>
            <p>We have a huge knowledge base & support to get your started!</p>

        </div><!-- .resources -->
    </div>

<div class="dark-background">
    <div id="getStarted" class="container ">
        <div class="getStarted">

            <h2 class="text-center">Get Started</h2>

        </div><!-- .getStarted -->


    </div>
</div>



<?php

get_footer();
