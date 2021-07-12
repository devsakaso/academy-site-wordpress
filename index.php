<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Academic Website</title>
    <!-- meta description -->
    <meta
      content="このサイトは、ポートフォリオのサイトです。"
      name="description"
    />

    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">

    <!-- header -->
      <header class="header">
        <nav class="header__nav">
          <?php the_custom_logo(); ?>
          <div class="header__nav-container">
            <?php
            $args = array(
              'container'     => '',
              'menu_class' => 'header__nav-list',
              'theme_location'=> 'header-navigation',
              'depth'         => 1,
              'fallback_cb'   => false,
              'add_li_class'  => 'header__nav-item',
              'link_class'   => 'header__nav-link'
              );
              wp_nav_menu($args);
            ?>
            <div class="sns">
              <a href="#" class="sns__link"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="#" class="sns__link"><i class="fab fa-twitter"></i></a>
              <a href="#" class="sns__link"><i class="fab fa-github"></i></a>
            </div>
          </div>
          <button class="header__mobile-menu">
            <span class="header__line">&nbsp;</span>
          </button>
        </nav>
      </header>

      <!-- section-hero -->
      <section class="section-hero" id="home">
        <div class="swiper-container-hero">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="hero__text-box">
                <h1
                  class="
                    heading-primary
                    u-mb-medium
                    gs_reveal gs_reveal_fromLeft
                  "
                >
                  入学体験2022 <span class="hero__accent">OPEN CAMPUS</span>
                </h1>
                <p class="hero__paragraph gs_reveal">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique placeat, esse dolorem excepturi tempor Lorem ipsum
                  dolor sit amet consectetur adipisicing elit. Similique
                  placeat, esse dolorem excepturi tempor
                </p>
                <div class="hero__buttons gs_reveal">
                  <button class="button button__primary-bg">詳しくみる</button>
                  <button class="button button__secondary-bg">資料請求</button>
                </div>
              </div>
              <img
                class="hero__image gs_reveal gs_reveal_fromRight"
                src="<?php echo get_template_directory_uri(); ?>/img/hero-img1.png"
                alt=""
              />
            </div>
            <div class="swiper-slide">
              <div class="hero__text-box">
                <h1
                  class="
                    heading-primary
                    u-mb-medium
                    gs_reveal gs_reveal_fromLeft
                  "
                >
                  オンライン<span class="hero__accent">学校見学会</span>
                </h1>
                <p class="hero__paragraph gs_reveal">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique placeat, esse dolorem excepturi tempor Lorem ipsum
                  dolor sit amet consectetur adipisicing elit. Similique
                  placeat, esse dolorem excepturi tempor
                </p>
                <div class="hero__buttons gs_reveal">
                  <button class="button button__primary-bg">詳しくみる</button>
                  <button class="button button__secondary-bg">資料請求</button>
                </div>
              </div>
              <img
                class="hero__image gs_reveal gs_reveal_fromRight"
                src="<?php echo get_template_directory_uri(); ?>/img/hero-img2.png"
                alt=""
              />
            </div>
            <div class="swiper-slide">
              <div class="hero__text-box">
                <h1
                  class="
                    heading-primary
                    u-mb-medium
                    gs_reveal gs_reveal_fromLeft
                  "
                >
                  モノづくりが好きな<span class="hero__accent">学生募集</span>
                </h1>
                <p class="hero__paragraph gs_reveal">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique placeat, esse dolorem excepturi tempor Lorem ipsum
                  dolor sit amet consectetur adipisicing elit. Similique
                  placeat, esse dolorem excepturi tempor
                </p>
                <div class="hero__buttons gs_reveal">
                  <button class="button button__primary-bg">詳しくみる</button>
                  <button class="button button__secondary-bg">資料請求</button>
                </div>
              </div>
              <img
                class="hero__image gs_reveal gs_reveal_fromRight"
                src="<?php echo get_template_directory_uri(); ?>/img/hero-img3.png"
                alt=""
              />
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </section>

      <!-- section-features -->
      <section class="section-features">
        <h2 class="heading-secondary u-mb-huge gs_reveal gs_reveal_fromLeft">
          夢と仕事をつなげる場所
        </h2>
        <div class="row features__container">
          <div class="features__col gs_reveal">
            <i class="features__icon fas fa-industry"></i>
            <p class="features__main-text">専門職への就職に強い</p>
            <p class="features__sub-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
              obcaecati
            </p>
          </div>
          <div class="features__col gs_reveal">
            <i class="features__icon fas fa-globe"></i>
            <p class="features__main-text">最先端のデジタル教育</p>
            <p class="features__sub-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
              obcaecati
            </p>
          </div>
          <div class="features__col gs_reveal">
            <i class="features__icon fas fa-flask"></i>
            <p class="features__main-text">最新装置の利用が可能</p>
            <p class="features__sub-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
              obcaecati
            </p>
          </div>
          <div class="features__col gs_reveal">
            <i class="features__icon fas fa-user-friends"></i>
            <p class="features__main-text">独自メリットがたくさん</p>
            <p class="features__sub-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
              obcaecati
            </p>
          </div>
        </div>
      </section>
      <section class="section-professors">
        <div class="row-wide professors__container">
          <div class="professors__text-container">
            <h3 class="heading-tertiary u-mb-big gs_reveal gs_reveal_fromLeft">
              大人気の講師陣が勢揃い
            </h3>
            <p class="professors__text gs_reveal">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta
              dolorem soluta numquam cum rem architecto consequatur ipsum.
              Molestiae quos dicta aliquam incidunt deleniti, quis minima
              debitis aliquid dolor reiciendis praesentium?
            </p>
            <button class="button button__white">詳しくみる</button>
          </div>
          <img
            class="professors__image gs_reveal gs_reveal_fromRight lazyload"
            src=""
            data-src="<?php echo get_template_directory_uri(); ?>/img/professors-img.png"
            alt=""
          />
        </div>
      </section>

      <!-- section-fields -->
      <section class="section-fields" id="fields">
        <div class="fields__container">
          <h2 class="heading-secondary u-mb-huge gs_reveal gs_reveal_fromLeft">
            多様なクリエイティブなジャンル
          </h2>
          <p class="fields__text">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas
            maiores necessitatibus totam quisquam corporis ea praesentium
            perferendis, assumenda ut facere vero, vitae deleniti maxime? At
            suscipit rem dolorem asperiores magnam.
          </p>
        </div>
        <div class="row">
          <div class="fields__cards">
            <div class="fields__card gs_reveal gs_reveal_fromBottom">
              <img
                class="fields__card-image lazyload"
                data-src="<?php echo get_template_directory_uri(); ?>/img/programming_small.jpg"
                src=""
                alt=""
              />
              <div class="fields__card-text-box">
                <h4 class="fields__card-title">グラフィックデザイン科</h4>
                <p class="fields__card-paragraph">
                  tempora eligendi repellat corporis illo, atque sint iure omnis
                  aut quidem accusantium voluptatum accusamus recusandae.
                </p>
                <a class="fields__card-link" href="#">詳しくみる</a>
              </div>
            </div>
            <div class="fields__card gs_reveal gs_reveal_fromBottom">
              <img
                class="fields__card-image lazyload"
                data-src="<?php echo get_template_directory_uri(); ?>/img/programming_small.jpg"
                src=""
                alt=""
              />
              <div class="fields__card-text-box">
                <h4 class="fields__card-title">ゲーム・3DCG科</h4>
                <p class="fields__card-paragraph">
                  tempora eligendi repellat corporis illo, atque sint iure omnis
                  aut quidem accusantium voluptatum accusamus recusandae.
                </p>
                <a class="fields__card-link" href="#">詳しくみる</a>
              </div>
            </div>
            <div class="fields__card gs_reveal gs_reveal_fromBottom">
              <img
                class="fields__card-image lazyload"
                data-src="<?php echo get_template_directory_uri(); ?>/img/programming_small.jpg"
                src=""
                alt=""
              />
              <div class="fields__card-text-box">
                <h4 class="fields__card-title">イラストレーション科</h4>
                <p class="fields__card-paragraph">
                  tempora eligendi repellat corporis illo, atque sint iure omnis
                  aut quidem accusantium voluptatum accusamus recusandae.
                </p>
                <a class="fields__card-link" href="#">詳しくみる</a>
              </div>
            </div>
            <div class="fields__card gs_reveal gs_reveal_fromBottom">
              <img
                class="fields__card-image lazyload"
                data-src="<?php echo get_template_directory_uri(); ?>/img/programming_small.jpg"
                src=""
                alt=""
              />
              <div class="fields__card-text-box">
                <h4 class="fields__card-title">プロダクトデザイン科</h4>
                <p class="fields__card-paragraph">
                  tempora eligendi repellat corporis illo, atque sint iure omnis
                  aut quidem accusantium voluptatum accusamus recusandae.
                </p>
                <a class="fields__card-link" href="#">詳しくみる</a>
              </div>
            </div>
            <div class="fields__card gs_reveal gs_reveal_fromBottom">
              <img
                class="fields__card-image lazyload"
                data-src="<?php echo get_template_directory_uri(); ?>/img/programming_small.jpg"
                src=""
                alt=""
              />
              <div class="fields__card-text-box">
                <h4 class="fields__card-title">マンガ制作科</h4>
                <p class="fields__card-paragraph">
                  tempora eligendi repellat corporis illo, atque sint iure omnis
                  aut quidem accusantium voluptatum accusamus recusandae.
                </p>
                <a class="fields__card-link" href="#">詳しくみる</a>
              </div>
            </div>
            <div class="fields__card gs_reveal gs_reveal_fromBottom">
              <img
                class="fields__card-image lazyload"
                data-src="<?php echo get_template_directory_uri(); ?>/img/programming_small.jpg"
                src=""
                alt=""
              />
              <div class="fields__card-text-box">
                <h4 class="fields__card-title">保存修復・アート科</h4>
                <p class="fields__card-paragraph">
                  tempora eligendi repellat corporis illo, atque sint iure omnis
                  aut quidem accusantium voluptatum accusamus recusandae.
                </p>
                <a class="fields__card-link" href="#">詳しくみる</a>
              </div>
            </div>
          </div>
          <button class="button button__primary">資料請求</button>
        </div>
      </section>

      <!-- section-grades -->
      <section class="section-grades">
        <div class="row-wide grades__container">
          <div class="grades__text-container">
            <h3 class="heading-tertiary u-mb-big gs_reveal gs_reveal_fromLeft">
              専門資格の取得が可能
            </h3>
            <p class="grades__text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta
              dolorem soluta numquam cum rem architecto consequatur ipsum.
              Molestiae quos dicta aliquam incidunt deleniti, quis minima
              debitis aliquid dolor reiciendis praesentium?
            </p>
            <button class="button button__primary-bg">詳しくみる</button>
          </div>
          <img
            class="grades__image gs_reveal gs_reveal_fromRight lazyload"
            src=""
            data-src="<?php echo get_template_directory_uri(); ?>/img/grades-img-graduation.jpg"
            alt=""
          />
        </div>
      </section>

      <!-- section-courses -->
      <section class="section-courses" id="courses">
        <div class="row">
          <div class="courses__container">
            <h2
              class="heading-secondary u-mb-huge gs_reveal gs_reveal_fromLeft"
            >
              想像力を広げる様々なコース
            </h2>
            <p class="courses__text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas
              maiores necessitatibus totam quisquam corporis ea praesentium
              perferendis, assumenda ut facere vero, vitae deleniti maxime? At
              suscipit rem dolorem asperiores magnam.
            </p>
            <button class="button button__primary-bg">詳しくみる</button>
          </div>
          <div class="courses__image-box">
            <img
              class="courses__image-1 gs_reveal"
              src="<?php echo get_template_directory_uri(); ?>/img/in-person.jpg"
              alt=""
            />
            <img
              class="courses__image-2 gs_reveal gs_reveal_fromRight"
              src="<?php echo get_template_directory_uri(); ?>/img/smartphone.png"
              alt=""
            />
          </div>
        </div>
      </section>

      <!-- section-subscribe -->
      <section class="section-subscribe">
        <div class="row-wide subscribe__container">
          <div class="subscribe__text-container">
            <h3 class="heading-tertiary u-mb-big gs_reveal gs_reveal_fromLeft">
              メールマガジンで最新情報配信中
            </h3>
            <p class="subscribe__text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta
              dolorem soluta numquam cum rem architecto consequatur ipsum.
              Molestiae quos dicta aliquam incidunt deleniti, quis minima
              debitis aliquid dolor reiciendis praesentium?
            </p>
            <div class="subscribe__button-contaier">
              <?php
                if( is_active_sidebar( 'email-form-one' ) ) {
                  dynamic_sidebar( 'email-form-one' );
                }
              ?>
            </div>
          </div>
          <img
            class="subscribe__image gs_reveal gs_reveal_fromRight lazyload"
            data-src="<?php echo get_template_directory_uri(); ?>/img/subscribe-image.png"
            src=""
            alt=""
          />
        </div>
      </section>

      <!-- section-facilities -->
      <section class="section-facilities" id="facilities">
        <div class="facilities__container">
          <h2 class="heading-secondary u-mb-huge gs_reveal gs_reveal_fromLeft">
            プロを輩出し続ける刺激的な環境
          </h2>
          <p class="facilities__text">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas
            maiores necessitatibus totam quisquam corporis ea praesentium
            perferendis, assumenda ut facere vero, vitae deleniti maxime? At
            suscipit rem dolorem asperiores magnam.
          </p>
        </div>
        <div class="row">
          <div class="facilities__images">
            <div
              class="facilities__image-container"
              id="facilities__image-container-1"
            >
              <a href="#facilities__popup-1"
                ><img
                  class="facilities__image lazyload"
                  data-src="<?php echo get_template_directory_uri(); ?>/img/conf-hall.jpg"
                  src=""
                  alt=""
              /></a>
              <p class="facilities__image-title">
                High Capacity Conference Halls
              </p>
            </div>
            <div
              class="facilities__image-container"
              id="facilities__image-container-2"
            >
              <a href="#facilities__popup-2"
                ><img
                  class="facilities__image lazyload"
                  data-src="<?php echo get_template_directory_uri(); ?>/img/library_small.jpg"
                  src=""
                  alt=""
              /></a>
              <p class="facilities__image-title">
                Libraries with Over 1M Books
              </p>
            </div>
            <div
              class="facilities__image-container"
              id="facilities__image-container-3"
            >
              <a href="#facilities__popup-3"
                ><img
                  class="facilities__image lazyload"
                  data-src="<?php echo get_template_directory_uri(); ?>/img/lab_small.jpg"
                  src=""
                  alt=""
              /></a>
              <p class="facilities__image-title">Equiped Labs</p>
            </div>
            <div
              class="facilities__image-container"
              id="facilities__image-container-4"
            >
              <a href="#facilities__popup-4"
                ><img
                  class="facilities__image lazyload"
                  data-src="<?php echo get_template_directory_uri(); ?>/img/internet_small.jpg"
                  src=""
                  alt=""
              /></a>
              <p class="facilities__image-title">
                High Capacity Conference Halls
              </p>
            </div>
            <div
              class="facilities__image-container"
              id="facilities__image-container-5"
            >
              <a href="#facilities__popup-5"
                ><img
                  class="facilities__image lazyload"
                  data-src="<?php echo get_template_directory_uri(); ?>/img/study-hall_small.jpg"
                  src=""
                  alt=""
              /></a>
              <p class="facilities__image-title">
                High Capacity Conference Halls
              </p>
            </div>
            <div
              class="facilities__image-container"
              id="facilities__image-container-6"
            >
              <a href="#facilities__popup-6"
                ><img
                  class="facilities__image lazyload"
                  data-src="<?php echo get_template_directory_uri(); ?>/img/dorm_small.jpg"
                  src=""
                  alt=""
              /></a>
              <p class="facilities__image-title">
                High Capacity Conference Halls
              </p>
            </div>
          </div>
          <button class="button button__primary">詳しく見る</button>
        </div>
        <!-- popup -->
        <div class="facilities__popup" id="facilities__popup-1">
          <div class="facilities__popup-image-1"></div>
          <div class="facilities__popup-text-box">
            <a
              class="facilities__popup-times"
              href="#facilities__image-container-1"
              >&times;</a
            >
            <h3 class="heading-secondary u-mb-big">
              High Capacity Conference Halls
            </h3>
            <p class="facilities__popup-text u-mb-big">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur. Lorem, ipsum dolor sit amet
              consectetur adipisicing elit. Ab nesciunt harum dolores labore
              itaque, dignissimos veritatis assumenda placeat delectus rem, est
              tempore sit illo distinctio quod quidem quia laborum pariatur.
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur.
            </p>
            <button class="button button__primary">詳しく見る</button>
          </div>
        </div>
        <div class="facilities__popup" id="facilities__popup-2">
          <div class="facilities__popup-image-2"></div>
          <div class="facilities__popup-text-box">
            <a
              class="facilities__popup-times"
              href="#facilities__image-container-2"
              >&times;</a
            >
            <h3 class="heading-secondary u-mb-big">
              High Capacity Conference Halls
            </h3>
            <p class="facilities__popup-text u-mb-big">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur. Lorem, ipsum dolor sit amet
              consectetur adipisicing elit. Ab nesciunt harum dolores labore
              itaque, dignissimos veritatis assumenda placeat delectus rem, est
              tempore sit illo distinctio quod quidem quia laborum pariatur.
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur.
            </p>
            <button class="button button__primary">詳しく見る</button>
          </div>
        </div>
        <div class="facilities__popup" id="facilities__popup-3">
          <div class="facilities__popup-image-3"></div>
          <div class="facilities__popup-text-box">
            <a
              class="facilities__popup-times"
              href="#facilities__image-container-3"
              >&times;</a
            >
            <h3 class="heading-secondary u-mb-big">
              High Capacity Conference Halls
            </h3>
            <p class="facilities__popup-text u-mb-big">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur. Lorem, ipsum dolor sit amet
              consectetur adipisicing elit. Ab nesciunt harum dolores labore
              itaque, dignissimos veritatis assumenda placeat delectus rem, est
              tempore sit illo distinctio quod quidem quia laborum pariatur.
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur.
            </p>
            <button class="button button__primary">詳しく見る</button>
          </div>
        </div>
        <div class="facilities__popup" id="facilities__popup-4">
          <div class="facilities__popup-image-4"></div>
          <div class="facilities__popup-text-box">
            <a
              class="facilities__popup-times"
              href="#facilities__image-container-4"
              >&times;</a
            >
            <h3 class="heading-secondary u-mb-big">
              High Capacity Conference Halls
            </h3>
            <p class="facilities__popup-text u-mb-big">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur. Lorem, ipsum dolor sit amet
              consectetur adipisicing elit. Ab nesciunt harum dolores labore
              itaque, dignissimos veritatis assumenda placeat delectus rem, est
              tempore sit illo distinctio quod quidem quia laborum pariatur.
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur.
            </p>
            <button class="button button__primary">詳しく見る</button>
          </div>
        </div>
        <div class="facilities__popup" id="facilities__popup-5">
          <div class="facilities__popup-image-5"></div>
          <div class="facilities__popup-text-box">
            <a
              class="facilities__popup-times"
              href="#facilities__image-container-5"
              >&times;</a
            >
            <h3 class="heading-secondary u-mb-big">
              High Capacity Conference Halls
            </h3>
            <p class="facilities__popup-text u-mb-big">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur. Lorem, ipsum dolor sit amet
              consectetur adipisicing elit. Ab nesciunt harum dolores labore
              itaque, dignissimos veritatis assumenda placeat delectus rem, est
              tempore sit illo distinctio quod quidem quia laborum pariatur.
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur.
            </p>
            <button class="button button__primary">詳しく見る</button>
          </div>
        </div>
        <div class="facilities__popup" id="facilities__popup-6">
          <div class="facilities__popup-image-6"></div>
          <div class="facilities__popup-text-box">
            <a
              class="facilities__popup-times"
              href="#facilities__image-container-6"
              >&times;</a
            >
            <h3 class="heading-secondary u-mb-big">
              High Capacity Conference Halls
            </h3>
            <p class="facilities__popup-text u-mb-big">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur. Lorem, ipsum dolor sit amet
              consectetur adipisicing elit. Ab nesciunt harum dolores labore
              itaque, dignissimos veritatis assumenda placeat delectus rem, est
              tempore sit illo distinctio quod quidem quia laborum pariatur.
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
              nesciunt harum dolores labore itaque, dignissimos veritatis
              assumenda placeat delectus rem, est tempore sit illo distinctio
              quod quidem quia laborum pariatur.
            </p>
            <button class="button button__primary">詳しく見る</button>
          </div>
        </div>
      </section>

      <!-- section-awards -->
      <section class="section-awards" id="awards">
        <div class="row-wide">
          <h2
            class="
              heading-secondary-white
              u-mb-huge
              gs_reveal gs_reveal_fromLeft
            "
          >
            在学中に数多くの受賞歴あり
          </h2>
          <p class="awards__text gs_reveal">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas
            maiores necessitatibus totam quisquam corporis ea praesentium
            perferendis, assumenda ut facere vero, vitae deleniti maxime? At
            suscipit rem dolorem asperiores magnam.
          </p>
          <div class="swiper-button-container gs_reveal">
            <div class="swiper-container-awards">
              <ul class="swiper-wrapper">
                <li class="swiper-slide">
                  <img
                    class="awards__image lazyload"
                    data-src="<?php echo get_template_directory_uri(); ?>/img/award-slide1.jpg"
                    src=""
                    alt=""
                  />
                </li>
                <li class="swiper-slide">
                  <img
                    class="awards__image lazyload"
                    data-src="<?php echo get_template_directory_uri(); ?>/img/award-slide2.jpg"
                    src=""
                    alt=""
                  />
                </li>
                <li class="swiper-slide">
                  <img
                    class="awards__image lazyload"
                    data-src="<?php echo get_template_directory_uri(); ?>/img/award-slide3.jpg"
                    src=""
                    alt=""
                  />
                </li>
                <li class="swiper-slide">
                  <img
                    class="awards__image lazyload"
                    data-src="<?php echo get_template_directory_uri(); ?>/img/award-slide4.jpg"
                    src=""
                    alt=""
                  />
                </li>
                <li class="swiper-slide">
                  <img
                    class="awards__image lazyload"
                    data-src="<?php echo get_template_directory_uri(); ?>/img/award-slide5.jpg"
                    src=""
                    alt=""
                  />
                </li>
                <li class="swiper-slide">
                  <img
                    class="awards__image lazyload"
                    data-src="<?php echo get_template_directory_uri(); ?>/img/award-slide6.jpg"
                    src=""
                    alt=""
                  />
                </li>
                <li class="swiper-slide">
                  <img
                    class="awards__image lazyload"
                    data-src="<?php echo get_template_directory_uri(); ?>/img/award-slide7.jpg"
                    src=""
                    alt=""
                  />
                </li>
                <li class="swiper-slide">
                  <img
                    class="awards__image lazyload"
                    data-src="<?php echo get_template_directory_uri(); ?>/img/award-slide8.jpg"
                    src=""
                    alt=""
                  />
                </li>
              </ul>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>

      <!-- section-branches -->
      <section class="section-branches" id="branches">
        <h2 class="heading-secondary u-mb-huge gs_reveal gs_reveal_fromLeft">
          近くのキャンパスを探す
        </h2>
        <div class="row">
          <div class="branches__container gs_reveal gs_reveal_fromLeft">
            <div class="branches__text-box">
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi
                atque rerum possimus.
              </p>
              <select name="住所" class="select">
                <option value="tokyo">東京都</option>
                <option value="kanagawa">神奈川県</option>
                <option value="chiba">千葉県</option>
                <option value="saitama">埼玉県</option>
                <option value="ibaraki">茨城県</option>
              </select>
              <select name="住所" class="select">
                <option value="tokyo">東京都</option>
                <option value="kanagawa">神奈川県</option>
                <option value="chiba">千葉県</option>
                <option value="saitama">埼玉県</option>
                <option value="ibaraki">茨城県</option>
              </select>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                maiores magnam eum explicabo, officiis commodi molestias
                repellat nisi nulla facilis doloremque placeat consectetur quia
                incidunt animi officia tempora corrupti. Sapiente?
              </p>
              <a href="">詳しくみる</a>
              <p>
                <b>住所</b>: Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Eaque voluptatibus ab possimus
              </p>
              <p><b>TEL</b>: 090-0000-0000</p>
            </div>
            <iframe
              class="branches__image gs_reveal gs_reveal_fromRight"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.106828216201!2d135.4937619152323!3d34.70248538043406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e68d95e3a70b%3A0x1baec822e859c84a!2z5aSn6Ziq6aeF!5e0!3m2!1sja!2sjp!4v1625605184871!5m2!1sja!2sjp"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </section>

      <!-- section-contact -->
      <section class="section-contact" id="contact">
        <div class="row">
          <div class="contact__container">
            <div class="contact__text-container">
              <h3
                class="heading-tertiary u-mb-big gs_reveal gs_reveal_fromLeft"
              >
                お問い合わせはこちら
              </h3>
              <p class="contact__text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta
                dolorem soluta numquam cum rem architecto consequatur ipsum.
                Molestiae quos dicta aliquam incidunt deleniti, quis minima
                debitis aliquid dolor reiciendis praesentium?
              </p>
            </div>
            <div class="contact__inputs gs_reveal gs_reveal_fromRight">

              <?php
                if( is_active_sidebar( 'contact' ) ) {
                  dynamic_sidebar( 'contact' );
                }
              ?>
            </div>
          </div>
        </div>
      </section>

      <!-- section-subscribe-mini -->
      <section class="section-subscribe-mini">
        <div class="row">
          <p class="subscribe-mini-text gs_reveal gs_reveal_fromBottom">
            オープンキャンパスやオンライン相談会の情報はニュースレターの購読を！
          </p>
          <div
            class="subscribe__button-contaier gs_reveal gs_reveal_fromBottom"
          >

            <?php
                if( is_active_sidebar( 'email-form-two' ) ) {
                  dynamic_sidebar( 'email-form-two' );
                }
              ?>
          </div>
        </div>
      </section>

      <!-- footer -->
      <footer class="footer">
        <div class="footer__fixed">
          <div class="footer__top">
            <nav class="footer__first">
              <p class="footer__title">メニュー</p>

              <?php
            $args = array(
              'container'     => '',
              'menu_class' => 'footer__nav-list',
              'theme_location'=> 'footer-navigation',
              'depth'         => 1,
              'fallback_cb'   => false,
              'add_li_class'  => 'footer__nav-item',
              'link_class'   => 'footer__nav-link'
              );
              wp_nav_menu($args);
            ?>
            </nav>
            <div class="footer__second">
              <p class="footer__title">お問い合わせ</p>
              <p class="footer__text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Accusantium necessitatibus temporibus dolorum asperiores
                mollitia repudiandae veritatis, aut voluptate modi repellat
                incidunt vel itaque neque harum. Explicabo consequatur modi esse
                temporibus!
              </p>
              <p class="footer__text">email: asdfasdf@google.com</p>
              <p class="footer__sns-box">
                <b>SNS:</b>
                <span class="sns"
                  ><i class="fab fa-facebook-f bg-grey"></i>
                  <i class="fab fa-twitter bg-grey"></i>
                  <i class="fab fa-github bg-grey"></i
                ></span>
              </p>
            </div>
            <div class="footer__third">
              <p class="footer__title">当校について</p>
              <p class="footer__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptates, rerum! Excepturi, molestiae corporis? Consequatur
                sed alias rerum. Illum ipsam aspernatur laudantium labore,
                recusandae ullam expedita commodi quisquam porro inventore
                atque?
              </p>
              <a class="footer__link" href="#">詳しくみる</a>
            </div>
          </div>
          <hr class="footer__hr" />
          <div class="footer__bottom">
            <p class="footer__copy">
              Copyright © 2021 sakai. All Rights Reserved.
            </p>
            <a class="footer__privacy" href="#">プライバシーポリシー</a>
          </div>
        </div>
      </footer>
    </div>

    <!-- JS FILES --> 
    <?php wp_footer(); ?>
  </body>
</html>
