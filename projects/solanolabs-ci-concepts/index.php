<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?> 

<title><?php echo $slcc ?> | Recent Projects | Colin Johnston</title>
</head>

<body>
  
<div id="page" class="row">

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
    
  <div id="content" class="eight columns">
      
    <!-- <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div> -->
     
      <div class="row">
        <div class="twelve columns">
          <div class="imagebox">
            <a href="#" data-reveal-id="solanolabs-ci-concept-main-passed">
              <img
                srcset="/images/solanolabs-ci-concept-main-passed_small.jpg 400w,
                        /images/solanolabs-ci-concept-main-passed_medium.jpg 800w,
                        /images/solanolabs-ci-concept-main-passed_large.jpg 1200w"
                sizes="(min-width: 48em) 66.6vw, 100vw"
                src="/images/solanolabs-ci-concept-main-passed_small.jpg"
                alt="<?php echo $slcc ?>">
            </a>
          </div>
          <h2><?php echo $slcc ?></h2>
          
          <?php include('overview.php') ?>

          <!-- <p>To view the <?php echo $slcc ?> go to <a href="http://console.moovweb.com/downloads" name="" target="_blank">console.moovweb.com</a> and create a free account. You can view demo projects under the account 'Moovweb Demos' to see the interface live.</p> -->

          
          
          <p></p>
        </div>
        </div>
      </div>
      
  </div> <!--end eight column content area-->

</div> <!--end main row-->

<!-- overview-modals -->
<?php include('modals.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
 
</body>
</html>