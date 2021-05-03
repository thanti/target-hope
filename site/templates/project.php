<?php snippet('html_start') ?>
  <div class="wrapper">
    <div class="wrapper-top">
      <?php snippet('header/header') ?>
    </div>
    
    <div class="col-container container--white">
      <div class="col-inline inline--project">
        <div class="col-middle">
          <div class="col col--12 section-headline">
            <p><?= $page->title() ?></p>
          </div>
          <div class="col col--12 project-inline-container">
            <div class="col col--12 project-text-container">
              <div class="project-text text">
                <?= $page->text()->kirbytext() ?>
              </div>
            </div>
          </div>
          <div class="col col--12 section-meta">
            <?php if ($page->tags()->isNotEmpty()) : ?>
              <p class="project-tags tags"><time class="project-date"><?= $page->date()->toDate('d F Y') ?></time> | <?= $page->tags() ?></p>
            <?php else: ?>
              <time class="project-date"><?= $page->date()->toDate('d F Y') ?></time>
            <?php endif ?>
          </div>
        </div>
      </div>      
    </div>
    <?php snippet('footer') ?>
  </div>
<?php snippet('html_end') ?>