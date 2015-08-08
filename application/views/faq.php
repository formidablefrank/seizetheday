<!-- content topmenu -->
<div class="ui large fixed secondary menu">
	<div class="ui container">
		<a href="<?php echo base_url('home') ?>" class="item header">
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
<div id="content-masthead-identify" class="content-masthead">
	<div class="ui container">
		<div class="header">
			<span class="highlight">Seek</span> Previously Answered Questions
		</div>
	</div>
</div>




<div class="ui container">
	<!-- search bar to ask a question -->
	<div class="faq ui fluid icon input">
	  <input placeholder="Ask a question..." type="text">
	  <i class="search icon"></i>
	</div>

	<!-- list of questions -->
  <div class="faq ui center aligned segment">
    <p>Top</p>
  </div>
  <div class="ui center aligned segment">
    <p>Middle</p>
  </div>
  <div class="ui center aligned segment">
    <p>Middle</p>
  </div>
  <div class="ui center aligned segment">
    <p>Middle</p>
  </div>
  <div class="ui center aligned segment">
    <p>Bottom</p>
  </div>
</div>

<style>
.faq {
    text-align: center;
    padding-top: 25px;
    padding-bottom: 25px;
}