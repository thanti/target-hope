<div class="col-container container--hero">
    <div class="col-inline inline--hero">
        <div class="col-middle">
            <a class="col col--8 image" href="<?= page('project_open')->url() ?>">
                <img src="<?= $page->image('hero.png')->url() ?>" alt="">
            </a>
            <div class="col col--4 col--hero">
                <div class="hero-overline"><?= $page->join_headline() ?></div>
                <a class="hero-headline" href="<?= page('project_open')->url() ?>"><?= $page->join_hero_headline() ?></a>
                <div class="hero-text"><?= $page->join_hero_text() ?></div>
            </div>
        </div>
    </div>
</div>