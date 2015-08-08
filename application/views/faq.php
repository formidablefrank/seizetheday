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
			<div class="item">
				Social links
			</div>
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

	<!-- list of questions -->
	<!-- <div class="ui result segment">
		<h4 class="ui header">Question One</h4>
		<p>Question description.</p>
	</div> -->
</div>

<!-- temporary page fillers -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script type="text/javascript" src="<?php echo base_url('js/jquery.min.js') ?>"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('#queryText').focus();
    $('#queryText').on('input', function(){
        query = $(this).val();
        if(query === '') {
        	$('div .result').remove();
        	return 0;
        }
        $.ajax({
            url: '<?php echo base_url('home/ajax_search'); ?>',
            async: false,
            type: "POST",
            data: "query=" + query,
            dataType: "html",
            success: function(result){
            	results = $.parseJSON(result);
            	$('div .result').remove();
            	for (var i = results.length - 1; i >= 0; i--) {
            		$("<div class='ui result segment'>" + "<h4 class='ui header'>" + results[i].faq_answer + "</h4><p>" + results[i].faq_answer + "</p></div>").insertAfter('div .input');
            	};
            }
        });
    });
});
</script>