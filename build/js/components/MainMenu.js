import $ from 'jquery';

export default class MainMenu {

	constructor(element) {
		this.$el = $(element);
		this.setHandler();
	}

	setHandler() {
		this.$el.on('click', this.toggleVisiblity);
	}

	toggleVisiblity(event) {
		event.preventDefault();

		if ($('.menu-main__item').hasClass('visible')) {
			$('.menu-main__item').removeClass('visible');
		} else {
			$('.menu-main__item').addClass('visible');
		}
	}
}
