/**
 * AJAX Events
 *
 * Encapsulated object to perform ajax api calls
 */
$(document).ready(function () {

	/**
	 * Test Object
	 *
	 * @return object
	 */
	var test = {

		/**
		 * These function will fire or will be
		 * immediately attached to the dom
		 *
		 * @return void
		 */
		init: function () {
			this.dom();
			this.events();
			//this.doDiv();     // If left uncommented will immediately fire
		},

		/**
		 * Set DOM elements to object vars
		 *
		 * @return void
		 */
		dom: function () {
			this.$contentbox = $('.page_body');
			this.$buttons = $('#ajax_btn');
			this.$otherBtns = this.$contentbox.find('.otherBtns');
		},

		/**
		 * Register a click event
		 *
		 * @return void
		 */
		events: function () {
			this.$buttons.on('click', this.fireAjax);
		},
		doDiv: function (event) {
			event.preventDefault();
			alert('hello');
			$('#results').text('Some new text');
		},

		/**
		 * Fire and ajax GET request
		 *
		 * @return object
		 */
		fireAjax: function (event) {
			try {
				$('#results').empty();
				var some_post_vars = {
					var1: 'one',
					var2: 'two'
				};

				$.ajax({
					method: "GET",
					data: some_post_vars,   // method #1
					//data: { name: "Dre", location: "Board" }  // Method #2
					url: "https://jsonplaceholder.typicode.com/posts/1"
				})
					.done(function (data) {

						console.log(data);  // for testing only

						//var data = $.parseJSON(data); // If data does not come back as JSON

						jQuery.each(data, function (index, value) {
							$('#results').append($('<div>', {
								html: '<h5>' + index + '</h5>' + '<p>' + value + '</p>'
							}));
						});
					})
					.fail(function () {
						$('#results').text('Ajax error');
					});

			} catch (err) {
				console.log((err.message));
			}
		}

	};

	test.init();
});