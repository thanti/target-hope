<div class="col-container">
    <div class="col-inline inline--donate--text">
        <div class="col-middle">
            <div class="col col--8 donate-text__content">
                <div class="donate-text"><?= $page->donate_text() ?></div>
                <div class="donate-box">
                    <div class="donate-box__header">
                        <i class="icon">
                            <svg role="img">
                                <use xlink:href="../src/img/all.svg#icon-bank"></use>
                            </svg>
                        </i>
                        <div class="donate-headline"><?= $page->bank_headline() ?></div>
                    </div>
                    <div class="donate__info"> 
                        <div class="bank"> 
                            <div class="bank-item item--association"><?= $page->bank_association() ?></div>
                            <div class="bank-item item--name"><?= $page->bank_name() ?></div>
                            <div class="bank-item item--iban"><?= $page->bank_iban() ?></div>
                            <div class="bank-item item--bic"><?= $page->bank_bic() ?></div>
                        </div>
                        <div class="usage-field">
                            <div class="usage-item item-headline"><?= $page->usage_headline() ?></div>
                            <div class="usage-item"><?= $page->usage_item() ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col--8 donate-form__content hide">
                <form class="form">
                    <div class="form__item">
                        <input class="input" type="text" placeholder="<?= $site->placeholder_reason() ?>">
                    </div>
                    <div class="form__row">
                        <input class="input" type="text" placeholder="<?= $site->placeholder_name() ?>">
                        <input class="input" type="text" placeholder="<?= $site->placeholder_email() ?>">
                    </div>
                    <div class="form__item form__item--textarea">
                        <textarea class="textarea" row="10" placeholder="<?= $site->placeholder_message() ?>"></textarea>
                    </div>
                    <input class="button" type="submit" value="<?= $site->form_submit() ?>">
                </form>
            </div>
            <div class="col col--4 image donate-text__image">
                <img src="<?= $page->image('donate.jpg')->url() ?>" alt="">
            </div>
        </div>
    </div>
</div>