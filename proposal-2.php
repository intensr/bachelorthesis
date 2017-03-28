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
        <div class="c-cover__content">
          <h1 class="c-cover__headline"><?php echo $contentInfo[$contentInfoId][1]; ?></h1>
          <h2 class="c-cover__subline"><?php echo $contentInfo[$contentInfoId][2]; ?></h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="o-container-small">
  <div class="o-grid">
    <div class="o-grid__item">

      <?php include './php/chunks/intro.php'; ?>

      <h2>Abstract</h2>
      <p>In dem Proposal werden experimentelle Explorationen innerhalb selbstkreierter, artifizieller Realitäten unternommen und anschließend analysiert.
Übergreifend soll beantwortet werden, welche Möglichkeiten zur adäquaten Visualisierung von WebVR (Web Virtual Reality) Konzepten durch aktuelle Technologien
bereits zur Verfügung stehen. Dabei werden darauf basierend Explorationen in unterschiedliche Teilgebiete unternommen, beispielsweise die Kreation von
Interaktion, Interfaces und der generellen virtuellen Umgebung. Dadurch soll das Potential von WebVR erforscht werden und etwaige Komplikationen bereits
adressiert werden. Einhergehend mit dem Zusammenführen der Teilergebnissen aus den Explorationen wird eine aktive Wahrnehmung für die erarbeiteten Erkenntnisse
angestrebt, um diese für zukünftige Kreationen von artifiziellen Realitäten nutzbar zu machen und kreative WebVR Prozesse zu beschleunigen.</p>

      <h2>Inhalt</h2>
      <ol class="c-table-of-contents">
        <li>Abstract</li>
        <li>Subjektive Erfahrungen, Motivation und Zielsetzung</li>
        <li>Versuchsaufbau</li>
        <li>
          <div class="c-li-lead">
            <div class="c-li-lead__content">Setup</div>
          </div>
          <ol>
            <li>Hardware</li>
            <li>
              <div class="c-li-lead__content">Software</div>
              <ol>
                <li>Unity</li>
                <li>Native Websprachen</li>
                <li>Aframe</li>
                <li>Cables</li>
                <li>PlayCanvas</li>
              </ol>
            </li>
            <li>Das Designer != Programmierer Dilemma</li>
          </ol>
        </li>
        <li>
          <div class="c-li-lead">
            <div class="c-li-lead__content">Experimente</div>
          </div>
        </li>
        <li>Resumé</li>
        <li>Quellen</li>
        <li>Versicherung</li>
      </ol>

      <h2>Subjektive Erfahrungen, Motivation und Zielsetzung</h2>

      <blockquote>
        <p>Die Erfahrungen der KISD Studenten/innen in der Ausarbeitung ihrer Bachelorarbeiten ist gleichzeitig deren letzte Entscheidung und Möglichkeit einer
intensiven Auseinandersetzung mit einer eigenständig, gewählten Thematik, vor dem Berufseinstieg.</p>
        <cite>Autorisiertes, übertragenes Zitat von Prof. Wolfgang Laubersheimer beim Kölner Design Preis, 2016</cite>
      </blockquote>

      <p>Die ersten persönlichen Berührungspunkte mit der stereoskopischen Darstellung von virtuellen Objekten habe ich mit dem Kauf eines BenQ 120<abbr
title="Hertz">hz</abbr> Bildschirms und der <span class="c-ref" data-ref-source-id="239" data-ref-desc="" data-ref-type="ref">Nvidia 3D Vision Brille</span>
2008 gemacht. Diese ist ausgelegt für die Darstellung von 3D Filmen bzw. -Gaming und war zu jener Zeit der bestmögliche Standard für Heimanwender. Trotz der
<abbr title="Ironie"><i>dauerhaften Schädigung</i></abbr> meiner Augen aufgrund der dauerhaft unzumutbaren Qualität, faszinierte mich der Gedanke, plastische
Objekte künstlich in das Sichtfeld des Anwenders zu projizieren.</p>
      <p class="o-p--tie">Nach den <span class="c-ref" data-ref-source-id="126" data-ref-desc="" data-ref-type="ref">ersten Gehversuchen</span> der 90er Jahre
war dies ein weiterer Versuch der Entertainment Industrie, 3D Projektionen in den Massenmarkt zu etablieren. Der Trend dieser Brillen hielt allerdings nicht
lange an und konnte sich lediglich in 3D Kinofilmen behaupten. Durch mein primäres Interesse und den Fokus auf die Gestaltung des Nutzerlebenisses (UX, User
Experience) und der Ausarbeitung von interaktiven (IxD, User Interaction) Interface Konzepten (UI, User Interface), primär im digitalen Medium, dachte ich
zwischenzeitlich an die mögliche Verknüpfung von stereoskopischen 3D und Web -Technologien. In <span class="c-ref" data-ref-source-id="235" data-ref-desc=""
data-ref-type="ref">einem <abbr title="z.d. Entwurf">Draft</abbr></span> des <abbr title="World Wide Web Consortium">W3C Konsortiums</abbr> von zwei LG
Electronics Mitarbeitern erfuhr
ich, dass bereits Unternehmungen bezüglich der Web Implementierung vorgeschlagen wurden. Bis dato sind diese Entwürfe jedoch von keinem Webbrowser
implementiert
worden und die Bemühungen gelten somit als eingestellt.</p>
      <p class="o-p--tie">Erst im Frühjahr 2016 wurde ich wieder auf das Thema aufmerksam als die Agentur Dunckelfeld, in der ich als Freelancer tätig bin,
sich
die HTC Vive zulegte. Nach der ersten Nutzung war ich sehr beeindruckt von der Immersion in die virtuelle Realität der jeweiligen Anwendungen. Die Demo von
Aperture Science (Valve) mit einem <span class="c-ref" data-ref-source-id="215" data-ref-type="bsp" data-ref-parameter="?t=3m22s" data-ref-desc="">der
Protagonisten</span> von <span class="c-ref" data-ref-source-id="27" data-ref-type="ref" data-ref-desc="">Portal 2</span> faszinierte mich. Speziell die neu
eröffneten Interaktionsmöglichkeiten mithilfe der Vive
Controller. Es gestaltet sich schwierig diese subjektive Wahrnehmung zu beschreiben. Selbst in der Betrachtung in Form von Videomaterial wird die Art der
Erfahrung, welche man bei der Nutzung von zeitgeistig, hochwertigen Head Mounted Displays (<abbr title="Head Mounted Display, z.d. Datenhelm">HMD</abbr>, z.d.
Datenhelm) erfährt, nicht transportiert. <abbr title="Head Mounted Display, z.d. Datenhelm">HMD</abbr>s sind einige
der wenigen Medien, welche man selbst erfahren muss um das Potential und die Qualität zu erkennen. Dies ist einer der Gründe weshalb diese Arbeit empirisch
ausgelegt ist.</p>
      <p class="o-p--tie">Noch vor meiner Wahrnehmung von Google Cardboard und den bereits stattfindenden Entwicklungen von Virtual-, Augmented- und Mixed
Reality wurde mir bewusst, dass die stationären Geräte zwei entscheidende Probleme mit sich führen. Zum einen sind sie eben stationär und erfordern einen recht
komplexen Aufbau und zum anderen sind sie inklusive der erforderlichen Rechenleistung bis dato sehr teuer und erfüllen neben der Erzeugung von artifiziellen
Realitäten keine weitere Funktion. Dementsprechend besitzt nur eine vergleichsweise kleine Anzahl an Personen solche Geräte, oder haben Erfahrungen damit
gesammelt. Der Anwendungszweck ist noch sehr begrenzt, obwohl die Geräte in der Theorie bereits seit den 90er Jahren (ggf. früher) verschiedene, nützliche
Ansätze und Konzepte beinhalten.</p>
      <p class="o-p--tie">Nach einer intensiveren Auseinandersetzung mit der Materie probierte ich Google Cardboard aus, entdeckte WebVR und verfolgte neuere
VR
Trends wie z.B. die Entwicklung von Google Daydream. WebVR beschreibt dabei die Erzeugung von virtuellen Realitäten in einem Webbrowser und wurde 2016 primär
in
Zusammenarbeit von Google und Mozilla <span class="c-ref" data-ref-source-id="252" data-ref-desc="" data-ref-type="ref">entwickelt</span>. WebVR war bis Anfang
2017 sehr rudimentär - das Nischenprodukt einer Nischenbranche - und ist bis dato in
einem experimentellen Stadium. Die Darstellung auf meinem Motorola G4 (Low Budget Smartphone) war überzogen gesagt eine Katastrophe. Fehlende Sensorik, eine
unzureichende Auflösung und mangelnde Interaktionsmöglichkeiten sowie Anzeigefehler reduzierten meine persönliche User Experience auf ein Minimum. Dennoch war
ich abermals fasziniert von dem Enthusiasmus der Unternehmen Google, Mozilla und dem WebVR Initiator <span class="c-ref" data-ref-source-id="161"
data-ref-desc="" data-ref-type="ref">Brandon Jones.</span> Zu diesem Zeitpunkt war Google Daydream
bereits auf dem Markt, jedoch nur verfügbar mit dem Google Pixel Smartphone welches bei dem Modell mit hoher Auflösung einen Kostenfaktor von ca. ~1000€
veranschlagt. Dafür erfährt der Nutzer ein potentiell schlechteres VR Erlebnis als mit einer Oculus Rift, HTC Vive oder ähnlichen stationären Geräten. Anders
als jedoch z.B. Gear VR von Samsung gibt Google seit Anfang 2017 Zertifikate für Drittanbieter frei mit denen Daydream betrieben werden kann. Zudem ist Google
neben Mozilla wie o.g. einer der Initiatoren der WebVR Technologie. In den nächsten Abschnitten wird im Detail beschrieben wie die Auswahl für Soft- und
Hardware Komponenten getroffen wurde. Zusammengefasst kann hier bereits erwähnt werden, dass die erforderliche Hardware für ca. ~430€ (Smartphone und Daydream)
erworben wurde und mit der Daydream App (inzwischen) fehlerfrei funktioniert. In den nächsten Monaten wird sich zeigen, ob das Interesse an Daydream, Virtual
Reality und letztendlich WebVR steigt oder stagniert. Die Freigabe für weitere Anbieter und die Veröffentlichung neuer kompatibler Geräte von Google sind ein
positiv, zu bewertender Ausgangspunkt.</p>
      <p class="o-p--tie">Die Nutzung von Daydream eröffnet neue Aspekte für die Gestaltung durch das Hinzufügen der dritten Dimension und die Präsenz des
