<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  	<a class="navbar-brand" href="#"><img class="toplogo" src="./pics/fb_logo2.png"></a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<?php if ($CURRENT_PAGE == "index") { ?>
	  		<li class="nav-item active">
			<?php } else { ?>
			<li class="nav-item">
			<?php } ?>
				<a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
	  		</li>
	  		<li class="nav-item">
				<a class="nav-link disabled" href="#">About</a>
	  		</li>
	  		<li class="nav-item">
		  		<a class="nav-link disabled" href="#">Alumni</a>
			</li>
			<?php if ($CURRENT_PAGE == "calendar") { ?>
	  		<li class="nav-item active">
			<?php } else { ?>
			<li class="nav-item">
			<?php } ?>
		  		<a class="nav-link" href="calendar.html">Calendar</a>
			</li>
			<li class="nav-item">
		  		<a class="nav-link disabled" href="#">Fundraising</a>
			</li>
	  		<li class="nav-item">
				<a class="nav-link disabled" href="#">Highlights</a>
	  		</li>
			<?php if ($CURRENT_PAGE == "teams") { ?>
	  		<li class="nav-item active">
			<?php } else { ?>
			<li class="nav-item">
			<?php } ?>
		  		<a class="nav-link" href="#">Teams</a>
	  		</li>
		</ul>
  	</div>
</nav>