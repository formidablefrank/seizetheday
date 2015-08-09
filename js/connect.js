(function() {
	$(function() {
		// override form submission behavior
		$("#connect-form").submit(function(e) {
			// prevent default behavior from firing
			e.preventDefault();

			// setup query url
			var queryUrl = "http://inq-doctor.eu-gb.mybluemix.net/ask/"
				+ encodeURIComponent($("#connect-form input").val());

			// update view to reflect loading of data
			$("#connect-result").html("<br><br><br><br>");
			$("#connect-result").addClass("loading");
			$("#connect-query").html($("#connect-form input").val());

			// perform get request
			$.get(queryUrl, function(data) {
				if (data == "${noAnswer}") {
					data = "Sorry, we didn't find anything related to your query. Please try again.";
				}
				$("#connect-result").html(data);
				$("#connect-result").removeClass("loading");
			});
		});

		$('#talk').on('click', function(){
			$('.modal').modal('show');
		});
	});
})();