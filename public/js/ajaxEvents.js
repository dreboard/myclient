/**
 * AJAX Events
 * http://localhost/api/myclient/public/
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
			this.$ajax_btn = $('#ajax_btn');
			this.$post_btn = $('#post_btn');
			this.$otherBtns = this.$contentbox.find('#ajax_btn');
		},

		/**
		 * Register a post event
		 *
		 * @return void
		 */
		postEvent: function () {
			this.$post_btn.on('click', this.postAjax);
		},

		/**
		 * Register a click event
		 *
		 * @return void
		 */
		events: function () {
			this.$ajax_btn.on('click', this.fireAjax);
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
			event.preventDefault();
			try {
				$('#results').empty();
				var some_post_vars = {
					var1: 'one',
					var2: 'two'
				};

				$.ajax({
					method: "GET",
					data: some_post_vars,   // method #1
					//data: { name: "Dre", location: "Board" }  // Sample Method #2
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
		},
		/**
		 * Fire and ajax GET request
		 *
		 * @return object
		 */
		postAjax: function (event) {
			event.preventDefault();
			console.log($("#post_var").val());
			try {
				$('#results').empty();

				var post_var = $("#post_var").val();
				var params = { post_var: post_var };
				$.ajax({
					method: "POST",
					data: post_var,   // method #1
					url: "http://localhost/api/myclient/public/form.php",
					dataType: "json",
					contentType: "application/json"
				})
					.done(function (data) {

						console.log(data);  // for testing only

						$('#post_response').text(data);
					})
					.fail(function () {
						$('#post_response').text('Ajax error');
					});

			} catch (err) {
				console.log((err.message));
			}
		}

	};

	test.init();
});