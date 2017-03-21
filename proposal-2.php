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
        <cite>Übertragenes Zitat von Prof. Wolfgang Laubersheimer beim Kölner Design Preis, 2016</cite>
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
zwischenzeitlich an die mögliche Verknüpfung von stereoskopischen 3D und Web -Technologien. In <span class="c-ref" data-ref-source-id="235" data-ref-desc="" data-ref-type="ref">einem <abbr title="z.d. Entwurf">Draft</abbr></span> des <abbr title="World Wide Web Consortium">W3C Konsortiums</abbr> von zwei LG Electronics Mitarbeitern erfuhr
ich, dass bereits Unternehmungen bezüglich der Web Implementierung vorgeschlagen wurden. Bis dato sind diese Entwürfe jedoch von keinem Webbrowser implementiert
worden und die Bemühungen gelten somit als eingestellt.</p>
      <p class="o-p--tie">Erst im Frühjahr 2016 wurde ich wieder auf das Thema aufmerksam als die Agentur Dunckelfeld, in der ich als Freelancer tätig bin, sich
die HTC Vive zulegte. Nach der ersten Nutzung war ich sehr beeindruckt von der Immersion in die virtuelle Realität der jeweiligen Anwendungen. Die Demo von
Aperture Science (Valve) mit einem <span class="c-ref" data-ref-source-id="215" data-ref-type="bsp" data-ref-parameter="?t=3m22s" data-ref-desc="" data-ref-hide>der Protagonisten</span> von Portal 2 faszinierte mich. Speziell die neu eröffneten Interaktionsmöglichkeiten mithilfe der Vive
Controller. Es gestaltet sich schwierig diese subjektive Wahrnehmung zu beschreiben. Selbst in der Betrachtung in Form von Videomaterial wird die Art der
Erfahrung, welche man bei der Nutzung von zeitgeistig, hochwertigen Head Mounted Displays (<abbr title="Head Mounted Display, z.d. Datenhelm">HMD</abbr>, z.d. Datenhelm) erfährt, nicht transportiert. <abbr title="Head Mounted Display, z.d. Datenhelm">HMD</abbr>s sind einige
der wenigen Medien, welche man selbst erfahren muss um das Potential und die Qualität zu erkennen. Dies ist einer der Gründe weshalb diese Arbeit empirisch
ausgelegt ist.</p>
      <p class="o-p--tie">Noch vor meiner Wahrnehmung von Google Cardboard und den bereits stattfindenden Entwicklungen von Virtual-, Augmented- und Mixed
Reality wurde mir bewusst, dass die stationären Geräte zwei entscheidende Probleme mit sich führen. Zum einen sind sie eben stationär und erfordern einen recht
komplexen Aufbau und zum anderen sind sie inklusive der erforderlichen Rechenleistung bis dato sehr teuer und erfüllen neben der Erzeugung von artifiziellen
Realitäten keine weitere Funktion. Dementsprechend besitzt nur eine vergleichsweise kleine Anzahl an Personen solche Geräte, oder haben Erfahrungen damit
gesammelt. Der Anwendungszweck ist noch sehr begrenzt, obwohl die Geräte in der Theorie bereits seit den 90er Jahren (ggf. früher) verschiedene, nützliche
Ansätze und Konzepte beinhalten.</p>
      <p class="o-p--tie">Nach einer intensiveren Auseinandersetzung mit der Materie probierte ich Google Cardboard aus, entdeckte WebVR und verfolgte neuere VR
Trends wie z.B. die Entwicklung von Google Daydream. WebVR beschreibt dabei die Erzeugung von virtuellen Realitäten in einem Webbrowser und wurde 2016 primär in
Zusammenarbeit von Google und Mozilla entwickelt. WebVR war bis Anfang 2017 sehr rudimentär - das Nischenprodukt einer Nischenbranche - und ist bis dato in
einem experimentellen Stadium. Die Darstellung auf meinem Motorola G4 (Low Budget Smartphone) war überzogen gesagt eine Katastrophe. Fehlende Sensorik, eine
unzureichende Auflösung und mangelnde Interaktionsmöglichkeiten sowie Anzeigefehler reduzierten meine persönliche User Experience auf ein Minimum. Dennoch war
ich abermals fasziniert von dem Enthusiasmus der Unternehmen Google, Mozilla und dem WebVR Initiator Brandon Jones. Zu diesem Zeitpunkt war Google Daydream
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
gleichzeitig neue Herausforderungen für Designer und Entwickler, wie z.B. die Suche nach dem optimalen Eingabemedium, die Erstellung adäquater Anwendungen, oder
die Reduktion der sog. VR Motion Sickness, welche Übelkeit verursachen kann. Sofern sich VR fest etablieren kann wird der Rahmen für Designer konkret erweitert,
indem nicht nur mit und in den Medien gearbeitet wird sondern die Medien selbst modifiziert und abgewandelt werden können, welches teilweise und vereinzelt
schon aktuell der Fall ist.</p>
      <p class="o-p--tie">Viele Unternehmen und Hersteller versuchen die physische Realität möglichst präzise in die virtuelle Realität zu übertragen, welches
