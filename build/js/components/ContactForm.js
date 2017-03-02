import $ from 'jquery';

export default class ContactForm {
  constructor(form, messageEl) {
    this.$form = $(form);
    this.$messageEl = $(messageEl);
    this.setHandler();
  }

  setHandler() {
    this.$form.on('submit', (event) => this.submitRequest(event));
  }

  removeMessages() {
    this.$messageEl.empty();
    this.$form.find('span').remove();
  }

  submitRequest(event) {
    event.preventDefault();
    this.removeMessages();

    $.ajax({
      url: 'contact/store',
      method: 'POST',
      global: true,
      data: this.$form.serialize(),
      success: (data, textStatus, jqXHR) => this.successResponse(data, textStatus, jqXHR),
      error: (jqXHR, textStatus, errorThrown) => this.errorResponse(jqXHR, textStatus, errorThrown)
    });
  }

  errorResponse(jqXHR, textStatus, errorThrown) {
    var message;

    if (jqXHR.status === 422) {
      var self = this;
      var response = JSON.parse(jqXHR.responseText);

      jQuery.each(response, function(element, message) {
        self.$form.find('[name=' + element + ']').after('<span class="message--error">'+ message +'</span>');
      });

    } else {
      this.$messageEl.append('<span class="message--error">Etwas ist schief gelaufen. Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut!</span>');
    }
  }

  successResponse(data, textStatus, jqXHR) {
    this.$messageEl.append('<span class="message--success">Danke für Ihre Anfrage!</span>');
  }
}
