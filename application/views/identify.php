<!-- Display the question -->
<div class="ui huge center aligned header">
	<?php echo $question->question_text; ?>
</div>

<!-- Display yes and no buttons -->
<div class="ui stackable centered grid container">
	<!--
	<?php foreach ($choices as $choice) { ?>
		<div class="eight wide column">
			<button class="fluid ui button"><a href="<?php echo base_url('home/identify/' . $question->question_id . '/' . $choice->choice_id) ?>">
				<?php echo $choice->choice_text; ?>
			</a></button>
		</div>
	<?php } ?>
	-->

	<div class="ui massive buttons">
		<!-- <div class="seven wide column"> -->
			<button class="ui positive button"><?php echo $choices[0]->choice_text; ?></button>
		<!-- </div> -->
		<!-- <div class="two wide column"> -->
			<div class="or"></div>
		<!-- </div> -->
		<!-- <div class="seven wide column"> -->
			<button class="ui negative button"><?php echo $choices[1]->choice_text; ?></button>
		<!-- </div> -->
							
	</div>

</div>


<script type="text/javascript" src="<?php echo base_url('js/identifyquestions.js') ?>"></script>