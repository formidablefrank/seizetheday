<!-- content topmenu -->
<div class="ui large fixed secondary sticky menu ontop">
	<div class="ui container">
		<a href="<?php echo base_url('home') ?>" class="item">
			<i class="heart icon"></i>
		</a>
		<a href="<?php echo base_url('home/connect') ?>" class="item">
			Connect
		</a>
		<a href="<?php echo base_url('home/seek') ?>" class="item">
			Seek
		</a>
		<a href="<?php echo base_url('home/identify') ?>" class="active item">
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
<div id="content-masthead-identify" class="content-masthead">
	<div class="ui container">
		<div class="header">
			<span class="highlight">Identify</span> a Possible Illness
		</div>
	</div>
</div>

<!-- Display the question -->
<div class="ui huge center aligned header">
	<?php echo $question->question_text; ?>
</div>

<!-- Display yes and no buttons -->
<div class="ui stackable centered grid container">

	<div class="ui massive buttons">
			<a class="ui positive button" href="<?php echo base_url('home/identify/' . $question->question_id . '/' . $choices[0]->choice_id) ?>">
				<?php echo $choices[0]->choice_text; ?>
			</a>
			<div class="or"></div>
			<a class="ui negative button" href="<?php echo base_url('home/identify/' . $question->question_id . '/' . $choices[1]->choice_id) ?>">
				<?php echo $choices[1]->choice_text; ?>
			</a>

	</div>

</div>

<!-- temporary page fillers -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
