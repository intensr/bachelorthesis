import $ from 'jquery';

export default class ToggleImprint {

	constructor(element) {
		this.$el = $(element);
		this.setHandler();
	}

	setHandler() {
		this.$el.on('click', this.toggleImprint);
	}

	toggleImprint(event) {
		event.preventDefault();

		$('.imprint').slideToggle();
	}
}
