<?php
  $class_body = 'c-proposal';
  include 'header.php';
?>

<div class="o-container  u-hide@print">
  <div class="o-grid">
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/1@tablet-fluid  o-1/1@laptop  o-1/1@desktop">
      <div class="c-cover">
        <div class="c-cover__background" style="background-image:url('./assets/img/12.jpg');"></div>
        <h1 class="c-cover__headline"><?php echo $proposals[1][1]; ?></h1>
        <h2 class="c-cover__subline u-hide"><?php echo $proposals[1][2]; ?></h2>
      </div>
    </div>
  </div>
</div>

<div class="o-container-small">
  <div class="o-grid">
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/2@tablet-fluid  o-1/2@laptop  o-1/2@desktop">

      <h2 class="u-red">Aktueller Stand</h2>
      <ul class="u-red">
        <li>Basis- Struktur, Ablauf und Zeitplan hergestellt</li>
        <li>Literatur fehlt noch etwas, aber Basisliteratur vorhanden, gelesen &amp; zusammengefasst</li>
        <li>Grobe Notizen übertragen</li>
        <li>Grundlayout erstellt</li>
        <li>Referenzsystem angelegt</li>
        <li>Start der Arbeit 03. Feb 2017</li>
      </ul>

      <h2>Abstract</h2>
      <p>In dem Proposal werden experimentelle Explorationen innerhalb selbstkreierter, artifizieller Realitäten unternommen und anschließend analysiert.
Übergreifend soll beantwortet werden, welche Möglichkeiten zur adäquaten Visualisierung von WebVR Konzepten durch aktuelle Technologien bereits zur Verfügung
stehen. Weitergehend wird eruiert welche ästhetische(n) Stilrichtung(en) sich für den WebVR gegebenen Kontext am besten eignen. Anschließend werden darauf
basierend Explorationen in unterschiedliche Teilgebiete unternommen, beispielsweise die Kreation von Avataren, Interfaces und virtuellen Umgebungen und etwaigen
Komplikationen bereits adressiert. Um eine ergebnisorientierte Herangehensweise zu gewährleisten beschäftigt sich jede Exploration primär mit einer spezifisch
gewählten Schlüsselfrage, welche sich angewandt erforschen und im Optimalfall zufriedenstellend beantworten lässt. Dadurch ergibt sich eine Wechselwirkung aus
Exploration und Fragestellung, in der beide Komponenten als Ausgangspunkt gesetzt werden können. Das Zusammenführen von unterschiedlichen Themenfeldern,
Stilrichtungen und Technologien ist in diesem Kontext ein entscheidender Faktor. Einhergehend mit dem Zusammenführen der Teilergebnissen aus den Explorationen
wird eine aktive Wahrnehmung für die erarbeiteten Erkenntnisse angestrebt, um diese für zukünftige Kreationen von artifiziellen Realitäten nutzbar zu machen und
kreative WebVR Prozesse zu beschleunigen.</p>

      <h2>Inhalt</h2>
      <ol>
        <li>Abstract</li>
        <li>Einleitung</li>
        <li>Versuchsaufbau</li>
        <li>
          <div class="c-li-lead">
            <div class="c-li-lead__content">
              Experiment Reihe <strong>Aesthetics</strong>
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
              Experiment Reihe <strong>Visual Void</strong>
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
              Experiment Reihe <strong>Digital Alchemy</strong><span class="u-hide"> - Kreuzungen digitaler Technologien im virtuellen Raum</span>
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
              Experiment Reihe <strong>Master and Servant</strong></span>
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

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <a class="c-ref" href="#">
            <span class="c-ref__type">Link</span>
            <sup class="c-ref__id">001</sup>
          </a>
          <a class="c-ref-desc" href="http://thenextweb.com/opinion/2016/12/28/2017-vr-breakthrough/">The Next Web - 2017 VR Breakthrough</a>
        </div>
      </div>

      <h3>Was ist der Grund dafür, dass Virtual Reality noch keinen Durchbruch erreicht hat?</h3>
      <p>Ähnlich wie im Smartphone/Tablet Sektor gibt es weder einen einheitlich anerkannten Software

      <a class="c-ref" href="#">
        <span class="c-ref__type">Vgl</span>
        <sup class="c-ref__id">234</sup>
      </a>
      <a class="c-ref-desc" href="http://www.osvr.org/what-is-osvr.html">
        Open Source VR, What is OSVR?
      </a>

      .</p>

      <p>oder Hardware Standard. Jeder Anbieter entwickelt unabhängige Anwendungen, welche auf spezifischer Hardware basiert, da sich die Hersteller auf keinen
