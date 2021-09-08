<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wrap">
    <header class="main-header" id="navbar">
        <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo" class="logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/menu.png" alt="menu" class="mobile-menu-btn">

        <?php
            wp_nav_menu( [
                'theme_location'  => 'menu-1',
                'menu'            => 'Menu 1',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<div id="%1$s" class="main-menu %2$s"><ul>%3$s</ul></div>',
                'depth'           => 0,
                'walker'          => '',
            ] );
            ?>

        <span class="btn req_a_call popup-open">Заказать звонок</span>
    </header>
	<a name="main"></a>

    <section class="screen_first">
        <div class="screen_first_text">
            <p>
                <span class="text-gray">Проектирование и реконструкция</span> <br>
                промышленных зданий <br>
                и гальванических цехов</p>
            <a href="#" class="btn btn-first-screen">Отправить заявку</a>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/img/firstScreen.png" alt="Factory">
    </section>

    <section class="benefits">
        <div class="benefit">
            <img src="<?php bloginfo('template_directory'); ?>/img/red-block.png" alt="red-block">
            <div class="ben-title">
                Специалисты
            </div>
            <p class="ben-text">
                Наши сотрудники высококлассные специалисты
            </p>
        </div>

        <div class="benefit">
            <img src="<?php bloginfo('template_directory'); ?>/img/red-block.png" alt="red-block">
            <div class="ben-title">
                Прохождение экспертизы
            </div>
            <p class="ben-text">
                Мы гарантируем её прохождение
            </p>
        </div>

        <div class="benefit">
            <img src="<?php bloginfo('template_directory'); ?>/img/red-block.png" alt="red-block">
            <div class="ben-title">
                Сроки
            </div>
            <p class="ben-text">
                Заказ в установленные сроки
            </p>
        </div>

        <div class="benefit">
            <img src="<?php bloginfo('template_directory'); ?>/img/red-block.png" alt="red-block">
            <div class="ben-title">
                Концепт проекта
            </div>
            <p class="ben-text">
                Предоставленный вами либо доработанный нами
            </p>
        </div>

        <div class="benefit">
            <img src="<?php bloginfo('template_directory'); ?>/img/red-block.png" alt="red-block">
            <div class="ben-title">
                Цена известна заранее
            </div>
            <p class="ben-text">
                Она фиксирована
            </p>
        </div>

        <div class="benefit">
            <img src="<?php bloginfo('template_directory'); ?>/img/red-block.png" alt="red-block">
            <div class="ben-title">
                Поэтапная оплата
            </div>
            <p class="ben-text">
                Возможна как поэтапная оплата, так и рассрочка
            </p>
        </div>

    </section>
	
    <section class="services">
		<a name="uslugi"></a>
        <h2 class="section-title">Наши услуги</h2>
		
        <div class="service-`s service-adapt" style="text-align: right;">
            <img src="<?php bloginfo('template_directory'); ?>/img/Arrow3.png" class="prev-slide" tabindex="0" role="button" aria-label="Next slide" style="margin-top: 50px;" aria-controls="swiper-wrapper-ad0c89bf2ca4de9d" aria-disabled="false" alt="arrow">
            <img src="<?php bloginfo('template_directory'); ?>/img/Arrow2.png" class="next-slide" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-ad0c89bf2ca4de9d" aria-disabled="false" alt="arrow">
        </div>


         <!-- Swiper -->
    <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events">
      <div class="swiper-wrapper" id="swiper-wrapper-ad0c89bf2ca4de9d" aria-live="polite">
        

        <?php $team = new WP_Query(array('post_type' => 'uslugi','posts_per_page' => 99, 'orderby' => 'id')) ?>
    <?php if ( $team->have_posts() ) : ?>
        <?php while ( $team->have_posts() ) : $team->the_post(); ?>
            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 9" style="width: 1366px;">
            <div class="service-slider">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            <div class="service-slider-text">
                <p>
                    <span class="text-gray">
                        
                        <?php the_title(); ?>
                    </span> <br> <br>
                    <?php 
                    //Content without <p>
                       $content = get_the_content();
                       echo $content; ?>
                </p>

                <a href="#" class="btn service-slider-btn">Рассчитать стоимость</a>
            </div>
        </div></div>
        <?php endwhile; ?>
   
    <?php endif; ?> 
        
      </div>
      
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    <!-- //Slider -->

    </section>

    <section class="our_projects">
		<a name="projects"></a>
        <h2 class="section-title">Наши проекты</h2>


        <!-- Swiper  -->
<div class="content">
  <div class="slider">

    <?php $team = new WP_Query(array('post_type' => 'project','posts_per_page' => 99, 'orderby' => 'id')) ?>
    <?php if ( $team->have_posts() ) : ?>
        <?php while ( $team->have_posts() ) : $team->the_post(); ?>
            <div>
        <div class="project">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="project-logo">
                <h3 class="project-title">
                    <?php the_title(); ?>
                </h3>
                <?php the_content(); ?>
                <span class="project_date">
                    <?php $date = get_the_excerpt(); echo $date; ?>
                </span>
            </div>
    </div>
        <?php endwhile; ?>
   
    <?php endif; ?>
    
  </div> <!-- end slider -->
  <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
    <span class="slider__label sr-only">
  </div>
  </span>
