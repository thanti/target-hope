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
                        <div class="slider__item">
                            <a class="slider-img" href="project_open.html"> <img src="<?= $site->image('projekt-guinea.jpg')->url() ?>" alt=""></a>
                            <div class="slider-overline">Hilfstaktion</div>
                            <div class="slider-headline">Brunnenbau in Guinea</div>
                        </div>
                        <div class="slider__item">
                            <a class="slider-img" href="project_open.html"> <img src="<?= $site->image('projekt-senegal.jpg')->url() ?>" alt=""></a>
                            <div class="slider-overline">Entwicklungszusammenarbeit</div>
                            <div class="slider-headline">Schule und Ausbildung in Senegal</div>
                        </div>
                        <div class="slider__item">
                            <a class="slider-img" href="project_open.html"> <img src="<?= $site->image('projekt-guinea.jpg')->url() ?>" alt=""></a>
                            <div class="slider-overline">Hilfstaktion</div>
                            <div class="slider-headline">Brunnenbau in Guinea</div>
                        </div>
                        <div class="slider__item">
                            <a class="slider-img" href="project_open.html"> <img src="<?= $site->image('projekt-senegal.jpg')->url() ?>" alt=""></a>
                            <div class="slider-overline">Hilfstaktion</div>
                            <div class="slider-headline">Brunnenbau in Guinea</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>