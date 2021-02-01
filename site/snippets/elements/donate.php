<div class="col-container container--donate">
    <div class="col-inline inline--donate">
        <div class="col-middle">
            <div class="col donate__content donate__content--active donate">
                <i class="icon icon--big">
                    <svg role="img">
                        <use xlink:href="<?= $site->image('all.svg')->url() ?>#donate"></use>
                    </svg>
                </i>
                <div class="content-headline"><?= $page->donate_headline() ?></div>
            </div>
            <div class="col donate__content join">
                <i class="icon icon--big">
                    <svg role="img">
                        <use xlink:href="<?= $site->image('all.svg')->url() ?>#join"></use>
                    </svg>
                </i>
                <div class="content-headline"><?= $page->join_headline() ?></div>
            </div>
        </div>
    </div>
</div>