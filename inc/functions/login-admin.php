<?php

// Altera logo do painel de acesso ao admin
// -----------------------------------------
add_action('login_head',  'thepress_change_admin_logo');

function thepress_change_admin_logo () {
  echo
  '<style>
    h1 a{
      background-image:url('.get_bloginfo('template_directory').'/static/images/logotypes/logo-theme.jpg)!important;
      width: 100% !important;
      height: 110px !important;
      background-size: 100% !important;
    }

    .button-primary{
      background: #000 !important;
      border-color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }
  </style>'
  ;
}

// Altera url do painel de login
// ------------------------------
add_filter('login_headerurl', 'thepress_change_admin_url');

function thepress_change_admin_url () {
	return get_bloginfo('url');
}

// Altera título do painel de login
// ---------------------------------
add_filter('login_headertitle', 'thepress_change_admin_title');

function thepress_change_admin_title () {
  return get_option('blogname');
}

add_action('admin_footer','posts_status_color');

function posts_status_color () { ?>
  <style>
    .status-draft{background: #FCE3F2 !important;}
    .status-pending{background: #87C5D6 !important;}
    .status-publish{/* no background keep wp alternating colors */}
    .status-future{background: #C6EBF5 !important;}
    .status-private{background:#F2D46F;}
  </style>
<?php }