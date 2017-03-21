<?php
  $class_body = 'c-proposal';
  $contentInfoId = 2;
  include 'header.php';
?>

<div class="o-container  u-hide@print">
  <div class="o-grid">
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/1@tablet-fluid  o-1/1@laptop  o-1/1@desktop">
      <div class="c-cover">
        <div class="c-cover__background" style="background-image:url('./assets/img/12.jpg');"></div>
        <h1 class="c-cover__headline"><?php echo $contentInfo[$contentInfoId][1]; ?></h1>
        <h2 class="c-cover__subline u-hide"><?php echo $contentInfo[$contentInfoId][2]; ?></h2>
      </div>
    </div>
  </div>
</div>

<div class="o-container-small">
  <div class="o-grid">
    <div class="o-grid__item">

      <h2>Abstract</h2>
      <p>In dem Proposal werden experimentelle Explorationen innerhalb selbstkreierter, artifizieller Realitäten unternommen und anschließend analysiert.
Übergreifend soll beantwortet werden, welche Möglichkeiten zur adäquaten Visualisierung von WebVR Konzepten durch aktuelle Technologien bereits zur Verfügung
stehen. Dabei werden darauf basierend Explorationen in unterschiedliche Teilgebiete unternommen, beispielsweise die Kreation von Interaktion, Interfaces und
virtuellen Umgebungen wobei etwaige Komplikationen bereits adressiert werden. Einhergehend mit dem Zusammenführen der Teilergebnissen aus den Explorationen wird
eine aktive Wahrnehmung für die erarbeiteten Erkenntnisse angestrebt, um diese für zukünftige Kreationen von artifiziellen Realitäten nutzbar zu machen und
kreative WebVR Prozesse zu beschleunigen.</p>
      <h2>Inhalt</h2>
      <ol class="c-table-of-contents">
        <li>Abstract</li>
        <li>Subjektive Erfahrungen, Motivation und Zielsetzung</li>
        <li>Versuchsaufbau</li>
        <li>
          <div class="c-li-lead">
            <div class="c-li-lead__content">
              Exploration <strong>Aesthetics</strong>
            </div>
          </div>
          <ol>
            <li>High Res</li>
            <li>Flat Colors</li>
            <li>Vaporwave &amp; Retro</li>
          </ol>
        </li>
        <li>
          <div class="c-li-lead">
            <div class="c-li-lead__content">
              Exploration <strong>Visual Void</strong>
            </div>
          </div>
          <ol>
            <li>Ortsgebundene Anwendungen</li>
            <li>Visualisierung von Daten</li>
            <li>Naturgetreue Visualisierung</li>
            <li>Surreale VR</li>
          </ol>
        </li>
        <li>
          <div class="c-li-lead">
            <div class="c-li-lead__content">
              Exploration <strong>Digital Alchemy</strong><span class="u-hide"> - Kreuzungen digitaler Technologien im virtuellen Raum</span>
            </div>
          </div>
          <ol>
            <li>API Feeds</li>
            <li>Sprachsteuerung</li>
          </ol>
        </li>
        <li>
          <div class="c-li-lead">
            <div class="c-li-lead__content">
              Exploration <strong>Master and Servant</strong></span>
            </div>
          </div>
          <ol>
            <li>Controller</li>
            <li>Interfaces</li>
            <li>Bewegung und Kollision</li>
            <li>Avatarkreation</li>
            <li>Coop</li>
          </ol>
        </li>
        <li>Resumé</li>
        <li>Quellen</li>
        <li>Versicherung</li>
      </ol>

      <h2>Einleitung</h2>
      <p>Der zeitgeistliche Standard für WebVR Anwendungen befindet sich in einer unreifen, experimentellen Phase. Selbst die zugrundeliegende und bisweilen
prominentere Technologie der stationären Virtual Reality und dessen Anwendungen mit handelsüblichen Head Mounted Displays sind zwar massentauglich geworden,
aber dennoch kein Teil des allgemeinen Alltags.</p>

      <h3>Was ist der Grund dafür, dass Virtual Reality noch keinen Durchbruch erreicht hat?</h3>
      <p>Ähnlich wie im Smartphone/Tablet Sektor gibt es weder einen einheitlich anerkannten Software oder Hardware Standard. Jeder Anbieter entwickelt