einheitlichen Standard für Hardware Komponenten geeinigt haben. Das heisst es gibt verschiedene Controller, Sensoren, etc. Zwar existieren Projekte wie <a
href="http://www.osvr.org/">Open Source VR</a> von Razor/Sensics oder <a href="https://github.com/ValveSoftware/openvr">Open VR</a> von Valve, welche sich
dieser Problematik annehmen und zumindest teilweise eine Annäherung und Einigung auf bestimmte Best Practices herbeiführen und die Arbeit für End-Entwickler
vereinfachen.</p>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">

          <a class="c-ref" href="#">
            <span class="c-ref__type">Link</span>
            <sup class="c-ref__id">001</sup>
          </a>
          <a class="c-ref-desc" href="http://www.osvr.org/what-is-osvr.html">Open Source VR, What is OSVR?</a>

        </div>
        <div class="c-notes-marginal__item">

          <a class="c-ref" href="#">
            <span class="c-ref__type">Vgl</span>
            <sup class="c-ref__id">002</sup>
            <span class="c-ref__desc">
              <span class="c-ref__strong">Biocca</span>, 2016a, S. 234
            </span>
          </a>

        </div>
        <div class="c-notes-marginal__item">

          <a class="c-ref" href="#">
            <span class="c-ref__type">Bild</span>
            <sup class="c-ref__id">089</sup>
            <span class="c-ref__desc">Mona Lisa</span>
          </a>

        </div>
        <div class="c-notes-marginal__item">

          <a class="c-ref" href="#">
            <span class="c-ref__type">Bsp</span>
            <sup class="c-ref__id">014</sup>
          </a>
          <a href="#" class="c-ref-desc">111111</a>,
          <a href="#" class="c-ref-desc">222222</a>,
          <a href="#" class="c-ref-desc">333333</a>,
          usw.

        </div>
      </div>

      <p>Dennoch muss man sich in der Regel zum jetzigen Zeitpunkt von vorne an entscheiden welche Hardware man nutzt und auf welcher Software Plattform man
eine Anwendung entwickeln möchte und es tauchen tendenziell immer mehr VR Produkte mit jeweils eigenständiger Hardware und Plattformen auf.</p>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <a class="c-ref" href="#">
            <span class="c-ref__type">Bsp</span>
            <sup class="c-ref__id">001</sup>
          </a>
          <a class="c-ref-desc" href="http://www.mi.com/en/mivr1c/" >MiVR</a>,
          <a class="c-ref-desc" href="https://vr.google.com/daydream/">Google Daydream</a>,
          <a class="c-ref-desc" href="https://www.playstation.com/de-de/explore/playstation-vr/">PlayStation VR</a>,
          usw.
        </div>
      </div>

      <h3>Das Ziel dieses Proposals</h3>
      <p>
        Durch den experimentellen Charakter von WebVR ist das Anliegen für dieses Proposal die Erforschung und Ausreizung der Möglichkeiten jener Technologie.
Es geht dabei nicht darum ein konkretes, ultimatives Konzept zu definieren, sondern lediglich Rahmenbedingungen abzustecken. Verschiedene Ansätze werden in
kleineren Experiment Reihen getestet. Jede dieser Überpunkte enthält Experimente welche sich in ihrer Komplexität steigern und aufbauend immer mehr Komponenten
hinzufügt. So startet jeder Themenpunkt mit einfachen Versuchen und schildert den Prozess von rudimentären Gehversuchen bis hin zu komplexeren Strukturen und
Aufbauten.
        <span class="c-notes-side-hook">
          <span class="c-notes-side">
            <span class="c-notes-side__icon">
              <span class="c-icon-asterisk"></span>
            </span>
            <span class="c-note-side">
              <span class="c-note-side__content">
                <strong class="c-note-side__headline">Sidenote</strong>
                <span class="c-note-side__text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
