<div class="col-container container--slider">
    <div class="col-inline inline--slider"> 
        <div class="col-middle">
            <div class="col col--12 section-headline"><?= $page->slider_headline() ?></div>
            <div class="col col--12 slider">
                <div class="button button-slider button--prev">
                    <i class="icon">
                        <svg role="img">
                            <use xlink:href="<?= $site->image('all.svg')->url() ?>#icon-arrow"></use>
                        </svg>
                    </i>
                </div>
                <div class="button button-slider button--next">
                    <i class="icon">
                        <svg role="img">
                            <use xlink:href="<?= $site->image('all.svg')->url() ?>#icon-arrow"></use>
                        </svg>
                    </i>
                </div>
                <div class="flex-inline-container flex-slider">       
                    <div class="slider-container" style="width: calc((319px * 4) + (30px * 3)); transform: translateX(0px);">
                        <?php foreach ($page->children()->listed()->sortBy('date', 'desc')->filterBy('tags', 'Aktuelle Projekte', ',') as $project): ?>
                            <div class="slider__item">
                                <a class="slider-img" href="<?= $project->url() ?>" style="background-image: url('<?= $project->image()->url() ?>');">
                                    <?php if ($project->image()): ?>
                                    <?php endif ?>
                                </a>
                                <div class="slider-overline"><?= $project->cat() ?></div>
                                <div class="slider-headline"><?= $project->title() ?></div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>