Anwenders in der virtuellen Umgebung. Die Nutzung der neuen Schnittstellen (Controller und Head Tracking) bringen neue Interaktionsmöglichkeiten und
gleichzeitig neue Herausforderungen für Designer und Entwickler, wie z.B. die Suche nach dem optimalen Eingabemedium, die Erstellung adäquater Anwendungen,
oder
die Reduktion der sog. <span class="c-ref" data-ref-source-id="253" data-ref-desc="" data-ref-type="ref">VR Motion Sickness</span>, welche Übelkeit verursachen
kann. Sofern sich VR fest etablieren kann wird der Rahmen für Designer konkret erweitert,
indem nicht nur mit und in den Medien gearbeitet wird sondern die Medien selbst modifiziert und abgewandelt werden können, welches teilweise und vereinzelt
schon aktuell der Fall ist.</p>
      <p class="o-p--tie">Viele Unternehmen und Hersteller versuchen die physische Realität möglichst präzise in die virtuelle Realität zu übertragen, welches
zu fragwürdigen Applikationen wie dem <span class="c-ref" data-ref-source-id="254" data-ref-desc="" data-ref-type="ref">Job Simulator</span> (in diesem Fall
gewollt), oder <span class="c-ref" data-ref-source-id="255" data-ref-desc="" data-ref-type="ref">Koch Simulationen</span> (in diesem Fall ernst gemeint) führt.
Persönlich bin ich
speziell an der Manipulation des Körpers, der Sinne und dem Surrealismus innerhalb virtueller Realitäten interessiert. Mich fasziniert der Gedanke Dinge zu
ermöglichen, welche in der physischen Welt nicht, oder schwierig umzusetzen <span class="c-ref" data-ref-source-id="236" data-ref-desc=""
data-ref-type="bsp">sind,</span> ebenso die Beschäftigung mit der Körperlosigkeit, dem Annehmen neuer
Identitäten und der <span class="c-ref" data-ref-source-id="256" data-ref-desc="" data-ref-type="ref">Selbstdarstellung</span> im virtuellen Raum. Für mich
verbergen sich in diesen Komponenten der tiefere Sinn von Virtual Reality (VR), Augmented
Reality (AR) und Mixed Reality (MR) sowie die Möglichkeit diese fest in den gesellschaftlichen Alltag zu integrieren.</p>

      <p>Durch den experimentellen Charakter von WebVR ist das Anliegen für dieses Proposal die Erforschung und Ausreizung der Möglichkeiten jener Technologie.
Es geht dabei nicht darum ein konkretes, ultimatives Konzept zu definieren, oder VR als das ultimative Medium zu preisen, sondern Rahmenbedingungen zu
erzeugen.
Verschiedene Ansätze werden in kleineren Experimenten getestet. Jedes dieser Experimente enthält Ansätze, welche sich in ihrer Komplexität steigern und
teilweise umsetzen lassen. Wenn der Komplexitätsgrad für die Umsetzung den zeitlichen Rahmen des Proposals überschreitet, wird zumindestens versucht einen
schriftlichen Ausblick zu beschreiben. So startet jede Exploration mit einfachen Versuchen und schildert den Prozess von rudimentären Gehversuchen bis hin zu
komplexeren Strukturen und Aufbauten.</p>

      <ul>
        <li>Was wird benötigt, um ein adäquates WebVR Erlebnis zu erzeugen?
          <ul>
            <li>Wobei ergeben sich etwaig Komplikationen?</li>
          </ul>
        </li>
        <li>Worin manifestiert sich das Potential von WebVR?</li>
        <li>Warum ist eine intensive und praktische Auseinandersetzung in diverse Richtungen relevant für die Erzeugung von WebVR Erlebnissen?
          <ul>
            <li><strong>Welche Erkenntnisse schaffen die angedachten Experimente?</strong></li>
          </ul>
        </li>
        <li>Wie sind die Einflüsse der bereits implementierten Technologien zu bewerten?</li>
        <li>Auf welche Kriterien kommt es bei zukünftigen Entwicklungen an?
          <ul>
            <li>Welche Aspekte sind kritisch zu hinterfragen?</li>
            <li>Welche Rolle nehmen Augmented Reality und Mixed Reality ein?</li>
          </ul>
        </li>
      </ul>

      <h2>Setup</h2>
      <p>Für die Erstellung von WebVR Applikationen müssen zunächst die zwei verschiedene Ebenen von Hardware und Software berücksichtigt werden. Ähnlich wie
im
Smartphone/Tablet Sektor gibt es bis dato keinen einheitlich anerkannten Software oder Hardware Standard. Jeder Anbieter entwickelt unabhängige Anwendungen,
welche auf ebenso unterschiedlicher Hardware basiert. Hersteller einigen sich primär auf gleiche Komponenten, wie grundlegende Betriebssysteme (OS, Operating
System) wie beispielsweise Android, oder die Art der bestimmter Schnittstellen wie der USB (Universal Serial Bus) Standard, oder Klinkenstecker. Auch in diesem
Fall existieren Ausnahmen wie beispielsweise Apple, welche jeden Teil ihrer Hard- und Software personalisieren, oder bestimmte Funktionalitäten durch komplett
andere Konzepte ersetzen, wie zuletzt das Entfernen des <span class="c-ref" data-ref-source-id="257" data-ref-desc=""
data-ref-type="ref">Klinkensteckers.</span> Daraus resultieren unterschiedliche Controller, Sensoren und Anwendungen. In den
folgenden Abschnitten wird eruiert, welche Komponenten zur Entwicklung genutzt werden.</p>

      <h3>Hardware</h3>

      <blockquote>
        <p>Why mobile first? Here's the elevator pitch: designing for mobile first not only prepares you for the explosive growth and new opportunities on the
mobile internet, it forces you to focus and enables you to innovate in ways you previously couldn't. Of course there's a lot of detail behind that statement,
which is what this part is all about.</p>
        <cite><span class="c-ref" data-ref-source-id="260" data-ref-desc="S.5" data-ref-type="zitat">Luke Wroblewski</span></cite>
      </blockquote>

      <p>Im ersten Schritt wird ermittelt für welche Art von Gerät die jeweilige Applikation primär optimiert wird. Dies ist vergleichbar mit den Entwicklungen
im regulären Webdesign in denen die Art der Webseite durch das jeweilige primäre Medium definiert wird. Die Herangehensweise des <span class="c-ref"
data-ref-source-id="260" data-ref-desc="S.1" data-ref-type="vgl"><i>mobile first</i></span> Gedankens hat sich
in diesem Fall weitläufig etabliert, indem Webseiten in der Regel zuerst für das Smartphone optimiert werden und anschließend auf weitere Geräte skaliert
werden. Das Smartphone gilt aus Entwicklersicht im Vergleich zu beispielsweise Desktop Rechnern als das Medium mit den niedrigsten Spezifikationen in Leistung
und Visualisierung. Die Bildschirme sind kleiner, die Rechenleistung ist begrenzter und die Netzwerkverbindung häufig schlechter als bei Desktop Computern.
</p>
      <p class="o-p--tie">Ebenso gestalten sich WebVR Applikationen im Bezug auf die jeweilige Hardware. Die Vorgabe welche im Responsive Webdesign durch
unterschiedliche Geräte wie Smartphones, Tablets, Notebooks und Desktop Rechner mithilfe von sog. <span class="c-ref" data-ref-source-id="262" data-ref-desc=""
data-ref-type="ref">Media Queries</span> unterteilt wird, kategorisiert WebVR durch sog.
Input- und Immersion Level, welche die Intensität der Immersion widerspiegeln.</p>

      <p>Es existieren drei Input Level bzw. verschiedene Typen von Controllern mit sog. <span class="c-ref" data-ref-source-id="261" data-ref-desc=""
data-ref-type="ref">“degrees of freedom” (z.d. Grade der Freiheit / DOF):</span></p>
      <ol>
        <li><strong>0 DOF</strong> entspricht Endgeräten welche in ihrer Eingabe nur über das Klicken oder Tasten auf der zweidimensionalen, physischen
