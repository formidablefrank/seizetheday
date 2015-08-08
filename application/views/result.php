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
            <span class="highlight">Identify</span> a Possible Illness
        </div>
    </div>
</div>

<h1>You have <?php echo $result; ?></h1>
<p>Description here. <?php echo $description; ?></p>