unabhängige Anwendungen, welche auf spezifischer Hardware basiert, da sich die Hersteller auf keinen
einheitlichen Standard für Hardware Komponenten geeinigt haben. Das heisst es gibt verschiedene Controller, Sensoren, etc. Zwar existieren Projekte wie von
Razor/Sensics oderOpen VR von Valve, welche sich
dieser Problematik annehmen und zumindest teilweise eine Annäherung und Einigung auf bestimmte Best Practices herbeiführen und die Arbeit für End-Entwickler
vereinfachen.</p>

          <p>Dennoch muss man sich in der Regel zum jetzigen Zeitpunkt von vorne an entscheiden welche Hardware man nutzt und auf welcher Software Plattform
man
eine Anwendung entwickeln möchte und es tauchen tendenziell immer mehr VR Produkte mit jeweils eigenständiger Hardware und Plattformen auf.</p>

        <h3>Das Ziel dieses Proposals</h3>
      <p>
        Durch den experimentellen Charakter von WebVR ist das Anliegen für dieses Proposal die Erforschung und Ausreizung der Möglichkeiten jener Technologie.
Es geht dabei nicht darum ein konkretes, ultimatives Konzept zu definieren, sondern lediglich Rahmenbedingungen abzustecken. Verschiedene Ansätze werden in
kleineren Experiment Reihen getestet. Jede dieser Überpunkte enthält Experimente welche sich in ihrer Komplexität steigern und aufbauend immer mehr Komponenten
hinzufügt. So startet jeder Themenpunkt mit einfachen Versuchen und schildert den Prozess von rudimentären Gehversuchen bis hin zu komplexeren Strukturen und
Aufbauten.</p>


      <table style="width: 100%;">
        <caption class="o-h5">
          HMD Brillen Vergleich
        </caption>
        <thead>
          <tr>
            <th><abbr title="Name der Entität inklusive Versionierung. Bei Cardboard unterscheidet sich dies in V1 (Magnet basierender Interaktionsbutton) und
V2 (Touch basierender Interaktionsbutton)">Device</abbr></th>
            <th><abbr title="Zum Zeitpunkt des Erwerbs">Preis</abbr></th>
            <th><abbr title="Ohne Smartphone">Gewicht</abbr></th>
            <th><abbr title="Kompakt ist die kleinstmögliche Form wohingegen große Brillen einen weiteren Abstand zum Device bieten. Daraus resultiert häufig
auch eine bessere Schärfe, jedoch auch ein Rand um das jeweilige Smartphone Display.">Formfaktor</abbr></th>
            <th><abbr title="Field of View, z.d. Sichtfeld. Wieviel Grad vom Smartphone Display durch die Brille in das starre Sichtfeld übertragen
werden">FOV</abbr></th>
            <th><abbr title="Hat die Brille einen größeren Abstand zwischen Linsen und Smartphone Display entsteht ein sichtbarer Rand, welcher die Immersion
beeinflusst.">Rand</abbr></th>
            <th><abbr title="Die Schärfe ist wichtig für die Immserion in die jeweilige Anwendung, desto schärfer die UI Elemente sind umso
besser.">Schärfe</abbr></th>
            <th><abbr title="Speziell für die längere Anwendung ist dies ein wichtiger Faktor. Die Bewertung wird bestimmt durch Befestigung am Kopf und das
verarbeitete Material.">Komfort</abbr></th>
            <th><abbr title="Interaktionsmöglichkeit am jeweiligen Device, welches vorallem für rudimentärere Anwendung von Relevanz ist. Liegt kein Controller