dolore magna aliquyam erat, sed diam voluptua.</span>
              </span>
            </span>
            <a class="c-note-side" href="#">
              <span class="c-note-side__content">
                <strong class="c-note-side__headline">Sidenote</strong><br/>
                <span class="c-note-side__text">"Warum die Literatur von 1986, heutzutage immernoch relevant ist"
                  <span class="c-note-side__ref">auf Seite 34</span>
                </span>
              </span>
            </a>
          </span>
        </span>
      </p>

      <h3>Struktur der Versuchsreihen</h3>
      <p>Jeder Versuchsaufbau bedient sich grundlegend der selben Strukur...</p>

      <h3>Inhalt der Experiment Reihen</h3>
      <p>Die erste Experiment Reihe “Technologische Alchemie” setzt sich mit der Kombination fortschrittlicher Web und VR Technologien auseinander. Dabei werden
anfänglich z.B. Themen wie die Sensorik von Smartphones behandelt, welches Sensoren wie Barometer, Beschleunigungssensor, Bluetooth, elektromagnetischer
Sensoren, Fingerabdrucksensoren, GPS, Gyroskop, Helligkeitssensoren, Magnetometer, Temperatursensoren, WLAN, Kamera, Touchscreen, Thermometer, Touchscreen,
Stimmerkennung, chemisches Spektrometer, Elektrokardiogramm, Terahertz-Scanner, untersucht und überprüft welche dieser Sensoren sich für etwaige WebVR
Anwendungen verwenden lassen

          <a class="c-ref" href="#">
            <span class="c-ref__type">Link</span>
            <sup class="c-ref__id">001</sup>
          </a>
          <a class="c-ref-desc" href="http://www.zeit.de/digital/mobil/2011-05/smartphone-sensoren-iphone-samsung/" >Zeit.de, Sensorik von Smartphones</a>

        . Diese Versuche können folgend in komplexe Themenbereiche wie Sprachsteuerung resultieren und diese für die Anwendung nutzbar gemacht werden. Der
Themenbereich umfasst noch weitere Technologien, welche sich mit der WebVR Thematik kombinieren lassen.</p>
      <p class="o-p--tie">Die zweite Experiment Reihe beschäftigt sich mit der Ästhetik von virtuellen Web Realitäten. Für die Ästhetik spielen zwei Faktoren
eine besondere Rolle. Zum einen der visuelle Anspruch, welcher die Atmosphäre der Anwendung adäquat widerspiegeln soll und zum anderen die Performance der
Anwendung, welcher speziell auf mobilen Geräten aufgrund der Geräte Performance einen kritischen Faktor darstellt.</p>
      <p class="o-p--tie">Mit der dritten Experiment Reihe “Visual Void” wird die Verbindung der physischen Realität im Zusammenhang mit WebVR untersucht. Der
