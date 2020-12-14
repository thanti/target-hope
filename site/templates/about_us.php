
<!-- Table Generator-->
<!-- List Generator-->
<!-- Random Text Generator--><!DOCTYPE html>
<html lang="de">
  <head>
    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="<?= $site->description() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><?= css(['assets/css/styles.css', '@auto']) ?>
    <link rel="shortcut icon" href="<?= url('assets/img/favicon.ico') ?>">
    <link rel="apple-touch-icon" href="<?= url('assets/img/apple-touch-icon.png') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= url('assets/img/apple-touch-icon.png') ?>">
    <link rel="icon" sizes="192x192" href="<?= url('assets/img/android-touch-icon.png') ?>">
    <!-- script(src=js + "jquery.min.js?v=" + version)-->
    <!-- script(src=js + "workfiles.js?v=" + version)-->
    <!-- script(src=js/slick.min.js)--><!--[if lte IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><script>window.html5 || document.write("<script src="js/vendor/html5shiv.js"><\/script>")</script><![endif]-->
<!--[if lte IE 9]><div class="browsehappy"><h2 class="beta">Achtung</h2><p>Sie benutzen einen <strong>veralteten</strong> Browser. Bitte <a href="http://browsehappy.com/">updaten Sie Ihren Browser</a> um die volle Funktionalität dieser Website erleben zu können.</p></div><![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <div class="wrapper-top">
        <header class="header">
          <div class="col-inline inline--header">
            <div class="col-middle"><a class="header__logo" href="<?= $site->url()?>"><?php $svgUrl = url('asset/img/all.svg') ?><i class="logo logo--white">
                  <svg role="img">
                    <use xlink:href="undefined#icon-logo"></use>
                  </svg></i></a>
              <div class="nav">
                <div class="nav__logo"><i class="icon icon--small icon--secondary">
                    <svg role="img">
                      <use xlink:href="../src/img/all.svg#icon-nav"></use>
                    </svg></i>
                </div>
              </div>
            </div>
          </div>
        </header>
        <div class="col-container container--hero">
          <div class="col-inline inline--hero">
            <div class="col-middle"><a class="col col--8 image" href="project_open.html"><img src="../../src/img/hero-romania.png" alt=""></a>
              <div class="col col--4 col--hero">
                <div class="hero-overline">Mitmachen</div><a class="hero-headline" href="project_open.html">Hoffnung, die zum Tragen kommt</a>
                <div class="hero-text">Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te. Ex duo eripuit mentitum.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-container container--green">
        <div class="col-inline inline--info">
          <div class="col-middle">
            <div class="col col--6 info__content"><i class="icon icon--white icon--big">
                <svg role="img">
                  <use xlink:href="../src/img/all.svg#work"></use>
                </svg></i>
              <div class="info-headline">Humanitäre Hilfstaktionen</div>
              <div class="info-text">Verteilung von Nahrungsmitteln, Kleidung, Decken und Zelten, Sicherstellung von Trinkwasser und medizinische Versorgung.</div>
            </div>
            <div class="col col--6 info__content"><i class="icon icon--white icon--big">
                <svg role="img">
                  <use xlink:href="../src/img/all.svg#together"></use>
                </svg></i>
              <div class="info-headline">Entwicklungszusammenarbeit</div>
              <div class="info-text">Durch nachhaltige Aufbauhilfe und Projekte ist unser Ziel, die Menschen langfristig unabhängig von fremder Unterstützung zu machen.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-container">
        <div class="col-inline">
          <div class="col-middle">
            <div class="col col--4 info__image"><img src="../../src/img/info.jpg" alt=""></div>
            <div class="col col--8">
              <div class="section-headline">Brücken der Hoffnung</div>
              <div class="info-text info-text--dark">Brücken der Hoffnung bauen … zwischen Wohlstand und Armut, Überfluss und Not … - gemeinsam mit unseren weltweiten Partnern … Menschen helfen, die in Not und Armut geraten sind, und ihnen Hoffnung für eine bessere Zukunft vermitteln …</div>
              <div class="info-text info-text--dark">Target Hope e.V. finanziert seine Projekte überwiegend durch Spenden und führt mit einem Team von ehrenamtlichen Mitarbeitern Projekte und Hilfsaktionen durch in enger Zusammenarbeit mit lokalen Partnerorganisationen in den verschiedenen Ländern.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-container container--world">
        <div class="col-inline inline--world">
          <div class="col-middle">
            <div class="col col--4">
              <div class="section-headline">Hoffnung in die ganze Welt</div>
              <div class="world-text">Schwerpunkte von Target Hope e.V. sind Projekte der Entwicklungszusammenarbeit, um in mehr als 14 Ländern Menschen in Not Hoffnung und Perspektive für eine bessere Zukunft zu bieten.</div>
            </div>
            <div class="col col--8 world__image"><img src="../../src/img/icons/map.svg" alt=""></div>
          </div>
        </div>
      </div>
      <div class="col-container">
        <div class="col-inline inline--fact">
          <div class="col-middle">
            <div class="col col--4 fact__content">
              <div class="fact-number">67</div>
              <div class="fact-text">Orten</div>
            </div>
            <div class="col col--4 fact__content">
              <div class="fact-number">14</div>
              <div class="fact-text">Ländern</div>
            </div>
            <div class="col col--4 fact__content">
              <div class="fact-number">55</div>
              <div class="fact-text">Tsd. Menschen</div>
            </div>
            <div class="col col--4 fact__content">
              <div class="fact-number">97%</div>
              <div class="fact-text">der Spenden für Projekte</div>
            </div>
            <div class="col col--4 fact__content">
              <div class="fact-text">seit</div>
              <div class="fact-number">2009</div>
            </div>
            <div class="col col--4 fact__content fact__content--button"><a class="button" href="about_us.html">Mehr über uns<i class="icon icon--white icon--small">
                  <svg role="img">
                    <use xlink:href="../src/img/all.svg#icon-arrow-big"></use>
                  </svg></i></a></div>
          </div>
        </div>
      </div>
      <div class="col-container">
        <div class="col-inline inline--joinus">
          <div class="col-middle">
            <div class="flex-inline-container">
              <div class="col col--6">
                <div class="section-headline">Trage die Hoffnung mit!</div>
                <div class="content-header"><i class="icon">
                    <svg role="img">
                      <use xlink:href="../src/img/all.svg#donate"></use>
                    </svg></i>
                  <div class="content-headline">Spenden</div>
                </div>
                <div class="joinus-text">Target Hope e.V. finanziert seine Hilfsprojekte ausschließlich durch private Spenden. Für finanzielle Unterstützung für unsere Projekte sind wir sehr dankbar!</div>
                <div class="content-header"><i class="icon">
                    <svg role="img">
                      <use xlink:href="../src/img/all.svg#join"></use>
                    </svg></i>
                  <div class="content-headline">Werde Teil des Projekts</div>
                </div>
                <div class="joinus-text">Hier kommt einen Text über die Möglichkeit, sich einzubringen und z.B. auf einen Einsatz mitzukommen.</div><a class="button" href="join.html">Ich mache mit<i class="icon icon--white icon--small">
                    <svg role="img">
                      <use xlink:href="../src/img/all.svg#icon-arrow-big"></use>
                    </svg></i></a>
              </div>
              <div class="col col--6 image"><img src="../../src/img/mitmachen.jpg" alt=""></div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer"> 
        <div class="col-inline inline--footer">
          <div class="col-middle">
            <div class="footer__content"><a class="footer-logo" href="index.html"><i class="logo logo--white">
                  <svg role="img">
                    <use xlink:href="../src/img/all.svg#icon-logo"></use>
                  </svg></i></a>
              <div class="footer-text--right">
                <div class="footer-text"><?= $site->copyright()->html() ?></div><a class="footer-text" href="impressum.html">Impressum</a><a class="footer-text" href="datenschutz.html">Datenschutz</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="undefinedbootstrap/bootstrap.min.js?v=undefined"></script>
    <script src="undefinedslick.min.js?v=undefined"></script>
    <script src="undefinedjquery.masonry.min.js?v=undefined"></script>
    <script src="undefinedrellax.min.js?v=undefined"></script>
    <script src="undefinedworkfiles.js?v=undefined"></script>
  </body>
</html>