</div> <!-- end content -->
       
        <div class="process-counter pagingInfo"></div>



        <div class="swiper swProject swiper-initialized swiper-horizontal swiper-pointer-events">
        	<div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-98e3737eb5deb4fa" aria-disabled="false"></div>
      	<div class="swiper-button-prev" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-98e3737eb5deb4fa" aria-disabled="false"></div>
      <div class="swiper-wrapper" id="swiper-wrapper-17b214869d8d95fd" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">


      	 <?php $team = new WP_Query(array('post_type' => 'project','posts_per_page' => 99, 'orderby' => 'id')) ?>
    <?php if ( $team->have_posts() ) : ?>
        <?php while ( $team->have_posts() ) : $team->the_post(); ?>
        	<div class="swiper-slide" style="width: 1920px;">

        		<div class="project">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="project-logo">
                <h3 class="project-title">
                    <?php the_title(); ?>
                </h3>
                <?php the_content(); ?>
                <span class="project_date">
                    <?php $date = get_the_excerpt(); echo $date; ?>
                </span>
            </div>


        	</div>
        <?php endwhile; ?>
   
    <?php endif; ?>
      
      </div>
     
     <div class="swiper-pagination swc swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current"> </span> / <span class="swiper-pagination-total"> </span></div>
      <div class="swiper-pagination swiper-pagination-progressbar swiper-pagination-horizontal"><span class="swiper-pagination-progressbar-fill" style="transform: translate3d(0px, 0px, 0px) scaleX(0.111111) scaleY(1); transition-duration: 300ms;"></span></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>



    </section>

</div> <!-- //Wrap -->

    <section class="since_section">
		<a name="since"></a>
        <h2 class="section-title padding">Научная деятельность</h2>


<!-- Swiper -->
    <div class="swiper sliderSince swiper-initialized swiper-horizontal swiper-pointer-events">
      <div class="swiper-wrapper" id="swiper-wrapper-2c1ea3315a7791b3" aria-live="polite">


        <?php $team = new WP_Query(array('post_type' => 'since','posts_per_page' => 99, 'orderby' => 'id')) ?>
    <?php if ( $team->have_posts() ) : ?>
        <?php while ( $team->have_posts() ) : $team->the_post(); ?>
          <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 9" style="width: 435.333px; margin-right: 30px;">
            <div class="since-wrap">
            <div class="since">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="since-main_img">
                <div class="since-content">
                    <h3 class="since-title"><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>

                <div class="quote">
                    <div class="service-arrows">
                        <img src="<?php bloginfo('template_directory'); ?>/img/Arrow3.png" alt="arrow" class="since-prev-slide">
                        <img src="<?php bloginfo('template_directory'); ?>/img/Arrow2.png" alt="arrow" class="since-next-slide">
                    </div>
                    
                    <?php the_excerpt(); ?>

                    <img src="<?php bloginfo('template_directory'); ?>/img/process-back.png" width="456px" alt="">
                </div>
            </div>
        </div>
        </div>
        <?php endwhile; ?>
   
    <?php endif; ?>

      </div>
      
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    <!-- //Slider -->

    </section>

	<a name="contacts"></a>
    <section class="contact">
        <form action="#" class="contact-form">
            <h3>Оставьте заявку и мы перезвоним Вам</h3> <br>
            <input type="text" placeholder="Ваше имя">
            <input type="text" placeholder="Ваш телефон">
            <span class="policy">
                Нажимая кнопку «Оставить заявку» <br> Вы принимаете условия
                <a href="#">Политики конфиденциальности.</a>
            </span>
            <input type="submit" value="Отправить заявку">
        </form>
    </section>

<footer class="wrap">
    <img src="<?php bloginfo('template_directory'); ?>/img/logobot.png" alt="logo">
        <div class="widgets-bot">
        <div class="widget-bot">
            <span class="widget-title">Наши контакты</span>
            <ul>
                <li class="widget-phone">+7 (968) 873-69-80</li>
                <li class="widget-mail">tima.kvasnikov@gmail.com</li>
                <li class="widget-inst"> @ 123</li>
            </ul>
        </div>

        <div class="widget-bot">
            <span class="widget-title">Режим работы</span>
            <ul>
                <li class="work">Пн-Вс 10:00-21:00</li>
            </ul>
        </div>

        <div class="widget-bot">
            <span class="widget-title">Наш адрес</span>
            <ul>
                <li class="adress">Николоямский пер., д.4 <br>
                    г. Москва</li>
            </ul>
        </div>

        </div>

</footer>


<div class="popup-menu">
    <div class="popup">
    	<div class="popup-head">
    	<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
        <a class="popup-close" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/close call.png"></a>
        </div>
        <?php
            wp_nav_menu( [
                'theme_location'  => 'menu-1',
                'menu'            => 'Menu 1',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<div id="%1$s" class="mobile-menu %2$s"><ul>%3$s</ul></div>',
                'depth'           => 0,
                'walker'          => '',
            ] );
            ?>
       
    </div>      
</div>




<div class="popup-fade">
    <div class="popup">
        <a class="popup-close" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/close call.png"></a>
        <form action="#" class="contact-form">
            <h3>Введите данные и мы свяжемся с вами</h3> <br>
            <input type="text" placeholder="Ваше имя">
            <input type="text" placeholder="Ваш телефон">
            <span class="policy">
                Нажимая кнопку «Оставить заявку» <br> Вы принимаете условия
                <a href="#">Политики конфиденциальности.</a>
            </span>
            <input type="submit" value="Отправить заявку">
        </form>
    </div>      
</div>
<?php get_footer(); ?>

