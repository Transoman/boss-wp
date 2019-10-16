  </div><!-- /.content -->

  <?php
    $policy = get_field( 'policy', 'option' );
    $address = get_field( 'address', 'option' );
    $email = get_field( 'email', 'option' );
    $phone = get_field( 'phone', 'option' );
  ?>

  <footer class="footer">
    <div class="container">
      <a href="<?php echo home_url( '/' ); ?>" class="logo footer__logo">
        <img src="<?php echo THEME_URL; ?>/images/general/logo-white.svg" width="120" alt="Boss">
      </a>

      <p class="footer__descr">Центр притяжения успеха</p>

      <?php if ($policy): ?>
        <a href="<?php echo esc_url($policy); ?>" class="footer__policy">Политика <br>конфиденциальности</a>
      <?php endif; ?>

      <div class="footer__contact">
        <?php if ($address): ?>
          <div class="footer__contact-item">
            <p><?php echo $address; ?></p>
            <span class="footer__contact-label">Наш адрес</span>
          </div>
        <?php endif; ?>
        <?php if ($email): ?>
          <div class="footer__contact-item">
            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            <span class="footer__contact-label">Наш E-mail</span>
          </div>
        <?php endif; ?>
      </div>

      <?php if ($phone): ?>
        <div class="phone footer__phone">
          <a href="tel:<?php echo preg_replace( '![^0-9\+]+!', '', $phone); ?>" class="phone__tel">
            <?php ith_the_icon( 'phone' ); ?>
            <?php echo $phone; ?>
          </a><br>
          <a href="#" class="phone__callback callback_open">Заказать обратный звонок</a>
        </div>
      <?php endif; ?>
    </div>
  </footer><!-- #colophon -->

</div><!-- /.wrapper -->

  <div id="callback" class="modal">
    <button type="button" class="modal__close callback__close"></button>

    <h3 class="modal__title"><span>Заказать обратный звонок</span></h3>

    <?php echo do_shortcode( '[contact-form-7 id="23" title="Обратный звонок"]' ); ?>

  </div>

<?php wp_footer(); ?>

</body>
</html>
