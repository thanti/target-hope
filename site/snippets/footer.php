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
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="undefinedbootstrap/bootstrap.min.js?v=undefined"></script>
    <script src="undefinedslick.min.js?v=undefined"></script>
    <script src="undefinedjquery.masonry.min.js?v=undefined"></script>
    <script src="undefinedrellax.min.js?v=undefined"></script>
    <script src="undefinedworkfiles.js?v=undefined"></script>
  </body>
</html>