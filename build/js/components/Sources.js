import $ from 'jquery';
import json from '../data/sources.js';

$('.c-ref').each(function(i) {

  var $this = $(this),
      refId = $this.attr('data-ref-id'),
      $videoContainer = $('.c-columns--video .o-grid');

  if (json[refId].medium === 'video') {
    console.log(i);
    $videoContainer.prepend('<div class="o-grid__item"><div class="c-columns-item  c-columns-item-'+i+'"></div></div>');

    $videoContainer = $('.c-columns--video .c-columns-item-'+i);

    if (json[refId].entity && json[refId].year && json[refId].yearId) {
      $videoContainer.append('<div id="source-'+json[refId].id+'" class="c-columns-item__name">'+json[refId].entity+' <span class="c-columns-item__year">'+json[refId].year+'<span class="c-columns-item__yearid">'+json[refId].yearId+'</span></span></div>');
    } else if (json[refId].entity && json[refId].year) {
      $videoContainer.append('<div id="source-'+json[refId].id+'" class="c-columns-item__name">'+json[refId].entity+' <span class="c-columns-item__year">'+json[refId].year+'</span></div>');
    } else {
      $videoContainer.append('<div id="source-'+json[refId].id+'" class="c-columns-item__name">'+json[refId].entity+'</div>');
    }

    if (json[refId].href) {
      $videoContainer.append('<a class="c-columns-item__href" href="'+json[refId].href+'">'+json[refId].href+'</a>');
    }

    if (json[refId].author && json[refId].org) {
      $videoContainer.append('<div class="c-columns-item__author">'+json[refId].author+' <span class="c-columns-item__org">'+json[refId].org+'</span></div>');
    } else if (json[refId].author) {
      $videoContainer.append('<div class="c-columns-item__author">'+json[refId].author+'</div>');
    } else if (json[refId].org) {
      $videoContainer.append('<div class="c-columns-item__author"><span class="c-columns-item__org">'+json[refId].org+'</span></div>');
    }


  }

});
