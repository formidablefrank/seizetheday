<h2><?php echo $question->question_text; ?></h2>
<?php foreach ($choices as $choice) { ?>
    <button class=""><a href="<?php echo base_url('home/identify/' . $question->question_id . '/' . $choice->choice_id) ?>">
        <?php echo $choice->choice_text; ?>
    </a></button>
<?php } ?>


<script type="text/javascript" src="<?php echo base_url('js/identifyquestions.js') ?>"></script>