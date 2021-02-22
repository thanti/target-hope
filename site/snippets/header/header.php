<header class="header">
  <div class="col-inline inline--header">
    <div class="col-middle">
        <a class="header__logo" href="<?= $site->url()?>">
            <i class="logo logo--white">
                <svg role="img">
                    <use xlink:href="<?= $site->image('all.svg')->url() ?>#icon-logo"></use>
                </svg>
            </i>
        </a>
      <?php snippet('header/nav') ?>
    </div>
  </div>
</header>