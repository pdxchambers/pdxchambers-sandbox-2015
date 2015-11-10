<?php
global $defaultColors;

$defaultColors[] = array(
  //Main site title color, allows the site title to be a different color from the other site headers
  'slug' => 'site-title',
  'default' => '#337ab7',
  'label' => __( 'Site Title', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  //h1, h2, h3. h4, h5, h6 color
  'slug' => 'header-tags',
  'default' => '#337ab7',
  'label' => __( 'Headers', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  //Body text color, the site default for all text
  'slug' => 'body-text',
  'default' => '#000000',
  'label' => __( 'bodytext', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  //Link color for inline hyperlinks
  'slug' => 'links',
  'default' => '#337ab7',
  'label' => __( 'Links', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  //Background color for sticky posts
  'slug' => 'sticky-background',
  'default' => '#f8f8f8',
  'label' => __( 'Sticky Background', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  //Background for comments
  'slug' => 'comment-background',
  'default' => '#f8f8f8',
  'label' => __( 'Comment Background', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  'slug' => 'sidebar-background',
  'default' => '#f8f8f8',
  'label' => __( 'Sidebar Background', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  'slug' => 'border-color',
  'default' => '#337ab7',
  'label' => __( 'Borders', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  //Sets the start color of the nav bar gradient which ends with navbar-gradient-bottom
  'slug' => 'navbar-background',
  'default' => '#eee',
  'label' => __( 'Navbar Background', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  //Stop color for the nav bar gradient
  'slug' => 'navbar-border',
  'default' => '#f8f8f8',
  'label' => __( 'Navbar Border', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  //Inactive navigation bar links
  'slug' => 'nav-bar-links',
  'default' => '#1a3975',
  'label' => __( 'Navigation Bar Links', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  //Link to the active page
  'slug' => 'nav-bar-active-link',
  'default' => '#ffffff',
  'label' => __( 'Navigation Bar Active Link', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  'slug' => 'nav-bar-active-link-background',
  'default' => '#777777',
  'label' => __( 'Navigation Bar Active Link Background', 'pdxchambers-sandbox-2015')
);

$defaultColors[] = array(
  'slug' => 'nav-sub-menu',
  'default' => '#ffffff',
  'label' => __( 'Navigation Bar Sub-Menu', 'pdxchambers-sandbox-2015')
);
