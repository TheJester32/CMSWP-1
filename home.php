<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

           <main class="main-container main-index">
            <div class="page-container">
               <section class="advantages">
               <div class="welcome-anthem">
               <img class="welcome-logo" src="<?php bloginfo('template_url'); ?>/assets/images//main-welcome.svg" width="458" height="352" alt="Логотип Welcome." />
        </div>
        <section class="sedona-town">
        <h1>Седона-небольшой городок в Аризоне,
          <br> заслуживающий большего!
      </h1>
      <p>Рассмотрим причины, по которым Седона круче, чем Гранд-Каньон!</p>
    </section>
               <ul class="advantages-list">
                    <li class="advantages-item advantages-item-deep-blue">
                      <div class="advantage-1">
                        <h3 class="advantages-title">Настоящий городок</h3>
                         <p class="advantages-description">Седона - не аттракцион для туристов, там течет своя жизнь</p>
                        </div>
                        <img class="photos" src="<?php bloginfo('template_url'); ?>/assets/images//photos/index-view-1.jpg" width="800" height="384" alt="Городской вид." />
                      </li>
                    <li class="advantages-item advantages-item-very-light-blue">
                      <div class="advantage-2">
                         <h3 class="advantages-title"><b>Небольшая площадь</b></h3>
                         <p class="advantages-description">Все достопримечательности находятся очень близко</p>
                        </div>
                    </li>
                    <li class="advantages-item advantages-item-light-blue">
                      <div class="advantage-3">
                         <h3 class="advantages-title">Красивая <br>дорога</h3>
                         <p class="advantages-description">Ехать в Седону из Лас-Вегаса совсем не скучно!</p>
                        </div>
                    </li>
                    <li class="advantages-item advantages-item-very-light-blue">
                      <div class="advantage-4">
                         <h3 class="advantages-title"><b>Мало <br>туристов</b></h3>
                         <p class="advantages-description">Большинство едет в Гранд-Каньон и толпится там</p>
                        </div>
                    </li>
                    <li class="advantages-item advantages-item-deep-blue">
                         <img class="photos" src="<?php bloginfo('template_url'); ?>/assets/images//photos/index-view-2.jpg" width="800" height="384" alt="Мост Дьявола." />
                         <div class="advantage-5">
                         <h3 class="advantages-title"><b>Там есть мост дьявола</b></h3>
                         <p class="advantages-description">Да, по нему можно пройти! Если вы осмелитесь, разумеется</p>
                        </div>
                    </li>
                    <li class="advantages-item advantages-item-very-light-blue shopping">
                      <div class="advantage-6">
                      <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images//logos/house.svg" width="75" height="72" alt="Логотип дома." />
                         <h3 class="advantages-title"><b>Жилье</b></h3>
                         <p class="advantages-description">Рекомендуем пожить в настоящем мотеле, всё как в кино!</p>
                        </div>
                    </li>
                    <li class="advantages-item advantages-item-white shopping">
                      <div class="advantage-7">
                        <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images//logos/food.svg" width="75" height="72" alt="Логотип бургера." />
                         <h3 class="advantages-title"><b>Еда</b></h3>
                         <p class="advantages-description">Всегда заказывайте топовый фирменный бургер, вы не разочаруетесь!</p>
                        </div>
                    </li>
                    <li class="advantages-item advantages-item-very-light-blue shopping">
                      <div class="advantage-8">
                      <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images//logos/souveniers.svg" width="75" height="72" alt="Логотип подарка." />
                         <h3 class="advantages-title"><b>Сувениры</b></h3>
                         <p class="advantages-description">Не только китайского, но и настоящего местного производства!</p>
                        </div>
                    </li>
               </ul>
               <section class="booking">
                    <h3>Заинтересовались?</h3>
               <p>Укажите преполагаемые даты поездки, <br>
                и мы покажем вам лучшие предложения гостиниц в Седоне</p>
                    <p> <a class="booking-navigation-link" href="hotels.html">Поиск гостиницы в Седоне<img src="#" alt="Отели." /></a>
                    </p>
               </section>
               <section class="contacts">
                <div class="mailing-container">
                    <h3 class="mailing">Подпишитесь на рассылку</h3>
                    <p>Только полезная информация и никакого спама, <br>
                      честное бойскаутское!</p>
                    </div>
                      <div class="mailing-form-container">
                    <form class="mailing-form" action="https://echo.htmlacademy.ru/" method="post">
                         <p class="mailing-form">
                              <input type="text" class="text" name="enter-email" placeholder="Ваш e-mail" />
                         </p>
                         <button class="button-subscribe" type="submit">Подписаться</button>
                    </form>
                  </div>
               </section>
          </main>

          <?php get_footer(); ?>

