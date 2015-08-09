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
else if($result == 'healthy'){ $desc = 'You are healthy! However, if you have any worries, have yourself checked.'; }
else if($result == 'chlamydia'){ $desc = "Chlamydia is one of the most common STD's. It is also easily cured. Visit a clinic!"; }
else if($result == 'HIV'){ $desc = 'It is possible that you have HIV. Have yourself checked!'; }
else if($result == 'gonorrhea'){ $desc = 'If left untreated, gonorrhea can cause infertility. Consult a doctor right away!'; }
else if($result == 'scabies'){ $desc = 'Scabies can and will spread to other parts of your skin if left untreated. Go to a doctor.'; }
else if($result == 'pubic lice'){ $desc = 'Getting rid of your pubic hair is not enough. Get checked! Special creams may be perscribed.'; }
else if($result == 'yeast'){ $desc = 'People who eat a lot of sugar have higher risks of getting yeast infections. Eating yogurt and acidic food may help, but it is best to visit a doctor if you have worries.'; }
else if($result == 'herpes'){ $desc = 'It is possible that you have herpes. Go to a doctor! It is very contagious.'; }
else if($result == 'syphilis'){ $desc = 'Syphilis can lead to death if untreated. Have it checked now!'; }
else if($result == 'warts'){ $desc = 'You have genital warts! They are causes by the Human Pappiloma Virus (HPV). Have it checked!'; }
?>

<!-- display result -->
<div id="content-identify" class="ui centered card">
    <div class="content">
        <div class="header"><?php echo $result; ?></div>
    </div>
    <div class="extra content"><?php echo $desc; ?></div>
</div>
<p>
</p>
