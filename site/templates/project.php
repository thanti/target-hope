<?php snippet('html_start') ?>
  <div class="wrapper">
    <div class="wrapper-top top--white">
      <?php snippet('header/header_white') ?>
    </div>
    
    <main>
      <article class="project">
        <header class="project-header intro">
          <h1><?= $page->title() ?></h1>
          <time class="project-date"><?= $page->date()->toDate('d F Y') ?></time>
          <?php if ($page->tags()->isNotEmpty()) : ?>
          <p class="project-tags tags"><?= $page->tags() ?></p>
          <?php endif ?>
        </header>

        <div class="project-text text">
          <?= $page->text()->kt() ?>
        </div>
      </article>
    </main>
      
    <?php snippet('footer') ?>
  </div>
<?php snippet('html_end') ?>