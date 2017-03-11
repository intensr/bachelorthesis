import $ from 'jquery';
import Ref from './components/Ref';
import Sources from './components/Sources';
import Tables from './components/Tables';

$(document).on('ready', function() {
  new Ref();
  new Sources();
  new Tables();
});
