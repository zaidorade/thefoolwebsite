<!DOCTYPE html>
<html>

<!--
Site Design by


      ___           ___                      _____
     /  /\         /  /\        ___         /  /::\
    /  /::|       /  /::\      /  /\       /  /:/\:\
   /  /:/:|      /  /:/\:\    /  /:/      /  /:/  \:\
  /  /:/|:|__   /  /:/~/::\  /__/::\     /__/:/ \__\:|
 /__/:/ |:| /\ /__/:/ /:/\:\ \__\/\:\__  \  \:\ /  /:/
 \__\/  |:|/:/ \  \:\/:/__\/    \  \:\/\  \  \:\  /:/
     |  |:/:/   \  \::/          \__\::/   \  \:\/:/
     |  |::/     \  \:\          /__/:/     \  \::/
     |  |:/       \  \:\         \__\/       \__\/
     |__|/         \__\/



-->

  <head>

    <?php wp_head();?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />


  </head>

<body <?php body_class();?>>

<header>

    <div id = "topMenu" >
    <!-- <div> <img href="/imgs/_bell.png" alt="bell"> </div> -->
   <!-- <img alt="bell" src="/imgs/bell.png" width=20%>  -->
   <!-- <p class = "mainpage"> the Fool </p> -->
    <?php wp_nav_menu (
      array(
        'theme_location' => 'top-menu',
        'menu_class'=> 'navigation'
      )
    );?>
    <div class="searcher">
    <?php get_search_form();?>
  </div>
  </div>
</header>
