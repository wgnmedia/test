<?php
function theme276_menu_local_task($link, $active = FALSE) {
  return '<li '. ($active ? 'class="active" ' : '') .'><span><span>'. $link ."</span></span></li>\n";
}
function theme276_l($text, $path, $options = array()) {
  // Merge in defaults.
  $options += array(
      'attributes' => array(),
      'html' => TRUE,
    );

  // Append active class.
  if ($path == $_GET['q'] || ($path == '<front>' && drupal_is_front_page())) {
    if (isset($options['attributes']['class'])) {
      $options['attributes']['class'] .= ' active';
    }
    else {
      $options['attributes']['class'] = 'active';
    }
  }

  // Remove all HTML and PHP tags from a tooltip. For best performance, we act only
  // if a quick strpos() pre-check gave a suspicion (because strip_tags() is expensive).
  if (isset($options['attributes']['title']) && strpos($options['attributes']['title'], '<') !== FALSE) {
    $options['attributes']['title'] = strip_tags($options['attributes']['title']);
  }

  return '<a href="'. check_url(url($path, $options)) .'"'. drupal_attributes($options['attributes']) .'>'. ($options['html'] ? $text : check_plain($text)) .'</a>';
}

/**
* Override theme_links to include <span> in list.
*/
function theme276_links($links, $attributes = array('class' => 'links')) {
 $output = '';
  if (count($links) > 0) {
    $output = '<ul'. drupal_attributes($attributes) .'>';
    $num_links = count($links);
    $i = 1;
    foreach ($links as $key => $link) {
      $class = '';
      // Automatically add a class to each link and also to each LI
      if (isset($link['attributes']) && isset($link['attributes']['class'])) {
        $link['attributes']['class'] .= ' ' . $key;
        $class = $key;
      }
      else {
        $link['attributes']['class'] = $key;
        $class = $key;
      }
      // Add first and last classes to the list of links to help out themers.
      $extra_class = '';
      if ($i == 1) {
        $extra_class .= 'first ';
      }
      if ($i == $num_links) {
        $extra_class .= 'last ';
      }
      // Add class active to active li
      $current = '';
      if (strstr($class, 'active')) {
        $current = ' active';
      }
      $output .= '<li class="'. $extra_class . $class . $current .'">';
      // Is the title HTML?
      $html = isset($link['html']) && $link['html'];
      // Initialize fragment and query variables.
      $link['query'] = isset($link['query']) ? $link['query'] : NULL;
      $link['fragment'] = isset($link['fragment']) ? $link['fragment'] : NULL;
      if (isset($link['href'])) {
        $spanned_title = "<span ". drupal_attributes($link['attributes']) ."><span>".$link['title']."</span></span>";
// In the line above, you could take out the drupal_attributes var and specify your class
		
       $output .= theme276_l($spanned_title, $link['href'], $link['attributes'], $link['query'], $link['fragment']);
      } else if ($link['title']) {
        //Some links are actually not links, but we wrap these in <span> for adding title and class attributes
        if (!$html) {
          $link['title'] = check_plain($link['title']);
        }
        $output .= '<span'. drupal_attributes($link['attributes']) .'>'. $link['title'] .'</span>';
      }
      $i++;
      $output .= "</li>\n";
    }
    $output .= '</ul>';
  }
  return $output;
}

/*ZEBRA*/
function phptemplate_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {
  static $zebra = FALSE;
  $zebra = !$zebra;
  $class = ($menu ? 'expanded' : ($has_children ? 'collapsed' : 'leaf'));
  if (!empty($extra_class)) {
    $class .= ' '. $extra_class;
  }
  if ($in_active_trail) {
    $class .= ' active-trail';
  }
  if ($zebra) {
    $class .= ' even';
  }
  else {
    $class .= ' odd';
  }
  return '<li class="'. $class .'">'. $link . $menu ."</li>\n";
}
?>