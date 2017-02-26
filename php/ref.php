<?php
function ref(
  $type = 'void',
  $xref = '#',
  $href = false,
  $desc = false,
  $showRef = false
)
{

  if ($showRef === false) {
    $showRef = '  u-hide';
  } else {
    $showRef = '';
  }

  $ref  = '';
  $ref .= ' <a class="c-ref" href="'.$xref.'">';
  $ref .= '<span class="c-ref__type">'.$type.'</span>';
  $ref .= ' <sup class="c-ref__id"></sup>';
  $ref .= '</a> ';
  if($href && $desc) {
    $ref .= '<a class="c-ref-desc'.$showRef.'" href="'.$href.'" target="tab">'.$desc.'</a> ';
  }
  return $ref;
}

// echo ref('Link','http://www.zeit.de/digital/mobil/2011-05/smartphone-sensoren-iphone-samsung/','Zeit.de, Sensorik von Smartphones');
?>
