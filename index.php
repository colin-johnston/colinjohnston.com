<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
<title>Colin Johnston | Visual / UX / Product Designer | San Francisco, CA</title>
</head>

<body>
    <div id="pagetop">
    </div>
    
    <div id="page" class="row">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar-home.php') ?>
        <div id="content" class="eight columns">
            <!-- <div id="loader"><img class="loading" src="../images/ajax-loader.gif"></div> -->
            <!-- convert this to flexbox! it's 2015. -->
            <div class="row rowpad">
                <div class="six columns">
                    <a href="/projects/paul-saffo-website">
                        <div class="imagebox">
                            <figure>
                                <img srcset="images/saffo-home-responsive_small.jpg 400w,
                        images/saffo-home-responsive_medium.jpg 800w,
                        images/saffo-home-responsive_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/saffo-home-responsive_small.jpg" alt="Paul Saffo Website">
                                <figcaption>Paul Saffo Website</figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
                <div class="six columns">
                    <a href="/projects/solanolabs-ci-concepts">
                        <div class="imagebox">
                            <figure>
                                <img srcset="images/solanolabs-ci-concept-main-passed_small.jpg 400w,
                        images/solanolabs-ci-concept-main-passed_medium.jpg 800w,
                        images/solanolabs-ci-concept-main-passed_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/solanolabs-ci-concept-main-passed_small.jpg" alt="<?php echo $slcc ?>">
                                <figcaption>
                                    <?php echo $slcc ?>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row rowpad">
                <div class="six columns">
                    <a href="/projects/moovweb-dev-center">
                        <div class="imagebox">
                            <figure>
                                <img srcset="images/moovweb-dev-center-downloads_small.jpg 400w,
                        images/moovweb-dev-center-downloads_medium.jpg 800w,
                        images/moovweb-dev-center-downloads_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/moovweb-dev-center-downloads_small.jpg" alt="<?php echo $mwdc ?>">
                                <figcaption>
                                    <?php echo $mwdc ?>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
                <div class="six columns">
                    <a href="/projects/moovweb-control-center">
                        <div class="imagebox">
                            <figure>
                                <img srcset="images/moovweb-control-center-main_small.jpg 400w,
                        images/moovweb-control-center-main_medium.jpg 800w,
                        images/moovweb-control-center-main_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/moovweb-control-center-main_small.jpg" alt="<?php echo $mwcc ?>">
                                <figcaption>
                                    <?php echo $mwcc ?>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row rowpad">
                <div class="six columns">
                    <a href="/projects/moovweb-dashboard">
                        <div class="imagebox">
                            <figure>
                                <img srcset="images/moovweb-sdk-dashboard_small.jpg 400w,
                        images/moovweb-sdk-dashboard_medium.jpg 800w,
                        images/moovweb-sdk-dashboard_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/moovweb-sdk-dashboard_small.jpg" alt="<?php echo $mwsdk ?>">
                                <figcaption>
                                    <?php echo $mwsdk ?>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
                <div class="six columns">
                    <a href="/projects/libsass-com">
                        <div class="imagebox">
                            <figure>
                                <img srcset="images/libsass-com_small.jpg 400w,
                        images/libsass-com_medium.jpg 800w,
                        images/libsass-com_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/libsass-com_small.jpg" alt="<?php echo $libsass ?>">
                                <figcaption>
                                    <?php echo $libsass ?>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row rowpad">
                <div class="six columns">
                    <a href="/projects/the-real-sf-tour-website">
                        <div class="imagebox">
                            <figure>
                                <img src="images/therealsftour-home.jpg" alt="" />
                                <figcaption>The Real SF Tour Website</figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
                <div class="six columns">
                    <a href="/projects/orphic-gallery-website">
                        <div class="imagebox">
                            <figure>
                                <img src="images/orphic-exhibitions-598.png" alt="" />
                                <figcaption>Orphic Gallery Website</figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
                <div class="six columns">
                </div>
            </div>
        </div>
        <!--end eight column content area-->
    </div>
    <!--end main row-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
</body>

</html>