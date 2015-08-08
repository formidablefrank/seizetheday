<!-- Display the question -->
<div class="ui huge center aligned header">
	<?php echo $question->question_text; ?>
</div>

<!-- Display yes and no buttons -->
<div class="ui stackable centered grid container">

	<div class="ui massive buttons">
		<!-- <div class="seven wide column"> -->
			<button class="ui positive button"><a href="<?php echo base_url('home/identify/' . $question->question_id . '/' . $choices[0]->choice_id) ?>">
				<?php echo $choices[0]->choice_text; ?>
			</a></button>
		<!-- </div> -->
		<!-- <div class="two wide column"> -->
			<div class="or"></div>
		<!-- </div> -->
		<!-- <div class="seven wide column"> -->
			<button class="ui negative button"><a href="<?php echo base_url('home/identify/' . $question->question_id . '/' . $choices[1]->choice_id) ?>">
				<?php echo $choices[1]->choice_text; ?>
			</a></button>
		<!-- </div> -->

	</div>

</div>


<script type="text/javascript" src="<?php echo base_url('js/identifyquestions.js') ?>"></script>