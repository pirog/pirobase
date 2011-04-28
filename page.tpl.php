<?php // $Id: page.tpl.php,v 1.1.2.5.2.14.2.12 2010/03/01 13:37:46 psynaptic Exp $ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
  <?php print drupal_attributes($html_attr); ?>="&lt;?php print drupal_attributes($html_attr); ?&gt;">

<head>
<?php print $head; ?>
<?php print $styles; ?>
<!--[if lt IE 8]><link type="text/css" rel="stylesheet" media="all" href="<?php print $base_theme; ?>css/ie-lt8.css" /><![endif]-->
<?php print $scripts; ?>
<title><?php print $head_title; ?>
</title>
</head>

<body
  <?php print drupal_attributes($attr); ?>="&lt;?php print drupal_attributes($attr); ?&gt;">

  <div id="header">
    <div class="limiter clear-block">
      <?php print $header_top; ?>
      <div id="header_right">
        
        <div id="links"> 
          <?php print $primary_links; ?>
          <?php print $secondary_links; ?>
        </div>
        
        <?php if ($search_box): ?>
        <div id="search_box">
            <?php print $search_box; ?>
        </div>
        <?php endif; ?>
        
        <div id="sitestuff">
          <?php print $skip_link; ?>
          <?php print $site_name_themed; ?>
          <?php print $site_slogan_themed; ?>
        </div>
      </div>
      <?php print $logo_themed; ?>
    </div>
  </div>

  <?php if (($header_bottom)||($mission_themed)): ?>
  <div id="branding">
    <div class="limiter clear-block">
      <?php print $mission_themed; ?>
      <?php print $header_bottom; ?>
    </div>
  </div>
  <?php endif; ?>

  <div id="page">
    <div class="limiter clear-block">
      <?php print $breadcrumb; ?>
      <div id="main" class="clear-block">
        <?php if ($left): ?>
        <div id="left" class="sidebar">
          <?php print $left; ?>
        </div>
        <?php endif; ?>

        <div id="content" class="clear-block">
          <?php print $tabs; ?>
          <?php print $messages; ?>
          <?php print $help; ?>

          <?php if ($title): ?>
          <h1 class="page-title">
            <?php print $title; ?>
          </h1>
          <?php endif; ?>
          <?php print $content_top; ?>
          <?php print $content; ?>
          <?php print $content_bottom; ?>
        </div>

        <?php if ($right): ?>
        <div id="right" class="sidebar">
          <?php print $right; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div id="footer">
    <div class="limiter clear-block">
      <?php print $feed_icons; ?>
      <?php print $footer_top; ?>
      <?php print $footer_bottom; ?>
      <?php print $footer_message; ?>
    </div>
  </div>

  <?php print $closure; ?>
</body>
</html>
