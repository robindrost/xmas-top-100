<?php // $Id: page.tpl.php,v 1.5 2010/07/19 18:05:37 divisivecottonwood Exp $   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
    <!--[if IE 7]>
<style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/ie7.css";</style>
<![endif]-->
<!--[if IE 6]>
<style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/ie6.css";</style>
<![endif]-->
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
  
    


</head>
<body class="<?php print $body_classes; ?>">

<div id="wrapper">

    <div id="header">
	
	    <?php if (!empty($breadcrumb)): ?><div id="breadcrumb"><?php print $breadcrumb; ?></div><?php endif; ?>
		
		  <?php if (!empty($secondary_links)): ?>
          <div class="secondary" >
            <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')); ?>
          </div>
        <?php endif; ?>

      <div id="logo-title">

	    <div id="logo">
	  <?php if (!empty($logo)): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>

          </div>

        <div id="site-name">

   <?php if (!empty($site_name)): ?>
            <h1>
              <?php print $site_name; ?>
            </h1>
          <?php endif; ?>
  
        </div> <!-- /site name -->
      </div> <!-- /logo-title -->
    </div> <!-- /header -->
	
	   <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "withprimary"; } if (!empty($secondary_links)) { print " withsecondary"; } ?> ">
        <?php if (!empty($primary_links)): ?>
          <div id="primary" class="clear-block">
            <?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>
          </div>
        <?php endif; ?>

      </div> <!-- /navigation -->
      
    
      
      
  
    <div id="container" class="clearfix">
    
    <div id="left-side">
    
          <?php if (!empty($site_slogan)): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
	 


	<div id="image-left" >
	<p>&nbsp;</p>
	</div>

        <div id="sidebar-left" >

	      <?php if (!empty($search_box)): ?>
        <div id="search-box"><?php print $search_box; ?></div>
    
      <?php endif; ?>
      
         <?php print $left; ?>

        </div> <!-- /sidebar-left -->
        
     
        </div> <!-- /left-side -->
        
        	     <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
 
        <div id="content" >

	<?php if (!empty($title)): ?><h2 class="title" id="page-title"><?php print $title; ?></h2><?php endif; ?>
          <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
          <?php if (!empty($messages)): print $messages; endif; ?>
          <?php if (!empty($help)): print $help; endif; ?>

          <div id="content-content" >
 <?php print $content; ?>

          </div> <!-- /content-content -->
         
        </div> <!-- /content -->
  
	  <div id="image-right" >
	  <p>&nbsp;</p>
	</div>

    </div> <!-- /container -->
    
    <div id="footer-wrapper">
	
	   <?php if (!empty($secondary_links)): ?>
          <div class="secondary" >
            <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')); ?>
          </div>
        <?php endif; ?>
	
      <div id="footer-one">
	  
	    <?php if (!empty($footer_top_left)): ?>
        <div id="footer-one-left" >
          <?php print $footer_top_left; ?>
        </div> <!-- /footer-top-left -->
      <?php endif; ?>
	  
	 
         <div id="footer-one-middle" >
         <p>&nbsp;</p>
        </div> <!-- /footer-top-middle -->
     
	  
	   <?php if (!empty($footer_top_right)): ?>
          <div id="footer-one-right" >
          <?php print $footer_top_right; ?>
        </div> <!-- /footer-top-right -->
      <?php endif; ?>
	
		</div>
		
		<div id="footer-two" >
		
		 <?php if (!empty($footer_bottom_left)): ?>
          <div id="footer-two-left" >
          <?php print $footer_bottom_left; ?>
        </div> <!-- /footer-bottom-left -->
      <?php endif; ?>
	  
	   <?php if (!empty($footer_bottom_middle)): ?>
          	<div id="footer-two-middle" >
          <?php print $footer_bottom_middle; ?>
        </div> <!-- /footer-bottom-middle -->
      <?php endif; ?>
	  
	   <?php if (!empty($footer_bottom_right)): ?>
          <div id="footer-two-right" >
          <?php print $footer_bottom_right; ?>
        </div> <!-- /footer-bottom-left -->
      <?php endif; ?>

		</div>

      <div id="footer-message">
	  <?php print $footer_message; ?>
</div>
      

    </div> <!-- /footer-wrapper -->

  </div> <!-- /wrapper -->
  
    <div id="designer">
  <a href="http://www.suburban-glory.com/">London Web Design</a>
  </div>
  

 <?php print $closure; ?>
</body>
</html>