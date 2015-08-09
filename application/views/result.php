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
            <button class="ui facebook button">
                    <i class="facebook icon"></i>
                    Facebook
                </button>
                <button class="ui twitter button">
                    <i class="twitter icon"></i>
                    Twitter
                </button>
                <button class="ui google plus button">
                    <i class="google plus icon"></i>
                    Google Plus
                </button>        </div>
    </div>
</div>

<!-- content masthead -->
<div id="content-masthead-seek" class="content-masthead">
    <div class="ui container">
        <div class="header">
            <span class="highlight">Identify</span> a Possible Illness
        </div>
    </div>
</div>

<!-- set description based on result -->
<?php
if($result == 'consult'){ $desc = 'Consult a doctor right away!'; }
else if($result == 'healthy'){ $desc = 'You are healthy. No need to worry.'; }
else if($result == 'chlamydia'){ $desc = 'Consult a doctor right away!'; }
else if($result == 'HIV'){ $desc = 'Description'; }
else if($result == 'gonorrhea'){ $desc = 'Consult a doctor right away!'; }
else if($result == 'scabies'){ $desc = 'Consult a doctor right away!'; }
else if($result == 'pubic lice'){ $desc = 'Consult a doctor right away!'; }
else if($result == 'yeast'){ $desc = 'Consult a doctor right away!'; }
else if($result == 'herpes'){ $desc = 'Consult a doctor right away!'; }
else if($result == 'syphilis'){ $desc = 'Consult a doctor right away!'; }
else if($result == 'warts'){ $desc = 'Consult a doctor right away!'; }
?>

<!-- display result -->
<div id="content-identify" class="ui huge center aligned header">
    <?php echo $result; ?>
</div>
<p>
<?php echo $desc; ?>
</p>
