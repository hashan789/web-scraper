<?php

  include('simple_html_dom.php');

  $link = file_get_html('https://www.w3schools.com/php/default.asp');

  $lists = $link->find('div[class="w3-bar w3-left"] a');

  foreach($lists as $list){
    echo $list;
  }

  

?>