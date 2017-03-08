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
  $('.c-ref').each(function(i) {
    var $this = $(this),
        text = $this[0].innerHTML,
        refId = $this.attr('data-ref-id'),
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

    if(refHide === undefined) {

      // <span class="c-ref" data-ref-id="1" data-ref-type="ref" data-ref-desc="" data-ref-hide>
      //  <a href="https://vimeo.com/4176485" / <span class="c-ref__name"></a> / </span>

      // Add ref name as link or regular text depending on existing href
      if(sources[refId].href) {
        $this.append('<a class="c-ref__name" href="'+sources[refId].href+refParameter+'" target="tab"></a>');
      } else {
        $this.append('<span class="c-ref__name"></span>');
      }

      // Readd ref hook name
      $('.c-ref__name',$this).append(text);

      $this.append('<a class="c-ref__short-link" href="#source-'+sources[refId].id+'"></a>');
      $('.c-ref__short-link',$this).append('<sup class="c-ref__short">['+i+']</sup> ');

    }

    if(refHideKneenote === undefined) {

      var $currentPosition = $this.closest('p');

      if (!$currentPosition.length > 0) {
        // Means that there is no p ancestor, so the ref might be for e.g. a video
        $this.append('<p class="js-temp-marker"></p>');
        var $allP = $('p');
        var pIndex = $allP.index($('.js-temp-marker'));
        var $nextPosition = $allP.eq(pIndex+1);
        $('.js-temp-marker').remove();
        $currentPosition = $betweenPosition = $nextPosition.prev();
      } else {
        $nextPosition = $currentPosition.next();
        var $betweenPosition = $('<div class="c-notes-marginal"></div>');
      }

      var $kneenote = $('<div class="c-notes-marginal__item"><div class="c-kneenote"></div></div>');

      //$currentPosition.css('background-color','red');
      //$nextPosition.css('background-color','yellow');
      //  var $nextPosition = $('p').eq($('p').index(this) + 2).css('background-color', 'red');

      // Cut off next paragraph
      if ($nextPosition.hasClass('o-p--tie') || refHide === undefined) {
        $nextPosition.removeClass('o-p--tie');
        // console.log('chopped paragraph off!');
      }

      // Insert Container between if there is no one
      if (!$betweenPosition || refHide === undefined) {
        $($betweenPosition).insertAfter($currentPosition);
        // console.log('kneenote container inserted!');
      }

      // Insert Item
      if ($betweenPosition.hasClass('c-notes-marginal')) {
        $betweenPosition.append($kneenote);
        $kneenote = $kneenote.children('.c-kneenote');
        //  <a class="c-ref__href" href="#">
        //    <span class="c-ref__type">Ref</span>
        //    <sup class="c-ref__id">001</sup>
        //  </a>

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
        $kneenote.append('<a class="c-ref__href" href="#source-'+sources[refId].id+'" title="'+refTypeName+'"></a>');
        $('.c-ref__href',$kneenote).append('<span class="c-ref__type">'+refType+'</span> ');
        $('.c-ref__href',$kneenote).append('<sup class="c-ref__id">'+i+'</sup> ');

        //  <a class="c-ref__desc" href="https://vimeo.com/4176485" target="tab">
        //    abcdefg
        //    <span>The Dawn of Man, </span>
        //    <span>2001 - A Space Odyssey, </span>
        //    <span>Stanley Kubrick, </span>
        //    <span>1968<span>a</span></span>
        //  </a>

        // Insert description with or without link
        if(sources[refId].href) {
          $kneenote.append('<span class="c-ref__desc-container"><a class="c-ref__desc" href="'+sources[refId].href+refParameter+'" target="tab"></a></span>');
        } else {
          $kneenote.append('<span class="c-ref__desc-container"><span class="c-ref__desc"></span></span>');
        }

        // Insert description from data if exists
        if(refDesc) {
          $('.c-ref__desc',$kneenote).append('<span>'+refDesc+'</span>');
        }

        // Vgl auto kneenote sources
        if(!refHideSources && refType === 'zitat') {
          if(sources[refId].year) {
            $('.c-ref__desc',$kneenote).append(', <span>'+sources[refId].year+'</span>');
          }
          if(sources[refId].yearId) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refId].yearId+'</span>');
          }
          if(sources[refId].authorSurname) {
            $('.c-ref__desc',$kneenote).append(', <span>'+sources[refId].authorSurname+'</span>');
          } else if (sources[refId].author) {
            $('.c-ref__desc',$kneenote).append(', <span>'+sources[refId].author+'</span>');
          }
        }

        // Vgl auto kneenote sources
        if(!refHideSources && refType === 'vgl') {
          if(sources[refId].year) {
            $('.c-ref__desc',$kneenote).append(', <span>'+sources[refId].year+'</span>');
          }
          if(sources[refId].yearId) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refId].yearId+'</span>');
          }
          if(sources[refId].authorSurname) {
            $('.c-ref__desc',$kneenote).append(', <span>'+sources[refId].authorSurname+'</span>');
          } else if (sources[refId].author) {
            $('.c-ref__desc',$kneenote).append(', <span>'+sources[refId].author+'</span>');
          }
        }

        // Default auto kneenote sources
        if(!refHideSources && refType !== 'vgl' && refType !== 'zitat') {
          if(sources[refId].entity) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refId].entity+'</span> ');
          }
          if(sources[refId].org) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refId].org+'</span> ');
          }
          if(sources[refId].year) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refId].year+'</span> ');
          }
          if(sources[refId].yearId) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refId].yearId+'</span> ');
          }
          if(sources[refId].author) {
            $('.c-ref__desc',$kneenote).append('<span>'+sources[refId].author+'</span> ');
          } else {
            if(sources[refId].authorPrename) {
              $('.c-ref__desc',$kneenote).append('<span>'+sources[refId].authorPrename+'</span> ');
            }
            if(sources[refId].authorSurname) {
              $('.c-ref__desc',$kneenote).append('<span>'+sources[refId].authorSurname+'</span> ');
            }
          }
        }

      }
    }

    if(!(refHide === undefined)) {
      $this.parent().remove();
    }

  });
//});
