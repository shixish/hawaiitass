<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<div id="home"></div>
<nav id="navbar" class="navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand scroll" href="#home">TASS USA</a>
      <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="main-nav" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="scroll">Home</a></li>
        <li><a href="#mobile" class="scroll">Mobile Apps</a></li>
        <li><a href="#web" class="scroll">Web</a></li>
        <li><a href="#games" class="scroll">Game Dev.</a></li>
        <li><a href="#database" class="scroll">Data Mining</a></li>
        <li><a href="#meet-us" class="scroll">About</a></li>
        <li><a href="#contact" class="scroll">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<div id="page" style="padding-top:50px;">
  <header id="masthead" class="site-header header-bg" role="banner">
    <div class="container">
      <div class="row">
        <div id="logo" class="site-branding col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <div id="site-logo-big"><!-- class="hidden-xs" -->
            <img class="img-responsive" src="<?php print url($directory.'/images/header.png', array('absolute'=>true)); ?>" alt="<?php print t('Home'); ?>" />
          </div>
          <!-- <div id="site-logo-small" class="visible-xs">
            <img class="img-responsive" src="<?php print url($directory.'/images/TASS-cellphone-small.png', array('absolute'=>true)); ?>" alt="<?php print t('Home'); ?>" />
          </div> -->
          <h1 id="site-title">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
          </h1>
        </div>
      </div>
    </div>
  </header>
  
  <?php if ($messages): ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php print $messages; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if($page['preface_first'] || $page['preface_middle'] || $page['preface_last']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first'] + (bool) $page['preface_middle'] + (bool) $page['preface_last'] ) ); ?>
    <div id="preface-area">
      <div class="container">
        <div class="row">
          <?php if($page['preface_first']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_middle']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_last']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if($page['header']) : ?>
    <div id="header-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php print render($page['header']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  
  <div id="intro" class="blue-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h1>Our Services</h1>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 text-center">
          <div class="icon-item">
            <a href="#mobile" class="scroll">
              <i class="circle-icon circle-mobile-icon fa fa-mobile"></i>
              <h4>
                Mobile
              </h4>
              <div>Professional mobile app development</div>
            </a>
          </div>
        </div>
        <div class="col-sm-3 text-center">
          <div class="icon-item">
            <a href="#web" class="scroll">
              <i class="circle-icon circle-web-icon fa fa-globe"></i>
              <h4>
                Web
              </h4>
              <div>Web development</div>
            </a>
          </div>
        </div>
        <div class="col-sm-3 text-center">
          <div class="icon-item">
            <a href="#games" class="scroll">
              <i class="circle-icon circle-game-icon fa fa-gamepad"></i>
              <h4>
                Game Development
              </h4>
              <div>2D and 3D Game Development</div>
            </a>
          </div>
        </div>
        <div class="col-sm-3 text-center">
          <div class="icon-item">
            <a href="#database" class="scroll">
              <i class="circle-icon circle-database-icon fa fa-database"></i>
              <h4>
                Data Mining
              </h4>
              <div>Database Design, Development, and Data Mining</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="mobile-cutout-bg">
    <div class="vert-text">
      <p class="huge">Mobility to move forward<?php /*print $site_slogan;*/ ?></p>
    </div>
  </div>
  
  <div id="mobile" class="blue-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <h2>Mobile App Development</h2>
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-2 text-center">
              <div class="icon-item">
                <i class="giant-icon fa fa-android"></i>
                <h4>
                  Android<br>
                  <small></small>
                </h4>
              </div>
            </div>
            <div class="col-sm-4 col-md-2 text-center">
              <div class="icon-item">
                <i class="giant-icon fa fa-apple"></i>
                <h4>
                  iOS<br>
                  <small>iPhone, iPad</small>
                </h4>
              </div>
            </div>
            <div class="col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0 text-center">
              <div class="icon-item">
                <i class="giant-icon fa fa-windows"></i>
                <h4>
                  Windows Phone<br>
                  <small></small>
                </h4>
              </div>
            </div>
            <div class="col-sm-4 col-md-2 text-center">
              <div class="icon-item">
                <i class="giant-icon fa fa-mobile"></i>
                <h4>
                  BlackBerry<br>
                  <small></small>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 hidden-sm hidden-xs phone"></div>
      </div>
    </div>
  </div>
  
  <!--
  <div class="gray-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <q>
            <big>You guys are the best!</big>
            <cite>Someone Special</cite>
          </q>
        </div>
      </div>
    </div>
  </div>
  -->
  
  <div class="gray-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h2>Developed Apps</h2>
          <hr>
        </div>
      </div>
      <div id="app-slides-nav" class="row">
        <!-- <div class="col-sm-6 col-md-3 text-center">
          <div class="nav-item">
            <a href="http://www.getshopsueyapp.com/" target="_blank">
              <img src="<?php print url($directory.'/images/shopsuey.png', array('absolute'=>true)); ?>" alt="<?php print t('Shopsuey'); ?>" height="144" width="144" />
              <h4>ShopSuey</h4>
            </a>
            <a href="https://play.google.com/store/apps/details?id=aloha.shopsuey" target="_blank"><i class="download-icon fa fa-android"></i></a>
            <p class="description">We have developed the Android version of the popular ShopSuey marketing app. ShopSuey is a revolutionary shopping app that allows users to find out what’s happening in malls or marketplaces all around them, in real time.</p>
          </div>
        </div> -->
        <div class="col-sm-6 col-md-3 text-center">
          <div class="nav-item icon-item">
            <img src="<?php print url($directory.'/images/shoppingguru.png', array('absolute'=>true)); ?>" alt="<?php print t('Shopsuey'); ?>" height="144" width="144" />
            <h4>ShoppingGuru</h4>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center">
          <div class="nav-item icon-item">
            <img src="<?php print url($directory.'/images/steinwall.png', array('absolute'=>true)); ?>" alt="<?php print t('Steinwall Inc.'); ?>" height="144" width="144" />
            <h4>Steinwall Plastic Matrix</h4>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center">
          <div class="nav-item icon-item">
            <img src="<?php print url($directory.'/images/chaos-answers.png', array('absolute'=>true)); ?>" alt="<?php print t('Chaos Answers'); ?>" height="144" width="144" />
            <h4>Chaos Answers</h4>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center">
          <div class="nav-item icon-item">
            <img src="<?php print url($directory.'/images/pimm.png', array('absolute'=>true)); ?>" alt="<?php print t('Steinwall Inc.'); ?>" height="144" width="144" />
            <h4>Steinwall PIMM iPad App</h4>
          </div>
        </div>
      </div><!-- /.row -->
      <div class="row">
        <div id="app-slides" class="flexslider">
          <ul class="slides">
            <li>
              <div class="col-sm-12 col-md-8 text-center">
                <a href="http://getshoppingguru.com/" target="_blank">
                  <img src="<?php print url($directory.'/images/screenshots/shoppingguru.jpg', array('absolute'=>true)); ?>">
                </a>
              </div>
              <div class="col-sm-12 col-md-4 text-center">
                <a href="http://getshoppingguru.com/" target="_blank">
                  <h4>ShoppingGuru</h4>
                </a>
                <a href="https://play.google.com/store/apps/details?id=hawaiitass.shopping" target="_blank"><i class="download-icon fa fa-android"></i></a>
                <p>
                  Shopping Guru reinvents the users’ shopping experience in Bangladesh. It is a smarter way to shop that helps you save time and money.
                </p>
              </div>
            </li>
            <li>
              <div class="col-sm-12 col-md-8 text-center">
                <a href="http://www.steinwall.com/" target="_blank">
                  <img src="<?php print url($directory.'/images/screenshots/steinwall.jpg', array('absolute'=>true)); ?>">
                </a>
              </div>
              <div class="col-sm-12 col-md-4 text-center">
                <a href="http://www.steinwall.com/" target="_blank">
                  <h4>Steinwall Plastic Matrix</h4>
                </a>
                <a href="https://play.google.com/store/apps/details?id=hawaiitass.android.resin&hl=en" target="_blank"><i class="download-icon fa fa-android"></i></a>
                <a href="https://itunes.apple.com/us/app/steinwall-plastic-matrix/id566245668?mt=8" target="_blank"><i class="download-icon fa fa-apple"></i></a>
                <a href="http://www.windowsphone.com/en-us/store/app/plastic-matrix/d7b542ec-4390-4f87-af26-eb01f9a6b096" target="_blank"><i class="download-icon fa fa-windows"></i></a>
                <p>
                  Our team developed an iOS, Android, and Windows Phone app for Stienwall, Inc. The application helps users in the difficult task of determine what plastic is best suited for their needs. Many formulations and additives create more than 85,000 thermoplastics, this app will make your life easier.
                </p>
              </div>
            </li>
            <li>
              <div class="col-sm-12 col-md-8 text-center">
                <a href="http://chaosanswers.com/" target="_blank">
                  <img src="<?php print url($directory.'/images/screenshots/chaos-answers-app.jpg', array('absolute'=>true)); ?>">
                </a>
              </div>
              <div class="col-sm-12 col-md-4 text-center">
                <a href="http://chaosanswers.com/" target="_blank">
                  <h4>Chaos Answers</h4>
                </a>
                <a href="https://play.google.com/store/apps/details?id=hawaiitass.android.steinwallmodel&hl=en" target="_blank"><i class="download-icon fa fa-android"></i></a>
                <a href="http://www.windowsphone.com/en-us/store/app/chaos-models/a24b2fad-eee9-4ba5-b875-d5d35f864b68" target="_blank"><i class="download-icon fa fa-windows"></i></a>
                <p>
                  Chaos Answers app helps managers know how to adapt their view of changing circumstances quickly and effectively. Our team developed the Android and Windows Phone app.
                </p>
              </div>
            </li>
            <li>
              <div class="col-sm-12 col-md-8 text-center">
                <a href="http://www.steinwall.com/" target="_blank">
                  <img src="<?php print url($directory.'/images/screenshots/steinwall-pimm.jpg', array('absolute'=>true)); ?>">
                </a>
              </div>
              <div class="col-sm-12 col-md-4 text-center">
                <a href="http://www.steinwall.com/" target="_blank">
                  <h4>Steinwall PIMM iPad App</h4>
                </a>
                <a href="https://itunes.apple.com/us/app/pimm-app/id640015509?mt=8" target="_blank"><i class="download-icon fa fa-apple"></i></a>
                <p>
                  This app plays PIMMs, Production Instructions Multi Media, which are video versions of instruction manuals for parts being produced at Steinwall Incorporated. We developed the iPad app.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div><!-- /.row -->
    </div>
  </div>
  
  <!-- <div class="web-cutout-bg"> -->
  <div class="callout-2">
    <div class="vert-text">
      <p class="huge">Stay one-step ahead of the competition</p>
    </div>
  </div>
  
  <div id="web" class="blue-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h2>Web Development</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 text-center">
          <div class="icon-item">
            <h4>Graphics &amp; Design</h4>
          </div>
          <ul>
            <li>Graphics and Logo design</li>
            <li>Responsive Design</li>
          </ul>
        </div>
        <div class="col-sm-4 text-center">
          <div class="icon-item">
            <h4>Development</h4>
          </div>
          <ul>
            <li>E-Commerce Portals</li>
            <li>API Development</li>
            <li>Social Integration</li>
          </ul>
        </div>
        <div class="col-sm-4 text-center">
          <div class="icon-item">
            <h4>Performance &amp; Maintainence</h4>
          </div>
          <ul>
            <li>Search Engine Optimization (SEO)</li>
            <li>Web Analytics</li>
            <li>Web Security</li>
            <li>Performance and Caching</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h3>Content Management</h3>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2 col-sm-offset-2 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/drupal.png', array('absolute'=>true)); ?>" alt="<?php print t('Drupal'); ?>" height="144" width="144" />
            <h4>Drupal</h4>
          </div>
        </div>
        <div class="col-sm-2 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/wordpress.png', array('absolute'=>true)); ?>" alt="<?php print t('Wordpress'); ?>" height="144" width="144" />
            <h4>Wordpress</h4>
          </div>
        </div>
        <div class="col-sm-2 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/joomla.png', array('absolute'=>true)); ?>" alt="<?php print t('Joomla'); ?>" height="144" width="144" />
            <h4>Joomla</h4>
          </div>
        </div>
        <div class="col-sm-2 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/globe.png', array('absolute'=>true)); ?>" alt="<?php print t('Custom'); ?>" height="144" width="144" />
            <h4>Custom Design</h4>
          </div>
        </div>
      </div>

    </div>
  </div>
  
  <!--
  <div class="gray-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <q>
            <big>A nice quote fr
            om someone special.</big>
            <cite>Someone Special</cite>
          </q>
        </div>
      </div>
    </div>
  </div>
  -->
  
  <div class="gray-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h2>Developed Sites</h2>
          <hr>
        </div>
      </div>
      <div id="web-slides-nav" class="row">
        <div class="col-sm-6 col-md-3 text-center">
          <div class="nav-item">
            <img src="<?php print url($directory.'/images/shoppingguru.png', array('absolute'=>true)); ?>" alt="<?php print t('Shopping Guru'); ?>" height="100" width="100" />
            <h4>Shopping Guru App</h4>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center">
          <div class="nav-item">
            <img src="<?php print url($directory.'/images/biomanufacturing.png', array('absolute'=>true)); ?>" alt="<?php print t('Biomanufacturing.org'); ?>" height="100" width="174" />
            <h4>Biomanufacturing.org</h4>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center">
          <div class="nav-item">
            <img src="<?php print url($directory.'/images/yodify.png', array('absolute'=>true)); ?>" alt="<?php print t('Yodify'); ?>" height="100" width="100" />
            <h4>Yodify</h4>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center">
          <div class="nav-item">
            <img src="<?php print url($directory.'/images/chaos-answers.png', array('absolute'=>true)); ?>" alt="<?php print t('Chaos Answers'); ?>" height="100" width="100" />
            <h4>Chaos Answers</h4>
          </div>
        </div>
        <!--<div class="col-sm-6 col-md-3 text-center">
          <div class="nav-item">
            <a href="http://greenpowersolutionsllc.com/" target="_blank">
              <img src="<?php print url($directory.'/images/greenpower.jpg', array('absolute'=>true)); ?>" alt="<?php print t('Greenpower Solutions'); ?>" height="100" width="68" />
              <h4>Greenpower Solutions</h4>
            </a>
            <p>This company’s mission is to bring Practical, Affordable and Reliable Renewable Energy Solutions to Hawaii’s energy consumers. We have developed this web portal, and we continue to manage the database, users, content, and security & analytics of the portal.</p>
          </div>
        </div>-->
      </div>
      <div class="row">
        <div id="web-slides" class="flexslider">
          <ul class="slides">
            <li>
              <div class="col-sm-12 col-md-8 text-center">
                <a href="http://getshoppingguru.com/" target="_blank">
                  <img src="<?php print url($directory.'/images/screenshots/shoppingguru.jpg', array('absolute'=>true)); ?>">
                </a>
              </div>
              <div class="col-sm-12 col-md-4 text-center">
                <a href="http://getshoppingguru.com/" target="_blank">
                  <h4>Shopping Guru App</h4>
                </a>
                <p>
                  This is the website for our app.
                </p>
              </div>
            </li>
            <li>
              <div class="col-sm-12 col-md-8 text-center">
                <a href="http://www.biomanufacturing.org" target="_blank">
                  <img src="<?php print url($directory.'/images/screenshots/biomanufacturing.jpg', array('absolute'=>true)); ?>">
                </a>
              </div>
              <div class="col-sm-12 col-md-4 text-center">
                <a href="http://www.biomanufacturing.org" target="_blank">
                  <h4>Biomanufacturing.org</h4>
                </a>
                <p>
                  This is a National Science Foundation (NSF) funded project. The mission of this project is to coordinate local and regional efforts into a national Biomanufacturing education and training system to promote, create, and sustain a qualified workforce. We have completely re-designed this Web portal using Drupal 7 technology. We re-structured the content and provided a new database structure, enabling greater flexibility and efficiency in maintaining and disseminating the valuable information. We provide support and maintenance of the web portal, including user training, analytics reports, and web security updates.
                </p>
              </div>
            </li>
            <li>
              <div class="col-sm-12 col-md-8 text-center">
                <a href="http://www.yodify.com/" target="_blank">
                  <img src="<?php print url($directory.'/images/screenshots/yodify.jpg', array('absolute'=>true)); ?>">
                </a>
              </div>
              <div class="col-sm-12 col-md-4 text-center">
                <a href="http://www.yodify.com/" target="_blank">
                  <h4>Yodify</h4>
                </a>
                <p>
                  This web application is dedicated to accountants who suffer from information overload, who are tired of interpreting everything by themselves, and want to go home at a reasonable time. Our team has provided support services, and module development for this Drupal 7 web portal.
                </p>
              </div>
            </li>
            <li>
              <div class="col-sm-12 col-md-8 text-center">
                <a href="http://chaosanswers.com/" target="_blank">
                  <img src="<?php print url($directory.'/images/screenshots/chaos-answers.jpg', array('absolute'=>true)); ?>">
                </a>
              </div>
              <div class="col-sm-12 col-md-4 text-center">
                <a href="http://chaosanswers.com/" target="_blank">
                  <h4>Chaos Answers</h4>
                </a>
                <p>
                  Chaos Answers helps managers know how to adapt their view of changing circumstances quickly and effectively. We have developed this web portal in conjunction with the mobile apps that we developed for the same company. We created and continue to manage the database, users, content, and security &amp; analytics of the portal.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="callout-7">
    <div class="vert-text">
      <p class="huge">Maximize User Engagement and Enjoyment</p>
    </div>
  </div>

  <div id="games" class="blue-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h2>Game Development</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="row text-center">
            <h4>2D Technologies</h4>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-7">Design interactive games using sharp, fast and efficient 2D technologies that can adjust to any screen size. Develop graphics for mobile games/apps.</div>
            <ul class="col-xs-5 breakdown-bullets">
              <li>SVG and HTML5</li>
              <li>HTML5 Canvas</li>
              <li>Flash</li>
            </ul>
          </div>
        </div>
        <!-- <div class="col-sm-4 text-center">
          <div class="icon-item">
            <h4>Gamification</h4>
          </div>
          <br>
          <ul>
            <li>Apply game mechanics to your products to drive user engagement.</li>
            <li>Design educational games that facilitate learning.</li>
          </ul>
        </div> -->
        <div class="col-sm-6">
          <div class="row text-center">
            <h4>3D Technologies</h4>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-7">Immersive 3D graphics allow the user to jump in, and get a realworld perspective.</div>
            <ul class="col-xs-5 breakdown-bullets">
              <li>Unity</li>
              <li>Canvas + WebGL using Three.js</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="gray-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <h3>Leverage Modern Game Technologies</h3>
          <hr>
        </div>
      </div>
      <div class="row">
      <div class="col-lg-2 col-sm-4 text-center">
        <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/svg.png', array('absolute'=>true)); ?>" alt="<?php print t('SVG'); ?>" height="144" width="144" />
            <h4>SVG</h4>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/canvas.png', array('absolute'=>true)); ?>" alt="<?php print t('Canvas'); ?>" height="144" width="144" />
            <h4>Canvas</h4>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/html5.png', array('absolute'=>true)); ?>" alt="<?php print t('HTML5'); ?>" height="144" width="144" />
            <h4>HTML5</h4>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/css3.png', array('absolute'=>true)); ?>" alt="<?php print t('CSS3'); ?>" height="144" width="144" />
            <h4>CSS3</h4>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/Flash.png', array('absolute'=>true)); ?>" alt="<?php print t('Flash'); ?>" height="144" width="144" />
            <h4>Flash</h4>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/unity.png', array('absolute'=>true)); ?>" alt="<?php print t('Unity'); ?>" height="144" width="144" />
            <h4>Unity</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="callout-1">
    <div class="vert-text">
      <p class="huge">Bring your data to life</p>
    </div>
  </div>
  
  <div id="database" class="blue-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h2>Data Mining</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="row text-center">
            <i class="medium-icon fa fa-database"></i>
            <h4>Database Design &amp; Development</h4>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-6">
              Our team is adept at developing thorough and efficient database schemas that meet your specific needs.
            </div>
            <ul class="col-xs-6 breakdown-bullets">
              <li>Capture and store your valuable data.</li>
              <li>Facilitate efficient storage and retrieval.</li>
              <li>Secure designs that protect your data and users.</li>
              <li>Easily track users, inventory, employees, etc.</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="row text-center">
            <i class="medium-icon fa fa-table"></i>
            <h4>Data Mining &amp; Analysis</h4>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-6">
            Represent your data in new ways that make it easier to understand. Gain new understanding of your information through data extraction and analysis techniques.
            </div>
            <ul class="col-xs-6 breakdown-bullets">
              <li>Restructure your data into easily accessible views.</li>
              <li>Extract patterns and features from your data.</li>
              <li>Plot graphs and analyze statistics.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="gray-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <h3>Professional Database Technology</h3>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-2 col-sm-offset-1 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/mysql.png', array('absolute'=>true)); ?>" alt="<?php print t('MySQL'); ?>" height="144" width="144" />
          </div>
        </div>
        <div class="col-xs-12 col-sm-2 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/postgresql.png', array('absolute'=>true)); ?>" alt="<?php print t('PostgreSQL'); ?>" height="144" width="144" />
          </div>
        </div>
        <div class="col-xs-12 col-sm-2 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/mssql.png', array('absolute'=>true)); ?>" alt="<?php print t('Microsoft SQL'); ?>" height="144" width="144" />
          </div>
        </div>
        <div class="col-xs-12 col-sm-2 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/filemaker.png', array('absolute'=>true)); ?>" alt="<?php print t('Filemaker Pro'); ?>" height="144" width="144" />
            <h4>Filemaker Pro</h4>
          </div>
        </div>
        <div class="col-xs-12 col-sm-2 text-center">
          <div class="icon-item">
            <img class="img-responsive" src="<?php print url($directory.'/images/access.png', array('absolute'=>true)); ?>" alt="<?php print t('Microsoft Access'); ?>" height="144" width="144" />
            <h4>Microsoft Access</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="map" class="map">
    <!--<iframe width="100%" height="100%" scroll="no" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://mapsengine.google.com/map/embed?mid=zsFsERRO3dk8.kJ8E27VrR51s"></iframe>-->
    <!--<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Hawaii+Tax%2C+Accounting+%26+Software+Services,+Market+Street,+Hilo,+CA&amp;aq=0&amp;oq=Hawaii&2cTASS&amp;hq=Hawaii+Tax%2C+Accounting+%26+Software+Services%2C+LLC,+614+Kilauea+Ave,+Hilo,+HI+96720&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>-->
    <div id="map-canvas" style="height:100%;width:100%"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvCpL1EvyKHAbIIE5OICIWSLyrpNeYoD4&sensor=false"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
    <script type="text/javascript">
      var style_array = [{"featureType":"water","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"landscape","stylers":[{"color":"#f2f2f2"}]},{"featureType":"road","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]}];
      var pyrmont = new google.maps.LatLng(19.7177867,-155.0808236);
      var myOptions = {
          zoom: 17,
          center: pyrmont,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          styles: style_array,
          scrollwheel: false
      };
      
      var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);      
      var request = {
        location: pyrmont,
        radius: '500',
        query: 'Hawaii TASS'
      };
      
      var infoWindow = new google.maps.InfoWindow({
        content: ""
      });
      
      var service = new google.maps.places.PlacesService(map);
      service.textSearch(request, function (results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      });
      
      function createMarker(place) {
        //console.log(place);
        var latlng = new google.maps.LatLng(place.geometry.location.k,place.geometry.location.A),
            name = place.name,
            address = place.formatted_address;
        var html = "<font face = 'arial'>" + "<b>" + name + "</b> <br/>" + address + "<br/>" + "</font>";
        var marker = new google.maps.Marker({
          position: latlng,
          map: map,
          title: name
        });
        google.maps.event.addListener(marker, 'click', function() {
          infoWindow.setContent(html);
          infoWindow.open(map, marker);
        });
        //markers.push(marker);
      }
    </script>
  </div>
  
  <div id="meet-us" class="gray-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h2>About Us</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-justify">
          Hawaii TASS has been founded by Dr. Shawon Rahman (Associate Professor of Computer Science, Univ of Hawaii-Hilo) in June 2012. Hawaii TASS has already established a good reputation in providing higher-quality work, reliability, and fairness within very short time. We have a skilled team of developers who develop various types of Mobile Apps and web-based software including iOS apps, Windows phone, iPad, etc. apps. Currently more than 10 persons are working in our company including two current students and one graduated student from University of Hawaii. Most of our developers have a MS or Ph.D. degree in Computer Science or Software Engineering. Our developers work from Hawaii or mainland USA. 
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h4>Meet the team</h4>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12 text-center">
          <?php print render($page['meet']); ?>
        </div>
      </div>
    </div>
  </div>
  
  <div id="contact" class="white-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h2>Contact Us</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="row text-center">
            <div class="col-xs-4">
              <strong>Phone:</strong><br>
              808-315-2727<br>
              808-987-9822<br>
            </div>
            <div class="col-xs-4">
              <strong>Email:</strong><br>
              <a href="mailto:ZinatUSA@gmail.com">ZinatUSA@gmail.com</a><br>
              <a href="mailto:contacts@HawaiiTASS.com">contacts@HawaiiTASS.com</a><br>
            </div>
            <div class="col-xs-4">
              <strong>Address:</strong><br>
              614 Kilauea Ave, Suite 101<br>
              Hilo, HI 96720, USA
            </div>
          </div>
          <p class="row text-center"><em>Customer parking is available on the backside of our office building.</em></p>
          <div class="row text-center">
            <a href="<?php print url('contact'); ?>" class="btn btn-success btn-lg" role="button">Contact Form</a>
          </div>
          <br>
          <div class="row">
            
          </div>
  <!--           <form method="post" action="" id="contact_form">
              <p>
                <label for="name">Name *</label><br>
                <input type="text" name="name" value="" keyev="true" style=""><br>
              </p>
              <p>
              <label for="email">E-mail *</label><br>
              <input type="text" name="email" value=""><br>
              </p>
              <p>
              <label for="message">Message *</label><br>
              <textarea name="message" cols="50" rows="4"></textarea><br>
              </p>
              <input type="submit" name="submit" class="btn btn-large btn-inverse form-btn" value="SEND MESSAGE"><br>
            </form>
          </div>-->
        </div>
      </div>
    </div>
  </div>

  <?php if($page['footer']) : ?>
    <div id="footer-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php print render($page['footer']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
    <?php $footer_col = ( 12 / ( (bool) $page['footer_first'] + (bool) $page['footer_second'] + (bool) $page['footer_third'] + (bool) $page['footer_fourth'] ) ); ?>
    <div id="bottom">
      <div class="container">
        <div class="row">
          <?php if($page['footer_first']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
            <?php print render ($page['footer_first']); ?>
          </div><?php endif; ?>
          <?php if($page['footer_second']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
            <?php print render ($page['footer_second']); ?>
          </div><?php endif; ?>
          <?php if($page['footer_third']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
            <?php print render ($page['footer_third']); ?>
          </div><?php endif; ?>
          <?php if($page['footer_fourth']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
            <?php print render ($page['footer_fourth']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="fcred col-sm-12">
          <?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <a href="<?php print $front_page; ?>"><?php print $site_name; ?></a>.
        </div>
      </div>
    </div>
  </footer>
  <!-- <div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-primary" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div> -->
</div>