import $ from 'jquery';

export default class Event {

  constructor() {
    this.$startEl = $("[name='start_date']");
    this.$endEl = $("[name='end_date']");
    this.setHandlers();
  }

  setHandlers() {
    this.$startEl.on('change', () => this.validateStartDate());
    this.$endEl.on('change', () => this.validateEndDate());
  }

  validateStartDate(event) {
    if(!this.compareDates()) {
      this.$startEl.val(this.$endEl.val());
    }
  }

  validateEndDate(event) {
    if(!this.compareDates()) {
      this.$endEl.val(this.$startEl.val());
    }
  }

  compareDates() {
    return this.$startEl.val() <= this.$endEl.val();
  }
}
