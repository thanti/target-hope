<footer class="footer"> 
        <div class="col-inline inline--footer">
          <div class="col-middle">
            <div class="footer__content">
                <a class="footer-logo" href="<?= $site->url() ?>">
                    <i class="logo logo--white">
                        <svg role="img">
                            <use xlink:href="<?= $site->image('all.svg')->url() ?>#icon-logo"></use>
                        </svg>
                    </i>
                </a>
              <div class="footer-text--right">
                <div class="footer-text"><?= $site->copyright()->html() ?></div><a class="footer-text" href="<?= $site->find('impressum')->url() ?>">Impressum</a><a class="footer-text" href="<?= $site->find('datenschutz')->url() ?>">Datenschutz</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <?= js('//code.jquery.com/jquery-1.11.0.min.js') ?>
    <?= js('//code.jquery.com/jquery-migrate-1.2.1.min.js') ?>
    <?= js('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') ?>
    <?= js('assets/js/bootstrap/bootstrap.min.js?v=1.0') ?>
    <?= js('assets/js/slick.min.js?v=1.0') ?>
    <?= js('assets/js/jquery.min.js?v=1.0') ?>
    <?= js('assets/js/rellax.min.js?v=1.0') ?>
    <?= js('assets/js/workfiles.js?v=1.0') ?>
  </body>
</html>