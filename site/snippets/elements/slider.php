<div class="col-container container--slider">
    <div class="col-inline inline--slider"> 
        <div class="col-middle">
            <div class="col col--12 section-headline"><?= $page->slider_headline() ?></div>
            <div class="col col--12 slider">
                <?php foreach ($page->children()->listed()->sortBy('date', 'desc')->filterBy('tags', 'Aktuelle Projekte', ',') as $project): ?>
                    <div class="slider__item">
                        <a class="slider-img" href="<?= $project->url() ?>" style="background-image: url('<?= $project->image()->url() ?>');">
                            <?php if ($project->image()): ?>
                            <?php endif ?>
                        </a>
                        <a href="<?= $project->url() ?>">
                            <div class="slider-overline"><?= $project->cat() ?></div>
                            <div class="slider-headline"><?= $project->title() ?></div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>