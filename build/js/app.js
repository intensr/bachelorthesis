import $ from 'jquery';
//import Reference from './components/Reference';

// im arsch ?!
$(document).on('ready', function() {
  //new Reference();
});


// functions

function leadingZeroes(i) {
  if (i < 9) {
    i='00'+i;
  } else if (i < 99) {
    i='0'+i;
  }
  return i;
}

// Create ´kneenotes´
$('.c-ref:not(.c-ref--video)').each(function(i) {
  var $this = $(this);

  // Count references
  i++;
  i = leadingZeroes(i);
  $this.find('.c-ref__id').html(i);

  // Inject id and show short ref number
  $this.find('.c-ref__short').html('['+i+']');
  $this.find('.c-ref__short-link').removeClass('u-hide');

  // Transfer note to the end of respective paragraph
  var $extract = $this.find('.c-ref__extract');
  console.log($extract);
  var extract = $this.find('.c-ref__extract').clone().wrap('<div>').parent().html();
  var $thisParagraph = $this.closest('p');
  $extract.remove();

  // Cut paragraphs
  if ($thisParagraph.next().hasClass('o-p--tie')) {
    $thisParagraph.next().removeClass('o-p--tie');
  }

  // Insert Container
  if (!$thisParagraph.next().hasClass('c-notes-marginal')) {
    $('<div class="c-notes-marginal"></div>').insertAfter($thisParagraph);
  }

  // Insert Item
  if ($thisParagraph.next().hasClass('c-notes-marginal')) {
    $thisParagraph.next().append('<div class="c-notes-marginal__item">'+extract+'</div>');
  }

});

//
