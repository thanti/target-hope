<div class="col-container container--world">
    <div class="col-inline inline--world">
        <div class="col-middle">
            <div class="col col--4">
                <div class="section-headline"><?= $site->world_section_headline() ?></div>
                <div class="world-text"><?= $site->world_section_text() ?></div>
            </div>
            <div class="col col--8 world__image">
                <img src="<?= $site->image('map.svg')->url() ?>" alt="">
            </div>
        </div>
    </div>
</div>