zu fragwürdigen Applikationen wie dem Job Simulator (in diesem Fall gewollt), oder Koch Simulationen (in diesem Fall ernst gemeint) führt. Persönlich bin ich
speziell an der Manipulation des Körpers, der Sinne und dem Surrealismus innerhalb virtueller Realitäten interessiert. Mich fasziniert der Gedanke Dinge zu
ermöglichen, welche in der physischen Welt nicht, oder schwierig umzusetzen sind, ebenso die Beschäftigung mit der Körperlosigkeit, dem Annehmen neuer
Identitäten und der Selbstdarstellung im virtuellen Raum. Für mich verbergen sich in diesen Komponenten der tiefere Sinn von Virtual Reality (VR), Augmented
Reality (AR) und Mixed Reality (MR) sowie die Möglichkeit diese fest in den gesellschaftlichen Alltag zu integrieren.</p>

      <p>Durch den experimentellen Charakter von WebVR ist das Anliegen für dieses Proposal die Erforschung und Ausreizung der Möglichkeiten jener Technologie.
Es geht dabei nicht darum ein konkretes, ultimatives Konzept zu definieren, oder VR als das ultimative Medium zu preisen, sondern Rahmenbedingungen zu erzeugen.
Verschiedene Ansätze werden in kleineren Experimenten getestet. Jedes dieser Experimente enthält Ansätze, welche sich in ihrer Komplexität steigern und
teilweise umsetzen lassen. Wenn der Komplexitätsgrad für die Umsetzung den zeitlichen Rahmen des Proposals überschreitet, wird zumindestens versucht einen
schriftlichen Ausblick zu beschreiben. So startet jede Exploration mit einfachen Versuchen und schildert den Prozess von rudimentären Gehversuchen bis hin zu
komplexeren Strukturen und Aufbauten.</p>

      <ul>
        <li>Was wird benötigt, um ein adäquates WebVR Erlebnis zu erzeugen?
          <ul>
            <li>Wo ergeben sich etwaig Komplikationen?</li>
            <li>Warum hat WebVR und MobileVR den Massenmarkt noch nicht erreicht, obwohl es bereits verfügbar ist?</li>
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
welche auf spezifischer Hardware basiert, da sich die Hersteller auf keinen einheitlichen Standard für Hardware Komponenten geeinigt haben. Das heisst es gibt
unterschiedliche Controller, Sensoren und Anwendungen.</p>
      <h3>Hardware</h3>
      <p>Im ersten Schritt die Hardware Ebene in jener eruiert wird für welche Art von Gerät die jeweilige Applikation primär optimiert wird.</p>
      <p class="o-p--tie">Dies ist vergleichbar mit den Entwicklungen im regulären Webdesign in denen die Art der Webseite das jeweilige Medium definiert. Die
Herangehensweise des Mobile First Gedankens hat sich dort etabliert, indem Webseiten in der Regel zuerst für das Smartphone angelegt und anschließend auf
weitere Geräte skaliert werden. Das Smartphone gilt aus Entwicklersicht im Vergleich zu beispielsweise Desktop Rechnern als das Medium mit den niedrigsten
Spezifikationen in Leistung und Visualisierung. Die Bildschirme sind kleiner, die Rechenleistung ist begrenzter und die Netzwerkverbindung häufig
schlechter.</p>
      <p class="o-p--tie">Ebenso gestalten sich WebVR Applikationen im Bezug auf die jeweilige Hardware. Was im Responsive Webdesign durch die
unterschiedlichen
Geräte wie Smartphones, Tablets, Notebooks und Desktop Rechner mithilfe von sog. Media Queries unterteilt wird, kategorisiert WebVR durch sog. Input- und
Immersion Level.</p>

      <p>Es existieren drei Input Level bzw. verschiedene Typen von Controllern mit sog. “degrees of freedom” (z.d. Grade der Freiheit / DOF):</p>
      <ol>
        <li><strong>0 DOF</strong> entspricht Endgeräten welche in ihrer Eingabe nur über Klicken oder Tasten interagieren. Das Sichtfeld ist an diese
Interaktion gebunden indem der Anwender virtuelle Objekte direkt anschauen muss, um mit ihnen zu interagieren. Dies wird häufig auch als sog. “gaze controller”
(starrender Controller) referenziert (z.B. Desktop Computer ohne <abbr title="Head Mounted Display, z.d. Datenhelm">HMD</abbr>, oder Google Cardboard Anwendungen).</li>
        <li><strong>3 DOF</strong> (nur Orientierung) inkludiert die Nutzung eines Laserpointer ähnlichen Controllers zur Spezifizierung einer bestimmten
