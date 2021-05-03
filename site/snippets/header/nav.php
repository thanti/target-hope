<div class="nav">
    <!--
    <div class="nav__logo">
        <i class="icon icon--small icon--secondary">
            <svg role="img">
                <use xlink:href="<?= $site->image('all.svg')->url() ?>#icon-nav"></use>
            </svg>
        </i>
    </div>
    -->
    <?php 
    // In the menu, we only fetch listed pages, i.e. the pages that have a prepended number in their foldername
    // We do not want to display links to unlisted `error`, `home`, or `sandbox` pages
    // More about page status: https://getkirby.com/docs/reference/panel/blueprints/page#statuses
    foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
    <?php endforeach ?>
</div>