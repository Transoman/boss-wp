<?php
/**
 * Template Name: Главная
 */
get_header(); ?>

  <div class="bg-wrap">
    <section class="hero">
      <div class="container">
        <div class="hero__content">
          <h1 class="hero__title" data-aos="fade">Работайте в сервисных офисах <span>BOSS</span></h1>
          <p class="hero__descr" data-aos="fade" data-aos-delay="200">освободите время, средства и силы для бизнеса</p>

          <div class="hero__btn">
            <a href="#" class="btn callback_open" data-aos="fade-up" data-aos-delay="300">Позвонить</a>
            <p class="hero__btn-descr" data-aos="fade-left" data-aos-delay="400">
              <img src="<?php echo THEME_URL; ?>/images/general/line-arrow.svg" alt="">
              Проконсультироваться <br>по подбору офиса
            </p>
          </div>
        </div>

        <div class="hero__man" data-aos="fade">
          <img src="<?php echo THEME_URL; ?>/images/content/hero-man.png" alt="">
          <p class="hero__man-descr">Комфортные современные рабочие места для вас уже готовы!</p>
        </div>

      </div>
      <!-- /.container -->
    </section>
    <!-- /.hero -->

    <section class="benefit">
      <div class="container">

        <div class="benefit__wrap">
          <div class="row">
            <div class="col-lg-4">
              <div class="benefit__item" data-aos="fade">
                <?php ith_the_icon( '24-hours' ); ?>
                Доступ к рабочему месту 24/7
              </div>
            </div>
            <div class="col-lg-4">
              <div class="benefit__item" data-aos="fade" data-aos-delay="200">
                <?php ith_the_icon( 'printer' ); ?>
                Оборудованные сервисные зоны
              </div>
            </div>
            <div class="col-lg-4">
              <div class="benefit__item" data-aos="fade" data-aos-delay="300">
                <?php ith_the_icon( 'consultant-services' ); ?>
                Административная и техническая поддержка
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container -->
    </section>
    <!-- /.benefit -->
  </div>

  <section class="why">
    <div class="container">

      <h2 class="section-title" id="about" data-aos="fade">Почему российский малый/средний бизнес выбирает <span>готовые к заезду офисы?</span></h2>

      <blockquote class="why__blockquote why__blockquote--1">
        <p>Возможность арендовать то пространство, которое необходимо в данный момент</p>
      </blockquote>

      <ul class="why-list">
        <li class="why-list__item" data-aos="fade">
          <span class="why-list__plus"></span>
          <p>Продуктивность работы выше, чем дома</p>
        </li>
        <li class="why-list__item" data-aos="fade" data-aos-delay="100">
          <span class="why-list__plus"></span>
          <p>Налаживать полезные связи быстрее и проще, чем где-либо</p>
        </li>
        <li class="why-list__item" data-aos="fade" data-aos-delay="200">
          <span class="why-list__plus"></span>
          <p>Проводить рабочие <br>встречи и переговоры можно в любое время</p>
        </li>
        <li class="why-list__item" data-aos="fade" data-aos-delay="300">
          <span class="why-list__plus"></span>
          <p>Сервис удобнее и гибче, <br>чем в обычном офисе</p>
        </li>
        <li class="why-list__item" data-aos="fade" data-aos-delay="400">
          <span class="why-list__plus"></span>
          <p>В стоимость аренды уже включено обслуживание помещения</p>
        </li>
      </ul>

      <blockquote class="why__blockquote why__blockquote--2">
        <p>Заезд в день оплаты</p>
      </blockquote>

    </div>
    <!-- /.container -->
  </section>
  <!-- /.why -->

  <section class="offices">
    <div class="container">
      <h2 class="section-title" id="offices" data-aos="fade"><span>Сервисные офисы BOSS</span> — современные многофункциональные центры, в которых легко и удобно работать и развивать бизнес</h2>

      <div class="offices-slider swiper-container">
        <div class="swiper-wrapper">
          <div class="offices-slider__item swiper-slide">
            <img src="<?php echo THEME_URL; ?>/images/content/offices/offices-1.jpg" alt="">
            <p>3 многофункциональных центра</p>
          </div>
          <div class="offices-slider__item swiper-slide">
            <img src="<?php echo THEME_URL; ?>/images/content/offices/offices-2.jpg" alt="">
            <p>Общая площадь всех центров сети более 10 000 м2</p>
          </div>
          <div class="offices-slider__item swiper-slide">
            <img src="<?php echo THEME_URL; ?>/images/content/offices/offices-3.jpg" alt="">
            <p>Комфортабельные оборудованные офисы на 2-6 человек</p>
          </div>
          <div class="offices-slider__item swiper-slide">
            <img src="<?php echo THEME_URL; ?>/images/content/offices/offices-4.jpg" alt="">
            <p>Удобные светлые технологичные переговорные</p>
          </div>
          <div class="offices-slider__item swiper-slide">
            <img src="<?php echo THEME_URL; ?>/images/content/offices/offices-5.jpg" alt="">
            <p>Современная офисная техника</p>
          </div>
          <div class="offices-slider__item swiper-slide">
            <img src="<?php echo THEME_URL; ?>/images/content/offices/offices-6.jpg" alt="">
            <p>Оптимальная среда для роста и развития бизнеса</p>
          </div>
        </div>
        <div class="swiper-button-prev">
          <?php ith_the_icon( 'arrow-left' ); ?>
        </div>
        <div class="swiper-button-next">
          <?php ith_the_icon( 'arrow-right' ); ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.offices -->

  <section class="services">
    <div class="container">
      <h2 class="section-title" data-aos="fade">Спектр <span>предлагаемых решений</span></h2>

      <div class="row">
        <div class="col-lg-6 col-xl-4">
          <div class="services-card" data-aos="fade-left">
            <div class="services-card__head">
              <img src="<?php echo THEME_URL; ?>/images/content/serv-1.svg" alt="">
              <h3 class="services-card__title">Гибкое</h3>
              <p class="services-card__descr">Незакрепленное место</p>
            </div>

            <div class="services-card__content">
              <p>Базовое резиденство предоставляет доступ ко всем локациям BOSS</p>
            </div>

            <div class="services-card__bottom">
              <a href="#" class="btn callback_open">Подробнее</a>
              <span class="services-card__price">5 000 руб.</span>
            </div>

          </div>
        </div>
        <div class="col-lg-6 col-xl-4">
          <div class="services-card" data-aos="fade-left" data-aos-delay="100">
            <div class="services-card__head">
              <img src="<?php echo THEME_URL; ?>/images/content/serv-2.svg" alt="">
              <h3 class="services-card__title">Стандартное</h3>
              <p class="services-card__descr">Коворкинг, сервисный офис</p>
            </div>

            <div class="services-card__content">
              <p>Закреплённое место и персональный офис: подходит как для 1 человека, так и для небольшой команды</p>
            </div>

            <div class="services-card__bottom">
              <a href="#" class="btn callback_open">Подробнее</a>
              <span class="services-card__price">от 12 000 руб.</span>
            </div>

          </div>
        </div>
        <div class="col-lg-6 col-xl-4">
          <div class="services-card" data-aos="fade-left" data-aos-delay="200">
            <div class="services-card__head">
              <img src="<?php echo THEME_URL; ?>/images/content/serv-3.svg" alt="">
              <h3 class="services-card__title">Штаб-квартира</h3>
              <p class="services-card__descr">Индивидуальное решение</p>
            </div>

            <div class="services-card__content">
              <p>Полностью индивидуальное решение с точки зрения дизайна, безопасности и ИТ для больших команд, занимающих часть этажа, целый этаж или здание полностью</p>
            </div>

            <div class="services-card__bottom">
              <a href="#" class="btn callback_open">Подробнее</a>
              <span class="services-card__price">По запросу</span>
            </div>

          </div>
        </div>
      </div>

    </div>
    <!-- /.container -->
  </section>
  <!-- /.services -->

  <section class="on-maps">
    <div class="container">
      <h2 class="section-title" id="on-maps" data-aos="fade">Мы на карте Москвы</h2>

      <div class="on-maps-card on-maps__card on-maps__card--1 is-active">
        <div class="on-maps-card__img">
          <img src="<?php echo THEME_URL; ?>/images/content/maps-card.jpg" alt="">
        </div>
        <div class="on-maps-card__body">
          <div class="on-maps-card__title"><strong>ВЭБ АРЕНА</strong>, 3-я Песчаная улица 2А, Golden Tower, 11-14 этажи, 400 рабочих мест.</div>
          <ul class="on-maps-card__list">
            <li>900 метров до станции МЦК «Зорге»</li>
            <li>Подземная, структурная и гостевая парковки <br>на 1450 м/мест</li>
            <li>Общая площадь комплекса ― 171700 м2</li>
            <li>1,9 км до станции МЦК «ЦСКА»</li>
            <li>Современные инженерные системы</li>
            <li>Здания высотой 10-38 этажей</li>
            <li>Круглосуточный доступ</li>
          </ul>
        </div>
      </div>

      <div class="on-maps-card on-maps__card on-maps__card--2">
        <div class="on-maps-card__img">
          <img src="<?php echo THEME_URL; ?>/images/content/maps-card-2.jpg" alt="">
        </div>
        <div class="on-maps-card__body">
          <div class="on-maps-card__title"><strong>БЦ «КРИСТАЛЛ»</strong>, ул. Кировоградская, 21А, 6 этаж, 350 рабочих мест.</div>
          <ul class="on-maps-card__list">
            <li>Офисный центр класса В</li>
            <li>10 минут пешком до станций метро «Пражская» и «Академика Янгеля»</li>
            <li>Площадь офисных помещений ― 43 000 м2</li>
            <li>Наземный/подземный паркинг на 293 м/места</li>
            <li>Потолки 4,2 м</li>
            <li>Просторное лобби</li>
            <li>Развитая внутренняя инфрастурктура</li>
          </ul>
        </div>
      </div>

      <div class="on-maps-card on-maps__card on-maps__card--3">
        <div class="on-maps-card__img">
          <img src="<?php echo THEME_URL; ?>/images/content/maps-card-3.jpg" alt="">
        </div>
        <div class="on-maps-card__body">
          <div class="on-maps-card__title"><strong>БЦ «Алые паруса»</strong>, Москва, Авиационная улица, 77, корпус 2</div>
          <ul class="on-maps-card__list">
            <li>2220,7 м2 площадей</li>
            <li>Три уровня расположения офисных помещений</li>
            <li>Отдельный вход <br>с Авиационной улицы</li>
            <li>Свободная планировка</li>
            <li>Панорамные окна по периметру</li>
            <li>32 машиноместа в подземном паркинге</li>
          </ul>
        </div>
      </div>

      <div id="map" class="on-maps__map" data-aos="fade-left"></div>

      <div class="on-maps__descr">
        <p>Сервисные офисы BOSS расположены в престижных бизнес-центрах <br>
        <span>Удобно добираться, приятно работать. Идеальны для представительских целей</span></p>
      </div>

      <script>
        var myMap;

        function init() {
          myMap = new ymaps.Map('map', {
            center: [55.791769, 37.517006],
            zoom: 10
          });

          // Place 1
          var place_1 = new ymaps.Placemark([55.791769, 37.517006], {}, {
            iconLayout: 'default#image',
            iconImageHref: '<?php echo THEME_URL; ?>/images/general/pin.svg',
            iconImageSize: [26, 36],
            iconImageOffset: [-13, -36]
          });

          place_1.events.add('mouseenter', function (e) {
            e.get('target').options.set('iconImageHref', '<?php echo THEME_URL; ?>/images/general/pin-black.svg');

            var cards = document.querySelectorAll('.on-maps__card');

            if (cards.length) {
              for (var i = 0; i < cards.length; i++) {
                cards[i].classList.remove('is-active');
              }
            }

            var card = document.querySelector('.on-maps__card--1');
            card.classList.add('is-active');
          })
          .add('mouseleave', function (e) {
            e.get('target').options.set('iconImageHref', '<?php echo THEME_URL; ?>/images/general/pin.svg');
          });

          myMap.geoObjects.add(place_1);

          // Place 2
          var place_2 = new ymaps.Placemark([55.600482, 37.600516], {}, {
            iconLayout: 'default#image',
            iconImageHref: '<?php echo THEME_URL; ?>/images/general/pin.svg',
            iconImageSize: [26, 36],
            iconImageOffset: [-13, -36]
          });

          place_2.events.add('mouseenter', function (e) {
            e.get('target').options.set('iconImageHref', '<?php echo THEME_URL; ?>/images/general/pin-black.svg');

            var cards = document.querySelectorAll('.on-maps__card');

            if (cards.length) {
              for (var i = 0; i < cards.length; i++) {
                cards[i].classList.remove('is-active');
              }
            }

            var card = document.querySelector('.on-maps__card--2');
            card.classList.add('is-active');
          })
            .add('mouseleave', function (e) {
              e.get('target').options.set('iconImageHref', '<?php echo THEME_URL; ?>/images/general/pin.svg');
            });

          myMap.geoObjects.add(place_2);

          var place_3 = new ymaps.Placemark([55.809348, 37.450863], {}, {
            iconLayout: 'default#image',
            iconImageHref: '<?php echo THEME_URL; ?>/images/general/pin.svg',
            iconImageSize: [26, 36],
            iconImageOffset: [-13, -36]
          });

          // Place 3
          place_3.events.add('mouseenter', function (e) {
            e.get('target').options.set('iconImageHref', '<?php echo THEME_URL; ?>/images/general/pin-black.svg');

            var cards = document.querySelectorAll('.on-maps__card');

            if (cards.length) {
              for (var i = 0; i < cards.length; i++) {
                cards[i].classList.remove('is-active');
              }
            }

            var card = document.querySelector('.on-maps__card--3');
            card.classList.add('is-active');
          })
            .add('mouseleave', function (e) {
              e.get('target').options.set('iconImageHref', '<?php echo THEME_URL; ?>/images/general/pin.svg');
            });

          myMap.geoObjects.add(place_3);
          myMap.setBounds(myMap.geoObjects.getBounds(), {checkZoomRange:true}).then(function(){ if(myMap.getZoom() > 10) myMap.setZoom(10);});

        }
      </script>
      <script async defer src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&onload=init"></script>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.on-maps -->

  <section class="provided">
    <div class="container">
      <h2 class="section-title" data-aos="fade">В сервисных офисах BOSS <span>мы уже предусмотрели <br>и подготовили для вас:</span></h2>

      <div class="row">
        <div class="col-xl-8 col-lg-7">
          <div class="provided-list">
            <div class="provided-list__item" data-aos="fade">
              <?php ith_the_icon( 'wifi-router', 'provided-list__icon' ); ?>
              <p>Современные инженерные сети, включая безлимитный интернет</p>
            </div>
            <div class="provided-list__item" data-aos="fade" data-aos-delay="100">
              <?php ith_the_icon( 'poster', 'provided-list__icon' ); ?>
              <p>Образовательные <br>и развлекательные мероприятия</p>
            </div>
            <div class="provided-list__item" data-aos="fade" data-aos-delay="200">
              <?php ith_the_icon( 'network', 'provided-list__icon' ); ?>
              <p>Коворкинг в зоне open space</p>
            </div>
            <div class="provided-list__item" data-aos="fade" data-aos-delay="300">
              <?php ith_the_icon( 'presentation', 'provided-list__icon' ); ?>
              <p>Переговорные комнаты <br>и конференц-залы</p>
            </div>
            <div class="provided-list__item" data-aos="fade" data-aos-delay="400">
              <?php ith_the_icon( 'employees', 'provided-list__icon' ); ?>
              <p>Бухгалтерские и юридические услуги</p>
            </div>
            <div class="provided-list__item" data-aos="fade" data-aos-delay="500">
              <?php ith_the_icon( 'stove', 'provided-list__icon' ); ?>
              <p>Полностью оборудованную кухню</p>
            </div>
            <div class="provided-list__item" data-aos="fade" data-aos-delay="600">
              <?php ith_the_icon( 'tea', 'provided-list__icon' ); ?>
              <p>Воду, чай, кофе без ограничений</p>
            </div>
            <div class="provided-list__item" data-aos="fade" data-aos-delay="700">
              <?php ith_the_icon( 'secretary', 'provided-list__icon' ); ?>
              <p>Секретарское обслуживание</p>
            </div>
            <div class="provided-list__item" data-aos="fade" data-aos-delay="800">
              <?php ith_the_icon( 'support', 'provided-list__icon' ); ?>
              <p>Техническую поддержку</p>
            </div>
            <div class="provided-list__item" data-aos="fade" data-aos-delay="900">
              <?php ith_the_icon( 'office-worker', 'provided-list__icon' ); ?>
              <p>Персональные офисы</p>
            </div>
            <div class="provided-list__item" data-aos="fade" data-aos-delay="1000">
              <?php ith_the_icon( 'web-design', 'provided-list__icon' ); ?>
              <p>Виртуальные офисы</p>
            </div>
            <div class="provided-list__item" data-aos="fade" data-aos-delay="1100">
              <?php ith_the_icon( 'email', 'provided-list__icon' ); ?>
              <p>Почтовые услуги</p>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-lg-5">
          <div class="provided__form-wrap" data-aos="fade-left">
            <h3><span>Творческая бизнес атмосфера</span> <br>это приятный бонус!</h3>
            <p>Проконсультируйтесь по подбору сервисного офиса</p>

            <?php echo do_shortcode( '[contact-form-7 id="14" title="Без названия"]' ); ?>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /.provided -->

  <section class="advantages" >
    <div class="container">
      <h2 class="section-title" id="advantages" data-aos="fade">«И все-таки, зачем мне это нужно? <br><span>Почему именно сервисные офисы BOSS?»</span></h2>

      <div class="advantages-slider__wrap">
        <div class="advantages-slider swiper-container">
          <div class="swiper-wrapper">
            <div class="advantages-slider__item swiper-slide">
              <div class="advantages-slider__inner">
                <span class="advantages-slider__plus"></span>
                <p><strong>Ваш офис</strong> уже полностью готов к заезду</p>
              </div>
            </div>
            <div class="advantages-slider__item swiper-slide">
              <div class="advantages-slider__inner">
                <span class="advantages-slider__plus"></span>
                <p><strong>Вам не нужно тратить деньги</strong> на ремонт, закупку мебели и техники, оплату коммунальных платежей</p>
              </div>
            </div>
            <div class="advantages-slider__item swiper-slide">
              <div class="advantages-slider__inner">
                <span class="advantages-slider__plus"></span>
                <p><strong>Всегда есть возможность</strong> <br>увеличить/уменьшить площадь офиса</p>
              </div>
            </div>
            <div class="advantages-slider__item swiper-slide">
              <div class="advantages-slider__inner">
                <span class="advantages-slider__plus"></span>
                <p><strong>Есть вся необходимая инфраструктура</strong>, от ресепшн до зоны отдыха</p>
              </div>
            </div>
            <div class="advantages-slider__item swiper-slide">
              <div class="advantages-slider__inner">
                <span class="advantages-slider__plus"></span>
                <p><strong>Не нужно заключать договоры</strong> на обслуживание ― охрану, уборку, техническую поддержку</p>
              </div>
            </div>
            <div class="advantages-slider__item swiper-slide">
              <div class="advantages-slider__inner">
                <span class="advantages-slider__plus"></span>
                <p><strong>Позитивное сообщество</strong> ― бизнес-среда, где можно найти клиентов и/или контрагентов</p>
              </div>
            </div>
            <div class="advantages-slider__item swiper-slide">
              <div class="advantages-slider__inner">
                <span class="advantages-slider__plus"></span>
                <p><strong>Офис работает на имидж</strong> ― вы работаете в престижных бизнес-центрах</p>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-controls">
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev">
            <?php ith_the_icon( 'arrow-left' ); ?>
          </div>
          <div class="swiper-button-next">
            <?php ith_the_icon( 'arrow-right' ); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.advantages -->

  <section class="pluses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="pluses-card pluses-card--minus" data-aos="fade-left">
            <div class="pluses-card__img">
              <img src="<?php echo THEME_URL; ?>/images/content/pluses-1.jpg" alt="">
            </div>
            <div class="pluses-card__content">
              <h3 class="pluses-card__title">
                Обычная аренда
                <span class="pluses-card__title-icon"></span>
              </h3>
              <ul class="pluses-card__list">
                <li>...Нужно сделать ремонт... Где взять деньги?</li>
                <li>...Опять пришло время платить за уборку и охрану</li>
                <li>...Где взять толкового секретаря?</li>
                <li>...Интернет висит, информация пропала!</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pluses-card pluses-card--plus" data-aos="fade-left" data-aos-delay="100">
            <div class="pluses-card__img">
              <img src="<?php echo THEME_URL; ?>/images/content/pluses-2.jpg" alt="">
            </div>
            <div class="pluses-card__content">
              <h3 class="pluses-card__title">
                Сервисная аренда
                <span class="pluses-card__title-icon"></span>
              </h3>
              <ul class="pluses-card__list">
                <li>...Отличный современный ремонт. Мне нравится!</li>
                <li>...А кто тут это все каждый день убирает? Все делается как-то само собой</li>
                <li>...Ресепшн хорошо справляется, секретари очень приветливые</li>
                <li>...Интернет висит? ― Только не у нас!</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <h2 class="section-title" data-aos="fade">А что <span>выбираете вы?</span></h2>
      <div class="pluses__btn" data-aos="fade-up" data-aos-delay="100">
        <a href="#" class="btn callback_open">Позвонить и проконсультироваться</a>
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.pluses -->

<?php $faqs = get_any_post( 'faq', -1 );
if ($faqs->have_posts()): ?>
  <section class="faq">
    <div class="container">
      <h2 class="section-title" data-aos="fade">Нас часто <span>спрашивают...</span></h2>

      <div class="faq-list">
        <?php $i = 0; while ($faqs->have_posts()): $faqs->the_post(); ?>
          <div class="faq-list__item<?php echo $i == 0 ? ' active' : ''; ?>" data-aos="fade" data-aos-delay="<?php echo $i++ * 100; ?>">
            <h3 class="faq-list__title">
              <?php the_title(); ?>
              <span class="faq-list__toggle"></span>
            </h3>
            <div class="faq-list__content">
              <?php the_content(); ?>
            </div>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

      <div class="faq__btn" data-aos="fade-up">
        <a href="#" class="btn callback_open">Позвонить и задать свой вопрос</a>
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.faq -->
<?php endif; ?>

<?php get_footer();