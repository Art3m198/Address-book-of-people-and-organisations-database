
    <body>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo "/" ?>">Database</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li <?php if($page_name == PAGENAME_INDEX || $page_name == PAGENAME_CONTACTS) echo 'class="active"'; ?>><a href="<?php echo PAGELINK_INDEX; ?>"><i class="fa fa-users" aria-hidden="true"></i><font color="#202020"> <b><?php echo PAGENAME_INDEX; ?></font></b></a></li>
						<li <?php if($page_name == PAGENAME_ORG) echo 'class="active"'; ?>><a href="<?php echo PAGELINK_ORG; ?>"><i class="fa fa-institution" aria-hidden="true"></i><font color="#202020"> <b><?php echo PAGENAME_ORG; ?></font></b></a></li>
						<li <?php if($page_name == PAGENAME_NEWS) echo 'class="active"'; ?>><a href="<?php echo PAGELINK_NEWS; ?>" class = "fa fa-bell" aria-hidden="true"><font color="#202020"><b> <?php echo PAGENAME_NEWS; ?></font></b></a></li>
						<!-- <li><a href="/forum" target = "_blanc" class = "fa fa-vcard"><font color="#202020"><b> Форум</font></b></a></li> -->
						<li><a href="http://www.google.com" target = "_blanc" class = "fa fa-list"><font color="#ff0000"><b> Feedback</font></b></a></li>
						<li><a href="http://telegram.org" target = "_blanc" class = "fa fa-telegram"><font color="#2780e5"><b> We are in Telegram</font></b></a></li>
						<li><a href="/donate" target = "_blanc" class = "fa fa-money"><font color="#f23d9d"><b> Donate</font></b></a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		
		<div class="container pt-50">
			<h2><?php if(isset($subpage_name)) { echo $subpage_name; } else { echo $page_name; } ?></h2>
			
			<hr/>