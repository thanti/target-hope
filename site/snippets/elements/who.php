<div class="col-container">
    <div class="col-inline inline--who">
        <div class="col-middle">
            <div class="col col--12 section-headline"><?= $page->who_headline() ?></div>
        </div>
        <div class="col-middle">
            <div class="col col--6 who__content">
                <div class="who-image">
                    <img src="<?= $page->image('left.png')->url() ?>" alt="">
                </div>
                <div class="who-headline"><?= $page->who_left_headline() ?></div>
                <div class="who-text"><?= $page->who_left_text() ?></div>
            </div>
            <div class="col col--6 who__content">
                <div class="who-image">
                    <img src="<?= $page->image('right.png')->url() ?>" alt="">
                </div>
                <div class="who-headline"><?= $page->who_right_headline() ?></div>
                <div class="who-text"><?= $page->who_right_text() ?></div>
            </div>
        </div>
    </div>
</div>