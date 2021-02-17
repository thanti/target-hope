<div class="col-container">
    <div class="col-inline">
        <div class="col-middle">
            <div class="col col--4 info__image">
                <img src="<?= $site->image('info.jpg')->url() ?>" alt="">
            </div>
            <div class="col col--8">
                <div class="section-headline"><?= $site->info_section_headline() ?></div>
                <div class="info-text info-text--dark"><?= $site->info_section_text() ?></div>
            </div>
        </div>
    </div>
</div>