Richtung oder eines Ortes. Die Position des Controllers ist dabei von des Blickrichtung des Nutzers abhängig. Dazu zählt der Google Daydream- sowie der Gear VR
Controller (z.B. Google Daydream, oder Samsung Gear VR).</li>
        <li><strong>6 DOF</strong> (Position und Orientierung) ist derzeit der beste Standard bei VR Controllern. Deren Position und Orientierung werden
unabhängig vom <abbr title="Head Mounted Display, z.d. Datenhelm">HMD</abbr> (Head Mounted Display / z.d. Datenhelm) getrackt und empfinden die natürliche Nutzung der Hand, in Form eines Controllers, am effektivsten
nach (z.B. Oculus Rift, oder HTC Vive).</li>
      </ol>

      <p>Diese stehen in direkter Korrelation mit den Immersion Levels:</p>
      <ol>
        <li><strong>No VR</strong> stellt die rudimentäre Betrachtung auf einem mobilen oder stationären Bildschirm, ohne Splitscreen dar.</li>
        <li><strong>Stationary VR</strong> entspricht Geräten mit 3 bzw. 6 DOF.</li>
        <li><strong>Seated VR</strong> entspricht mit 3 bzw. 6 DOF, bei dem durch das Sitzen eingeschränkte Radien und Winkeln für die Interaktionen
entstehen.</li>
        <li><strong>Room Scale VR</strong> ist ebenfalls 6 DOF allerdings mit der Bewegung ausgeweitet auf den jeweiligen Raum indem sich der Anwender
befindet.</li>
      </ol>

      <p>Die Kategorisierungen sind als Anhaltspunkte zu verstehen die jeweiligen Geräte einzuordnen und ein besseres Verständnis für deren jeweiligen
Möglichkeiten zu erlangen. Durch den experimentellen Status sind dies jedoch nur ungefähre Einordnungen, welche sich stetig abwandeln können. </p>
      <p class="o-p--tie">Die Bestrebungen solche Standards zu entwickeln sind allerdings wichtig, um die Entwicklungen voranzutreiben. Nach der Vorstellung
des
iPhones und der Popularisierung von Smartphones, wurde im Webdesign erst mit der Einführung von Media Queries eine ausreichende Effektivität erreicht Webseiten
für mobile Endgeräte zu optimieren. Obwohl stetig neue Smartphones mit verschiedenen Displaygrößen, Auflösungen und weiteren unterschiedlichen Spezifikationen
erscheinen, existieren bis dato nur eine relativ geringe Anzahl an etablierten Media Queries (z.B. gängig für Tablet Devices -> device-width 768px). Nur diese
Simplifizierung ermöglicht die zeitnahe Optimierung von Webseiten. Ebenso verhält sich das Themenfeld WebVR indem Einigungen auf bestimmte Standards die Arbeit
für die jeweiligen Entwickler enorm reduzieren. Die o.g. beispielhaften Standards des DOF zeigen sich z.B. bei der Nachrüstung von Samsungs Gear VR Controller,
dessen Eingabegerät in seiner Funktionsweise dieselben Spezifikationen besitzt wie der Controller der Google Daydream. Durch solche Normen können WebVR
Entwickler für beispielsweise 3 DOF Geräte unbedenklich Erlebnisse kreieren in denen die Eingabe und Interaktion sowohl mit GearVR als auch Daydream
funktionieren. Fehlen jedoch bestimmte Controller Elemente (z.B. Startknopf), führt dies für die Entwickler ggf. zu Problemen und der Suche nach Alternativen,
worunter ebenfalls die Usability für den Endkonsumenten leidet. Ein adäquater Vergleich sind die Controller der Spielkonsolen Sony Playstation und der
Microsoft
XBox. Obwohl beide Controller verschieden sind bedienen sie sich den selben Grundfunktionalitäten und ermöglichen den Nutzern damit einen einfachen Wechsel
zwischen den unterschiedlichen Medien. Ebenso die Nachrüstung von Touch Controllern bei der Oculus Rift. Diese Controller unterscheiden sich zwar von denen der
HTC Vive, doch die Grundeigenschaften wie beispielsweise Zustände wie greifen, halten, loslassen, etc. sind dieselben. Aus diesen Gründen sind Standards im
Hardwarebereich für die positive Entwicklung von VR- und anderen Technologien unerlässlich bzw. überwiegend förderlich.</p>

      <p>Zunächst wird dementsprechend der Funktionsumfang entsprechender Hardware analysiert. Zu Testzwecken wurden diverse <abbr title="Head Mounted Display, z.d. Datenhelm">HMD</abbr> Brillen aus moderaten
