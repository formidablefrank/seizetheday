<!-- Display the question -->
<h2 class="ui center aligned header">
	<?php echo $question->question_text; ?>
</h2>

<!-- Display yes and no buttons -->
<div class="ui stackable centered grid container">
	<?php foreach ($choices as $choice) { ?>
		<div class="eight wide column">
			<button class="fluid ui button"><a href="<?php echo base_url('home/identify/' . $question->question_id . '/' . $choice->choice_id) ?>">
				<?php echo $choice->choice_text; ?>
			</a></button>
		</div>
	<?php } ?>
</div>


<script type="text/javascript" src="<?php echo base_url('js/identifyquestions.js') ?>"></script>