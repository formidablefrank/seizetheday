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
<div id="content-masthead-seek" class="content-masthead">
    <div class="ui container">
        <div class="header">
            <span class="highlight">Identify</span> a Possible Illness
        </div>
    </div>
</div>

<h1><?php echo $result; ?></h1>
<p>
<?php
if($result == 'consult'){ echo 'Consult a doctor right away!'; }
else if($result == 'healthy'){ echo 'You are healthy. No need to worry.'; }
else if($result == 'chlamydia'){ echo 'Consult a doctor right away!'; }
else if($result == 'HIV'){ echo 'Description'; }
else if($result == 'gonorrhea'){ echo 'Consult a doctor right away!'; }
else if($result == 'scabies'){ echo 'Consult a doctor right away!'; }
else if($result == 'pubic lice'){ echo 'Consult a doctor right away!'; }
else if($result == 'yeast'){ echo 'Consult a doctor right away!'; }
else if($result == 'herpes'){ echo 'Consult a doctor right away!'; }
else if($result == 'syphilis'){ echo 'Consult a doctor right away!'; }
else if($result == 'warts'){ echo 'Consult a doctor right away!'; }
?>
</p>