Preissegmenten erworben und bewertet, mit dem Fokus auf das Potential für den Massenmarkt:</p>
      <table style="width: 100%;">
        <caption class="o-h5">
          <abbr title="Head Mounted Display, z.d. Datenhelm">HMD</abbr> Brillen Vergleich
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

      <p>Die drei Aspekte der Immersion, Bildqualität und des Sichtfeldes, welche sich aus den tabellarischen Daten zusammensetzen, sind bei der Auswahl der
Brillen von primärem Interesse. Alle weiteren Kriterien haben einen sekundären wenn auch nicht unerheblichen Einfluss.</p>
      <p class="o-p--tie">Die Immersion beschreibt dabei die Intensität der Sinnesübertragung in die artifizielle Realität. Dabei sollte die Wahrnehmung der
physischen Welt reduziert werden und die Identifikation in und mit der virtuellen Welt gesteigert werden. Immersion stammt aus dem Lateinischen und beschreibt
das geistige „Eintauchen“ oder Verschmelzen. Desto realistischer die Bewegungsübertragung, geringer die Reaktionszeit (Latenz) sowie die Sicht mittels der
VR-Headsets dargestellt und vom Nutzer verspürt wird, je höher ist die Immersion. Nahezu alle Faktoren beeinflussen den Grad der Immersion, wobei speziell die
visuellen Komponenten wie die Bildqualität und das Sichtfeld erheblich sind.</p>
      <p class="o-p--tie">Die Qualität des Bildes setzt sich aus der Smartphone Hardware (Auflösung, Pixeldichte, Matrix Art, Displaygröße), den Eigenschaften
der Brille (Qualität der Linsen, Formfaktor und Positionierung innerhalb der Brille) sowie der Nutzung unterschiedlicher Software und deren Features (native
Applikation, WebVR, “Low Persistence Technologie”) zusammen. Die Hardware ist in diesem Bezug, sogar auf dem Smartphone Niveau, relativ weit fortgeschritten.
Die Pixel können zwar selbst bei den besten Geräten noch erkannt werden, doch es erweist sich im Anbetracht auf die bisherige Entwicklung als wahrscheinlich,
dass sich dies in der näheren Zukunft noch merklich verbessern wird.</p>

      <p>Das natürliche Blickfeld des Menschen mit Augenbewegungen beträgt ca. 270°. Simple Videobrillen mit einem gewöhnlichen Sichtfeld von ca. 45° sind
lediglich in der Lage eine große Leinwand in einigen Metern Entfernung vor einem zu simulieren. Die ersten Generationen von VR Brillen starteten mit einem
diagonalem Sichtfeld von etwa 100°. Diese Sichtfeld, was vergleichbar mit dem Sichtfeld durch eine Taucher- oder Skibrille ist, reicht jedoch völlig aus, um
die
Illusion hervorzurufen, man befindet sich in der virtuellen Welt. Wenn man für Computerspiele oder andere VR-Erfahrungen die größtmögliche Immersion haben
möchte, sollte die VR Brille ein möglichst großes Sichtfeld haben. Hierzu sollten dann jedoch auch die anderen Faktoren nicht vernachlässigt sein.</p>

      <div class="u-red">hier fehlt inhalt</div>

      <p>Neben den Aspekten des tabellarischen Vergleichs können weitere Eigenschaften untersucht werden, wie beispielsweise die Art der Smartphone
Befestigung,
oder die Abschirmung gegen Lichteinflüsse. Diese sind zwar nicht unerheblich, aber nicht ausschlaggebend. In der Gesamtheit fällt auf, dass jedes Gerät
verschiedene Vorzüge erfüllt, jedoch häufig mindestens einen merkbaren Nachteil beinhaltet. Gear VR, welches in dem Vergleich nicht aufgeführt wird, bietet
beispielsweise einen umfassenden Funktionsumfang, speziell nach dem Upgrade durch einen eigenen Controller. Allerdings funktioniert es nur mit Smartphones der
Marke Samsung und fällt somit aus dem Raster.</p>
      <p class="o-p--tie">Daydream muss letztendlich nur wegen dem Controller erworben werden, da es neben Gear VR keine Alternativen für den DOF3 Bereich
gibt,
außer eine Controller Emulation auf einem weiteren Smartphone zu erzeugen. Es ist allerdings möglich andere Brillen mit dem Daydream Controller zu nutzen. So
eindrucksvoll die visuelle Darstellung von Virtual Reality Projekten bei der ersten Nutzung sind, so erfordert ein anhaltendes, positives Nutzererlebnis eine
Interaktionsmöglichkeit mit der jeweiligen Applikation. Somit gilt Daydream als das Produkt der Wahl, kann jedoch durch eine Brille mit persönlichen
Präferenzen
gekoppelt werden.</p>

      <p>Die nächste Komponente für Mobile VR ist das jeweilige Smartphone. Da die Nutzung von Daydream nach der Brillen Auswertung als obligatorisch gesetzt