Fokus liegt dabei auf dem Transfer der Sinne in den digitalen Raum. Dabei geht es vorallem um die Vorteile, welche der digitale Raum mit sich bringt und weniger
um die körperliche Augmentation. Es soll erforscht werden ob die virtual User Experience den realen Kontext erweitern kann, oder ihn tendenziell eher
einschränkt. Anders als bei Augmented Reality wird die physische Welt zwar berücksichtigt, der Nutzer taucht vom visuellen Standpunkt betrachtet komplett in die
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
        <li>Was ist evtl. nicht so geeignet? (Reguläre VR Controller, Leap Motion usw.), aber hier auch weiterdenken und ggf. anreize geben physische Controller
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
    <div class="o-grid__item  o-1/1@mobile  o-1/1@tablet  o-1/1@tablet-fluid  o-1/1@laptop  o-1/1@desktop">

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

      <div class="c-sources">
        <h2>Quellen</h2>
        <p>Alle Web Adressen wurden am 18. März 2017 final überprüft und abgerufen.</p>

        <h3>Web</h3>
        <h4>Wissenschaftliche Abhandlungen und empirische Dokumente</h4>
        <p>
          Nachname, Vorname, Jahr, ID<br/>
          Titel<br/>
          Publisher<br/>
          Link</br>
          <span class="c-icon  c-icon-long-arrow-up"></span>
          <sup><a href="#">002</a>,</sup>
          <sup><a href="#">003</a>,</sup>
          <sup><a href="#">004</a></sup>
        </p>

        <h4>Artikel</h4>
        <p>
          Nachname, Vorname, Jahr, ID<br/>
          Titel<br/>
          Publisher<br/>
          Link</br>
        </p>

        <h3>Literatur</h3>
        <p>
          Nachname, Vorname, Jahr, ID<br/>
          Titel<br/>
          Publisher<br/>
          Link</br>
        </p>


        <h2>Filmografie</h2>
        <p>Eine Übersicht aller im Text vorkommenden Film Bezüge</p>
        <ul>
          <li>2001: Sinnlos im Weltraum</li>
          <li>Matrix</li>
          <li>Dark City</li>
        </ul>

        <h2>Ressourcen</h2>
        <h3>Bilder</h3>
        <p>
          Image ID, Beschreibung,<br/>
          Ursprung (Url oder Literaturnachweis[Publisher])
        </p>
        <p>
          <span>IMG</span> <sup>1</sup> Kapitel 2<br/>
          Buchcover Jerry A. Fodor, 1983, Modularity Of Mind<br/>
          Cambridge, MA: MIT Press
        </p>
        <p>
          Kapitel 3: Oculus Rift<br/>
          <a href="http://www.virtual-reality-systems.de/wp-content/uploads/Oculus-Rift-2.jpg"></a>
        </p>

        <h3>Programme &amp; Anwendungen</h3>
        <p>
          Name<br/>
          Anbieter</br>
          Beschreibung</br>
          Webseite
        </p>
        <p>
          Atom<br/>
          GitHub</br>
          In diesem Node.js basierenden Editor wurden sowohl Code als auch die textliche Leistung der Arbeiten verfasst.</br>
          <a href="https://atom.io/">https://atom.io/</a>
        </p>
        <p>
          Chrome Experimental Build<br/>
          Google</br>
          Dieser Build von Chrome ist nötig, um die teilweise experimentellen Drafts der Web VR Technologie darstellen zu können.</br>
          <a href="https://www.google.de/chrome/browser/desktop/">https://www.google.de/chrome/browser/desktop/</a>
        </p>

        <h3>Schriften</h3>
        <ul>
          <li>Serif: Medium</li>
          <li>SansSerif: Graphik</li>
          <li>MonoSpace: Ocra</li>
          <li>Icons: FontAwesome</li>
        </ul>

        <h3>Print</h3>
        <p>Um einen optimalen, ökologischen Print gewährleisten zu können empfehle ich XYZ Papier der Marke XYZ in 120 Gramm Ausführung, und YXZ Papier der
Marke YXZ in 260 Gramm Ausführung für den Umschlag. Die Bindung sollte als Klebebindung erfolgen. Das optimale Endformat beträgt XY * YZ. Gedruckt und gebunden
2017 bei Mediadruck Köln.</p>

        <h2>Legende</h2>
        <p>Diese Arbeit ist primär die den digitalen Gebrauch ausgelegt. In dieser Legende werden die Elemente der Arbeit erläutert.</p>

        <h4>Verweise</h4>
        <ul>
          <li>Link: Hyperlinks sind in der Regel Verweise bzw. Informationen zu angrenzenden Themengebieten.</li>
          <li>Vgl: Vergleiche sind die Quellenverweise zu den jeweiligen Textpassagen.</li>
          <li>Bild: Stellt den Quellenverweis zu dem jeweiligen Bildmaterial dar.</li>
          <li>Bsp: Beispiele erweitern das Verständnis zum jeweiligen Kontext.</li>
        </ul>
      </div>

      <br/><br/>



      <!--
            <br/>
            <br/>
            <hr/>
            <br/>
            <br/>


            <p data-height="502" data-theme-id="light" data-slug-hash="QGxpaB" data-default-tab="result" data-user="intenser" data-embed-version="2"
      data-pen-title="Hello World — A-Frame" class="codepen">See the Pen <a href="http://codepen.io/intenser/pen/QGxpaB/">Hello World — A-Frame</a> by David Hoffmann
      (<a href="http://codepen.io/intenser">@intenser</a>) on <a href="http://codepen.io">CodePen</a>.</p>
            <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>



                  <blockquote class="u-hide">
                    <p>“Governments of the Industrial World, you weary giants of flesh and steel, I come from Cyberspace, the new home of Mind. On behalf of the
      future, I
            ask you of the past to leave us alone. You are not welcome among us. You have no sovereignty where we gather.”</p> —
                    <cite><a href="https://www.eff.org/cyberspace-independence">John Perry Barlow: A Declaration of the Independence of Cyberspace, Davos 1996. Also:
            Electronic Frontier Foundation, 8. Februar 1996, abgerufen am 12. Februar 2016 (HTML, englisch).</a>
                    </cite>
                  </blockquote> -->

    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
