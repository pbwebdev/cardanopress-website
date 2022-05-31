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
                    <p>Learn how you can connect your WordPress website to the Cardano blockchain, creating unique integrated decentralised application experiences.</p>
                    <a class="btn btn-primary" href="/products">Learn more</a>
                </div><!-- .banner -->
            </div>
        </div>
    </div>



    <div id="features" class="container">
        <div class="features">
            <div class="col-md-8 mx-auto text-center">
            <h2 class="text-center">How Our Plugins Help</h2>
            <p>We've done all the hard integration work with the Cardano blockchain and encapsulated them into our installable plugins for WordPress to shortcut the required development time & create awesome experiences.</p>
            </div>
            <div class="offset-md-1 col-md-10 row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <span class="fa-solid fa-wallet"></span>
                    </div>
                    <div>
                        <h3>Wallet Integration</h3>
                        <p>Integrated with popular Cardano wallets including Nami and Eternl, to allow for reading wallets data, performing transactions and stake pool delegation.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <span class="fa-solid fa-lock"></span>
                    </div>
                    <div>
                        <h3>Paywall Content & Access Control</h3>
                        <p>Allowing access control on a website based on a wallet's stake pool delegation or access by fungible or non fungible tokens within a users wallet.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <span class="fa-solid fa-cube"></span>
                    </div>
                    <div>
                        <h3>Cardano Usecases</h3>
                        <p>Unique plugins such as Initial Stake Pool Offering dashboards, On-chain project Governance, whitelist NFT collection minting, purchasing & sales with ADA and much more.</p>
                    </div>
                </div>
            </div>

        </div><!-- .features -->
    </div>


    <div class="dark-background">

        <div id="case-studies"  class="container">
            <div class="case-studies  text-center">

                <h2>Built with CardanoPress</h2>
                <p>See who else is building on CardanoPress</p>

                <div class="mt-4">
                    <a href="#" class="btn btn-secondary btn-icon my-2" target="_blank">
                        <span class="btn-inner--text">See more projects</span>
                        <span class="btn-inner--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> </span></a>
                </div>

                <div class="row mt-6 mb-n10 position-relative zindex-100">
                    <div class="col-lg-3 col-sm-6 mt-4">
                        <div class="card border-0">
                            <figure class="figure">
                                <img alt="Image placeholder" src="https://cardanopress.io/wp-content/uploads/2022/06/projects-cardanopick.jpg" class="card-img">
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 mt-4">
                        <div class="card border-0">
                            <figure class="figure">
                                <img alt="Image placeholder" src="https://cardanopress.io/wp-content/uploads/2022/06/projects-adawaifus.jpg" class="card-img">
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 mt-4">
                        <div class="card border-0">
                            <figure class="figure">
                                <img alt="Image placeholder" src="https://cardanopress.io/wp-content/uploads/2022/06/projects-gokey.jpg" class="card-img">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-4">
                        <div class="card border-0">
                            <figure class="figure">
                                <img alt="Image placeholder" src="https://cardanopress.io/wp-content/uploads/2022/06/projects-cardanode.jpg" class="card-img">
                            </figure>
                        </div>
                    </div>
                </div>

            </div><!-- .case studies -->
        </div>
    </div>


    <div id="resources" class="container">
        <div class="resources  text-center">
            <div class="getStarted text-center">

                <h2 class="text-center">Need help?</h2>
                <p>We have documentation, a knowledge base & community support forum to get your started!</p>
            </div>
        </div><!-- .resources -->
    </div>

<div class="dark-background">
    <div id="getStarted" class="container ">
        <div class="getStarted col-md-8 mx-auto text-center">

            <h2 class="text-center">Get Started</h2>
            <p>Are you ready to get started and building your project on WordPress and Cardano?<br>
                We are still building our the website and creating more resources. In the meantime, be sure to checkout the Github repositories, and join us on Discord.</p>
            <a href="https://github.com/pbwebdev" class="btn btn-secondary" style="margin:1em;">Visit on GitHub</a>  <a href="https://discord.gg/CEX4aSfkXF" class="btn btn-tertiary" style="margin:1em;">Join on Discord</a>

        </div><!-- .getStarted -->


    </div>
</div>



<?php

get_footer();
