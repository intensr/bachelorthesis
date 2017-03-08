import $ from 'jquery';
import Ref from './components/Ref';
import Tables from './components/Tables';

$(document).on('ready', function() {
  new Ref();
  new Tables();
});