wird, muss das ausgewählte Smartphone den Daydream- und Android 7.1 Nougat Spezifikationen entsprechen.</p>
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

      <p>Es zeigt sich, dass das Axon 7 von ZTE erstaunliche Werte hervorbringt und sich deutlich von seinen Konkurrenten abhebt, vor allem preislich. Mobile
VR
erreicht damit einen größeren potentiellen Nutzerkreis, welcher sich sofern die Technologie relevant bleibt, in den nächsten Monaten durch die Eigenschaften
des
Mooreschen Gesetzes erweitern wird. </p>

      <p>Für einen empirischen Gesamtpreis von 430€ wird Mobile VR auf dem zeitgeistlich besten Standard möglich (Reduktion um über 50% im Vergleich zu den
verfügbaren Google Pixel Geräten). Dabei hat der Nutzer den Mehrwert eines leistungsstarken Smartphones für die Anwendung in anderen Bereichen. Beim Kauf eines
stationären Gerätes riskiert der Anwender ggf. den Verlust von Interesse nach kurzer Zeit ohne weitere Anwendungsmöglichkeit. Bei dem Kauf einer HTC Vive oder
Oculus Rift liegt der Preis für diese Geräte zuzüglich der entsprechenden Hardware zwischen 1200-1500€. Damit ist der Gesamtpreis gegenüber einem Vergleich von
2016 bereits deutlich gesunken, welches sich voraussichtlich auch weiterhin abzeichnen wird. Auch Oculus hat seine Preise für die Rift bereits gesenkt.

        <span class="c-notes-side-hook">
          <span class="c-notes-side">
            <span class="c-notes-side__icon">
              <span class="c-icon-asterisk"></span>
            </span>
            <span class="c-note-side">
              <span class="c-note-side__content">
                <strong class="c-note-side__headline">ZTE´s Daydream Pleite</strong>
                <span class="c-note-side__text">Der Kauf des ZTE Axon 7 stellte sich zeitweilig als verfrüht heraus, da das Axon 7 zwar von Google als Daydream
fähiges Smartphone verifiziert ist, jedoch noch kein lauffähiges Nougat 7.1 Update vom Hersteller freigegeben wurde (Stand 17.03.2017). Um das Smartphone
dennoch zu nutzen, wurde es mit LineageOS (Drittanbieter Software) und funktionierendem Android 7.1.1 Nougat geflasht, welches ein unkonventioneller Weg ist,
bei dem Garantie erlischt. Der einzige Vorteil liegt darin Daydream vor dem Großteil der anderen Axon 7 Anwendern zu nutzen und bereits Erfahrungen zu
sammeln.</span>
              </span>
            </span>
          </span>
        </span>

      </p>
      <p class="o-p--tie">Aus der Hardware Analyse ergeben sich zusammengefasst mehrere wichtige Erkenntnisse. In Anbetracht der aktuellen Entwicklungen sollte
spätestens gegen Ende des Jahres 2017 Mobile VR Hardware den Massenmarkt erreicht haben. Des Weiteren ist der Preis für stationäre VR Erlebnisse zwar
reduziert,
bleibt dennoch vergleichsweise teuer. Die Mobile VR Alternativen bieten dabei in Anbetracht der visuellen Immersion bereits annähernd ähnliche Erlebnisse.
Zusätzlich fördert die Modularität von Mobile VR (Brille, Controller, Smartphone) die Flexibilität und unabhängige Weiterentwicklung der Mobile VR Komponenten
gegenüber den stationären Geräten. Jeder Teil kann individuell ersetzt werden, sofern dieser den essentiellen Spezifikationen der jeweiligen Kategorie
entspricht. Der Nachteil von Mobile VR manifestiert sich in der geringeren Rechenleistung gegenüber stationären Geräten sowie der aktuell mangelhaften
Beteiligung des Massenmarktes. Zum einen begründet sich dies in der einstweilig teuren Hardware, welches sich in der näheren Zukunft ändern könnte. Inwiefern
dies ebenfalls an dem Mangel konkreter Anwendungsgebiete bzw. der zugehörigen Software liegen könnte wird im nächsten Abschnitt unter anderem eruiert.</p>

      <h3>Software</h3>

      <p>Die Software Ebene beschäftigt sich zum einen mit den Besonderheiten und Anwendungen kreativer Prozesse und zum anderen mit den jeweiligen Plattformen
auf denen Virtual Reality Erlebnisse zur Verfügung gestellt werden können. Diese Themenfelder verschwimmen etwaig untereinander (siehe Einleitung Setup). Der
reguläre Weg die Systeme Daydream, Cardboard, Rift, Vive, Playstation VR, usw. zu nutzen, besteht in der Nutzung spezifischer Applikationen oder Programme wie
Steam, Daydream VR, Cardboard VR, Gear VR App, uvm.</p>

      <div class="u-red">Hier fehlt Inhalt (native apps vs webVR / unterschiede / warum webvr nochmal kurz)</div>

      <p>Aufgrund der vielen verschiedenen Devices und deren Softwares wurde 2017 der Open XR Standard geschaffen, um eine Einigung auf bestimmte Best
