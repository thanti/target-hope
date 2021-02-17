<div class="col-container container--green">
    <div class="col-inline inline--info">
        <div class="col-middle">
            <div class="col col--6 info__content">
                <i class="icon icon--white icon--big">
                    <svg role="img">
                        <use xlink:href="<?= $site->image('all.svg')->url() ?>#work"></use>
                    </svg>
                </i>
                <div class="info-headline"><?= $page->work_info_headline() ?></div>
                <div class="info-text"><?= $page->work_info_text() ?></div>
            </div>
            <div class="col col--6 info__content">
                <i class="icon icon--white icon--big">
                    <svg role="img">
                        <use xlink:href="<?= $site->image('all.svg')->url() ?>#together"></use>
                    </svg>
                </i>
                <div class="info-headline"><?= $page->together_info_headline() ?></div>
                <div class="info-text"><?= $page->together_info_text() ?></div>
            </div>
        </div>
    </div>
</div>