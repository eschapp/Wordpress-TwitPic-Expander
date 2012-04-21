<?php
function twitpicexpand($text){ 
    $foo = $text;
    $tmp = strip_tags($text);
  if (preg_match_all('#twitpic.com/([\d\w]+)#', $tmp, $matches, PREG_PATTERN_ORDER) > 0) {
    
    foreach ($matches[1] as $match) {
      $images .= "<br><a target='_blank' href='http://twitpic.com/{$match}'><img src='http://twitpic.com/show/large/{$match}' class='aligncenter' /></a>";
    }
  
  $text = $foo . '<left>' . $images . '</left>';
  }
  return $text;
}
add_filter('the_content', 'twitpicexpand', 21);
add_filter('the_excerpt', 'twitpicexpand', 21);
?>
