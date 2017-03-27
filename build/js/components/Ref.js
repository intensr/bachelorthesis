import $ from 'jquery';
import json from '../data/sources.js';

// functions
function leadingZeroes(i) {
  if (i < 10) {
    i='00'+i;
  } else if (i < 100) {
    i='0'+i;
  }
  return i;
}

// Ref hook demo
// <span class="c-ref" data-ref-id="1" data-ref-type="ref" data-ref-desc="abcd" data-ref-hide data-ref-hide-source>1235</span>

// Full ref demo
// <span class="c-ref" data-ref-id="1" data-ref-type="ref" data-ref-desc="" data-ref-hide>
//  <a href="https://vimeo.com/4176485" class="c-ref__name"></a>
//  <a class="c-ref__short-link" href="#">
//    <sup class="c-ref__short"></sup>
//  </a>
//  <a class="c-ref__href" href="#">
//    <span class="c-ref__type">Ref</span>
//    <sup class="c-ref__id">001</sup>
//  </a>
//  <a class="c-ref__desc" href="https://vimeo.com/4176485" target="tab">
//    abcdefg
//    <span>The Dawn of Man, </span>
//    <span>2001 - A Space Odyssey, </span>
//    <span>Stanley Kubrick, </span>
//    <span>1968<span>a</span></span>
//  </a>
//  </span>

//$.getJSON('sources.json', function(data) {

// Get source data
var sources = json;

