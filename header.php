<!DOCTYPE html>
<html <?php language_attributes(); ?>>
     <head>
          <meta charset="<?php bloginfo('charset'); ?>" />
          <title>Sedona</title>

          <?php wp_head(); ?>
         
     </head>

     <body>
          <header class="page-header">
               <nav class="navigation">
                <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images//logos/sedona-headder.svg" width="140" height="70" alt="Логтип «Sedona»." />
                    <ul class="navigation-list">
                         <li class="navigation-item">
                              <a class="navigation-link" href="main.html">Главная</a>
                         </li>
                         <li class="navigation-item">
                              <a class="navigation-link" href="about.html">О Седоне</a>
                         </li>
                         <li class="navigation-item">
                              <a class="navigation-link" href="hotels.html">Гостиницы</a>
                         </li>
                    </ul>
                    <ul class="navigation-user">
                         <li class="navigation-item">
                              <a class="navigation-link" href="#"></a>
                              <span class="visually-hidden">Кнопка поиск.</span>
                         </li>
                         <li class="navigation-item">
                              <a class="navigation-link" href="#"></a>
                              <span class="visually-hidden">Кнопка избранное.</span>
                         </li>
                         <li class="navigation-item">
                              <a class="navigation-link" href="#"></a>
                              <span class="visually-hidden">Кнопка хочу сюда.</span>
                         </li>
                    </ul>
               </nav>
          </header>