vor, so hat der Anwender keine Möglichkeit Einfluss auf die virtuelle Realität zu nehmen.">Button?</abbr></th>
            <th><abbr title="degrees of freedom">DOF</abbr></th>
            <th><abbr title="Besondere oder einzigartige Features">Extras</abbr></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Google Daydream</td>
            <td>70€</td>
            <td>219g</td>
            <td>Kompakt</td>
            <td>90° <!-- gear vr 100° --></td>
            <td>Ja</td>
            <td>+</td>
            <td>+</td>
            <td>Nein</td>
            <td>3</td>
            <td>Controller,<br/> App,<br/> Nativer Support</td>
          </tr>
          <tr>
            <td>Magic Cardboard</td>
            <td>24€</td>
            <td>313g</td>
            <td>Kompakt</td>
            <td>102°</td>
            <td>Nein</td>
            <td>++</td>
            <td>+</td>
            <td>Magnet</td>
            <td>0,(3)</td>
            <td>Justierbare<br/> Linsen (Weite),<br/> QR Code,<br/> Halterung</td>
          </tr>
          <tr>
            <td>Maxfield Cardboard V2</td>
            <td>6,90€</td>
            <td>109g</td>
            <td>Kompakt</td>
            <td>80°</td>
            <td>Nein</td>
            <td>o</td>
            <td>-</td>
            <td>Touch</td>
            <td>0,(3)</td>
            <td>-</td>
          </tr>
          <tr>
            <td>AUKEY VISION</td>
            <td>20,99€</td>
            <td>384g</td>
            <td>Groß</td>
            <td>90°</td>
            <td>Nein</td>
            <td>++</td>
            <td>+</td>
            <td>-</td>
            <td>0,(3)</td>
            <td>Freie Kamera,<br/> Justierbare<br/> Linsen (Tiefe)</td>
          </tr>
        </tbody>
      </table>


      <!--<th>Halterung</th> nachher im Text-->
      <!--<th>Besonderheit</th> Nachher im Text-->
      <!-- Text <th>Abschirmung</th>-->
      <!--<th>Immersion <br/> Level</th> Unwichtig, ergibt sich durch DOF-->
      <!-- Daydream Controller ist pflicht -->
      <!-- Sichtfeld noch was zu sagen -->


      <table style="width: 100%;">
        <caption class="o-h5">
          Offizielle Google Daydream Smartphones (17.03.2017)
        </caption>
        <thead>
          <tr>
            <th>Smartphone</abbr></th>
            <th><abbr title="In Euro">Preis</abbr></th>
            <th><abbr title="In Zoll">Display</abbr></th>
            <th><abbr title="In Pixel">Auflösung</abbr></th>
            <th><abbr title="In Gigabyte">RAM</abbr></th>
            <th><abbr title="In Gigaherz">CPU Kapazität</abbr></th>
            <th><abbr title="In Milliamper pro Stunde">Akku</abbr></th>
            <th><abbr title="">Megapixel</abbr></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ZTE Axon 7</td>
            <td>~415<br/>(360)</td>
            <td>5.5</td>
            <td>1440 x 2560</td>
            <td>6</td>
            <td>4 x 2.15</td>
            <td>3140</td>
            <td>20</td>
          </tr>
          <tr>
            <td>Google Pixel</td>
            <td>759</td>
            <td>5</td>
            <td>1080 x 1920</td>
            <td>4</td>
            <td>4 x 2.4</td>
            <td>2770</td>
            <td>12.3</td>
          </tr>
          <tr>
            <td>Google Pixel XL</td>
            <td>899</td>
            <td>5.5</td>
            <td>1440 x 2560</td>
            <td>4</td>
            <td>4 x 2.4</td>
            <td>3450</td>
            <td>12.3</td>
          </tr>
          <tr>
            <td>Motorola Moto Z</td>
            <td>449</td>
            <td>5.5</td>
            <td>1440 x 2560</td>
            <td>4</td>
            <td>4 x 2.2</td>
            <td>2600</td>
            <td>13</td>
          </tr>
          <tr>
            <td>Motorola Moto Z Droid Force</td>
            <td>699</td>
            <td>5.5</td>
            <td>1440 x 2560</td>
            <td>4</td>
            <td>4 x 2.2</td>
            <td>3500</td>
            <td>21</td>
          </tr>
          <tr>
            <td><strong>Bald verfügbar</strong></td>
            <td colspan="7"></td>
          </tr>
          <tr>
            <td>ASUS ZenFone AR</td>
            <td>?</td>
            <td>5.7</td>
            <td>1440 x 2560</td>
            <td>8</td>
            <td>4 x 2.35</td>
            <td>3300</td>
            <td>23</td>
          </tr>
          <tr>
            <td>Huawei Mate 9 Pro</td>
            <td>~730</td>
            <td>5.5</td>
            <td>1440 x 2560</td>
            <td>6</td>
            <td>8 x 2.4</td>
            <td>4000</td>
            <td>20</td>
          </tr>
        </tbody>
      </table>


      <h3>Struktur der Versuchsreihen</h3>
      <p>Jeder Versuchsaufbau bedient sich grundlegend der selben Strukur...</p>

      <h3>Inhalt der Experiment Reihen</h3>
      <p>Die erste Experiment Reihe “Technologische Alchemie” setzt sich mit der Kombination fortschrittlicher Web und VR Technologien auseinander. Dabei
