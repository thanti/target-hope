<div class="col-container">
    <div class="col-inline inline--donate--text">
        <div class="col-middle">
            <div class="col col--8 donate-text__content">
                <div class="donate-text"><?= $page->donate_text()->markdown() ?></div>
                <div class="donate-box">
                    <div class="donate-box__header">
                        <i class="icon">
                            <svg role="img">
                                <use xlink:href="../src/img/all.svg#icon-bank"></use>
                            </svg>
                        </i>
                        <div class="donate-headline">Bankverbindung</div>
                    </div>
                    <div class="donate__info"> 
                        <div class="bank"> 
                            <div class="bank-item item--association"> <strong>Target Hope e.v.</strong></div>
                            <div class="bank-item item--name">BW Bank</div>
                            <div class="bank-item item--iban">IBAN:    DE28 6005 0101 0001 2877 12</div>
                            <div class="bank-item item--bic">BIC:    SOLADEST600</div>
                        </div>
                        <div class="usage-field">
                            <div class="usage-item item-headline">Verwendungszweck</div>
                            <div class="usage-item"> <i>+ Name des Projekts bitte hier angeben</i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col--8 donate-form__content hide">
                <form class="form">
                    <div class="form__item">
                        <input class="input" type="text" placeholder="Grund Ihrer Anfrage">
                    </div>
                    <div class="form__row">
                        <input class="input" type="text" placeholder="Name">
                        <input class="input" type="text" placeholder="E-Mail-Adresse">
                    </div>
                    <div class="form__item form__item--textarea">
                        <textarea class="textarea" row="10" placeholder="Ihre Nachricht"></textarea>
                    </div>
                    <input class="button" type="submit" value="Absenden">
                </form>
            </div>
            <div class="col col--4 image donate-text__image">
                <img src="<?= $page->image('donate.jpg')->url() ?>" alt="">
            </div>
        </div>
    </div>
</div>