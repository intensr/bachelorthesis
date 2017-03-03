<?php
function ref(
  $name = false,
  $href = false,
  //$xref = false,
  $type = false,
  $medium = false,
    $desc = false,
  $entity = false,
  $org = false,
  $year = false,
    $author = false,
    $authorSurname = false,
    $authorPrename = false,
    $yearId = false
)
{

  if($medium === 'video' || $medium === 'bild' || $medium === 'video') {
    $hideShortLink = '';
  } else {
    $hideShortLink = '  u-hide';
  }

  $ref  = '';
  $ref .= '<span class="c-ref" data-medium="'.$medium.'" data-entity="'.$entity.'" data-medium="'.$medium.'" data-org="'.$org.'"
           data-year="'.$year.'" data-author="'.$author.'" data-authorSurname="'.$authorSurname.'" data-authorPrename="'.$authorPrename.'" data-yearId="'.$yearId.'">';
  $ref .= '<span class="c-ref__name">'.$name.'</span>';
  $ref .= '<a class="c-ref__short-link'.$hideShortLink.'" href="#">';
  $ref .= '<sup class="c-ref__short"></sup>';
  $ref .= '</a>';
  $ref .= '<span class="c-ref__extract">';
  $ref .= ' <a class="c-ref__href" href="#">';
  $ref .= '<span class="c-ref__type">'.$type.'</span>';
  $ref .= ' <sup class="c-ref__id"></sup>';
  $ref .= '</a> ';
  if ($desc) {
    if ($href) {
      $ref .= '<a class="c-ref__desc" href="'.$href.'" target="tab">'.$desc.'</a> ';
    } else {
      $ref .= '<span class="c-ref__desc">'.$desc.'</span> ';
    }
  }
  $ref .= '</span> ';
  $ref .= '</span> ';
  return $ref;
}

// echo ref('die ist Linktext','http://www.zeit.de/digital/mobil/2014-05/smartphone-sensoren-iphone-samsung','vgl','article','Sensorik von Smartphones','Zeit','2014','Mächtige Sensoren','Biermann','Kai','a');
?>
