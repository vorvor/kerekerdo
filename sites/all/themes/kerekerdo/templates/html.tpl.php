<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>
<html <?php print $html_attributes . $rdf_namespaces; ?>>
<head>
  <?php print $head; ?>
  <meta name="Keywords" content="kerekerdő, kerttervezés, kertépítés, madárbarát kert, gyerekbarát kert, fenntartható kert, temetőkert" />
  <meta name="Description" content="Kerekerdő Kertépítő Kft. honlapja!" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="resource-type" content="document" />
  <meta property="og:url" content="http://www.kerekerdokert.hu" />
  <meta property="og:title" content="Kerekerdő Kertépítő Kft." />
  <meta property="og:image" content="http://www.kerekerdokert.hu/kerekerdo_logo.png" />
  <meta property="og:description" content="Fiatal, szakképzett csapatunk örömmel segít álmai kertjének megvalósításában, tapasztalattal, szaktudással öntve formába elképzeléseit. Honlapunkon olvashat rólunk, arról, hogy hogyan, milyen alapelvek mentén, milyen szempontok szem előtt tartásával dolgozunk. " />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0" />
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />


  <title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
  <?php endif; ?>

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php if ($add_html5_shim): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5shiv.min.js"></script>
    <![endif]-->
  <?php endif; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php 
    $contact_node = node_load(16);  
  ?>

  <?php

    if (in_array('authenticated user', $user->roles)) { ?>
    <div id="dashboard">
    <h2 class="dashboard">Dashboard</h2>
    <?php
      $menu = menu_navigation_links('menu-dashboard');
      print theme('links__menu_menu-dashboard', array('links' => $menu));

      print views_embed_view('manage_content', 'block_1');
    
    ?>
    </div>
    <?php
    }
  ?>
  
  <div class="container">
    <div class="header">
      <a href="/"class="header_kep"></a>

      <ul id="nav">
        <?php
          foreach ($menu_items as $menu_item) { 
            print '<li><a href="/#' . $menu_item['anchor'] . '" data-anchor="' . $menu_item['anchor'] . '">' . $menu_item['title'] . '</a></li>';
          }
        ?>
        
      </ul>
    </div>

    <?php 
    
    if (!drupal_is_front_page()) {
      print $page;
    }
    else { 
      $c = 0;
        foreach ($paragraphs as $key=>$node) {
          $c++;
          if ($c > 1) {
             print '<div class="zold_sav"></div>';
          }
          $key = str_replace(' ', '', $key);
      ?>

      <div class="menupont">
        
        <div class="cim"><a class="item-title" name="<?php print $key; ?>"><h1 class="<?php print $key; ?>">
        <span class="bg_<?php print $key; ?>"></span>
          <?php print $node->title; ?>
        </h1></a></div>
          <div class="lead"><p>
            <?php
              $lead = field_view_field('node', $node, 'field_lead', 'default');
              print render($lead);
            ?>
          </p></div>
          <div class="tartalom">
            <?php
              $body = field_view_field('node', $node, 'field_body', 'default');
              print render($body);
            ?>
            <div id="<?php print $key; ?>-gallery" class="wannabe-unite-gallery">
            <?php
              $node_wrapper = entity_metadata_wrapper('node', $node);
              foreach ($node_wrapper->field_gallery->value() as $photo) {
                print theme_image_style(
                  array(
                    'path' => $photo['uri'], 
                    'width' => $photo['width'],
                    'height' => $photo['height'],
                    'style_name' => 'gallery',
                    'attributes' => array(
                      'data-image' => file_create_url($photo['uri']),
                      ),
                  ));
              }
            ?>
            </div>
            <div style="clear:both;"></div>
        
        </div>
        <div id="elv_kep_1" class="elvalaszto_kep">
          <?php
            $separator_image = field_view_field('node', $node, 'field_separation_image', 'default');
            print render($separator_image);
          ?>
        </div>
      </div>

      <?php
      } // endforeach
      ?>

      <div class="menupont">
      
        <div class="zold_sav"></div>
      
        <div class="cim">
        <a  class="item-title" name="galeria"><h1 class="galeria">
        <span class="bg_galeria"></span>Galéria</h1></a>
        </div>
        <div class="galeria_wrapper_open"> 
          <div class="galeria_kozterek_open">
            <a href="#"> Köztéri kertek </a>
          </div>
          <div class="galeria_kertek_open">
            <a href="#"> Magán kertek </a>
          </div>
        </div>
      
        <div id="galeria_kozterek" >

        <?php
          // Gallery public gardens.
          print views_embed_view('gallery', 'block_1');
        ?>
          
        </div>
    
        <div id="galeria_kertek" >
          
        <?php
          // Gallery gardens.
          print views_embed_view('gallery', 'block');
        ?>
       
        </div>

            
      </div>  

      <div class="menupont">
      <div class="zold_sav"></div>
            <div class="cim"><a  class="item-title" name="elerhetoseg">
            <h1 class="elerhetoseg">
              <span class="bg_elerhetoseg"></span>
              Elérhetőség
            </h1></a>
            </div>
      <p>

      <div class="elerhetoseg_wrapper">

      <?php
        $c = 1;

        foreach ($contacts as $contact) {
          ?>



          <div class="contact contact-<?php ($c%2 == 0) ? print 'even' : print 'odd'; ?>">
            <div id="viktor" class="portre">
              <?php
                $image_url = $contact->field_photo['und'][0]['uri'];
                print theme('image_style', array('path' => $image_url, 'style_name' => 'contact_photo'));
              ?>
            </div>
            <div class="info"><p>
            <h2><?php print check_markup($contact->field_person_name['und'][0]['value']); ?></h2>
            <?php print check_markup($contact->field_specialization['und'][0]['value']); ?><br/>
            
            <?php
              preg_match('/(.*?)@(.*?)\.(.*)/', $contact->field_email['und'][0]['email'], $matches);
            ?>
            <p class="lev" data-a="<?php print $matches[2]; ?>" data-b="<?php print $matches[1]; ?>" data-c="<?php print $matches[3]; ?>">
            </p>
            <?php 
            if (!empty($contact->field_mobile)) {
              print '<a class="tel" href="tel:' . $contact->field_mobile['und'][0]['value'] . '">' . $contact->field_mobile['und'][0]['value'] . '</a>'; 
            }

            ?>
            <br/>
            </p></div>
          </div>




          <?php
          $c++;
        }
      ?>


        
      </div>
      </p>

      <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1343.3412018269782!2d19.0702865!3d47.6711659!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741d67a57af45dd%3A0x672d55155b4ffb63!2zS2VyZWtlcmTFkSBLZXJ0w6lww610xZEgS2Z0Lg!5e0!3m2!1shu!2shu!4v1550256890795" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div id="elv_kep_7" class="elvalaszto_kep">
        <?php
          $separator_image = field_view_field('node', $contact_node, 'field_separation_image', 'default');
          print render($separator_image);
        ?>
      </div>
      </div>  

<?php
  } //endif else - isfront
  ?>  
      <div class="<?php (drupal_is_front_page()) ? print 'footer' : print 'footer_kert'; ?>">
      <?php
        $footer_contact = field_view_field('node', $contact_node, 'field_footer_contact', 'default');
        print render($footer_contact);
      ?>
      </div>

</div> 
<a href="#" class="back-to-top">Back to Top</a>
<div class='arrow' style='display:none'></div>
</body>
</html>
