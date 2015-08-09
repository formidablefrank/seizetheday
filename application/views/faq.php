<!-- content topmenu -->
<div class="ui large fixed secondary sticky menu ontop">
	<div class="ui container">
		<a href="<?php echo base_url('home') ?>" class="item">
			<i class="heart icon"></i>
		</a>
		<a href="<?php echo base_url('home/connect') ?>" class="item">
			Connect
		</a>
		<a href="<?php echo base_url('home/seek') ?>" class="active item">
			Seek
		</a>
		<a href="<?php echo base_url('home/identify') ?>" class="item">
			Identify
		</a>
		<div class="right menu">
			<button class="ui basic blue button">
				<i class="facebook icon"></i>
				Facebook
			</button>
			<button class="ui basic teal button">
				<i class="twitter icon"></i>
				Twitter
			</button>
			<button class="ui basic red button">
				<i class="google plus icon"></i>
				Google Plus
			</button>
		</div>
	</div>
</div>

<!-- content masthead -->
<div id="content-masthead-seek" class="content-masthead">
	<div class="ui container">
		<div class="header">
			<span class="highlight">Seek</span> Previously Answered Questions
		</div>
	</div>
</div>

<div id="content-seek" class="ui text container">
	<!-- search bar to ask a question -->
	<div class="ui fluid large icon input">
		<input placeholder="Type keywords here..." type="text" id="queryText">
		<i class="search icon"></i>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url('js/jquery.min.js') ?>"></script>

<script type="text/javascript">
$(document).ready(function(){
	// give the query text field focus by default on page load
	$('#queryText').focus();

	// declare a timeout variable to track typing and temporarily delay execution of ajax
	var typeTimeout;

	// handle query input field changes
	$('#queryText').on('input', function(){
		// append the loading state to the input field
		$("#queryText").parent().addClass("loading");

		// set input field value into this function's scope for use within the timeout callback
		var query = $(this).val();

		// clear timeout if it exists
		clearTimeout(typeTimeout);

		// reset typeTimeout since input has changed yet again
		typeTimeout = setTimeout(function() {
			// user hasn't edited the text field for 500ms, process execute ajax request
			if(query === '') {
				$("#queryText").parent().removeClass("loading");
				$('div .result').remove();
				return 0;
			}

			$.ajax({
				url: '<?php echo base_url('home/ajax_search'); ?>',
				type: "POST",
				data: "query=" + query,
				dataType: "json",
				success: function(results){
					$("#queryText").parent().removeClass("loading");
					//remove all old search results first
					$('div .result').remove();
					//for each new search result found, allocate a box for them
					for (var i = results.length - 1; i >= 0; i--) {
						var resultTemplate =
							"<div class='ui result segment'>" +
								"<span class='ui red ribbon label'>" + results[i].faq_category +"</span>" +
								"<span><span class='ui header'>" +
									results[i].faq_question +
								"</span></span>" +
								"<p>" + results[i].faq_answer + "</p>" +
							"</div>";
						$(resultTemplate).insertAfter('#content-seek .input');
					};
				},
				error: function(){
					$("#queryText").parent().removeClass("loading");
				}
			});
    	}, 500);
    });
});
</script>
