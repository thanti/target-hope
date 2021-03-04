<div class="col-container container--how">
    <div class="col-inline inline--how">
        <div class="col-middle">
            <div class="col col--5">
                <div class="section-headline"><?= $page->how_headline() ?></div>
                <div class="how-text"><?= $page->how_text() ?></div>
            </div>
            <div class="col col--7 how__image">
                <img src="<?= $page->image('circle.svg')->url() ?>" alt="">
            </div>
        </div>
    </div>
</div>