Practices
herbeiführen und die Arbeit für die End-Entwickler zu vereinfachen. </p>

      <img src="./assets/img/rasierklingen.gif" alt=""/>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="190" data-ref-type="ref" data-ref-desc="Aktueller Interaktion zwischen Soft- und Hardware "
data-ref-hide></span>
        </div>
      </div>

      <img src="./assets/img/rasierklingen.gif" alt=""/>

      <div class="c-notes-marginal">
        <div class="c-notes-marginal__item">
          <span class="c-ref" data-ref-source-id="190" data-ref-type="ref" data-ref-desc="Zukünftige Schnittstellen Interaktion " data-ref-hide></span>
        </div>
      </div>

      <p>Bis zur Etablierung dieses Standards ist WebVR in diesem Kontext ebenfalls förderlich, weil es zumindestens auf der Software Ebene eine einheitliche
Entwicklung ermöglicht, welche sich wiederum auf verschiedene Plattformen und digitale Werkzeuge verteilt. Einige dieser Tools werden im folgenden Abschnitt
vorgestellt, um einen Einblick in die verschiedenen Herangehensweisen zur Entwicklung von VR Erlebnissen zu erläutern.</p>

      <h4>Unity</h4>
      <p>Die erste Möglichkeit besteht darin etablierte Desktop Tools aus der Gaming Industrie wie beispielsweise Unity (gleichzeitig Programm und Engine),
oder
die Hilfsmittel der Unreal Engine zu nutzen. Unity ist in seiner Grundversion für Einsteiger kostenlos und bereits seit 2005 auf dem Markt. Kommerziell
erfolgreiche Spiele wie Hearthstone von Blizzard Entertainment, Endless Space von Amplitude Studios, oder Rust von Facepunch Studios basieren auf der beliebten
Engine. Der Vorteil von Unity ist neben der größe der Community, der Flexibilität in den Anwendungsbereichen und der jahrelangen Optimierung der Kernsoftware
vor allem die graphische Benutzeroberfläche. Unity verbindet damit Programmierer und Designer wie kaum ein anderes Tool. Auch bei sog. Hackathons wie dem
Global Game Jam ist Unity häufig das primäre Werkzeug. Bildungseinrichtungen und deren Studenten wie z.B. die Köln International School of Design, oder das
Cologne Game Lab realisieren ihre Projekte ebenfalls häufig mit eben diesen Engine Editoren wie Unity oder denen der Unreal Engine. Diese sind in der Regel
dafür konzipiert, ein bündiges Gesamtpaket auszuliefern d.h. ein Spiel, eine Applikation, welche zwar an APIs angebunden werden kann, jedoch in seiner
Gesamtheit über statische Inhalte und Assets verfügt. Für Mobile VR (z.B. Cardboard) Applikationen eignet sich Unity optimal, da diese als App auf den
jeweiligen Smartphones als fertige Pakete genutzt werden können und sich einfach über beispielsweise die Plattformen Google Play und den Apple Store
distribuieren lassen.</p>

      <ul>
        <li>Webseite</li>
        <li>Community</li>
        <li>Doku- und/oder API</li>
      </ul>

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
              <li>JavaScript ist nicht die Primärsprache</li>
              <li>Kein natives WebVR (Export möglich)</li>
              <li>Keine native Anbindung von Web APIs</li>
              <li>Unity verpackt seine Anwendungen in geschlossenen Bundles und <i>erschwert</i> damit die Anbindung an weitere Web Elemente</li>
            </ul>

          </div>
        </div>
      </div>

      <h4>Native Websprachen</h4>
      <p>Ein gegensätzlicher, puristischer Ansatz besteht in der Nutzung von nativem JavaScript, HTML, CSS, WebGL und der bekannten JavaScript 3D Library
Three.js. Anders als bei Unity muss in nativen Websprachen jegliche Funktionalität weitgehend eigenständig erstellt werden. Ein Problem beim Erstellen von 3D
Anwendungen besteht in dem ständigen Testen dieser Umgebungen. Bei Unity oder ähnlichen Anwendungen existieren Preview Ansichten für die Render Prozesse,
welche
in nativen Programmierumgebungen ebenfalls eigenständig angelegt werden müssen. Die Dokumentation des Arbeitsprozesses gestaltet sich zusätzlich schwierig,
speziell wenn mehrere Entwickler am selben Projekt arbeiten. Zu fertigen Code Fragmenten prominenter Libraries existieren in der Regel bereits ausführliche
Dokumentationen und werden durch die größere Nutzerschaft häufig im Peer Review Verfahren auf ihre Funktionalität gegengeprüft. Zusammengefasst kann dieser
Ansatz die persönlichen Erfahrungen enorm schärfen, sind aber zeitlich meistens so aufwändig, dass anfänglich enthusiastische Projekte mit der Zeit nicht mehr
weiter gepflegt werden, weil größere Unternehmungen mit größerer Reichweite den angestrebten Funktionsumfang schneller erfüllen können und häufig
übertreffen.</p>

      <ul>
        <li>Webseite</li>
        <li>Community</li>
        <li>Doku- und/oder API</li>
      </ul>

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

      <h4>Aframe</h4>
      <p>Eine Weiterentwicklung von der nativen Herangehensweise ist die Entwicklung von WebVR Applikationen mithilfe des leistungsstarken Virtual Reality
