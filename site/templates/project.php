<?php snippet('html_start') ?>
  <div class="wrapper">
    <div class="wrapper-top top--white">
      <?php snippet('header/header_white') ?>
    </div>
    
    <div class="col-container container--tertiary">
      <div class="col-inline inline--project">
        <div class="col-middle">
          <div class="col col--12 section-headline">
            <p><?= $page->title() ?></p>
          </div>
          <div class="col col--12 section-meta">
            <time class="project-date"><?= $page->date()->toDate('d F Y') ?></time>
            <?php if ($page->tags()->isNotEmpty()) : ?>
              <p class="project-tags tags"><?= $page->tags() ?></p>
            <?php endif ?>
          </div>
          <div class="col col--12 project-inline-container">
            <div class="col col--12 project-text-container">
              <div class="project-text text">
                <?= $page->text()->kirbytext() ?>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
    <?php snippet('footer') ?>
  </div>
<?php snippet('html_end') ?>