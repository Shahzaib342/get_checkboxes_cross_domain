<?php
include_once('simple_html_dom.php');
// Create DOM from URL or file
$html = file_get_html('https://uk.eu-supply.com/ctm/Supplier/PublicTenders/ViewNotice/17195');

// Find all images 
$i = 0;
foreach($html->find('p') as $element) {
       $i++;
      echo $element;
       if($element->checked == 'checked'){
       	$status = 'true';
       }
       else{
       	$status = 'false';
       }
       echo $i." = ". $status . "-> " . $element. '<br>';
   }

// Find all links 
// foreach($html->find('a') as $element) 
//        echo $element->href . '<br>';

   ?>
