<template>
<div>
    <h1>How do I invoice <span>{{titleText}}</span><span class="typed-cursor">|</span>?</h1>
    <h2>You’re in the right place to get started</h2>
    <p>Welcome, suppliers. The Tradeshift network is your place to create a free account, send invoices to your buyers, and sell more to fortune 500 companies. And get paid faster than ever. Ready to get started?</p>
    <div class="rect-green"></div>

    <h3>Find your buyer</h3>

    <div >
        <div>
            <input placeholder="Send an invoice to…" class="hidden-lg radius-25" type="text" v-on:input="changed" v-on:keyup="keyup" v-model="search">
            <input placeholder="I want to send an invoice to…" class="hidden-xs hidden-sm hidden-md large radius-25" type="text" v-on:input="changed" v-on:keyup="keyup" v-model="search">
            <span v-bind:class="['fa', 'fa-search', 'search-icon', {active: match != null}]"></span>
            <div class="cta-container">
                <a
                        v-bind:class="['js-clickable-on-enter', 'blue-cta', {transparent: !match, opaque: match}]"
                        v-bind:href="match ? match.link : ''"
                >
                    {{lastMatch}}
                </a>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import { debounce, sample } from 'lodash';
import partners from '../../../json/onboarding-partners.json';

const PAUSE_TIME = 6000;
const EDIT_TIME = 50;

export default {
	name: 'PartnerSearch',
	data: function() {
		return {
			search: '',
			match: null,
			lastMatch: '',
			titleCompany: sample(partners).name,
			titleState: 'NEW_TITLE',
			titleText: ' ', // We
			startTime: 0,
			animationRequest: null,
		};
	},

	mounted: function() {
		this.boundUpdateTitleCompany = this.updateTitleCompany.bind(this);
		this.animationRequest = requestAnimationFrame(this.boundUpdateTitleCompany);
	},

	beforeDestroy: function() {
		cancelAnimationFrame(this.animationRequest);
	},

	methods: {
		updateTitleCompany: function(time) {
			switch (this.titleState) {
				case 'NEW_TITLE':
					let candidate = sample(partners).name;
					while (candidate == this.titleCompany) {
						candidate = sample(partners).name;
					}
					this.titleCompany = candidate;
					this.titleText = '';
					this.titleState = 'WRITING';
					this.startTime = time;
					break;

				case 'ERASING':
					if (time - this.startTime > EDIT_TIME) {
						this.startTime = time;
						this.titleText = this.titleText.substr(0, this.titleText.length - 2);
					}

					if (this.titleText.length == 0) {
						this.titleState = 'NEW_TITLE';
					}
					break;

				case 'WRITING':
					if (time - this.startTime > EDIT_TIME) {
						this.titleText += this.titleCompany.substr(this.titleText.length, 1);
						this.startTime = time;
					}

					if (this.titleText.length == this.titleCompany.length) {
						this.titleState = 'PAUSED';
						this.startTime = time;
					}
					break;

				case 'PAUSED':
					if (time - this.startTime > PAUSE_TIME) {
						this.titleState = 'ERASING';
					}
					break;
			}

			this.animationRequest = requestAnimationFrame(this.boundUpdateTitleCompany);
		},

		changed: function() {
			if (this.search == '') {
				this.match = null;
				return;
			}

			for (let option of partners) {
				let name = option.name.toLowerCase();
				if (name.indexOf(this.search.toLowerCase()) > -1) {
					this.match = option;
					this.lastMatch = this.match.name;
					break;
				}
			}
		},

		keyup: function(event) {
			event.preventDefault();
			let el;

			if (
				event.keyCode == 13 /* Enter */ &&
				(el = this.$el.querySelector('.js-clickable-on-enter')) &&
				this.match
			) {
				el.click();
			}
		},
	},
};
</script>

<style scoped lang="sass">
    .typed-cursor
        font-weight: 300

    .transparent
        opacity: 0

    .opaque
        opacity: 1

    .btn-primary-cta, .blue-cta
        transition: opacity 1s linear, background-color 200ms ease-in-out

</style>