// Generate refs
if ($('.c-ref').length > 0) {
  $('.c-ref').each(function(i) {
    var $this = $(this),
        text = $this[0].innerHTML,
        refSourceId = $this.attr('data-ref-source-id'),
        refType = $this.attr('data-ref-type'),
        refDesc = $this.attr('data-ref-desc'),
        refHide = $this.attr('data-ref-hide'),
        refHideSources = $this.attr('data-ref-hide-sources'),
        refHideKneenote = $this.attr('data-ref-hide-kneenote'),
        refParameter = $this.attr('data-ref-parameter');

    // falsify ref hide sources
    if(refHideSources === undefined) {
      refHideSources = false;
    } else {
      refHideSources = true;
    }

    // remove link parameters if empty
    if(refParameter === undefined) {
      refParameter = '';
    }

    // Generate ref id with leading zeroes
    i++;
    i = leadingZeroes(i);

    // Empty ref hook
    $this.empty();

    //if(refHide === undefined) {

      // <span class="c-ref" data-ref-id="1" data-ref-type="ref" data-ref-desc="" data-ref-hide>
      //  <a href="https://vimeo.com/4176485" / <span class="c-ref__name"></a> / </span>

      // Add ref name as link or regular text depending on existing href
      if(sources[refSourceId].href) {
        $this.append('<a class="c-ref__name" href="'+sources[refSourceId].href+refParameter+'" target="tab"></a>');
      } else {
        $this.append('<span class="c-ref__name"></span>');
      }

      // Readd ref hook name
      $('.c-ref__name',$this).append(text);

      $this.append('<a class="c-ref__short-link" href="#source-'+sources[refSourceId].id+'"></a>');
      $('.c-ref__short-link',$this).append('<sup class="c-ref__short">['+i+']</sup> ');

      // Add ref id
      $this.attr('data-ref-id', i);
      $this.attr('id', 'ref-'+i)

      //}


      if(refType !== 'zitat') {

        // Log ID
        //console.log(i);

        // Search next p element
        var $currentPosition = $this.closest('p'),
            $nextPosition,
            $finalPosition,
            inserted = false,
            $marginalContainer = $('<div class="c-notes-marginal"></div>'),
            $kneenote = $('<div class="c-notes-marginal__item"><div class="c-kneenote"></div></div>');

        // Found p element?
        if ($currentPosition.length > 0) {

          // Found!
          //console.log('found p');
          $nextPosition = $currentPosition.next();

          // Disconnect following p
          if ($nextPosition.hasClass('o-p--tie')) {
            //console.log('remove p tie');
            $nextPosition.removeClass('o-p--tie');
          }

          // Add container if nessessary
          if (!$nextPosition.hasClass('c-notes-marginal')) {
            //console.log('add container');
            $currentPosition.after($marginalContainer);
            inserted = true;
          } else {
            // If not nessessary then apply the kneenote as far as its not a quote
            if(refType !== 'zitat') {
              //console.log('insert kneenote 1');
              $nextPosition.append($kneenote);
            }
          }

          //console.log($currentPosition.next(), $nextPosition);

          if (inserted === true) {
            //console.log('insert kneenote 2');
            $marginalContainer.append($kneenote);
          }

        } else {

          //console.log('not found p');
          $this.append('<p class="js-temp-marker"></p>');
          var $allP = $('p');
          var pIndex = $allP.index($('.js-temp-marker'));
          var $nextPosition = $allP.eq(pIndex+1);
          $('.js-temp-marker').remove();

          //console.log($nextPosition);

          if($nextPosition.hasClass('o-p--tie')) {
            ////console.log('p is tied');
            $nextPosition.removeClass('o-p--tie');
          }

          $finalPosition = $nextPosition.prev();

          if (!$finalPosition.hasClass('c-notes-marginal')) {
            ////console.log('next is container, adding kneenote hook');
            //console.log('test');
            $nextPosition.before($marginalContainer);
          }

          if ($nextPosition.prev().hasClass('c-notes-marginal')) {
            //console.log('next is container, adding kneenote hook');
            $nextPosition.prev().append($kneenote);
          }

        }

        $kneenote = $kneenote.children('.c-kneenote');

        // Create ref title text
        var refTypeName = '';
        if(refType === 'bsp') {
          refTypeName = 'Beispiel';
        } else if (refType === 'vgl') {
          refTypeName = 'Vergleich';
        } else if (refType === 'ref') {
          refTypeName = 'Referenz';
        }

        // Add xref
        $kneenote.append('<a id="kneenote-'+i+'" class="c-ref__href" href="#source-'+sources[refSourceId].id+'" title="'+refTypeName+'"></a>');
        $('.c-ref__href',$kneenote).append('<span class="c-ref__type">'+refType+'</span> ');
        $('.c-ref__href',$kneenote).append('<sup class="c-ref__id">'+i+'</sup> ');

        //  <a class="c-ref__desc" href="https://vimeo.com/4176485" target="tab">
        //    abcdefg
        //    <span>The Dawn of Man, </span>
        //    <span>2001 - A Space Odyssey, </span>
        //    <span>Stanley Kubrick, </span>
        //    <span>1968<span>a</span></span>
        //  </a>

        //Insert description with or without link
        if(sources[refSourceId].href) {
          $kneenote.append('<span class="c-ref__desc-container"><a class="c-ref__desc" href="'+sources[refSourceId].href+refParameter+'" target="tab"></a></span>');
        } else {
          $kneenote.append('<span class="c-ref__desc-container"><span class="c-ref__desc"></span></span>');
        }

        // Insert description from data if exists
        if(refDesc) {
          $('.c-ref__desc',$kneenote).append('<span>'+refDesc+'</span>');
        }

        // Vgl auto kneenote sources
        if(!refHideSources && refType === 'zitat') {
          if(sources[refSourceId].year) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].year+'</span>');
          }
          if(sources[refSourceId].yearId) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].yearId+'</span>');
          }
          if(sources[refSourceId].authorSurname) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].authorSurname+'</span>');
          } else if (sources[refSourceId].author) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].author+'</span>');
          }
        }

        // Vgl auto kneenote sources
        if(!refHideSources && refType === 'vgl') {
          if(sources[refSourceId].year) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].year+'</span>');
          }
          if(sources[refSourceId].yearId) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].yearId+'</span>');
          }
          if(sources[refSourceId].authorSurname) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].authorSurname+'</span>');
          } else if (sources[refSourceId].author) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].author+'</span>');
          }
        }

        // Default auto kneenote sources
        if(!refHideSources && refType !== 'vgl' && refType !== 'zitat') {
          if(sources[refSourceId].entity) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].entity+'</span> ');
          }
          if(sources[refSourceId].org) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].org+'</span> ');
          }
          if(sources[refSourceId].year) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].year+'</span> ');
          }
          if(sources[refSourceId].yearId) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].yearId+'</span> ');
          }
          if(sources[refSourceId].author) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].author+'</span> ');
          } else {
            if(sources[refSourceId].authorPrename) {
              $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].authorPrename+'</span> ');
            }
            if(sources[refSourceId].authorSurname) {
              $('.c-ref__desc',$kneenote).append('<span>'+sources[refSourceId].authorSurname+'</span> ');
            }
          }
        }

      }

        // }
      // }

      // if(!(refHide === undefined)) {
      //   $this.parent().remove();
      // }

  });
}
//});
