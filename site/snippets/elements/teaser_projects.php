<div class="col-container">
    <div class="col-inline inline--teaser">
        <div class="col-middle">
            <div class="col col--12 section-headline"><?= $page->teaser_headline() ?></div>
            <div class="flex-inline-container flex-teaser">
            <?php foreach ($page->children()->listed()->sortBy('date', 'desc')->filterBy('tags', 'Bisherige Projekte', ',') as $project): ?>
                <div class="col col--4 teaser__item">
                    <a class="teaser-img" href="<?= $project->url() ?>"> 
                        <?php if ($project->image()): ?>
                            <img src="<?= $project->image()->url() ?>" alt="">
                        <?php endif ?>
                    </a>
                    <div class="teaser-headline"><?= $project->title() ?></div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </div>
</div>