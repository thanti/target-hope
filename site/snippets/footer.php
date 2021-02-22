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
          <div class="footer-text"><?= $site->copyright()->html() ?></div>
          <a class="footer-text" href="<?= $site->find('impressum')->url() ?>">Impressum</a>
          <a class="footer-text" href="<?= $site->find('datenschutz')->url() ?>">Datenschutz</a>
          <a class="footer-text" href="<?= $site->find('agb')->url() ?>">AGB</a>
        </div>
      </div>
    </div>
  </div>
</footer>