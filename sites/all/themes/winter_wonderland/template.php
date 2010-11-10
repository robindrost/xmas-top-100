<?php // $Id: template.php,v 1.2 2009/11/25 17:12:02 divisivecottonwood Exp $ ?>
<?php

/* These are needed for the body classes */

function winter_wonderland_preprocess_page(&$vars, $hook) {

    $classes = split(' ', $vars['body_classes']);
    
     if(empty($vars['footer_top_left'])){
        $classes[] = t('no-footer-one-left');
    } else{
        $classes[] = t('has-footer-one-left');
    }
    if(empty($vars['footer_top_right'])){
        $classes[] = t('no-footer-one-right');
    } else{
        $classes[] = t('has-footer-one-right');
    }
     if(empty($vars['footer_bottom_middle'])){
        $classes[] = t('no-footer-two-middle');
    } else{
        $classes[] = t('has-footer-two-middle');
    }
    if(empty($vars['footer_bottom_right'])){
        $classes[] = t('no-footer-two-right');
    } else{
        $classes[] = t('has-footer-two-right');
    }
    
    $vars['body_classes_array'] = $classes;
    $vars['body_classes'] = implode(' ', $classes);
    
}

// Removes read more link from its usual node position

function winter_wonderland_links($links, $attributes = array()) {
    unset($links['node_read_more']);
    return theme_links($links, $attributes);
}


/* Breadcrumb */


function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
// uncomment the next line to enable current page in the breadcrumb trail
 $breadcrumb[] = drupal_get_title();
    return '<div class="breadcrumb">'. implode(' &rarr; ', $breadcrumb) .'</div>';
  }
}

/**

Below changes the layout of the search box


* Override or insert PHPTemplate variables into the search_theme_form template.
*
* @param $vars
*   A sequential array of variables to pass to the theme template.
* @param $hook
*   The name of the theme function being called (not used in this case.)
*/


function winter_wonderland_preprocess_search_theme_form(&$vars, $hook) {

  // Modify elements of the search form
  $vars['form']['search_theme_form']['#title'] = t('');
 
  // Set a default value for the search box
  $vars['form']['search_theme_form']['#value'] = t('Search this Site');
 
  // Add a custom class to the search box
  $vars['form']['search_theme_form']['#attributes'] = array('class' => 'NormalTextBox txtSearch',
  'onfocus' => "if (this.value == 'Search this Site') {this.value = '';}",
  'onblur' => "if (this.value == '') {this.value = 'Search this Site';}");
 
  // Change the text on the submit button
  $vars['form']['submit']['#value'] = t('Go');

  // Rebuild the rendered version (search form only, rest remains unchanged)
  unset($vars['form']['search_theme_form']['#printed']);
  $vars['search']['search_theme_form'] = drupal_render($vars['form']['search_theme_form']);

  $vars['form']['submit']['#type'] = 'image_button';
  $vars['form']['submit']['#src'] =  'sites/all/themes/winter_wonderland/images/search.jpg';

  // Rebuild the rendered version (submit button, rest remains unchanged)
  unset($vars['form']['submit']['#printed']);
  $vars['search']['submit'] = drupal_render($vars['form']['submit']);

  // Collect all form elements to make it easier to print the whole form.
  $vars['search_form'] = implode($vars['search']);
}


?>