werden
anfänglich z.B. Themen wie die Sensorik von Smartphones behandelt, welches Sensoren wie Barometer, Beschleunigungssensor, Bluetooth, elektromagnetischer
Sensoren, Fingerabdrucksensoren, GPS, Gyroskop, Helligkeitssensoren, Magnetometer, Temperatursensoren, WLAN, Kamera, Touchscreen, Thermometer, Touchscreen,
Stimmerkennung, chemisches Spektrometer, Elektrokardiogramm, Terahertz-Scanner, untersucht und überprüft welche dieser Sensoren sich für etwaige WebVR
Anwendungen verwenden lassen. Diese Versuche können folgend in komplexe Themenbereiche wie Sprachsteuerung resultieren und diese für die Anwendung nutzbar
gemacht werden. Der
Themenbereich umfasst noch weitere Technologien, welche sich mit der WebVR Thematik kombinieren lassen.</p>
      <p class="o-p--tie">Die zweite Experiment Reihe beschäftigt sich mit der Ästhetik von virtuellen Web Realitäten. Für die Ästhetik spielen zwei Faktoren
eine besondere Rolle. Zum einen der visuelle Anspruch, welcher die Atmosphäre der Anwendung adäquat widerspiegeln soll und zum anderen die Performance der
Anwendung, welcher speziell auf mobilen Geräten aufgrund der Geräte Performance einen kritischen Faktor darstellt.</p>
      <p class="o-p--tie">Mit der dritten Experiment Reihe “Visual Void” wird die Verbindung der physischen Realität im Zusammenhang mit WebVR untersucht. Der
Fokus liegt dabei auf dem Transfer der Sinne in den digitalen Raum. Dabei geht es vorallem um die Vorteile, welche der digitale Raum mit sich bringt und
weniger
um die körperliche Augmentation. Es soll erforscht werden ob die virtual User Experience den realen Kontext erweitern kann, oder ihn tendenziell eher
einschränkt. Anders als bei Augmented Reality wird die physische Welt zwar berücksichtigt, der Nutzer taucht vom visuellen Standpunkt betrachtet komplett in
die
artifizielle Welt ein. Speziell die Veranschaulichung von physikalischen Gesetzlichkeiten, naturgetreuen Proportionen, Daten, Formen, liegen im Fokus dieser
Versuchsreihe.</p>
      <p class="o-p--tie">In der vierten und letzten Experiment Reihe "Master &amp; Servant" geht es um die Erforschung der Avatar Thematik. Vorallem die
praktische Auseinandersetzung mit Themen wie Immersion, Embodiment, Interaktion und Interfaces, spielt einen entscheidene Rolle.</p>

    </div>
  </div>
</div>

<div class="o-container-media">
  <div class="o-grid">
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/1@tablet-fluid  o-1/1@laptop  o-1/1@desktop">

      <div class="c-section-stage">
        <img class="c-section-stage__background  c-section-stage__background--image" src="./assets/img/16.jpg" alt="2"></iframe>
        <div class="c-section-stage__content">
          <span class="c-section-stage__id">01</span>
          <h1 class="c-section-stage__headline">Aesthetics</h1>
          <h3 class="c-section-stage__subline">Das Design von artifiziellen Realitäten im Kontext von WebVR</h3>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="o-container-small">
  <div class="o-grid">
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/1@tablet-fluid  o-1/1@laptop  o-1/1@desktop">

      <h3>Schlüsselbegriffe</h3>
      <p>
        Tron 1972<br/>
        2001 odyssee im weltraum (Non Finit Style / Vergleich zum heutigen Film ziehen)<br/>
        The Division<br/>
      </p>

      <h3>Leitfrage(n)</h3>
      <p>Welche Ästhetik eignet sich für die Darstellung von WebVR Umgebungen?</p>
      <ul>
        <li>Technisch bedingt</li>
        <li>Ästhetisch bedingt (Tron, Vaporwave style)</li>
        <li>Umgebung herstellen (ggf. hier auch Interaktionsboxen unterbringen, um verschiedene Styles zu laden)</li>
        <li>Kollision</li>
      </ul>

    </div>
  </div>
</div>

