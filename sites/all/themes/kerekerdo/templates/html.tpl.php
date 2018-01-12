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
  <meta http-equiv="Content-Language" content="hu_HU" />
  <meta name="resource-type" content="document" />
  <meta property="og:url" content="http://www.kerekerdokert.hu" />
  <meta property="og:title" content="Kerekerdő Kertépítő Kft." />
  <meta property="og:image" content="http://www.kerekerdokert.hu/kerekerdo_logo.png" />
  <meta property="og:description" content="Fiatal, szakképzett csapatunk örömmel segít álmai kertjének megvalósításában, tapasztalattal, szaktudással öntve formába elképzeléseit. Honlapunkon olvashat rólunk, arról, hogy hogyan, milyen alapelvek mentén, milyen szempontok szem előtt tartásával dolgozunk. " />

  <title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width">
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
  <div class="container">
      <div class="header">
        <div class="header_kep"></div>

        <ul id="nav">
          <li><a href="#kerttervezes">Kerttervezés</a></li>
          <li><a href="#kertepites">Kertépítés</a></li>
          <li><a href="#kertgondozas">Kertgondozás</a></li>
          <li><a href="#ontozorendszer">Öntözőrendszer</a></li>
          <li><a href="#arak">Árak-Garancia</a></li>
          <li><a href="#magunkrol">Magunkról</a></li>
          <li><a href="#galeria">Galéria</a></li>
          <li><a href="#elerhetoseg">Elérhetőség</a></li>
        </ul>
      </div>
      <div class="menupont">

        <?php $node = node_load(1); ?>
        
        <div class="cim"><a name="kerttervezes"><h1>
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
            <?php
              $gallery = field_view_field('node', $node, 'field_gallery', 'default');
              print render($gallery);
            ?>
            <div style="clear:both;"></div>
        
        </div>
        <div id="elv_kep_1" class="elvalaszto_kep">
          <?php
            $separator_image = field_view_field('node', $node, 'field_separation_image', 'default');
            print render($separator_image);
          ?>
        </div>
      </div> <!-- Kerttervezés -->



      <div class="menupont">
        <div class="zold_sav"></div>

        <?php
          $node = node_load(2);
        ?>

        <div class="cim"><a name="kertepites"><h1>
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
        </div>

        <div id="elv_kep_2" class="elvalaszto_kep">
          <?php
            $separator_image = field_view_field('node', $node, 'field_separation_image', 'default');
            print render($separator_image);
          ?>
        </div>


      </div> <!-- Kertépítés -->

      
      <div class="menupont">
        <div class="zold_sav"></div>

        <?php
          $node = node_load(3);
        ?>

        <div class="cim"><a name="kertgondozas"><h1>
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
        </div>

        <div id="elv_kep_2" class="elvalaszto_kep">
          <?php
            $separator_image = field_view_field('node', $node, 'field_separation_image', 'default');
            print render($separator_image);
          ?>
        </div>


      </div> <!-- Kertgondozás -->





      <div class="menupont">
        <div class="zold_sav"></div>

        <?php
          $node = node_load(4);
        ?>

        <div class="cim"><a name="ontozorendszer"><h1>
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
        </div>

        <div id="elv_kep_2" class="elvalaszto_kep">
          <?php
            $separator_image = field_view_field('node', $node, 'field_separation_image', 'default');
            print render($separator_image);
          ?>
        </div>


      </div> <!-- Öntözőrendszer -->
      
           
       <div class="menupont">
        <div class="zold_sav"></div>

        <?php
          $node = node_load(5);
        ?>

        <div class="cim"><a name="arak"><h1>
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
        </div>

        <div id="elv_kep_2" class="elvalaszto_kep">
          <?php
            $separator_image = field_view_field('node', $node, 'field_separation_image', 'default');
            print render($separator_image);
          ?>
        </div>


      </div> <!-- Árak garancia -->






      
      
        









      
      
      <div class="menupont">
      <div class="zold_sav"></div>
            <div class="cim"><a name="magunkrol"><h1><img id="cim_magunkrol" src="css/magunkrol.png" alt="Magunkról"></img></h1></a></div>
      <div class="lead"><p>A Kerekerdő Kertépítő Kft-t 2011-ben alapítottuk férjemmel együtt, még egyetemi éveink alatt. Mindketten a  Budapesti Corvinus Egyetem Kertészmérnöki alapképzésén végeztünk, majd Díszkertészeti- és növényalkalmazási mérnökként folytattuk tanulmányainkat mesterképzésen. Az első  megrendeléseinket még tanulmányaink alatt kiviteleztük, az azóta eltelt évek alatt számos kertet terveztünk, építettünk és tartunk fenn.
      </p>
      </div>
      <div class="tartalom"><p class="lastp">
      Fontosnak tartjuk ügyfeleinkkel a személyes kapcsolatot, a megrendeléstől kezdődően a tervezésen át egészen a kivitelezés és átadás folyamán is. Úgy gondoljuk, komoly felelősség egy kert megtervezése és kivitelezése, hiszen a megrendelő elképzeléseit, álmait bízza ránk, egy olyan élettér kialakítását, mely később a nyugalom és kikapcsolódás helye lesz számára.  
      Hiszünk benne, hogy kertünk szépsége nem csak a nagy díszes virágokban és gyümölcsökben nyilvánul meg, hanem az ehhez vezető útban, gondoskodásunkban, szeretetünkben, energiánkban, amit növényeink ápolásába fektetünk. 
      <br/>Célunk, hogy a kert ne  csupán egy „dísztárgy”, vagy öncélú műalkotás legyen, hanem saját kis élővilágával szép élmények forrása, a valódi kikapcsolódás és nyugalom helyszíne,  mely méltó háttere, élettere hétköznapjainknak és ünnepnapjainknak.
      <br/><br/>Fülöp-Pocsai Berta<br/>
      okleveles díszkertészeti és növényalkalmazási mérnök</p><br/>
      </div><div id="elv_kep_6" class="elvalaszto_kep"></div>
      </div>









      <div class="menupont">
      
      <div class="zold_sav"></div>
      
            <div class="cim"><a name="galeria"><h1><img id="cim_galeria" src="css/galeria.png" alt="Galéria"></img></h1></a></div>
            <div class="galeria_wrapper_open"> 
            <div class="galeria_novenyek_open"><a href="#"> Növények </a></div><div class="galeria_kertek_open"><a href="#"> Kertek </a></div>
            </div>
            
            <div id="galeria_novenyek" >

    
    <img alt="1. Rosa 'Rote The Fairy' - ciklámen virágú talajtakaró rózsa 2. Nepeta x faassenii - macskamenta"
         src="kepek/novenyek/thumbs/1_Rosa_Nepeta_x_faassenii.jpg"
         data-image="kepek/novenyek/1_Rosa_Nepeta_x_faassenii.jpg"
         data-description="1. <span class='latin_nev'>Rosa 'Rote The Fairy'</span> - ciklámen virágú talajtakaró rózsa 2. <span class='latin_nev'>Nepeta x faassenii</span> - macskamenta"
         style="display:none">
    
    <img alt="1.Hosta 'Francee' - árnyékliliom 2. Astilbe x arendsii  'Erika' - tollbuga 3. Heuchera 'Palace Purple' - amerikai tűzeső"
         src="kepek/novenyek/thumbs/1_Hosta_ 2_Astilbe_3_Heuchera.jpg"
         data-image="kepek/novenyek/1_Hosta_ 2_Astilbe_3_Heuchera.jpg"
         data-description="1. <span class='latin_nev'>Hosta 'Francee'</span> - árnyékliliom 2. <span class='latin_nev'>Astilbe x arendsii  'Erika'</span> - tollbuga 3. <span class='latin_nev'>Heuchera 'Palace Purple'</span> - amerikai tűzeső"
         style="display:none">

    <img alt="Allium aflatunense - iráni hagyma"
         src="kepek/novenyek/thumbs/Allium_aflatunense.jpg"
         data-image="kepek/novenyek/Allium_aflatunense.jpg' onmouseover='resizeArrowWrapper();'"
         data-description="<div class='box' onmouseover='showArrow();' onmouseout='hideArrow();'><div class='arrow' style='display:none'>Allium aflatunense - iráni hagyma</div></div><span class='latin_nev'>Allium aflatunense</span> - iráni hagyma"
         style="display:none">

    <img alt="Astilbe x arendsii 'Erika' - kerti tollbuga"
         src="kepek/novenyek/thumbs/Astilbe_x_arendsii.jpg"
         data-image="kepek/novenyek/Astilbe_x_arendsii.jpg"
         data-description="<span class='latin_nev'>Astilbe x arendsii 'Erika'</span> - kerti tollbuga"
         style="display:none">

    <img alt="Astilbe x japonica - japán tollbuga"
         src="kepek/novenyek/thumbs/Astilbe_x_japonica.jpg"
         data-image="kepek/novenyek/Astilbe_x_japonica.jpg"
         data-description="<span class='latin_nev'>Astilbe x japonica</span> - japán tollbuga"
         style="display:none">

    <img alt="Ceratodon purpureus - parázsmoha"
         src="kepek/novenyek/thumbs/Ceratodon_purpureus.jpg"
         data-image="kepek/novenyek/Ceratodon_purpureus.jpg"
         data-description="<span class='latin_nev'>Ceratodon purpureus</span> - parázsmoha"
         style="display:none">

    <img alt="Clerodendrum bungei 'Pink Diamond' - tarka levelű végzetfa"
         src="kepek/novenyek/thumbs/Clerodendrum_bungei.jpg"
         data-image="kepek/novenyek/Clerodendrum_bungei.jpg"
         data-description="<span class='latin_nev'>Clerodendrum bungei 'Pink Diamond'</span> - tarka levelű végzetfa"
         style="display:none">

    <img alt="Coprinellus micaceus - kerti tintagomba"
         src="kepek/novenyek/thumbs/Coprinellus_micaceus.jpg"
         data-image="kepek/novenyek/Coprinellus_micaceus.jpg"
         data-description="<span class='latin_nev'>Coprinellus micaceus</span> - kerti tintagomba"
         style="display:none">

    <img alt="Cornus alba 'Elegantissima' - fehér- tarka levelű piros vesszejű som"
         src="kepek/novenyek/thumbs/Cornus_alba.jpg"
         data-image="kepek/novenyek/Cornus_alba.jpg"
         data-description="<span class='latin_nev'>Cornus alba 'Elegantissima'</span> - fehér- tarka levelű piros vesszejű som"
         style="display:none">

    <img alt="Crataegus x media ’Paul’s Scarlet’ - pirosvirágú galagonya"
         src="kepek/novenyek/thumbs/Crataegus_x_media.jpg"
         data-image="kepek/novenyek/Crataegus_x_media.jpg"
         data-description="<span class='latin_nev'>Crataegus x media ’Paul’s Scarlet’</span> - pirosvirágú galagonya"
         style="display:none">

    <img alt="Dicentra spectabilis ’Alba’ - nagy szívvirág"
         src="kepek/novenyek/thumbs/Dicentra_spectabilis_Alba.jpg"
         data-image="kepek/novenyek/Dicentra_spectabilis_Alba.jpg"
         data-description="<span class='latin_nev'>Dicentra spectabilis ’Alba’</span> - nagy szívvirág"
         style="display:none">
       
    <img alt="Dicentra spectabilis - szívvirág"
         src="kepek/novenyek/thumbs/Dicentra_spectabilis.jpg"
         data-image="kepek/novenyek/Dicentra_spectabilis.jpg"
         data-description="<span class='latin_nev'>Dicentra spectabilis</span> - szívvirág"
         style="display:none">
       
    <img alt="Echinacea sp. - kasvirág (2)"
         src="kepek/novenyek/thumbs/Echinacea_sp2.jpg"
         data-image="kepek/novenyek/Echinacea_sp2.jpg"
         data-description="<span class='latin_nev'>Echinacea sp.</span> - kasvirág (2)"
         style="display:none">
       
    <img alt="Echinacea sp. - kasvirág (3)"
         src="kepek/novenyek/thumbs/Echinacea_sp3.jpg"
         data-image="kepek/novenyek/Echinacea_sp3.jpg"
         data-description="<span class='latin_nev'>Echinacea sp.</span> - kasvirág (3)"
         style="display:none">
       
    <img alt="Echinops bannaticus - bánsági szamárkenyér"
         src="kepek/novenyek/thumbs/Echinops_bannaticus.jpg"
         data-image="kepek/novenyek/Echinops_bannaticus.jpg"
         data-description="<span class='latin_nev'>Echinops bannaticus</span> - bánsági szamárkenyér"
         style="display:none">
     
    <img alt="Echinops bannaticus - bánsági szamárkenyér (2)"
         src="kepek/novenyek/thumbs/Echinops_bannaticus2.jpg"
         data-image="kepek/novenyek/Echinops_bannaticus2.jpg"
         data-description="<span class='latin_nev'>Echinops bannaticus</span> - bánsági szamárkenyér (2)"
         style="display:none">
       
    <img alt="fű"
         src="kepek/novenyek/thumbs/fu.jpg"
         data-image="kepek/novenyek/fu.jpg"
         data-description="fű"
         style="display:none">  
       
    <img alt="fűszerkert"
         src="kepek/novenyek/thumbs/fuszerkert.jpg"
         data-image="kepek/novenyek/fuszerkert.jpg"
         data-description="fűszerkert"
         style="display:none">
       
    <img alt="gyepszőnyeg"
         src="kepek/novenyek/thumbs/gyepszonyeg.jpg"
         data-image="kepek/novenyek/gyepszonyeg.jpg"
         data-description="gyepszőnyeg"
         style="display:none">
       
    <img alt="Hemerocallis ’Pink Damask’ - sásliliom"
         src="kepek/novenyek/thumbs/Hemerocallis_Pink_Damask_.jpg"
         data-image="kepek/novenyek/Hemerocallis_Pink_Damask_.jpg"
         data-description="<span class='latin_nev'>Hemerocallis ’Pink Damask’</span> - sásliliom"
         style="display:none">
       
    <img alt="Hemerocallis - sásliliom"
         src="kepek/novenyek/thumbs/Hemerocallis.jpg"
         data-image="kepek/novenyek/Hemerocallis.jpg"
         data-description="<span class='latin_nev'>Hemerocallis</span> - sásliliom"
         style="display:none">
       
    <img alt="Heuchera mircantaha 'Palace Purple' - amerikai tűzeső"
         src="kepek/novenyek/thumbs/Heuchera_mircantaha.jpg"
         data-image="kepek/novenyek/Heuchera_mircantaha.jpg"
         data-description="<span class='latin_nev'>Heuchera mircantaha 'Palace Purple'</span> - amerikai tűzeső"
         style="display:none">    
       
    <img alt="Hosta ’Patriot’ - árnyékliliom"
         src="kepek/novenyek/thumbs/Hosta_Patriot.jpg"
         data-image="kepek/novenyek/Hosta_Patriot.jpg"
         data-description="<span class='latin_nev'>Hosta ’Patriot’</span> - árnyékliliom"
         style="display:none">
       
    <img alt="Hosta fortunei 'Patriot' - árnyékliliom"
         src="kepek/novenyek/thumbs/Hosta_fortunei_Patriot.jpg"
         data-image="kepek/novenyek/Hosta_fortunei_Patriot.jpg"
         data-description="<span class='latin_nev'>Hosta fortunei 'Patriot'</span> - árnyékliliom"
         style="display:none">
       
    <img alt="Hosta plantaginea - árnyékliliom"
         src="kepek/novenyek/thumbs/Hosta_plantaginea.jpg"
         data-image="kepek/novenyek/Hosta_plantaginea.jpg"
         data-description="<span class='latin_nev'>Hosta plantaginea</span> - árnyékliliom"
         style="display:none">
       
    <img alt="Hydrangea arborescens 'Annabelle' - cserjés hortenzia"
         src="kepek/novenyek/thumbs/Hydrangea_arborescens.jpg"
         data-image="kepek/novenyek/Hydrangea_arborescens.jpg"
         data-description="<span class='latin_nev'>Hydrangea arborescens 'Annabelle'</span> - cserjés hortenzia"
         style="display:none">
  
    <img alt="Hydrangea arborescens 'Annabelle' - cserjés hortenzia (2)"
         src="kepek/novenyek/thumbs/Hydrangea_arborescens2.jpg"
         data-image="kepek/novenyek/Hydrangea_arborescens2.jpg"
         data-description="<span class='latin_nev'>Hydrangea arborescens 'Annabelle'</span> - cserjés hortenzia (2)"
         style="display:none">
  
    <img alt="Hydrangea quercifolia - tölgylevelű hortenzia"
         src="kepek/novenyek/thumbs/Hydrangea_quercifolia.jpg"
         data-image="kepek/novenyek/Hydrangea_quercifolia.jpg"
         data-description="<span class='latin_nev'>Hydrangea quercifolia</span> - tölgylevelű hortenzia"
         style="display:none">
       
    <img alt="Larix kaempferi ’Diana’ - japán vörösfenyő"
         src="kepek/novenyek/thumbs/Larix_kaempferi.jpg"
         data-image="kepek/novenyek/Larix_kaempferi.jpg"
         data-description="<span class='latin_nev'>Larix kaempferi ’Diana’</span> - japán vörösfenyő"
         style="display:none">
           
    <img alt="levendula és mexikói árvalányhaj"
         src="kepek/novenyek/thumbs/levendula_mexikoi_arvalanyhaj.jpg"
         data-image="kepek/novenyek/levendula_mexikoi_arvalanyhaj.jpg"
         data-description="levendula és mexikói árvalányhaj"
         style="display:none">

    <img alt="levendula és mexikói árvalányhaj (2)"
         src="kepek/novenyek/thumbs/levendula_mexikoi_arvalanyhaj2.jpg"
         data-image="kepek/novenyek/levendula_mexikoi_arvalanyhaj2.jpg"
         data-description="levendula és mexikói árvalányhaj (2)"
         style="display:none">
       
    <img alt="Lonicera japonica - japánlonc"
         src="kepek/novenyek/thumbs/Lonicera_japonica.jpg"
         data-image="kepek/novenyek/Lonicera_japonica.jpg"
         data-description="<span class='latin_nev'>Lonicera japonica</span> - japánlonc"
         style="display:none">
       
    <img alt="Lonicera nitida 'Migrün' - mirtuszlonc"
         src="kepek/novenyek/thumbs/Lonicera_nitida.jpg"
         data-image="kepek/novenyek/Lonicera_nitida.jpg"
         data-description="<span class='latin_nev'>Lonicera nitida 'Migrün'</span> - mirtuszlonc"
         style="display:none">
       
    <img alt="Nepeta x faassenii - macskamenta"
         src="kepek/novenyek/thumbs/Nepeta_x_faassenii.jpg"
         data-image="kepek/novenyek/Nepeta_x_faassenii.jpg"
         data-description="<span class='latin_nev'>Nepeta x faassenii</span> - macskamenta"
         style="display:none">
       
    <img alt="nyáriorgona és terülő rózsa"
         src="kepek/novenyek/thumbs/nyariorgona_terulo_rozsa.jpg"
         data-image="kepek/novenyek/nyariorgona_terulo_rozsa.jpg"
         data-description="nyáriorgona és terülő rózsa"
         style="display:none">
       
    <img alt="Pelergonium peltatum - futó muskátli"
         src="kepek/novenyek/thumbs/Pelergonium_peltatum.jpg"
         data-image="kepek/novenyek/Pelergonium_peltatum.jpg"
         data-description="<span class='latin_nev'>Pelergonium peltatum</span> - futó muskátli"
         style="display:none">
       
    <img alt="Peonia officinalis - kerti bazsarózsa"
         src="kepek/novenyek/thumbs/Peonia_officinalis.jpg"
         data-image="kepek/novenyek/Peonia_officinalis.jpg"
         data-description="<span class='latin_nev'>Peonia officinalis</span> - kerti bazsarózsa"
         style="display:none">
       
    <img alt="Phyllitis scolopendrium - gímpáfrány"
         src="kepek/novenyek/thumbs/Phyllitis_scolopendrium.jpg"
         data-image="kepek/novenyek/Phyllitis_scolopendrium.jpg"
         data-description="<span class='latin_nev'>Phyllitis scolopendrium</span> - gímpáfrány"
         style="display:none">
       
    <img alt="Rhododendron sp. - havasszépe"
         src="kepek/novenyek/thumbs/Rhododendron_sp.jpg"
         data-image="kepek/novenyek/Rhododendron_sp.jpg"
         data-description="<span class='latin_nev'>Rhododendron sp.</span> - havasszépe"
         style="display:none">
       
    <img alt="Rosa 'Red Amorina' - piros talajtakaró rózsa"
         src="kepek/novenyek/thumbs/Rosa_Red Amorina.jpg"
         data-image="kepek/novenyek/Rosa_Red Amorina.jpg"
         data-description="<span class='latin_nev'>Rosa 'Red Amorina'</span> - piros talajtakaró rózsa"
         style="display:none">
       
    <img alt="Rosa 'Rote The Fairy' - ciklámen terülő rózsa"
         src="kepek/novenyek/thumbs/Rosa_Rote_The_Fairy.jpg"
         data-image="kepek/novenyek/Rosa_Rote_The_Fairy.jpg"
         data-description="<span class='latin_nev'>Rosa 'Rote The Fairy'</span> - ciklámen terülő rózsa"
         style="display:none">
       
    <img alt="Rosa 'Rote The Fairy' - ciklámen virágú talajtakaró rózsa"
         src="kepek/novenyek/thumbs/Rosa_Rote_The_Fairy_ciklamen.jpg"
         data-image="kepek/novenyek/Rosa_Rote_The_Fairy_ciklamen.jpg"
         data-description="<span class='latin_nev'>Rosa 'Rote The Fairy'</span> - ciklámen virágú talajtakaró rózsa"
         style="display:none">
       
    <img alt="Rosa rugosa - japán rózsa"
         src="kepek/novenyek/thumbs/Rosa_rugosa.jpg"
         data-image="kepek/novenyek/Rosa_rugosa.jpg"
         data-description="<span class='latin_nev'>Rosa rugosa</span> - japán rózsa"
         style="display:none">
       
    <img alt="Rosa sp. - rózsa"
         src="kepek/novenyek/thumbs/Rosa sp.jpg"
         data-image="kepek/novenyek/Rosa sp.jpg"
         data-description="<span class='latin_nev'>Rosa sp.</span> - rózsa"
         style="display:none">
       
    <img alt="Rosa 'The Fairy' - talajtakaró rózsa"
         src="kepek/novenyek/thumbs/Rosa_The_Fairy.jpg"
         data-image="kepek/novenyek/Rosa_The_Fairy.jpg"
         data-description="<span class='latin_nev'>Rosa 'The Fairy'</span> - talajtakaró rózsa"
         style="display:none">
    
    <img alt="Rosa 'The Fairy' - talajtakaró rózsa (2)"
         src="kepek/novenyek/thumbs/Rosa_The_Fairy2.jpg"
         data-image="kepek/novenyek/Rosa_The_Fairy2.jpg"
         data-description="<span class='latin_nev'>Rosa 'The Fairy'</span> - talajtakaró rózsa (2)"
         style="display:none">
       
    <img alt="Spiraea japonica ’Shirobana’ - japán gyöngyvessző"
         src="kepek/novenyek/thumbs/Spiraea_japonica.jpg"
         data-image="kepek/novenyek/Spiraea_japonica.jpg"
         data-description="<span class='latin_nev'>Spiraea japonica ’Shirobana’</span> - japán gyöngyvessző"
         style="display:none">
       
    <img alt="Stipa tenuissima - mexikói árvalányhaj"
         src="kepek/novenyek/thumbs/Stipa_tenuissima.jpg"
         data-image="kepek/novenyek/Stipa_tenuissima.jpg"
         data-description="<span class='latin_nev'>Stipa tenuissima</span> - mexikói árvalányhaj"
         style="display:none">
       
    <img alt="Viburnum opulus - kányabangita"
         src="kepek/novenyek/thumbs/Viburnum_opulus.jpg"
         data-image="kepek/novenyek/Viburnum_opulus.jpg"
         data-description="<span class='latin_nev'>Viburnum opulus</span> - kányabangita"
         style="display:none">
       
    <img alt="Viburnum x burkwoodii - tavaszi bangita"
         src="kepek/novenyek/thumbs/Viburnum_x_burkwoodii.jpg"
         data-image="kepek/novenyek/Viburnum_x_burkwoodii.jpg"
         data-description="<span class='latin_nev'>Viburnum x burkwoodii</span> - tavaszi bangita"
         style="display:none">
                  
  </div>
    
  <div id="galeria_kertek" >

    <a href="Elotte_utana/"><img alt="Előtte-utána"
         src="Elotte_utana/kepek/thumbs/Elotte_utana_top.jpg"
         data-image="Elotte_utana/kepek/thumbs/Elotte_utana_top.jpg"
         data-description=""
         style="display:none"></a>
       
    <a href="A_hely_szelleme/"><img alt="A hely szelleme"
         src="A_hely_szelleme/kepek/thumbs/A_hely_szelleme_2.jpg"
         data-image="A_hely_szelleme/kepek/thumbs/A_hely_szelleme_2.jpg"
         data-description=""
         style="display:none"></a>

    <a href="Egyenisegek_kertje/"><img alt="Egyéniségek kertje"
         src="Egyenisegek_kertje/kepek/thumbs/Egyenisegek_kertje_5.jpg"
         data-image="Egyenisegek_kertje/kepek/thumbs/Egyenisegek_kertje_5.jpg"
         data-description=""
         style="display:none"></a>

    <a href="Fenyok_alatt/"><img alt="Fenyők alatt"
         src="Fenyok_alatt/kepek/thumbs/Fenyok_alatt_5.jpg"
         data-image="Fenyok_alatt/kepek/thumbs/Fenyok_alatt_5.jpg"
         data-description=""
         style="display:none"></a>

    <a href="Gyerekek_kertje/"><img alt="Gyerekek kertje"
         src="Gyerekek_kertje/kepek/thumbs/Gyerekek_kertje_2.jpg"
         data-image="Gyerekek_kertje/kepek/thumbs/Gyerekek_kertje_2.jpg"
         data-description=""
         style="display:none"></a>

    <a href="Kicsi_es_takaros/"><img alt="Kicsi és takaros"
         src="Kicsi_es_takaros/kepek/thumbs/Kicsi_es_takaros_6.jpg"
         data-image="Kicsi_es_takaros/kepek/thumbs/Kicsi_es_takaros_6.jpg"
         data-description=""
         style="display:none"></a>
  
    <a href="Parkolobol_jatekter/"><img alt="Parkolóból játéktér"
         src="Parkolobol_jatekter/kepek/thumbs/Parkolobol_jatekter_2.jpg"
         data-image="Parkolobol_jatekter/kepek/thumbs/Parkolobol_jatekter_2.jpg"
         data-description=""
         style="display:none"></a>
  
    <a href="Vadregenyes_viragtenger/"><img alt="Vadregényes virágtenger"
         src="Vadregenyes_viragtenger/kepek/thumbs/Vadregenyes_viragtenger_4.jpg"
         data-image="Vadregenyes_viragtenger/kepek/thumbs/Vadregenyes_viragtenger_4.jpg"
         data-description=""
         style="display:none"></a>

       
  </div>

            
      </div>  

      <div class="menupont">
      <div class="zold_sav"></div>
            <div class="cim"><a name="elerhetoseg"><h1><img id="cim_elerhetoseg" src="css/elerhetoseg.png" alt="Elérhetőség"></img></h1></a></div>
      <p>
      <div class="elerhetoseg_wrapper">
        <div class="elerhetoseg_1">
        <div id="viktor" class="portre"></div>
        <div class="info"><p>
        <h2>Fülöp Viktor</h2>
        öntözéstechnika, kertépítés, kertfenntartás<br/>
        <p id="lev1"></p>
        06205459097<br/>
        </p></div>
        </div>
        
        <div class="elerhetoseg_2">
                <div id="berta" class="portre"></div>
        <div class="info"><p>
        <h2>Fülöp-Pocsai Berta</h2>
        kerttervezés, kertépítés, kertfenntartás<br/>
        <p id="lev2"></p>
        06205459998<br/>
        </p></div>
        </div>
      </div>
      </p>
      <div id="elv_kep_7" class="elvalaszto_kep"></div>
      </div>  
      <div class="footer">
      Kerekerdő Kertépítő Kft. Szentendre, Bükkös part 70. www.kerekerdokert.hu </br>
      A honlapon található tervek, kertek és képek a Kerekerdő Kertépítő Kft. saját munkái, felhasználásuk csak a szerző írásos hozzájárulásával lehetséges.
      </div>
</div> 
<a href="#" class="back-to-top">Back to Top</a>
<div class='arrow' style='display:none'></div>
</body>
</html>