Eingabefläche interagieren. Das Sichtfeld ist an diese Interaktion gebunden indem der Anwender virtuelle Objekte direkt anschauen muss, um mit ihnen virtuell
zu
interagieren. Dies wird häufig auch als sog. “gaze controller” (starrender Controller) definiert (z.B. Desktop Computer ohne <abbr title="Head Mounted Display,
z.d. Datenhelm">HMD</abbr>, oder Google Cardboard Anwendungen).</li>
        <li><strong>3 DOF</strong> (nur Orientierung) inkludiert die Nutzung eines Laserpointer ähnlichen Controllers zur Spezifizierung einer bestimmten
Richtung oder eines Ortes. Die Position des Controllers ist dabei von des Blickrichtung des Nutzers abhängig. Dazu zählt der Google Daydream- sowie der Gear VR
Controller (z.B. Google Daydream, oder Samsung Gear VR). Dies ist vergleichsweise die Maus in virtuellen Umgebungen.</li>
        <li><strong>6 DOF</strong> (Position und Orientierung) ist derzeit der beste Standard bei VR Controllern. Deren Position und Orientierung werden
unabhängig vom <abbr title="Head Mounted Display, z.d. Datenhelm">HMD</abbr> getrackt und empfinden die natürliche Nutzung der Hand, in Form eines Controllers,
am effektivsten nach (z.B. Oculus Rift, oder HTC Vive).</li>
      </ol>

      <p>Die DOF stehen in direkter Korrelation mit den Immersion Levels:</p>
      <ol>
        <li><strong>No VR</strong> stellt die rudimentäre Betrachtung auf einem mobilen oder stationären Bildschirm, ohne Splitscreen dar.</li>
        <li><strong>Stationary VR</strong> entspricht Geräten mit mindestens 3 DOF.</li>
        <li><strong>Seated VR</strong> entspricht 3 bzw. 6 DOF, bei dem durch das Sitzen eingeschränkte Radien und Winkel für die jeweilige Interaktion
entstehen.</li>
        <li><strong>Room Scale VR</strong> entspricht 6 DOF, allerdings mit der Bewegung ausgeweitet auf den jeweiligen Raum bzw. Szenerie indem sich der
Anwender befindet.</li>
      </ol>

      <p>Die Kategorisierungen sind als Anhaltspunkte zu verstehen, um die jeweiligen Geräte einzuordnen und ein besseres Verständnis für deren jeweiligen
Möglichkeiten zu erlangen. Durch den experimentellen Status sind dies jedoch nur ungefähre Einordnungen, welche sich noch abwandeln können.</p>
      <p class="o-p--tie">Die Bestrebungen solche Standards zu entwickeln sind allerdings wichtig, um die Entwicklungen voranzutreiben. Nach der Vorstellung
des
iPhones und der Popularisierung von Smartphones, wurde im Webdesign erst mit der Einführung von sog. Media Queries eine ausreichende Effektivität erreicht,
Webseiten für mobile Endgeräte zu optimieren. Media Queries ermöglichen es dem Entwickler die Webseiten Inhalte (Content) mit bestimmten Parametern an das
jeweilige Endgerät anzupassen, z.B. durch das Setzen einer bestimmten Bildschirmgröße. Alle visuellen Styles (CSS, Cascading Style Sheet) wirken infolgedessen
nur auf diesen gewählten Media Query Bereich. </p>
      <p class="o-p--tie">Obwohl stetig neue Smartphones mit verschiedenen Displaygrößen, Auflösungen und weiteren unterschiedlichen Spezifikationen
erscheinen,
existieren bis dato nur eine relativ geringe Anzahl an etablierten Media Queries (z.B. ist der übliche Media Query für horizontale Ansichten auf Tablet Devices
eine Bildgröße bis zu 768 Pixeln). Nur diese Simplifizierung ermöglicht die zeitnahe Optimierung von Webseiten. Ebenso verhält sich das Themenfeld WebVR indem
Einigungen auf bestimmte Standards die Arbeit für die jeweiligen Entwickler enorm simplifizieren. Die o.g. beispielhaften Standards des DOF zeigen sich z.B.
bei
der Nachrüstung von Samsungs Gear VR Controller, dessen Eingabegerät in seiner Funktionsweise dieselben Spezifikationen besitzt wie der Controller von Google
Daydream. Durch solche Normen können WebVR Entwickler für beispielsweise 3 DOF Geräte unbedenklich Erlebnisse kreieren in denen die Eingabe und Interaktion
sowohl mit GearVR als auch Daydream potentiell möglich sind. Fehlen jedoch bestimmte Controller Elemente (z.B. Startknopf), führt dies für die Entwickler ggf.
zu Problemen und der Suche nach Alternativen, worunter ebenfalls die intuitive und einheitliche Bedienbarkeit (Usability) des Endkonsumenten leidet. Ein
adäquater Vergleich sind die Controller der Spielkonsolen Sony Playstation und Microsoft XBox. Obwohl beide Controller verschieden sind bedienen sie sich den
selben Grundfunktionalitäten und ermöglichen den Nutzern damit einen einfachen Wechsel zwischen den unterschiedlichen Medien. Ähnlich ist die Nachrüstung von
Touch Controllern bei der Oculus Rift zu betrachten. Diese Controller unterscheiden sich zwar von denen der HTC Vive, sind in ihren Grundeigenschaften, wie
beispielsweise greifen, halten, loslassen, etc vergleichbar. Aus diesen Gründen sind Standards im Hardwarebereich für die positive Entwicklung von VR- und
weiteren Technologien unerlässlich bzw. überwiegend förderlich.</p>

<img src="./assets/img/hmds.jpg" alt=""/>

<div class="c-notes-marginal">
  <div class="c-notes-marginal__item">
    <span class="c-ref" data-ref-source-id="259" data-ref-type="ref" data-ref-desc="v.l.n.r Google Daydream, AUKEY Vision, Magic Cardboard V1, Maxfield
Cardboard V2 " data-ref-hide></span>
  </div>
</div>

      <p>Zunächst wird dementsprechend der Funktionsumfang potentieller Hardware analysiert. Zu Testzwecken werden diverse HMD Brillen aus moderaten
Preissegmenten erworben und bewertet, mit dem Fokus auf die Usability für den <span class="c-ref" data-ref-source-id="258" data-ref-desc=""
data-ref-type="ref">Massenmarkt:</span></p>
      <table style="width: 100%;">
        <caption class="o-h5">
          Empirischer <abbr title="Head Mounted Display, z.d. Datenhelm">HMD</abbr> Brillen Vergleich
        </caption>
        <thead>
          <tr>
            <th><abbr title="Name der Entität inklusive Versionierung. Bei Cardboard unterscheidet sich dies in V1 (Magnet basierender Interaktionsbutton) und
V2 (Touch basierender Interaktionsbutton)">Device</abbr></th>
            <th><abbr title="Zum Zeitpunkt des Erwerbs in Euro">Preis</abbr></th>
            <th><abbr title="Ohne Smartphone in Gramm">Gewicht</abbr></th>
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
            <td>69,90</td>
            <td>219</td>
            <td>Kompakt</td>
            <td>90 <!-- gear vr 100° --></td>
            <td>Ja</td>
            <td>+</td>
            <td>+</td>
            <td>Nein</td>
            <td>3</td>
            <td>Controller,<br/> App,<br/> Nativer Support</td>
          </tr>
          <tr>
            <td>AUKEY VISION</td>
            <td>20,99</td>
            <td>384</td>
            <td>Groß</td>
            <td>90</td>
            <td>Nein</td>
            <td>++</td>
            <td>+</td>
            <td>-</td>
            <td>0,(3)</td>
            <td>Freie Kamera,<br/> justierbare<br/> Linsen (Tiefe)</td>
          </tr>
          <tr>
            <td>Magic Cardboard</td>
            <td>24</td>
            <td>313</td>
            <td>Kompakt</td>
            <td>102</td>
            <td>Nein</td>
            <td>++</td>
            <td>+</td>
            <td>Magnet</td>
            <td>0,(3)</td>
            <td>Justierbare<br/> Linsen (Weite),<br/> QR Code,<br/> Halterung</td>
          </tr>
          <tr>
            <td>Maxfield Cardboard V2</td>
            <td>6,90</td>
            <td>109</td>
            <td>Kompakt</td>
            <td>80</td>
            <td>Nein</td>
            <td>o</td>
            <td>-</td>
            <td>Touch</td>
            <td>0,(3)</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>

      <p>Die drei Aspekte der Immersion, Bildqualität und des Sichtfeldes, welche sich aus den tabellarischen Daten zusammensetzen, sind bei der Auswahl der
Brillen von primärem Interesse. Alle weiteren Kriterien haben einen sekundären wenn auch nicht unerheblichen Einfluss.</p>
      <p class="o-p--tie">Die Immersion beschreibt dabei die Intensität der Sinnesübertragung in die artifizielle Realität. Dabei sollte die Wahrnehmung der
physischen Welt reduziert werden und die Identifikation in und mit der virtuellen Welt gesteigert werden. Immersion stammt aus dem Lateinischen und beschreibt
das geistige „Eintauchen“ oder Verschmelzen. Desto realistischer die Bewegungsübertragung, geringer die Reaktionszeit (Latenz) sowie die Sicht mittels der
VR-Headsets dargestellt und vom Nutzer verspürt wird, je höher ist die Immersion. Nahezu alle Faktoren beeinflussen den Grad der Immersion, wobei speziell die
visuellen Komponenten wie die Bildqualität und das mögliche Sichtfeld, erheblich sind.</p>
      <p class="o-p--tie">Die Qualität des Bildes setzt sich aus der Smartphone Hardware (Auflösung, Pixeldichte, Matrix Art, Displaygröße), den Eigenschaften
der Brille (Qualität der Linsen, Formfaktor und Positionierung innerhalb der Brille) sowie der Nutzung unterschiedlicher Software und deren Features (native
Applikation, WebVR, <span class="c-ref" data-ref-source-id="263" data-ref-desc="" data-ref-type="ref">“Low Persistence Technologie”</span>) zusammen. Die
Hardware ist in diesem Bezug, sogar auf Smartphone Niveau, relativ weit fortgeschritten. Die
Pixel können zwar selbst bei den besten Geräten noch erkannt werden, doch es erweist sich in Anbetracht auf die bisherige Entwicklung als wahrscheinlich, dass
sich dies in der näheren Zukunft noch merklich <span class="c-ref" data-ref-source-id="264" data-ref-desc="" data-ref-type="ref">verbessern wird.</span></p>

      <p>Das natürliche Blickfeld des Menschen mit Augenbewegungen beträgt ca. 270°. Simple Videobrillen mit einem gewöhnlichen Sichtfeld von ca. 45° sind
lediglich in der Lage eine große Leinwand in einigen Metern Entfernung vor einem zu simulieren. Die ersten Generationen von VR Brillen starteten mit einem
diagonalem Sichtfeld von etwa 100°. Dies ist vergleichbar mit dem Blick durch eine Taucher- oder Skibrille, reicht jedoch völlig aus um die Illusion
hervorzurufen, man befände sich an einem anderen Ort. Um die größtmögliche Immersion zu erzeugen, sollte die VR Brille ein möglichst großes Sichtfeld haben.
Hierzu sollten dann jedoch auch die anderen Faktoren nicht vernachlässigt <span class="c-ref" data-ref-source-id="225" data-ref-desc=""
data-ref-type="ref">werden.</span></p>
      <p class="o-p-tie">Wird die Entwicklung von VR, AR und MR Brillen (speziell den Linsen), Displays und Software weiter vorangetrieben, werden in Zukunft
visuelle
Erlebnisse möglich, in denen der Betrachter zwischen physischer und virtueller Realität nicht mehr <span class="c-ref" data-ref-source-id="265"
data-ref-desc=""
data-ref-type="ref">unterscheiden kann.</span></p>

      <p>Neben den Aspekten des tabellarischen Vergleichs können weitere Eigenschaften untersucht werden, wie beispielsweise die Art der Smartphone
Befestigung,
oder die Abschirmung gegen Lichteinflüsse. Diese sind zwar nicht unerheblich, aber nicht ausschlaggebend. In der Gesamtheit fällt auf, dass jedes Gerät
verschiedene Vorzüge bietet, jedoch häufig mindestens einen merkbaren Nachteil aufweist. Gear VR, welches in dem Vergleich nicht aufgeführt wird, bietet
beispielsweise einen umfassenden Funktionsumfang, speziell nach dem Upgrade durch einen eigenen Controller. Allerdings funktioniert es nur mit Smartphones der
Marke Samsung und fällt somit aus dem Raster. VR Brillen müssen tendenziell universal nutzbar sein, ansonsten büßen sie den Vorteil über stationäre VR Geräte
ein.</p>
      <p class="o-p--tie">Daydream muss letztendlich nur wegen dem Controller erworben werden, da es neben Gear VR keine Alternativen für den DOF3 Bereich
gibt,
außer eine <span class="c-ref" data-ref-source-id="271" data-ref-desc="" data-ref-type="ref">Controller Emulation</span> auf einem weiteren Smartphone zu
erzeugen. Es ist allerdings möglich andere Brillen mit dem Daydream Controller zu nutzen. So
eindrucksvoll die visuelle Darstellung von Virtual Reality Projekten bei der ersten Nutzung sind, so erfordert ein anhaltendes, positives Nutzererlebnis eine
Interaktionsmöglichkeit mit der jeweiligen Applikation. Somit gilt Daydream als das Produkt der Wahl, kann jedoch durch eine Brille mit persönlichen
Präferenzen
gekoppelt werden.</p>

      <p>Die nächste Komponente für Mobile VR ist das jeweilige Smartphone. Da die Nutzung von Daydream nach der Brillen Auswertung als obligatorisch gesetzt
wird, muss das ausgewählte Smartphone den <span class="c-ref" data-ref-source-id="243" data-ref-desc="" data-ref-type="ref">Daydream-</span> und <span
class="c-ref" data-ref-source-id="272" data-ref-desc="" data-ref-type="ref">Android 7.1 Nougat</span> Spezifikationen entsprechen.</p>
      <table style="width: 100%;">
        <caption class="o-h5">
          <span class="c-ref" data-ref-source-id="237" data-ref-desc="" data-ref-type="ref">Offizielle Google Daydream Smartphones (17.03.2017)</span>
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
            <td>~415<br/>(<abbr title="Ich habe es für diesen Preis in einem Warehousedeal erworben, welche immernoch bis dato existieren">360</abbr>)</td>
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

      <p>Es zeigt sich, dass das Axon 7 von ZTE erstaunliche Werte hervorbringt und sich deutlich von seinen Konkurrenten abhebt, vor allem preislich. Mobile
VR
erreicht damit einen größeren potentiellen Nutzerkreis, welcher sich sofern die Technologie relevant bleibt, in den nächsten Monaten durch die Eigenschaften
des
Mooreschen Gesetzes erweitern wird.</p>

      <p>Für einen empirischen Gesamtpreis von 430€ wird Mobile VR auf dem zeitgeistlich besten Standard möglich (Reduktion um über 50% im Vergleich zu den
verfügbaren Google Pixel Geräten). Dabei hat der Nutzer den Mehrwert eines leistungsstarken Smartphones für die Anwendung in anderen Bereichen. Beim Kauf eines
stationären VR Gerätes riskiert der Käufer ggf. den Verlust von Interesse nach kurzer Zeit, ohne eine weitere Möglichkeit der Nutzung. Bei dem Kauf einer HTC
Vive oder Oculus Rift liegt der Preis für diese Geräte zuzüglich der entsprechenden Hardware zwischen <span class="c-ref" data-ref-source-id="136"
data-ref-desc="" data-ref-type="ref">1200-1500€.</span> Damit ist der Gesamtpreis gegenüber einem
Vergleich von <span class="c-ref" data-ref-source-id="273" data-ref-desc="" data-ref-type="ref">2016</span> in seiner Gesamtheit bereits deutlich gesunken und
speziell im Mobile VR Bereich, welches sich voraussichtlich auch weiterhin abzeichnen
wird. Auch Oculus hat seine Preise für die Rift zwischenzeitlich <span class="c-ref" data-ref-source-id="274" data-ref-desc=""
data-ref-type="ref">gesenkt.</span> Apple ist bis jetzt der einzige größere Tech-Konzern ohne öffentliche Teilnahme am VR
<span class="c-ref" data-ref-source-id="275" data-ref-desc="" data-ref-type="ref">Geschehen.</span>

        <span class="c-notes-side-hook">
          <span class="c-notes-side">
            <span class="c-notes-side__icon">
              <span class="c-icon-asterisk"></span>
            </span>
            <span class="c-note-side">
              <span class="c-note-side__content">
                <strong class="c-note-side__headline">ZTE´s leere Versprechen</strong>
                <span class="c-note-side__text">Der Kauf des ZTE Axon 7 stellte sich zeitweilig als verfrüht heraus, da das Axon 7 zwar von Google als Daydream
fähiges Smartphone verifiziert ist, jedoch noch kein lauffähiges Nougat 7.1 Update vom Hersteller freigegeben wurde (Stand 17.03.2017). Um das Smartphone
dennoch zu nutzen, wurde es mit <span class="c-ref" data-ref-source-id="276" data-ref-desc="" data-ref-type="ref">LineageOS</span> (Drittanbieter Software) und
funktionierendem Android 7.1.1 Nougat geflasht, welches ein unkonventioneller Weg ist,
bei dem die Garantie des Gerätes erlischt. Der einzige Vorteil ist die Nutzung von Daydream vor dem Großteil der anderen Axon 7 Anwender.</span>
              </span>
            </span>
          </span>
        </span>

      </p>
      <p class="o-p--tie">Aus der Hardware Analyse ergeben sich zusammengefasst mehrere wichtige Erkenntnisse. In Anbetracht der aktuellen Entwicklungen sollte
spätestens gegen Ende des Jahres 2017 Mobile VR Hardware den Massenmarkt erreicht haben. Des Weiteren ist der Preis für stationäre VR Erlebnisse zwar
reduziert,
bleibt dennoch vergleichsweise teuer. Die Mobile VR Alternativen bieten dabei, bezogen auf die visuelle Immersion, bereits annähernd ähnliche Erlebnisse.
Zusätzlich fördert die Modularität von Mobile VR (Brille, Controller, Smartphone) die Flexibilität und unabhängige Weiterentwicklung der einzelnen Mobile VR
Komponenten gegenüber den stationären Geräten. Jeder Teil kann individuell ersetzt werden, sofern dieser den essentiellen Spezifikationen der jeweiligen
Kategorie entspricht. Der Nachteil von Mobile VR manifestiert sich in der geringeren Rechenleistung gegenüber stationären Geräten sowie der aktuell
mangelhaften
Beteiligung des Massenmarktes. Zum einen begründet sich dies in der einstweilig teuren Hardware, welches sich in der näheren Zukunft ändern könnte. Inwiefern
dies ebenfalls an dem Mangel konkreter Anwendungsgebiete bzw. zugehöriger Software liegen könnte wird unter anderem im nächsten Abschnitt eruiert.</p>

      <h3>Software</h3>

      <p>Die Software Ebene beschäftigt sich zum einen mit den Besonderheiten und Anwendungen kreativer Prozesse und zum anderen mit den jeweiligen Plattformen
auf deren Basis Virtual Reality Erlebnisse entwickelt und zur Verfügung gestellt werden können. Diese Themenfelder verschwimmen etwaig untereinander (siehe
Setup). Der reguläre Weg die Systeme Daydream, Cardboard, Rift, Vive, Playstation VR, usw. zu nutzen, besteht in der Nutzung spezifischer Applikationen oder
Programme wie Steam, Daydream App, Cardboard App, Gear VR App, uvm.</p>

      <p class="o-p--tie">Die reguläre Methode Programme auf dem Smartphone zu nutzen besteht in der Nutzung durch Apps (Applikationen). Diese werden aus
bestimmten vorinstallierten Plattformen und je nach Gerät beispielsweise aus dem Google Play Store, oder dem Apple App Store bezogen. Es gibt eine große Anzahl
von verfügbaren Apps von verschiedenen Anbietern. Der Vorteil von nativen Apps liegt darin, dass sie unmittelbar auf die Hardware des  jeweiligen Gerätes
zugreifen können, wohingegen sog. Web Applikationen häufig, keinen Zugriff auf die nativen Ressourcen der Geräte haben. Dieser Trend ist allerdings im Wandel,
indem Web Apps immer häufiger Teile der Hardware nutzen können, wie beispielsweise Kamera, Mikrofon, usw. Der Nachteil an nativen Apps ist, dass wie o.g. jedes
Gerät bzw. Unternehmen seine eigene App anbietet. Somit teilt sich der ohnehin kleine Markt auf verschiedene Anbieter auf, welches die Integration von VR
erschwert. Durch diesen Umstand sind Unternehmen wie Samsung in der Lage Kunden an ihre Geräte zu binden, da es keine alternativen Geräte oder Anwendungen für
Gear VR gibt.</p>
      <p class="o-p--tie">An dieser Stelle tritt WebVR auf den Plan, welches alle positiven Eigenschaften des Internets in sich vereint. Durch WebVR können
Funktionalitäten frei erstellt werden und sind nicht an das Ecosystem eines einzelnen Unternehmens gebunden. Der Standard wird wie alle weiteren Web Standards
von mehreren Mitgliedern gemeinsam definiert. Dadurch wird es zu einer selbstorganisierten, unabhängigen Technologie, über die jeder verfügen kann. Der einzige
Nachteil in Web Apps liegt darin, dass sie bis jetzt noch nicht das volle Potential der Hardware ausschöpfen können. Speziell bei Hardware lastigen Funktionen
wie die stereoskopische Darstellung von 3D Objekten, kann dieser Umstand limitierende Auswirkungen haben, zudem ist der WebVR Stand aktuell noch in der
Betaphase und könnte noch viele Fehler enthalten.</p>
      <p class="o-p--tie">Um dem Angebot an vielen verschiedenen Devices und deren Softwares mächtig zu werden, wurde 2017 der <span class="c-ref"
data-ref-source-id="277" data-ref-desc="" data-ref-type="ref">Open XR Standard</span> geschaffen, um
eine Einigung auf bestimmte Best Practices herbeiführen und die Arbeit für die End-Entwickler zu vereinfachen.</p>

      <img src="./assets/img/openxr-1.jpg" alt=""/>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="266" data-ref-type="ref" data-ref-desc="Aktuelle Schnittstellen Interaktion " data-ref-hide></span>
        </div>
      </div>

      <p></p><!--hotfix -->

      <img src="./assets/img/openxr-2.jpg" alt=""/>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="267" data-ref-type="ref" data-ref-desc="Zukünftige Schnittstellen Interaktion " data-ref-hide></span>
        </div>
      </div>

      <p>Bis zur Etablierung dieses Standards ist WebVR in diesem Kontext ebenfalls förderlich, weil es zumindestens auf der Software Ebene eine einheitliche
Entwicklung ermöglicht, welche sich je nach persönlichen Präferenzen wiederum auf verschiedene Plattformen und digitale Werkzeuge verteilt. Einige dieser Tools
werden im folgenden Abschnitt vorgestellt, um einen Einblick in die verschiedenen Herangehensweisen zur Entwicklung von VR Erlebnissen zu erläutern. </p>

      <h4><span class="c-ref" data-ref-source-id="284" data-ref-type="ref" data-ref-desc="">Unity</span></h4>

      <p></p><!--hotfix-->

      <div class="c-video">
        <iframe class="c-video__item" src="https://www.youtube.com/embed/5cPYpI6_yLs?autoplay=0&showinfo=0&controls=1&vq=hd720" allowfullscreen></iframe>
        <img class="c-video__overlay" src="https://img.youtube.com/vi/5cPYpI6_yLs/hqdefault.jpg" alt=""/>
      </div>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="288" data-ref-type="ref" data-ref-desc="" data-ref-hide></span>
        </div>
      </div>

      <p>Die erste Möglichkeit besteht darin etablierte Desktop Tools aus der Gaming Industrie wie beispielsweise Unity (gleichzeitig Programm und Engine),
oder
die Hilfsmittel der Unreal Engine zu nutzen. Unity ist in seiner Grundversion für Einsteiger kostenlos und bereits seit 2005 auf dem Markt. Kommerziell
erfolgreiche Spiele wie Hearthstone von Blizzard, Endless Space von Amplitude Studios, oder Rust von Facepunch Studios <span class="c-ref"
data-ref-source-id="279" data-ref-desc="" data-ref-type="ref">basieren</span> auf der beliebten Engine. Der
Vorteil von Unity ist neben der Größe der Community, der Flexibilität in den Anwendungsbereichen und der jahrelangen Optimierung der Kernsoftware, vor allem
die
grafische Benutzeroberfläche. Unity verbindet damit Programmierer und Designer wie kaum ein anderes Tool. Auch bei sog. Hackathons wie dem <span class="c-ref"
data-ref-source-id="280" data-ref-desc="" data-ref-type="ref">Global Game Jam</span> ist
Unity häufig das primäre Werkzeug. Bildungseinrichtungen und deren Studenten wie z.B. die Köln International School of Design, oder das Cologne Game Lab
realisieren ihre Projekte ebenfalls <span class="c-ref" data-ref-source-id="281" data-ref-desc="" data-ref-type="bsp">häufig</span> mit eben diesen Engine
Editoren wie Unity oder denen der Unreal Engine. Diese sind in der Regel dafür konzipiert, ein
bündiges Gesamtpaket auszuliefern d.h. ein Spiel, eine Applikation, welche zwar an APIs angebunden werden kann, jedoch in seiner Gesamtheit über statische
Inhalte und <abbr title="Materialien">Assets</abbr> verfügt. Für Mobile VR Applikationen (z.B. Cardboard) eignet sich Unity optimal, da diese als App auf den
jeweiligen Geräten als fertige
Pakete genutzt werden können und sich einfach über beispielsweise die Plattformen Google Play und den Apple Store distribuieren lassen. Aufgrund der o.g.
Eigenschaften von WebVR ist es zwar möglich WebVR Applikationen in Unity zu entwickeln, jedoch nicht empfehlenswert, sofern Hintergrundwissen primär aus der
Webentwicklung, anstatt dem Game Development vorhanden. Auch in zukünftigen Applikationen wie beispielsweise der Mixed Reality, wird Unity vorraussichtlich
eines der wichtigsten Werkzeuge bleiben.
</p>

      <div class="c-video">
        <iframe class="c-video__item" src="https://www.youtube.com/embed/7_cPxk7R2MY?autoplay=0&showinfo=0&controls=1&vq=hd720" allowfullscreen></iframe>
        <img class="c-video__overlay" src="https://img.youtube.com/vi/7_cPxk7R2MY/hqdefault.jpg" alt=""/>
      </div>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="282" data-ref-type="bsp" data-ref-desc="" data-ref-hide></span>
        </div>
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="278" data-ref-type="bsp" data-ref-desc="" data-ref-hide></span>
        </div>
      </div>

      <p></p><!-- hotfix -->

      <div class="c-columns">
        <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          <div class="o-grid__item">

            <h5>Chancen</h5>
            <ul>
              <li>Hohe Performance durch diverse Optimierungsmöglichkeiten</li>
              <li>Nutzung nativer Device Eigenschaften</li>
              <li>Große Community (viele Infomaterialien, fertige Code Snippets und Tutorials)</li>
            </ul>

          </div>
          <div class="o-grid__item">

            <h5>Hindernisse</h5>
            <ul>
              <li>CSharp oder objektorientiertes JavaScript</li>
              <li>Kein natives WebVR (Export möglich)</li>
              <li>Keine native Anbindung von Web APIs</li>
              <li>Unity verpackt seine Anwendungen in geschlossenen Bundles und erschwert damit die Anbindung an weitere Web Elemente</li>
            </ul>

          </div>
        </div>
      </div>

      <h4>Native Websprachen</h4>

      <p>Ein gegensätzlicher, puristischer Ansatz besteht in der Nutzung von nativem JavaScript, HTML, CSS, WebGL und der bekannten JavaScript 3D Library
Three.js. Anders als bei Unity muss in nativen Websprachen jegliche Funktionalität weitgehend, eigenständig erstellt werden. Ein Problem beim Erstellen von 3D
Anwendungen besteht in dem ständigen Testen dieser Umgebungen. Bei Unity oder ähnlichen Anwendungen existieren Preview Ansichten für die Render Prozesse,
welche
in nativen Programmierumgebungen ebenfalls eigenständig angelegt werden müssen. Die Dokumentation des Arbeitsprozesses gestaltet sich zusätzlich schwierig,
speziell wenn mehrere Entwickler am selben Projekt arbeiten. Zu fertigen Code Fragmenten prominenter Libraries existieren in der Regel bereits ausführliche
Dokumentationen und werden durch die größere Nutzerschaft häufig im Peer Review Verfahren auf ihre Funktionalität gegengeprüft. Zusammengefasst kann dieser
Ansatz die persönlichen Erfahrungen enorm schärfen, sind aber zeitlich meistens so aufwändig, dass anfänglich enthusiastische Projekte mit der Zeit nicht mehr
weiter gepflegt werden, weil größere Unternehmungen mit entsprechender Reichweite den angestrebten Funktionsumfang schneller erfüllen können und häufig sogar
übertreffen.</p>

      <div class="c-columns">
        <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          <div class="o-grid__item">

            <h5>Chancen</h5>
            <ul>
              <li>Vollständige Nutzung von Web Technologien und Frontend Workflow</li>
              <li>Bestmögliche Integration von Web APIs</li>
              <li>Volle Kontrolle über den Quellcode</li>
            </ul>

          </div>
          <div class="o-grid__item">

            <h5>Hindernisse</h5>
            <ul>
              <li>Enormer zeitlicher Aufwand</li>
              <li>Generelle Funktionalitäten müssen erstellt werden (z.B. Stereoskopie)</li>
            </ul>

          </div>
        </div>
      </div>

      <h4><span class="c-ref" data-ref-source-id="174" data-ref-type="ref" data-ref-desc="">Aframe</span></h4>

      <p></p><!--hotfix-->

      <p data-height="400" data-theme-id="light" data-slug-hash="QGxpaB" data-default-tab="result" data-user="intenser" data-embed-version="2"
      data-pen-title="Hello World — A-Frame" class="codepen">See the Pen <a href="http://codepen.io/intenser/pen/QGxpaB/">Hello World — A-Frame</a> by David
Hoffmann
      (<a href="http://codepen.io/intenser">@intenser</a>) on <a href="http://codepen.io">CodePen</a>.</p>
      <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>

      <div class="c-video  c-video--print">
        <img class="c-video__overlay" src="./assets/img/helloworldaframe.jpg" alt=""/>
      </div>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="287" data-ref-type="bsp" data-ref-desc="" data-ref-hide></span>
        </div>
      </div>

      <p>Eine Weiterentwicklung von der nativen Herangehensweise ist die Entwicklung von WebVR Applikationen mithilfe des leistungsstarken Virtual Reality
Frameworks Aframe von Mozilla. Es wird von der WebVR Community und einem eigenständigen Team von Mozilla gepflegt. Aframe stellt ähnlich wie jQuery für die
vereinfachte Manipulation von JavaScript, Funktionalitäten zur Erzeugung von artifiziellen Realitäten zur Verfügung. Dabei basiert es auf Three.js, verfügt
aber
im Gegensatz dazu bereits über fertige Komponenten und beschleunigt, damit den Arbeitsprozess. Die einzelnen Komponenten können direkt über HTML eingefügt
werden und durch Daten Attribute manipuliert werden. Erweiterungen oder die Kreation eigener Komponenten ist mithilfe von JavaScript möglich. Zusätzlich
existieren bereits einige Beispiele, welche den Funktionsumfang von WebVR eindrucksvoll darstellen.</p>

      <div class="c-columns">
        <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          <div class="o-grid__item">

            <h5>Chancen</h5>
            <ul>
              <li>Mit vergleichsweise wenig Code können zügig eindrucksvolle Ergebnisse erreicht werden</li>
              <li>Wurde speziell für WebVR entwickelt</li>
              <li>Enge Zusammenarbeit mit Entwicklungsteams von Web Browsern</li>
              <li>Gute Integrationsmöglichkeit von Web APIs</li>
              <li>Weitgehend volle Kontrolle über den Quellcode</li>
            </ul>

          </div>
          <div class="o-grid__item">

            <h5>Hindernisse</h5>
            <ul>
              <li>Experimentell, d.h. es können Fehler entstehen, welche nicht durch den End-Entwickler verursacht wurden</li>
              <li>Sofern interne Fehler auftreten müssen diese erst vom Aframe Team behoben werden</li>
              <li>Dokumentation nicht so ausführlich wie beispielsweise von Unity</li>
            </ul>

          </div>
        </div>
      </div>

      <h4><span class="c-ref" data-ref-source-id="245" data-ref-type="ref" data-ref-desc="">Cables</span></h4>
      <p>Durch die Arbeit bei der Agentur <span class="c-ref" data-ref-source-id="285" data-ref-type="ref" data-ref-desc="">Dunckelfeld</span> konnten
persönliche Kontakte zu den Entwicklern von der Agentur <span class="c-ref" data-ref-source-id="286" data-ref-type="ref" data-ref-desc="">undev</span>
hergestellt werden. In einem internen,
minimalistischen Workshop präsentiert Thomas Kombüchen (Co-Founder bei undev) Ende 2016 den aktuellen Stand ihrer entwickelten Cables Plattform und dessen
Möglichkeiten. Cables greift
ähnlich wie Aframe auf die Technologien WebGL und Three.js zurück. Anders als Aframe bietet Cables jedoch eine grafische Oberfläche und nutzt den Browser als
direkte Schnittstelle für kreative Prozesse. Der Vorteil für Designer liegt dabei in der grafischen Benutzeroberfläche bei der verschiedene Knotenpunkte
(Nodes)
interaktiv verbunden werden können, um Ergebnisse zu kreieren.</p>

      <div class="c-video">
        <video class="c-video__item" autoplay loop>
           <source src="https://cables.gl/landing/ui.mp4" type="video/mp4">Your browser does not support the video tag.
        </video>
        <img class="c-video__overlay" src="./assets/img/cables2.jpg" alt=""/>
      </div>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="299" data-ref-type="ref" data-ref-desc="" data-ref-hide></span>
        </div>
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="297" data-ref-type="ref" data-ref-desc="Nur im Print: " data-ref-hide></span>
        </div>
      </div>

      <p class="o-p--tie">Jeglicher mögliche Eingabewert kann manipuliert werden und Projekte werden frei skalierbar. Dies
beschleunigt die Arbeit gegenüber nativer Three.js Kreationen erheblich und erfordert weniger Programmierkenntnisse. Developer können vorhandene Nodes
(Knotenpunkte) editieren oder eigene erstellen, um sie für die Anforderungen ihrer Applikation zu optimieren, ähnlich wie bei Unity. Cables ist ein
universelles
Werkzeug, welches für audiovisuelle Projekte genutzt werden kann. So wird beispielsweise neben der Kreation von Webprojekten ebenfalls die Ansteuerung von
physischen Programmierschnittstellen wie Arduino, Lichtquellen, Beamern usw. möglich. Zur Zeit wird Cables hauptsächlich genutzt, um Web Erlebnisse mit WebGL
zu
<span class="c-ref" data-ref-source-id="300" data-ref-type="bsp" data-ref-desc="">erzeugen</span> und repetitive Arbeitsprozesse zu beschleunigen. Aktuell sind
die Cables WebVR Komponenten noch in der frühen Entwicklungsphase (jedoch bereits
implementiert). Es ist ggf. trotzdem sinnvoll dieses Projekt an dieser Stelle zu erwähnen, da es sehr viel Potential beinhaltet und sich in den nächsten Jahren
zu einem populären Tool entwickeln könnte.</p>

      <img src="./assets/img/cables1.jpg" alt=""/>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="298" data-ref-type="ref" data-ref-desc="" data-ref-hide></span>
        </div>
      </div>

      <p></p><!--hotfix-->

      <div class="c-columns">
        <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          <div class="o-grid__item">

            <h5>Chancen</h5>
            <ul>
              <li>Universelles Werkzeug dessen Beherrschung weitere Einsatzgebiete, speziell für Designer, eröffnet</li>
              <li>JavaScript und Web basierend und somit universell erweiterbar</li>
              <li>Keine Installation von Software nötig und somit Device unabhängig</li>
            </ul>

          </div>
          <div class="o-grid__item">

            <h5>Hindernisse</h5>
            <ul>
              <li>Experimentell, d.h. es können Fehler entstehen, welche nicht durch den End-Entwickler verursacht wurden</li>
              <li>Sofern interne Fehler auftreten müssen diese erst vom Cables Team behoben werden</li>
              <li>Alpha/Beta Phase in der sich grundlegende Eigenschaften noch merklich verändern können</li>
              <li>Vergleichsweise kleine Community</li>
              <li>Semi-closed Beta</li>
            </ul>

          </div>
        </div>
      </div>

      <h4><span class="c-ref" data-ref-source-id="175" data-ref-type="ref" data-ref-desc="">PlayCanvas</span></h4>

      <p></p><!--hotfix-->

      <div class="c-video">
        <iframe class="c-video__item" src="https://www.youtube.com/embed/fXc-JjH2nNo?autoplay=0&showinfo=0&controls=1&vq=hd720" allowfullscreen></iframe>
        <img class="c-video__overlay" src="./assets/img/playcanvasexample.jpg" alt=""/>
      </div>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="289" data-ref-type="ref" data-ref-desc="" data-ref-hide></span>
        </div>
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="290" data-ref-type="ref" data-ref-desc="Nur in gebundener Ausgabe: " data-ref-hide></span>
        </div>
      </div>

      <p>Als letztes wird das Werkzeug PlayCanvas vorgestellt, welches die besten Eigenschaften aller bisher vorgestellten Anwendungen in sich vereint. Die
Webapplikation beinhaltet die Vorzüge der grafischen Oberfläche von Unity, nutzt jedoch ausschließlich objektorientiertes JavaScript und weitere Websprachen,
wodurch die Anbindung weiterer Web Funktionalitäten vereinfacht wird. Die Größe der Community sowie die verfügbaren Instruktionen sind
noch nicht so populär wie jene von Unity, befinden sich jedoch in einer exponentiellen Wachstumsphase. Die Benutzeroberfläche vereint Elemente von Unity,
Photoshop und Cinema 4D in sich und ermöglicht dem Entwickler durch direkte WYSIWYG Manipulationen das jeweilige Projekt zu editieren. Ein weiterer Vorteil für
die Entwicklung von WebVR und die Kollaboration mit weiteren Teammitgliedern manifestiert sich in der direkten Freigabe des jeweiligen Projektes im Webbrowser
sowie der Möglichkeit Teammitglieder in Projekte einzuladen. Weitere Technologien und Scripte zur Optimierung der jeweiligen Szenerie, ähnlich wie bei Unity,
sind bereits in der Software enthalten.</p>

      <div class="c-columns">
        <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          <div class="o-grid__item">

            <h5>Chancen</h5>
            <ul>
              <li>Weitgehend alle positiven Faktoren der bisher vorgestellten Anwendungen</li>
              <li><strong>43</strong> Mal so schnell wie Unity</li>
            </ul>

          </div>
          <div class="o-grid__item">

            <h5>Hindernisse</h5>
            <ul>
              <li>PlayCanvas hostet seine Projekte intern und erfordert eine kostenpflichtige Mitgliedschaft für die externe Nutzung, die Entfernung des
firmeneigenen Brandings und fortgeschrittene Funktionalitäten</li>
              <li>Durch die primäre Nutzung des Web Mediums sind ggf. nicht alle nativen Funktionen der jeweiligen Endgeräte unmittelbar nutzbar</li>
              <li>200 Mb Speicher Limitierung für kostenlose Accounts</li>
              <li>Keine privaten Projekte für kostenlose Accounts</li>
            </ul>

          </div>
        </div>
      </div>

      <h3>Das Designer != Programmierer Dilemma</h3>
      <p>Wie nahezu jeder fortgeschrittene KISD Student aus empirischen Erfahrungen weiss, wird ab einem bestimmten Niveau, in der Umsetzung von Interface- und
audiovisuellen Konzepten eine Schwierigkeitsstufe erreicht, welche nur durch die Nutzung von ausreichenden Programmierkenntnissen überwunden werden kann. Das
D!=P Dilemma bezeichnet dabei die Vorstellungen des Designers und die Möglichkeiten bzw. (zeitlichen) Rahmenbedingungen diese zu realisieren, welche häufig
durch Programmierer relativ präzise abgesteckt werden können. Im Themenbereich Webdesign, App Entwicklung, oder Produktdesign kann dies durch die Nutzung von
MockUp Tools (z.B. <span class="c-ref" data-ref-source-id="301" data-ref-type="bsp" data-ref-desc="">Marvel App</span>), Animationen, oder Renderings
überbrückt
werden. Bei der Entwicklung von Virtual Reality Erlebnissen ist dies nicht mehr möglich,
weil das Gefühl der Immersion auf die bewertende Person (z.B. Anwender, Kunde) übertragen werden muss. Um nachhaltige VR Erlebnisse zu kreieren, welche
eindrucksvolle Erlebnisse erzeugen wird dementsprechend entweder ein Team, oder tendenziell mehr Zeit benötigt, um erste effektive Prototypen zu erzeugen.
Obwohl Tools wie PlayCanvas vorteilhaft für einen ersten guten Einblick in das Themengebiet sind, so erfordern in fortgeschrittenen Applikationen selbst
einfach
wirkende Prozesse und Abläufe unter Umständen die Expertise eines fortgeschrittenen Entwicklers. Das Dilemma beschreibt dabei die subjektive Erfahrung beide
Rollen gleichzeitig ausreichend erfüllen zu wollen und gleichzeitig das höchste Level der jeweiligen Disziplin zu erreichen. Dies ist eventuell in Sonderfällen
möglich, jedoch in der Regel unwahrscheinlich. Aus diesem Grund sind speziell Werkzeuge wie Unity und PlayCanvas eine gute Möglichkeit für Designer ihre
Vorstellungen, zumindestens als vereinfachte Prototypen, adäquat umzusetzen. In letzter Instanz jedoch führt kein Weg an dem Erlernen von Scriptsprachen bis zu
einem bestimmten Niveau wie beispielsweise JavaScript, oder die Arbeit in einem Team mit geteilten Arbeitsprozessen, vorbei.</p>

      <p>Für die zukünftige WebVR Entwicklung werden zusammengefasst folgende, elementare Parameter gesetzt:</p>
      <ol>
        <li>Applikationen werden primär für 3 DOF kreiert und erhalten nach Möglichkeit einen Fallback für 0 DOF und 6 DOF User Experiences nach dem Vorbild
von
Responsive Webdesign.
</li>
        <li>Die Eingabeschnittstelle sollte dementsprechend über einen zugehörigen Controller mit Google Daydream Spezifikationen verfügen.</li>
        <li>Das zugehörige Smartphone sollte den Daydream Spezifikationen entsprechen, um die Anwendung in ausreichender Qualität darstellen können.
</li>
        <li>Als Entwicklungssoftware wird primär PlayCanvas genutzt, es können jedoch im weiteren Verlauf weitere Tools wie Aframe oder Cables verwendet
werden.
Von einer Entwicklung in nativer Umsetzung wird abgesehen.</li>
        <li>Die Programmiersprache ist objektorientiertes JavaScript.</li>
      </ol>

      <h2>Experimente</h2>
      <p>Nach der Analyse der Entwicklungstools muss zunächst abgesteckt werden, welche Experimente im Rahmen der Zeit des Proposals möglich sind. Mit dem
ersten Antesten von PlayCanvas zeigen sich zwei Möglichkeiten zur Präsentation des WebVR Mediums auf. Entweder eine strukturierte Planung und Konzeption welche
nach und nach abgearbeitet wird, oder ein agiler Prozess indem auf etwaige Veränderungen sofort reagiert wird und die Entwicklung prototypisch verfolgt wird.
Die Probleme bei der strukturierten Planung ist die Variable der etwaigen, technischen Komplexität des angestrebten Konzepts. Anfangs wurde versucht bestimmte
Vorstellungen umzusetzen, welche den Entwicklungsprozess entscheidend verlangsamten. Bestimmte Prinzipien der agilen Entwicklung, welche sich auch in der
Softwarebranche als immer beliebter abzeichnet (z.B. durch die Nutzung von Scrum), werden daher zur Entwicklung genutzt. Anders als im ersten Anlauf wird nun
versucht eine virtuelle Welt zu erzeugen, welche sich in einzelnen Schritten, in einem organischen Prozess durch Funktionalitäten erweitert. Diese Fortschritte
werden dokumentiert und mit den zugehörigen Ressourcen ergänzt. Im Vordergrund der agilen Entwicklung stehen vier Grundregeln wovon speziell drei entscheidend
sind:</p>

      <blockquote>
        <ul>
          <li><strong>Individuals and interactions over processes and tools</strong></li>
          <li><strong>Working software over comprehensive documentation</strong></li>
          <li>Customer collaboration over contract negotiation</li>
          <li><strong>Responding to change over following a plan </strong></li>
        </ul>
        <p>That is, while there is value in the items on the right, we value the items on the left more.</p>
        <cite>Kent Beck, Mike Beedle, Arie van Bennekum, Alistair Cockburn, Ward Cunningham, Martin Fowler, James Grenning, Jim Highsmith Andrew, Hunt Ron,
Jeffries Jon, Kern Brian, Marick Robert C. Martin, Steve Mellor, Ken Schwaber, Jeff Sutherland, <span class="c-ref" data-ref-source-id="302"
data-ref-type="zitat" data-ref-desc="">Dave Thomas</span></cite>
      </blockquote>

      <p>An dieses Verfahren und seine Grundregeln angelehnt wird im Anschluss versucht in möglichst kleinen Untersuchungen die artifiziellen Umgebungen in
Wechselwirkung zu erstellen und zu analysieren. Zusätzlich wird das <span class="c-ref" data-ref-source-id="4" data-ref-desc="S.46" data-ref-type="vgl">Deep
Remix</span> Prinzip, welches Lev Manovich im Zusammenhang mit den <i>neuen Medien</i> beschreibt genutzt. Dieses Verfahren
wird übertragen genutzt und wird ausführlich in dem anderen <span class="c-ref" data-ref-source-id="312" data-ref-desc=""
data-ref-parameter="#turnhallen-computer" data-ref-type="ref">Proposal beschrieben.</span> In diesem Fall wird es angewandt auf die verschiedenen Assets, welche
genutzt werden.
Die Experimente können dementsprechend referenzierten Code, Objekte und Grafiken aus anderen Arbeiten enthalten. Das Ziel ist nicht ein eigenes Produkt zu
erstellen,
sondern möglichst schnell praktische Erfahrungen zu sammeln.</p>

      <p></p><!--hotfix-->

      <h3>I - Hello World</h3>

      <p>Das Ziel besteht darin eine virtuelle Welt zu erstellen, welche über einen Mechanismus zur Fortbewegung verfügt und dem Anwender eine Präsenz in der
virtuellen Umgebung vermittelt. Die Experimente finden alle im selben virtuellen Raum statt und können über den selben Hyperlink aufgerufen werden.

        <span class="c-notes-side-hook">
          <span class="c-notes-side">
            <span class="c-notes-side__icon">
              <span class="c-icon-asterisk"></span>
            </span>
            <span class="c-note-side">
              <span class="c-note-side__content">
                <strong class="c-note-side__headline">Experimentmedien</strong>
                <span class="c-note-side__text">Alle folgenden Medien ohne ausgewiesene Quelle sind dem Experiment entnommen. Sofern externe Quellen in dem
Experiment vorhanden sind wurden diese in der Beschreibung auf PlayCanvas <span class="c-ref" data-ref-source-id="307" data-ref-desc=""
data-ref-type="ref">implementiert.</span></span>
              </span>
            </span>
          </span>
        </span>

      </p>

      <h4>Inspiration, Motivation und Research</h4>

      <p>Als Grundlage dient das <span class="c-ref" data-ref-source-id="303" data-ref-type="ref" data-ref-desc="">Web VR Lab</span> vom PlayCanvas
Entwicklungsteam. In dem <span class="c-ref" data-ref-source-id="261" data-ref-type="ref" data-ref-desc="">Beispiel</span> von PlayCanvas beschäftigen sie sich
mit essentiellen Interaktionen wie:</p>

      <ul>
        <li>Der Ansteuerung verschiedener Devices und speziell der Implementierung eines Virtual Reality Controllers</li>
        <li>Der Teleportation als Mittel zur Fortbewegung, inklusive Kollisionskontrolle bzw. Begrenzung auf ein bestimmtes Umfeld</li>
        <li>Der Aktivierung von Elementen (Button, Türklinke)</li>
        <li>Dem Greifen und Kombinieren von virtuellen Gegenständen (Würfel, Radio)</li>
      </ul>

      <h4>Vorgehen</h4>

      <p>Um das Development Tool PlayCanvas in seiner Funktionsweise zu erlernen und die Programmierung besser zu verstehen wird zunächst der Quellcode des Web
VR Labs analysiert und stückweise reproduziert. Wichtige Aspekte bei der Erstellung der Umgebung ist die gleichzeitige Nutzung für 0 DOF, 3 DOF, damit die
Szenerie auch am Desktop Rechner bearbeitet werden kann. Zur Interaktion für den 3 DOF Controller wird ein PlayCanvas Modell verwendet, welches den physischen
Controller ebenfalls in der virtuellen Welt, in abstrahierter Form darstellt. Zur Aktivierung der Stereoskopie werden ebenfalls Funktionalitäten
bereitgestellt.
Der Einstieg befindet sich in der unteren rechten Ecke des Browserfensters in Form eines Icons und aktiviert den Virtual Reality Modus. Zusätzlich wird ein
Script implementiert, um die Bildwiederholungsrate darzustellen, welches ein wichtiger Indikator für die Performance der Anwendung ist.</p>
      <p class="o-p--tie">In dem ersten Experiment liegt der Fokus auf der Erzeugung des Experimentraums und ersten einfacher Interaktionen. In den folgenden
Experimenten werden immer weitere Funktionalitäten aus dem WebVR Lab von PlayCanvas übertragen.</p>

      <img class="u-margin-bottom" src="./assets/img/i-0.jpg" alt=""/>

      <p>In dem Experiment wird zuerst ein kubusförmiger Raum erstellt, Lichtquellen gesetzt und eine Grundtextur angewandt. Anschließend erfolgt die
Programmierung für den Controller.</p>

      <img class="u-margin-bottom" src="./assets/img/i-1.gif" alt=""/>

      <p>Mit dem Controller wird es möglich sich in dem Raum zu bewegen. Je nach Gerät kann der Betrachter sich mithilfe der 3DOF bzw. 6DOF Controller umsehen
oder den Gaze Controller (z.B. Cardboard, oder Tastatur und Maus) nutzen. Durch einen Klick auf eine anvisierte Stelle auf dem Boden teleportiert und navigiert
sich der Nutzer zu der jeweiligen Position.</p>

      <img class="u-margin-bottom" src="./assets/img/i-2.gif" alt=""/>

      <p>Im nächsten Schritt wird die Interaktion mit einem Würfel ermöglicht, indem der Nutzer diesen im virtuellen Raum bewegen kann.</p>

      <!-- <img src="./assets/img/cables1.jpg" alt=""/> -->

      <!-- <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="298" data-ref-type="ref" data-ref-desc="" data-ref-hide></span>
        </div>
      </div> -->

      <p></p><!--hotfix-->

      <h4>Erkenntnisse und Weiterentwicklung</h4>

      <p>Aus diesen ersten Experimenten konnten mit Abstand die meisten Erkenntnisse gewonnen werden. Der Komplexitätsgrad wurde sofort ersichtlich und ich
konnte mich schnell an das Interface von PlayCanvas gewöhnen. Der Vorteil bei PlayCanvas sind die Tutorials und der beispielhafte Code, welcher auf der
PlayCanvas Seite frei verfügbar ist. Dadurch wurde der Arbeitsaufwand massiv reduziert und ohne diesen wäre die Umsetzung in der angesetzten Zeitspanne nicht
möglich gewesen.</p>
      <p class="o-p--tie">Die Performance der Applikation ist erstaunlich gut und PlayCanvas bietet ebenfalls die Möglichkeit alle Assets im Vorhinein zu
laden,
wodurch die Immersion unterbrechungsfrei gewährleistet wird. Auch das Wechseln zwischen mobile Device und Desktop Rechner funktioniert sehr gut denn die
Inhalte
sind sofort im Web verfügbar und werden teilweise sogar mittels HotReload (z.B. wie bei <span class="c-ref" data-ref-source-id="303" data-ref-type="ref"
data-ref-desc="">React</span>) live eingespeist.</p>

      <img src="./assets/img/daydreamcontroller.png" alt=""/>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="309" data-ref-type="ref" data-ref-desc="" data-ref-hide></span>
        </div>
      </div>

      <p>dasdas</p>


      <h3>II - Sphärenteleporter</h3>

      <p>Durch die Nutzung eines HMDs ist die 360 Grad Umsicht eines der interessantesten Aspekte. Im nächsten Schritt wird dieses VR Feature in Form einer
Fotoansicht implementiert.<p>

      <h4>Inspiration, Motivation und Research</h4>

      <img src="./assets/img/ideaspacephotosphere.jpg" alt=""/>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="311" data-ref-type="ref" data-ref-desc="" data-ref-hide></span>
        </div>
      </div>

      <p>Populäre Beispiele dazu können bei Aframe, PlayCanvas, ThreeJS und IdeaSpaceVR gefunden werden. Speziell bei letzterem überzeugt das Interface
innerhalb der Photosphäre. Im ersten Schritt soll jedoch lediglich die Ansicht ermöglich werden, welche dann in Zukunft ausbaufähig ist.</p>

      <h4>Vorgehen</h4>

      <p>Für eine Photoshäre sind lediglich zwei Komponenten erforderlich. Die Erstellung eines 360° Photos, welches ich mit dem ZTE Smartphone und der Anroid
Photo Sphere erstellen konnte und das anschließende Texturieren des Bildes auf ein kugelförmiges Objekt. Betritt der Nutzer diese Sphere so suggeriert die
Anwendung dem Nutzer er würde sich an diesem Ort befinden. Desto besser die Qualität des Bildes umso förderlicher wirkt sich dies auf die Immersion aus. Um dieses Experiment
zu erweitern implementiere ich eine Funktion, um die Bilder auszutauschen. Dadurch fungiert die Sphere als ein Portal an verschiedene Orte.</p>

      <h4>Erkenntnisse und Weiterentwicklung</h4>

      <p>dasdsa</p>

      <ol class="u-red">
        <li>Hello World
          <ol>
            <li>Coop / Avatare</li>
          </ol>
        </li>
        <li>Photosphäre
          <ol>
            <li>Beispiel
              <ol>
                <li>https://www.ideaspacevr.org/themes/ </li>
              </ol>
            </li>
            <li>Ein Bild (Wohnung)</li>
            <li>Interface Switch mehrere Bilder (diverse Bilder / 1 abgefahrenes bild (strand oder so))</li>
            <li>Interface Switch mit Anmerkungen und positionierten Interfaces (Tour durch Wohnung)</li>
          </ol>
        </li>
        <li>Videosphäre (Video extern)
          <ol>
            <li>Beispiele
              <ol>
                <li>Mr Robot -> Sam Ismail</li>
                <li>Der Flüchtlingstyp vom TED Talk mit den 3D videos</li>
              </ol>
            </li>
          </ol>
        </li>
        <li>Interface
          <ol>
            <li>Popup Grafiken</li>
          </ol>
        </li>
        <li>Explosion on Button
          <ol>
            <li>Mit 3d Sound</li>
          </ol>
        </li>
        <li>Change World on Button
          <ol>
            <li>Animation (rotierende Würfel maybe ?! :D)</li>
          </ol>
        </li>
      </ol>

      <h2>Resumé</h2>

      <p>Ich denke die Gesellschaft ist heutzutage sehr schnell gelangweilt von jeglichem Medium. In keiner Dekade der Computerentwicklung gab es solche
modernen, diversen, preisgünstigen Entwicklungen von interessanten Produkten wie nach der Jahrtausendwende. Proportional dazu sinkt die anhaltende Begeisterung
für jegliche neue Entwicklung. Ein simpler Vergleich wäre an dieser Stelle Pokemon GO und die Gameboy Version des Spiels aus den 90er Jahren. Damit
beschäftigten sich Spieler häufig über mehrere Jahre, ohne Updates oder die Lieferung weiteren Contents, kommentarlos. Bereits jetzt sprechen viele Nutzer
wieder von einem VR Flop, obwohl vergleichsweise erst rudimentäre Schritte unternommen worden sind diese Medien nach vorne zu bringen. Speziell der Content und
die sinnvolle Anwendungsmöglichkeit entscheiden neben den Ergebnissen aus dem ersten Proposal über den Erfolg oder Misserfolg dieser neuen Medien. Dafür
benötigt dieser Technologie Zweig noch mehr Zeit und Partizipation aller beteiligten Entitäten.</p>

      <p>Viele Teile der Arbeit mögen sehr technisch wirken, aber es ist erforderlich, um einwandfreie Erlebnisse zu entwerfen und die Arbeit dient speziell
dazu diese anfänglichen technischen Hürden zu dokumentieren, verschiedene Software für die kreativen Prozesse zu testen und MobileVR sowie WebVR auch aus der
Sicht eines Anwenders auszureizen, um ein persönliches Gefühl für das Medium zu bekommen und wichtige Zeit für die finale Umsetzung zu einzusparen.</p>

      <p>Es ist vorstellbar, dass in Zukunft virtuelle Welten auf Großrechnern erzeugt werden in jene sich der Nutzer mit einem jeweiligen Smartdevice
einloggen kann. Cloud Computing wird bereits für eine Vielzahl von Anwendungen z.B. zur Kollaboration genutzt. Somit könnte die Rechenleistung der einzelnen Smartphones
entlastet werden und sich fokussiert auf das immersive Erlebnis des jeweiligen Nutzers konzentrieren.</p>

    <blockquote>
      <p>My mom saw a piece I did for the first time. She came out of the experience and she said, “Oh my gosh. This is a brain thing.” Skeptical people come
in and they say, “What you got?” They go into the experience and their jaw just drops. VR is its own medium. It’s not going to hurt any other medium. You’re going
to see a lot of traditional-media folks trying to get it to work in their domain, and they may succeed in some ways, but in what ways I’m not sure. I don’t
know. But something really special is happening.</p>
      <cite><span class="c-ref" data-ref-source-id="283" data-ref-type="zitat" data-ref-desc="">Jessica Brillhart</span> auf die Frage ob VR den klassischen
Film ablösen wird</cite>
    </blockquote>

    <div class="c-person">
      <div class="c-person__object">
        <img class="c-person__image" src="./assets/img/brillhart.jpg" alt="Jessica Brillhart"
data-source="https://www.technologyreview.com/s/603468/imagining-the-future-of-vr-at-google/"/>
      </div>
      <div class="c-person__content">
        <h4 class="c-person__name">Jessica Brillhart</h4>
        <p class="c-person__bio">Seit 2009 ist sie Mitglied in Google's Creative Lab mit dem sie viele Auszeichnungen gewinnen konnte. Im Anschluss tritt sie
2015 dem Google VR Team als leitende Filmmacherin bei. Sie gilt als eine der Pioniere in der Kreation von VR <span class="c-ref" data-ref-source-id="291"
data-ref-type="ref" data-ref-desc="" data-ref-hide-source>Inhalten.</span> Ihre Arbeitsweise konzentriert sich vor allem auf neuartige, experimentelle
Techniken
speziell bei dem Arrangement von Film Materialien und der <span class="c-ref" data-ref-source-id="292" data-ref-type="ref" data-ref-desc=""
data-ref-hide-source>Erzählstruktur.</span></p>
      </div>
    </div>

    <div class="c-video">
      <iframe class="c-video__item" src="https://www.youtube.com/embed/xPhdLz2Ebfw?autoplay=0&showinfo=0&controls=1&vq=hd720" allowfullscreen></iframe>
      <img class="c-video__overlay" src="https://img.youtube.com/vi/xPhdLz2Ebfw/hqdefault.jpg" alt=""/>
    </div>

    <div class="c-notes-marginal">
      <div class="c-notes-marginal__item">
        <span class="c-ref" data-ref-source-id="293" data-ref-type="bsp" data-ref-desc="" data-ref-hide></span>
      </div>
    </div>

    <p>In diesem Beispiel kann der aufmerksame Betrachter erkennen wie bei dem zusammenfügen der Szenen eine visuelle, subtile Verbindung zwischen den
einzelnen
Szenen geschaffen wird. Obwohl es sich um eine filmische Erzählung handelt ist diese Art von VR Content ebenfalls <span class="c-ref" data-ref-source-id="295"
data-ref-type="bsp" data-ref-desc="">relevant</span> für das Erzeugen von artifiziellen Realitäten, indem durch subtile Manipulationen des Mediums gezielte
Reize des Anwenders angesprochen werden können. Die Szenen fügen sich harmonisch aneinander, obwohl sie an völlig verschiedenen Orten aufgenommen wurden und
keine offensichtliche Verbindung aufweisen.</p>

    <p>Aus subjektiver Sicht wird viel darüber diskutiert, ob die neuen HMD Medien die Klassischen in Zukunft ablösen werden. Dies ist genau wie es Jessica
Brillhart beschreibt, auch meiner Meinung nach ein Trugschluss. VR wird sich einfügen und Anwendungsgebiete besetzen in denen das Medium glänzen kann. Nur weil
etwas in das Sichtfeld projiziert werden kann heisst es nicht automatisch, dass dies auch besser ist als bereits etablierte, klassische Medien. Der
Anwendungszweck und der Inhalt müssen adäquat repräsentiert werden, dann haben die neuen Medien eine Chance bestimmte Themenfelder besser zu transportieren,
als
bereits etablierte Medien. In der zukünftigen Entwicklung gilt es speziell für Designer herauszufinden, in welchen Nieschen sich diese Anwendungszwecke
manifestieren und wie diese am effektivsten transportiert werden können.</p>

    </div>
  </div>
</div>

<br/>

<div class="o-container-small">
  <div class="o-grid">
    <div class="o-grid__item">

      <div class="c-sources">

        <h2>Quellen</h2>
        <p>Alle Web Adressen wurden am 29. März 2017 final überprüft und abgerufen.</p>

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

        <h3>Spiele</h3>
        <div class="c-sources__game  c-columns  c-columns--game">
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
            <div class="c-tool__desc">Editor für jegliche Programmierung abgesehen von WebGL.</div>
            <a class="c-tool__link" href="https://atom.io/" target="tab">https://atom.io/</a>
          </div>
          <div class="c-tool">
            <div class="c-tool__title">PlayCanvas</div>
            <div class="c-tool__desc">WebGL Programmierung und Gestaltung.</div>
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
          <li><strong>Dominik Noel Blaschke</strong>, für die fundierte Expertise bei der Programmierung und als mein persönlicher Snacker in Crime.</li>
          <li><strong>Alec Korduc</strong>, für die Hilfe beim Gestalten des Covers.</li>
        </ul>
      </div>

    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