Frameworks Aframe von Mozilla. Es wird von der WebVR Community gepflegt. Aframe stellt ähnlich wie jQuery für die vereinfachte Manipulation von JavaScript,
Funktionalitäten zur Erzeugung von artifiziellen Realitäten zur Verfügung. Dabei basiert es auf Three.js, verfügt aber im Gegensatz dazu bereits über fertige
Komponenten und beschleunigt, damit den Arbeitsprozess. Die einzelnen Komponenten können direkt über HTML eingefügt werden und durch Daten Attribute
manipuliert
werden. Erweiterungen oder die Kreation eigener Komponenten ist mithilfe von JavaScript möglich.</p>

      <ul>
        <li>Webseite</li>
        <li>Community</li>
        <li>Doku- und/oder API</li>
      </ul>

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

      <h4>Cables</h4>
      <p>Durch die Arbeit bei der Agentur Dunckelfeld konnten persönliche Kontakte zu den Entwicklern von undev hergestellt werden. In einem internen,
minimalistischen Workshop präsentiert Thomas Kombüchen Ende 2016 den aktuellen Stand ihrer entwickelten Cables Plattform und dessen Möglichkeiten. Cables
greift
ähnlich wie Aframe auf die Technologien WebGL und Three.js zurück. Anders als Aframe bietet Cables jedoch eine grafische Oberfläche und nutzt den Browser als
direkte Schnittstelle für kreative Prozesse. Der Vorteil für Designer liegt dabei in der grafischen Benutzeroberfläche bei der verschiedene Knotenpunkte
(Nodes)
interaktiv verbunden werden können, um Ergebnisse zu kreieren. Jeglicher mögliche Eingabewert kann manipuliert werden und Projekte werden frei skalierbar. Dies
beschleunigt die Arbeit gegenüber nativer Three.js manipulation erheblich und erfordert weniger Programmierkenntnisse. Programmierer können vorhandene Nodes
editieren oder eigene erstellen, um sie den Anforderungen ihrer Applikation zu optimieren, ähnlich wie in Unity. Cables ist ein universelles Werkzeug, welches
für audiovisuelle Projekte genutzt werden kann. So wird beispielsweise neben der Kreation von Webprojekten ebenfalls die Ansteuerung von physischen
Programmierschnittstellen wie Arduino, Lichtquellen, Beamern usw. möglich. Zur Zeit wird Cables hauptsächlich genutzt, um Web Erlebnisse mit WebGL zu erzeugen
und repetitive Arbeitsprozesse zu beschleunigen. Zur Zeit sind die WebVR Komponenten noch in der frühen Entwicklungsphase (jedoch bereits implementiert), es
ist
ggf. trotzdem sinnvoll dieses Projekt an dieser Stelle zu erwähnen, da es sehr viel Potential beinhaltet und sich in den nächsten Jahren zu einem wichtigen
Tool
entwickeln könnte.</p>

      <ul>
        <li>Webseite</li>
        <li>Community</li>
        <li>Doku- und/oder API</li>
      </ul>

      <div class="c-columns">
        <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          <div class="o-grid__item">

            <h5>Chancen</h5>
            <ul>
              <li>Universelles Werkzeug dessen Beherrschung weitere Themenfelder speziell für Designer eröffnet</li>
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

      <h4>PlayCanvas</h4>
      <p>Als letztes wird das Werkzeug PlayCanvas vorgestellt, welches die besten Eigenschaften aller bisher vorgestellten Anwendungen in sich vereint. Die
