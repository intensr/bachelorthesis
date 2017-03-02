import $ from 'jquery';

export default class ScrollToTop {

	constructor(element) {
		this.$el = $(element);
		this.setHandler();
	}

	setHandler() {
		this.$el.on('click', this.scrollToTop);
	}

	scrollToTop(event) {
		event.preventDefault();

		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	}
}
