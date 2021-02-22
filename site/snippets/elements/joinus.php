<div class="col-container">
    <div class="col-inline inline--joinus">
        <div class="col-middle">
            <div class="flex-inline-container">
                <div class="col col--6">
                    <div class="section-headline"><?= $page->joinus_headline() ?></div>
                    <div class="content-header">
                        <i class="icon">
                            <svg role="img">
                                <use xlink:href="<?= $site->image('all.svg')->url() ?>#donate"></use>
                            </svg>
                        </i>
                    <div class="content-headline"><?= $page->joinus_donate() ?></div>
                </div>
                <div class="joinus-text"><?= $page->joinus_donate_text() ?></div>
                <div class="content-header">
                    <i class="icon">
                        <svg role="img">
                            <use xlink:href="<?= $site->image('all.svg')->url() ?>#join"></use>
                        </svg>
                    </i>
                    <div class="content-headline"><?= $page->joinus_join() ?></div>
                </div>
                <div class="joinus-text"><?= $page->joinus_join_text() ?></div>
                <a class="button" href="<?= page('join')->url() ?>">
                    <?= $page->joinus_join_button() ?>
                    <i class="icon icon--white icon--small">
                        <svg role="img">
                            <use xlink:href="<?= $site->image('all.svg')->url() ?>#icon-arrow-big"></use>
                        </svg>
                    </i>
                </a>
            </div>
                <div class="col col--6 image">
                    <img src="<?= $page->image('mitmachen.jpg')->url() ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>