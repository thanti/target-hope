<div class="col-container">
    <div class="col-inline inline--fact">
        <div class="col-middle">
            <div class="col col--4 fact__content">
                <div class="fact-number"><?= $site->fact_ort_number() ?></div>
                <div class="fact-text"><?= $site->fact_ort_text() ?></div>
            </div>
            <div class="col col--4 fact__content">
                <div class="fact-number"><?= $site->fact_lander_number() ?></div>
                <div  iv class="fact-text"><?= $site->fact_lander_text() ?></div>
            </div>
            <div class="col col--4 fact__content">
                <div class="fact-number"><?= $site->fact_menschen_number() ?></div>
                <div class="fact-text"><?= $site->fact_menschen_text() ?></div>
            </div>
            <div class="col col--4 fact__content">
                <div class="fact-number"><?= $site->fact_prozent_number() ?></div>
                <div class="fact-text"><?= $site->fact_prozent_text() ?></div>
            </div>
            <div class="col col--4 fact__content">
                <div class="fact-text"><?= $site->fact_seit_text() ?></div>
                <div class="fact-number"><?= $site->fact_seit_number() ?></div>
            </div>
            <div class="col col--4 fact__content fact__content--button">
                <a class="button" href="about_us.html">
                    <?= $site->fact_more_button() ?>
                    <i class="icon icon--white icon--small">
                        <svg role="img">
                            <use xlink:href="<?= $site->image('all.svg')->url() ?>#icon-arrow-big"></use>
                        </svg>
                    </i>
                </a>
            </div>
        </div>
    </div>
</div>