Webapplikation vereint die Vorzüge der grafischen Oberfläche von Unity, nutzt jedoch objektorientiertes JavaScript und weitere Websprachen anstatt eine eigene
Programmierung, wodurch die Anbindung weiterer Web Funktionalitäten vereinfacht wird. Die Größe der Community sowie die verfügbaren Instruktionen sind noch
nicht so populär wie jene von Unity, befinden sich jedoch in der positiven Entwicklung. Die Benutzeroberfläche vereint Elemente von Unity, Photoshop und Cinema
4D in sich und ermöglicht dem Entwickler durch direkte WYSIWYG Manipulationen das jeweilige Projekt zu editieren. Ein weiterer Vorteil für die Entwicklung von
WebVR und die Kollaboration mit weiteren Teammitgliedern manifestiert sich in der direkten Freigabe des Projektes im Webbrowser sowie der Möglichkeit
Teammitglieder in Projekte einzuladen. Weitere Technologien und Scripte zur Optimierung der jeweiligen Szenerie, ähnlich wie bei Unity, sind bereits in der
Software enthalten.</p>

      <ul>
        <li>Webseite</li>
        <li>Community</li>
        <li>Doku- und/oder API</li>
      </ul>

      <div class="c-columns">
        <div class="o-grid  o-grid--gutter-half  o-grid--1/1@mobile  o-grid--1/2@tablet  o-grid--1/2@laptop  o-grid--1/2@desktop  o-grid--1/2@print">
          <div class="o-grid__item">

            <h5>Chancen</h5>
            <ul>
              <li>Weitgehend alle positiven Faktoren der bisherigen Anwendungen</li>
            </ul>

          </div>
          <div class="o-grid__item">

            <h5>Hindernisse</h5>
            <ul>
              <li>PlayCanvas hostet seine Projekte intern und erfordert eine kostenpflichtige Mitgliedschaft für die externe Nutzung, die Entfernung des
firmeneigenen Brandings und fortgeschrittene Funktionalitäten</li>
              <li>Durch die primäre Nutzung des Web Mediums sind ggf. nicht alle nativen Funktionen der jeweiligen Endgeräte unmittelbar nutzbar</li>
            </ul>

          </div>
        </div>
      </div>

      <p>Für die zukünftige WebVR Entwicklung werden zusammengefasst folgende, elementare Parameter gesetzt:</p>
      <ol>
        <li>Applikationen werden primär für 3 DOF kreiert und erhalten nach Möglichkeit einen Fallback für 0 DOF User Experiences nach dem Vorbild von
Responsive Webdesign.</li>
        <li>Die Eingabeschnittstelle muss entweder über eine Interaktionstaste (Minimalanforderung), oder einen zugehörigen Controller mit Google Daydream
Spezifikationen verfügen (optimal).</li>
        <li>Das zugehörige Smartphone muss im Optimalfall den Daydream Spezifikationen entsprechen und die Anwendung in ausreichender Qualität darstellen
können.</li>
        <li>Als Entwicklungssoftware wird primär PlayCanvas genutzt, es können jedoch im weiteren Verlauf weitere Tools wie Aframe oder Cables verwendet
werden.
Von einer Entwicklung in nativer Umsetzung wird abgesehen.</li>
        <li>Die Programmiersprache der Wahl ist JavaScript.</li>
      </ol>

      <h2>Experimente</h2>
      <p>Nach der Analyse der Entwicklungstools muss zunächst abgesteckt werden, welche Experimente im Rahmen der Zeit des Proposals möglich sind. Mit dem
ersten Antesten von PlayCanvas zeigen sich zwei Möglichkeiten zur Präsentation des WebVR Mediums auf. Entweder eine strukturierte Planung und Konzeption welche
nach und nach abgearbeitet wird, oder ein agiler Prozess indem auf etwaige Veränderungen sofort reagiert wird und die Entwicklung prototypisch verfolgt wird.
Die Probleme bei der strukturierten Planung ist die Variable der etwaigen, technischen Komplexität des angestrebten Konzepts. Anfangs wurde versucht bestimmte
Vorstellungen umzusetzen, welches den Entwicklungsprozess entscheidend verlangsamte. Bestimmte Prinzipien der agilen Entwicklung, welche sich auch in der
Softwarebranche als immer beliebter abzeichnet (z.B. durch die Nutzung von Scrum), werden daher zur Entwicklung genutzt. Anders als im ersten Anlauf wird nun
versucht eine virtuelle Welt zu erzeugen welche sich in einzelnen Schritten, in einem organischen Prozess durch Funktionalitäten erweitert wird. Diese
Fortschritte werden in einem sog. Development Log dokumentiert und mit den jeweiligen Ressourcen zu den jeweiligen Entscheidungen ergänzt. Im Vordergrund der
agilen Entwicklung stehen vier Grundregeln wovon speziell drei entscheidend sind:</p>

      <ol>
        <li><strong>Individuals and interactions over processes and tools</strong></li>
        <li><strong>Working software over comprehensive documentation</strong></li>
        <li>Customer collaboration over contract negotiation</li>
        <li><strong>Responding to change over following a plan </strong></li>
      </ol>

      <p>That is, while there is value in the items on the right, we value the items on the left more.</p>


      <h3>Log Tag 1 - 19.03.2017</h3>

      <div class="u-red">Hier weitermachen</div>

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
einloggen
kann. Cloud Computing wird bereits für eine Vielzahl von Anwendungen z.B. zur Kollaboration genutzt. Somit könnte die Rechenleistung der einzelnen Smartphones
entlastet werden und sich fokussiert auf das immersive Erlebnis des jeweiligen Nutzers konzentrieren.</p>

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
