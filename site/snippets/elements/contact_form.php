<div class="col-container">
    <div class="col-inline inline--teaser">
        <div class="col-middle">
            <div class="col col--12 section-headline headline--bright"><?= $page->form_headline() ?></div>
            <div class="col col--12 form-text"><?= $page->form_text() ?></div>
            
            <!-- FORM -->
            <div class="col col--12 donate-form__content">
                <form class="form">
                    <div class="form__item">
                        <input class="input" type="text" placeholder="<?= $page->placeholder_reason() ?>">
                    </div>
                    <div class="form__row">
                        <input class="input" type="text" placeholder="<?= $page->placeholder_name() ?>">
                        <input class="input" type="text" placeholder="<?= $page->placeholder_email() ?>">
                    </div>
                    <div class="form__item form__item--textarea">
                        <textarea class="textarea" row="10" placeholder="<?= $page->placeholder_message() ?>"></textarea>
                    </div>
                    <input class="button" type="submit" value="<?= $page->form_submit() ?>">
                </form>
            </div>
        </div>
    </div>
</div>