<div class="o-container-media">
  <div class="o-grid">
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/1@tablet-fluid  o-1/1@laptop  o-1/1@desktop">

      <div class="c-section-stage">
        <img class="c-section-stage__background  c-section-stage__background--image" src="./assets/img/14.jpg" alt="2"></iframe>
        <div class="c-section-stage__content">
          <span class="c-section-stage__id">02</span>
          <h1 class="c-section-stage__headline">Visual Void</h1>
          <h3 class="c-section-stage__subline">Digitale Augmentation und Manipulation von Gesetzlichkeiten der physischen Welt</h3>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="o-container-small">
  <div class="o-grid">
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/1@tablet-fluid  o-1/1@laptop  o-1/1@desktop">

      <h3>Schlüsselbegriffe</h3>
      <p>Experience &amp; Dimension</p>

      <h3>Leitfrage(n)</h3>
      <p>Kann WebVR die User Experience für einen realen Kontext verbessern?</p>
      <ul>
        <li>Livetracking innerhalb eines Museums mit Zusatzinformationen</li>
        <li>Unbegrenzter Raum (Vorteile der virtuellen Welt usw.)</li>
        <li>Ansprechende Visualisierung von Daten</li>
        <li>Naturgetreue Visualisierung von Proportionen (Gebäudegrößen z.B.)</li>
        <li>Visualisierung von Mathematik z.B. in Klassenzimmer, um Leuten solche Themenfelder anschaulich zu ermöglichen</li>
        <li>Realismus/Surrealismus (Experimente mit Portal ähnlichen Erfahrungen)</li>
      </ul>

    </div>
  </div>
</div>

<div class="o-container-media">
  <div class="o-grid">
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/1@tablet-fluid  o-1/1@laptop  o-1/1@desktop">

      <div class="c-section-stage">
        <iframe class="c-section-stage__background" src="https://cables.gl/view/586d92759d21e082335abf60"></iframe>
        <div class="c-section-stage__content">
          <span class="c-section-stage__id">03</span>
          <h1 class="c-section-stage__headline">Digital Alchemy</h1>
          <h3 class="c-section-stage__subline">Die Symbiose von digitalen Technologien im virtuellen Raum</h3>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="o-container-small">
  <div class="o-grid">
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/1@tablet-fluid  o-1/1@laptop  o-1/1@desktop">

      <h3>Schlüsselbegriffe</h3>
      <p>hybrid, outbreed</p>

      <h3>Leitfrage(n)</h3>
      <p>Welche Technologien lassen sich mit WebVR kombinieren bzw. welche Vorteile ergeben sich durch die WebVR Nutzung?</p>
      <ul>
        <li>Livedaten (Web usw.)</li>
        <li>(Vorteile von VR anteasern)</li>
        <li>Spracheingabe (Ok Jarvis!)</li>
        <li>Was ist evtl. nicht so geeignet? (Reguläre VR Controller, Leap Motion usw.), aber hier auch weiterdenken und ggf. anreize geben physische
Controller
an bestimmten Orten bereitzustellen womit der Nutzer dann nach Login kommunizieren kann</li>
      </ul>

    </div>
  </div>
</div>

<div class="o-container-media">
  <div class="o-grid">
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/1@tablet-fluid  o-1/1@laptop  o-1/1@desktop">

      <div class="c-section-stage">
        <img class="c-section-stage__background  c-section-stage__background--image" src="./assets/img/18.jpg" alt="2"></iframe>
        <div class="c-section-stage__content">
          <span class="c-section-stage__id">04</span>
          <h1 class="c-section-stage__headline">Master &amp; Servant</h1>
          <h3 class="c-section-stage__subline">Die Darstellung, Interaktion und Immersion von Avataren</h3>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="o-container-small">
  <div class="o-grid">
    <div class="o-grid__item">

      <h3>Schlüsselbegriffe</h3>
      <p>Materialize, Embody, Control, Interact, Symbolize / You &amp; Me / Interactive Embodiment / Digitial Embodiment / Umwelt (environment), Sinne,
Wahrnehmung (perception)</p>

      <h3>Leitfrage(n)</h3>
      <p>Wie kann man im Kontext von WebVR Anwendungen effiziente, digitale Zeichen kreieren?</p>

      <ul>
        <li>Avatarkreation mit einfachen Formen</li>
        <li><a href="https://www.youtube.com/watch?v=VcyCWEsbsPU" target="tab">Tron Bit Szene</a></li>
      </ul>

      <p>Welche Features steigern die Immersion in WebVR?</p>
      <ul>
        <li>Coop usw.</li>
        <li>Playercollision / Playercontrol (WASD)</li>
        <li>Controller</li>
        <li>Interfaces (Google Interface Zeug)</li>
      </ul>


    </div>
  </div>
</div>

