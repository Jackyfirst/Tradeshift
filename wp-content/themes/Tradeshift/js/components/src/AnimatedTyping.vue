<template>
	<span class="text-carousel">
		{{ string }}<span class="typed-cursor">|</span>
	</span>
</template>

<script>
	const TYPESPEED = 60
	const STRINGDELAY = 3000
	const DELETESPEED = 40
	var current = 0

	export default {
		props: {
			strings: {
				type: Array,
				required: true
			}
		},
		data() {
		    return{
		      	string: '',
		      	status: ''
		    }
		},


		watch: {
		    status() {
		     	switch(this.status) {
		        	case "write":
		        		this.write(0)
		        		break
			        case "delete":
			        	this.delete(this.string.length);
			          	break
			        case "nextString":
			          	this.getNextString();
			          	this.status = "write"
			          	break
		      	}
		    }
  		},


		methods: {

			write(count) {
				var len = this.strings[current].length;
				var v = this;

				if(count<len) {
					this.string += this.strings[current][count];
					count++;
					setTimeout(function() { 
						v.write(count); 
					}, TYPESPEED);
				} else {
					this.currentString();
					setTimeout(function() { v.status = 'delete';
					}, STRINGDELAY)
				}
			},

		    delete(len) {
				if(len>=0) {
					var v = this;
					this.string = this.string.slice(0, -1);
					len--;
					setTimeout(function() {
				  		v.delete(len);
					}, DELETESPEED);
				} else {
					this.status = "nextString";
				}
		    },

			getNextString() {
				if(current >= 0 && current < this.strings.length -1) {
					current++
				} else {
					current = 0;
				}
			},

		    currentString() {
		      current = this.strings.indexOf(this.string)
		    }
		},

		mounted() {
			this.status = 'write';
		}
	};
</script>

<style scoped>
	.typed-cursor {
        font-weight: 300;
	}
	@keyframes blink {
		50% {
			opacity: 0;
		}
	}
	span.typed-cursor {
		animation: blink 1s infinite
	}
</style>