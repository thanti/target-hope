<div class="col-container container--hero">
    <div class="col-inline inline--hero">
        <div class="col-middle hero-slider">
            <?php foreach ($kirby->page('projects')->children()->listed()->sortBy('date', 'desc')->filterBy('tags', 'Aktuelle Projekte', ',')->limit(3) as $project): ?>
                <div class="hero-slider__item">
                    <div class="col-middle">
                        <a class="col col--8 image" href="<?= $project->url() ?>">
                            <?php if ($project->image()): ?>
                                <img src="<?= $page->image('hero.png')->url() ?>" alt=""> <!-- $project->image()->url() -->
                            <?php else: ?>
                                <img src="<?= $page->image('hero.png')->url() ?>" alt="">
                            <?php endif ?>
                        </a>
                        <div class="col col--4 col--hero">
                            <div class="hero-overline"><?= $project->cat() ?></div>
                            <a class="hero-headline" href="<?= $project->url() ?>"><?= $project->title() ?></a>
                            <div class="hero-text"><?= $project->text()->excerpt(140, true, ' …') ?>
                                <br><br>
                                <a href="<?= $project->url() ?>"> <i><?= $site->read_more() ?></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>