<div class="o-container-small">
  <div class="o-grid">
    <div class="o-grid__item">

      <div class="c-sources">

        <h2>Quellen</h2>
        <p>Alle Web Adressen wurden am 18. März 2017 final überprüft und abgerufen.</p>

        <h3>Literatur</h3>
        <div class="c-sources__literature  c-columns  c-columns--literature">
          <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          </div>
        </div>

        <h3>Wissenschaftliche Abhandlungen und empirische Dokumente</h3>
        <div class="c-sources__essay  c-columns  c-columns--essay">
          <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          </div>
        </div>

        <h3>Artikel und sonstige Arbeiten</h3>
        <div class="c-sources__article  c-columns  c-columns--article">
          <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          </div>
        </div>

        <h3>Interviews</h3>
        <div class="c-sources__interview  c-columns  c-columns--interview">
          <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          </div>
        </div>

        <h3>Video- und Filmografie</h3>
        <p>Eine Übersicht aller im Text vorkommenden Videos und Film Bezüge</p>
        <div class="c-sources__video  c-columns  c-columns--video">
          <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          </div>
        </div>

        <h3>Wikipedia und Lexikon</h3>
        <div class="c-sources__wiki  c-columns  c-columns--wiki">
          <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          </div>
        </div>

        <h2>Ressourcen</h2>
        <h3>Bilder</h3>
        <div class="c-sources__image  c-columns  c-columns--image">
          <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          </div>
        </div>

        <span class="u-pagebreak@print"></span>

        <div class="c-tools">
          <h3>Programme &amp; Anwendungen</h3>
          <div class="c-tool">
            <div class="c-tool__title">Atom</div>
            <div class="c-tool__org">GitHub</div>
            <div class="c-tool__desc">Editor für jegliche Programmierung.</div>
            <a class="c-tool__link" href="https://atom.io/" target="tab">https://atom.io/</a>
          </div>
          <div class="c-tool">
            <div class="c-tool__title">Chrome</div>
            <div class="c-tool__org">Google</div>
            <div class="c-tool__desc">Die Entwicklung von VR und die Darstellung der Bachelorarbeit im Webformat sind nur im Chrome getestet.</div>
            <a class="c-tool__link" href="https://www.google.de/chrome/browser/desktop/" target="tab">https://www.google.de/chrome/browser/desktop/</a>
          </div>
          <div class="c-tool">
            <div class="c-tool__title">Prince 11</div>
            <div class="c-tool__desc">Für den adäquate PDF Erstellung durch die Ergänzung fehlender bzw. experimenteller CSS Eigenschaften.</div>
            <a class="c-tool__link" href="https://www.princexml.com/" target="tab">https://www.princexml.com/</a>
          </div>
        </div>

        <div class="c-fonts">
          <h3>Schriften</h3>
          <ul>
            <li>Serif: Freight Text</li>
            <li>SansSerif: Graphik</li>
            <li>MonoSpace: Ocra</li>
            <li>Icons: FontAwesome</li>
          </ul>
        </div>

        <h3>Print</h3>
        <p>Um einen optimalen, ökologischen Print gewährleisten zu können empfehle ich XYZ Papier der Marke XYZ in 120 Gramm Ausführung, und YXZ Papier der
    Marke YXZ in 260 Gramm Ausführung für den Umschlag. Die Bindung sollte als Klebebindung erfolgen. Das optimale Endformat beträgt 180mm * 235mm. Gedruckt
und
gebunden
    bei Mediadruck Köln, 2017.</p>

        <h2>Legende</h2>
        <p>Die Arbeit sollte im Optimalfall auf einem digitalen Medium mit installiertem Chrome Browser gesichtet werden.</p>

        <div class="c-legend-ref">
          <h4>Verweise</h4>
          <p>Die Verweise sind nach Intensität gestaffelt:</p>
          <ol>
            <li><strong>Vgl</strong> Vergleiche sind Quellenverweise zu jeweiligen Textpassagen. Diese sind im wissenschaftlichen Kontext zu begreifen und
weisen präzise Seitenzahlen sowie eine faktisch klare Wiedergabe des jeweiligen Inhalts.</li>
            <li><strong>Ref</strong> Referenzen sind den Vergleichen ähnlich, jedoch weniger präzise und erfordern meistens eine Auseinandersetzung mit der
jeweiligen Quelle.</li>
            <li><strong>Bsp</strong> Beispiele erweitern das Verständnis indem die jeweilige Botschaft bzw. Sinn des Kontextes besser transportiert wird.</li>
          </ul>
        </div>

        <h2>Danksagungen</h2>
        <p>Hiermit möchte ich mich bei folgenden Personen bedanken:</p>
        <ul>
          <li><strong>Sarah Karvouniaris</strong>, für die erste grammatikalische Softkorrektur und die mentale Unterstützung.</li>
        </ul>
      </div>

    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
