import $ from 'jquery';
import json from '../data/sources.js';

var processedSources = [];

$('.c-ref').each(function(i) {

  var $this = $(this),
      refHide = $this.attr('data-ref-hide'),
      refId = $this.attr('data-ref-id'),
      refSourceId = $this.attr('data-ref-source-id'),
      $videoContainer = $('.c-columns--video .o-grid'),
      $articleContainer = $('.c-columns--article .o-grid'),
      $essayContainer = $('.c-columns--essay .o-grid'),
      $imageContainer = $('.c-columns--image .o-grid'),
      $interviewContainer = $('.c-columns--interview .o-grid'),
      $wikiContainer = $('.c-columns--wiki .o-grid'),
      $literatureContainer = $('.c-columns--literature .o-grid'),
      duplicateSource = processedSources.indexOf(refSourceId) !== -1;

  if (refHide === undefined) {
    refHide = false;
  } else {
    refHide = true;
  }

  if (json[refSourceId].medium === 'video') {

    if(!duplicateSource) {

      $videoContainer.append('<div class="o-grid__item"><div id="source-'+refSourceId+'" class="c-columns-item  c-columns-item-'+refSourceId+'"></div></div>');
      $videoContainer = $('.c-columns--video .c-columns-item-'+refSourceId);

      if (json[refSourceId].entity && json[refSourceId].year && json[refSourceId].yearId) {
        $videoContainer.append('<div id="source-'+json[refSourceId].id+'" class="c-columns-item__name">'+json[refSourceId].entity+', <span class="c-columns-item__year">'+json[refSourceId].year+'<span class="c-columns-item__yearid">'+json[refSourceId].yearId+'</span></span></div>');
      } else if (json[refSourceId].entity && json[refSourceId].year) {
        $videoContainer.append('<div id="source-'+json[refSourceId].id+'" class="c-columns-item__name">'+json[refSourceId].entity+', <span class="c-columns-item__year">'+json[refSourceId].year+'</span></div>');
      } else {
        $videoContainer.append('<div id="source-'+json[refSourceId].id+'" class="c-columns-item__name">'+json[refSourceId].entity+'</div>');
      }

      if (json[refSourceId].href) {
        $videoContainer.append('<a class="c-columns-item__href" href="'+json[refSourceId].href+'" target="tab">'+json[refSourceId].href+'</a>');
      }

      if (json[refSourceId].author && json[refSourceId].org) {
        $videoContainer.append('<div class="c-columns-item__author">'+json[refSourceId].author+', <span class="c-columns-item__org">'+json[refSourceId].org+'</span></div>');
      } else if (json[refSourceId].author) {
        $videoContainer.append('<div class="c-columns-item__author">'+json[refSourceId].author+'</div>');
      } else if (json[refSourceId].org) {
        $videoContainer.append('<div class="c-columns-item__author"><span class="c-columns-item__org">'+json[refSourceId].org+'</span></div>');
      }

      if (refId && refHide) {
        $videoContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#kneenote-'+refId+'">'+refId+'</a></div>');
      } else if (refId) {
        $videoContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#ref-'+refId+'">'+refId+'</a></div>');
      }

      processedSources.push(refSourceId);

    } else {
      $('.c-columns-item__xref', '.c-columns-item-'+refSourceId).append(', <a href="#ref-'+refId+'">'+refId+'</a>');
    }
  }

  if (json[refSourceId].medium === 'literature') {

    if(!duplicateSource) {

      $literatureContainer.append('<div class="o-grid__item"><div id="source-'+refSourceId+'" class="c-columns-item  c-columns-item-'+refSourceId+'"></div></div>');
      $literatureContainer = $('.c-columns--literature .c-columns-item-'+refSourceId);

      var year = '',
          author = '';

      if(json[refSourceId].year) {
        year = '<span class="c-columns-item__yearid">'+json[refSourceId].year+'</span>';
        if(json[refSourceId].yearId) {
          year = '<span class="c-columns-item__yearid">'+json[refSourceId].year+'<span class="c-columns-item__yearid">'+json[refSourceId].yearId+'</span></span>';
        }
      }

      if (json[refSourceId].author) {
        author = json[refSourceId].author+', ';
      } else if (json[refSourceId].authorSurname && json[refSourceId].authorPrename) {
        author = json[refSourceId].authorSurname+', '+json[refSourceId].authorPrename+', ';
      }

      $literatureContainer.append('<div class="c-columns-item__author">'+author+year+'</div>');

      if (json[refSourceId].entity) {
        $literatureContainer.append('<div class="c-columns-item__entity">'+json[refSourceId].entity+'</div>');
      }

      if (json[refSourceId].org) {
        $literatureContainer.append('<div class="c-columns-item__org">'+json[refSourceId].org+'</div>');
      }

      if (json[refSourceId].href) {
        $literatureContainer.append('<a class="c-columns-item__href" href="'+json[refSourceId].href+'" target="tab">'+json[refSourceId].href+'</a>');
      }

      if (refId && refHide) {
        $literatureContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#kneenote-'+refId+'">'+refId+'</a></div>');
      } else if (refId) {
        $literatureContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#ref-'+refId+'">'+refId+'</a></div>');
      } else {
        $literatureContainer.append('<div class="c-columns-item__xref"></div>');
        console.log('error, ref not implemented!');
      }

      processedSources.push(refSourceId);

    } else {
      $('.c-columns-item__xref', '.c-columns-item-'+refSourceId).append(', <a href="#ref-'+refId+'">'+refId+'</a>');
    }
  }

  if (json[refSourceId].medium === 'essay') {

    if(!duplicateSource) {

      $essayContainer.append('<div class="o-grid__item"><div id="source-'+refSourceId+'" class="c-columns-item  c-columns-item-'+refSourceId+'"></div></div>');
      $essayContainer = $('.c-columns--essay .c-columns-item-'+refSourceId);

      var year = '',
          author = '';

      if(json[refSourceId].year) {
        year = '<span class="c-columns-item__yearid">'+json[refSourceId].year+'</span>';
        if(json[refSourceId].yearId) {
          year = '<span class="c-columns-item__yearid">'+json[refSourceId].year+'<span class="c-columns-item__yearid">'+json[refSourceId].yearId+'</span></span>';
        }
      }

      if (json[refSourceId].author) {
        author = json[refSourceId].author+', ';
      } else if (json[refSourceId].authorSurname && json[refSourceId].authorPrename) {
        author = json[refSourceId].authorSurname+', '+json[refSourceId].authorPrename+', ';
      }

      $essayContainer.append('<div class="c-columns-item__author">'+author+year+'</div>');

      if (json[refSourceId].entity) {
        $essayContainer.append('<div class="c-columns-item__entity">'+json[refSourceId].entity+'</div>');
      }

      if (json[refSourceId].org) {
        $essayContainer.append('<div class="c-columns-item__org">'+json[refSourceId].org+'</div>');
      }

      if (json[refSourceId].href) {
        $essayContainer.append('<a class="c-columns-item__href" href="'+json[refSourceId].href+'" target="tab">'+json[refSourceId].href+'</a>');
      }

      if (refId && refHide) {
        $essayContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#kneenote-'+refId+'">'+refId+'</a></div>');
      } else if (refId) {
        $essayContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#ref-'+refId+'">'+refId+'</a></div>');
      }

      processedSources.push(refSourceId);

    } else {
      $('.c-columns-item__xref', '.c-columns-item-'+refSourceId).append(', <a href="#ref-'+refId+'">'+refId+'</a>');
    }
  }

  if (json[refSourceId].medium === 'interview') {

    if(!duplicateSource) {

      $interviewContainer.append('<div class="o-grid__item"><div id="source-'+refSourceId+'" class="c-columns-item  c-columns-item-'+refSourceId+'"></div></div>');
      $interviewContainer = $('.c-columns--interview .c-columns-item-'+refSourceId);

      var year = '',
          author = '';

      if(json[refSourceId].year) {
        year = '<span class="c-columns-item__yearid">'+json[refSourceId].year+'</span>';
        if(json[refSourceId].yearId) {
          year = '<span class="c-columns-item__yearid">'+json[refSourceId].year+'<span class="c-columns-item__yearid">'+json[refSourceId].yearId+'</span></span>';
        }
      }

      if (json[refSourceId].author) {
        author = json[refSourceId].author+', ';
      } else if (json[refSourceId].authorSurname && json[refSourceId].authorPrename) {
        author = json[refSourceId].authorSurname+', '+json[refSourceId].authorPrename+', ';
      }

      $interviewContainer.append('<div class="c-columns-item__author">'+author+year+'</div>');

      if (json[refSourceId].entity) {
        $interviewContainer.append('<div class="c-columns-item__entity">'+json[refSourceId].entity+'</div>');
      }

      if (json[refSourceId].org) {
        $interviewContainer.append('<div class="c-columns-item__org">'+json[refSourceId].org+'</div>');
      }

      if (json[refSourceId].href) {
        $interviewContainer.append('<a class="c-columns-item__href" href="'+json[refSourceId].href+'" target="tab">'+json[refSourceId].href+'</a>');
      }

      if (refId && refHide) {
        $interviewContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#kneenote-'+refId+'">'+refId+'</a></div>');
      } else if (refId) {
        $interviewContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#ref-'+refId+'">'+refId+'</a></div>');
      }

      processedSources.push(refSourceId);

    } else {
      $('.c-columns-item__xref', '.c-columns-item-'+refSourceId).append(', <a href="#ref-'+refId+'">'+refId+'</a>');
    }
  }

  if (json[refSourceId].medium === 'article') {

    if(!duplicateSource) {

      $articleContainer.append('<div class="o-grid__item"><div id="source-'+refSourceId+'" class="c-columns-item  c-columns-item-'+refSourceId+'"></div></div>');
      $articleContainer = $('.c-columns--article .c-columns-item-'+refSourceId);

      var year = '',
          author = '';

      if(json[refSourceId].year) {
        year = '<span class="c-columns-item__yearid">'+json[refSourceId].year+'</span>';
        if(json[refSourceId].yearId) {
          year = '<span class="c-columns-item__yearid">'+json[refSourceId].year+'<span class="c-columns-item__yearid">'+json[refSourceId].yearId+'</span></span>';
        }
      }

      if (json[refSourceId].author) {
        author = json[refSourceId].author+', ';
      } else if (json[refSourceId].authorSurname && json[refSourceId].authorPrename) {
        author = json[refSourceId].authorSurname+', '+json[refSourceId].authorPrename+', ';
      }

      $articleContainer.append('<div class="c-columns-item__author">'+author+year+'</div>');

      if (json[refSourceId].entity) {
        $articleContainer.append('<div class="c-columns-item__entity">'+json[refSourceId].entity+'</div>');
      }

      if (json[refSourceId].org) {
        $articleContainer.append('<div class="c-columns-item__org">'+json[refSourceId].org+'</div>');
      }

      if (json[refSourceId].href) {
        $articleContainer.append('<a class="c-columns-item__href" href="'+json[refSourceId].href+'" target="tab">'+json[refSourceId].href+'</a>');
      }

      if (refId && refHide) {
        $articleContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#kneenote-'+refId+'">'+refId+'</a></div>');
      } else if (refId) {
        $articleContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#ref-'+refId+'">'+refId+'</a></div>');
      }

      processedSources.push(refSourceId);

    } else {
      $('.c-columns-item__xref', '.c-columns-item-'+refSourceId).append(', <a href="#ref-'+refId+'">'+refId+'</a>');
    }
  }

  if (json[refSourceId].medium === 'wiki') {

    if(!duplicateSource) {

      $wikiContainer.append('<div class="o-grid__item"><div id="source-'+refSourceId+'" class="c-columns-item  c-columns-item-'+refSourceId+'"></div></div>');
      $wikiContainer = $('.c-columns--wiki .c-columns-item-'+refSourceId);

      var year = '',
          author = '';

      if(json[refSourceId].year) {
        year = '<span class="c-columns-item__yearid">'+json[refSourceId].year+'</span>';
        if(json[refSourceId].yearId) {
          year = '<span class="c-columns-item__yearid">'+json[refSourceId].year+'<span class="c-columns-item__yearid">'+json[refSourceId].yearId+'</span></span>';
        }
      }

      if (json[refSourceId].author) {
        author = json[refSourceId].author+', ';
      } else if (json[refSourceId].authorSurname && json[refSourceId].authorPrename) {
        author = json[refSourceId].authorSurname+', '+json[refSourceId].authorPrename+', ';
      }

      $wikiContainer.append('<div class="c-columns-item__author">'+author+year+'</div>');

      if (json[refSourceId].entity) {
        $wikiContainer.append('<div class="c-columns-item__entity">'+json[refSourceId].entity+'</div>');
      }

      if (json[refSourceId].org) {
        $wikiContainer.append('<div class="c-columns-item__org">'+json[refSourceId].org+'</div>');
      }

      if (json[refSourceId].href) {
        $wikiContainer.append('<a class="c-columns-item__href" href="'+json[refSourceId].href+'" target="tab">'+json[refSourceId].href+'</a>');
      }

      if (refId && refHide) {
        $wikiContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#kneenote-'+refId+'">'+refId+'</a></div>');
      } else if (refId) {
        $wikiContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#ref-'+refId+'">'+refId+'</a></div>');
      }

      processedSources.push(refSourceId);

    } else {
      $('.c-columns-item__xref', '.c-columns-item-'+refSourceId).append(', <a href="#ref-'+refId+'">'+refId+'</a>');
    }
  }


  if (json[refSourceId].medium === 'image') {

    if(!duplicateSource) {

      $imageContainer.append('<div class="o-grid__item"><div id="source-'+refSourceId+'" class="c-columns-item  c-columns-item-'+refSourceId+'"></div></div>');
      $imageContainer = $('.c-columns--image .c-columns-item-'+refSourceId);

      if (json[refSourceId].entity && json[refSourceId].year && json[refSourceId].yearId) {
        $imageContainer.append('<div id="source-'+json[refSourceId].id+'" class="c-columns-item__name">'+json[refSourceId].entity+', <span class="c-columns-item__year">'+json[refSourceId].year+'<span class="c-columns-item__yearid">'+json[refSourceId].yearId+'</span></span></div>');
      } else if (json[refSourceId].entity && json[refSourceId].year) {
        $imageContainer.append('<div id="source-'+json[refSourceId].id+'" class="c-columns-item__name">'+json[refSourceId].entity+', <span class="c-columns-item__year">'+json[refSourceId].year+'</span></div>');
      } else if (json[refSourceId].entity) {
        $imageContainer.append('<div id="source-'+json[refSourceId].id+'" class="c-columns-item__name">'+json[refSourceId].entity+'</div>');
      }

      if (json[refSourceId].href) {
        $imageContainer.append('<a class="c-columns-item__href" href="'+json[refSourceId].href+'" target="tab">'+json[refSourceId].href+'</a>');
      }

      if (json[refSourceId].author && json[refSourceId].org) {
        $imageContainer.append('<div class="c-columns-item__author">'+json[refSourceId].author+', <span class="c-columns-item__org">'+json[refSourceId].org+'</span></div>');
      } else if (json[refSourceId].author) {
        $imageContainer.append('<div class="c-columns-item__author">'+json[refSourceId].author+'</div>');
      } else if (json[refSourceId].org) {
        $imageContainer.append('<div class="c-columns-item__author"><span class="c-columns-item__org">'+json[refSourceId].org+'</span></div>');
      }

      if (refId && refHide) {
        $imageContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#kneenote-'+refId+'">'+refId+'</a></div>');
      } else if (refId) {
        $imageContainer.append('<div class="c-columns-item__xref"><span class="c-icon  c-icon-long-arrow-up"></span> <a href="#ref-'+refId+'">'+refId+'</a></div>');
      }

      processedSources.push(refSourceId);

    } else {
      $('.c-columns-item__xref', '.c-columns-item-'+refSourceId).append(', <a href="#ref-'+refId+'">'+refId+'</a>');
    }
  }

  // removes original ref if data attribute is set to remove it -> this should be in ref.js but it cant be because sources.js has to run in between
  if(refHide) {
    $this.parent().remove();
  }

});
