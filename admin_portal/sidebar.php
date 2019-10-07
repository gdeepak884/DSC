<html>
<head>
<script>
var header = document.getElementById('sidebar');
var headerLinks = header.getElementsByTagName('a');

for(var i = 0, l = headerLinks.length; i < l; i++) {
  headerLinks[i].onclick = function() {
    var href = this.href;

    //Load the AJAX page (this is a whole other topic)
    loadPage(href);  

    //Update the address bar to make it look like you were redirected
    location.hash = '#' + href;

    //Unfocus the link to make it look like you were redirected
    this.blur();

    //Prevent the natural HTTP redirect
    return false;
  }
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<nav class="main-menu">
		<ul>
			<li>
				<a href="index.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
	                <li>
		 		<a href="index.php">
					<i class="fa fa-bar-chart nav_icon"></i>
					<span class="nav-text">
						Notices
					</span>
				</a>
			</li>
                        <li>
				<a href="index.php">
					<i class="fa fa-bar-chart nav_icon"></i>
					<span class="nav-text">
						Pages
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span class="nav-text">Placement Cell</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="index.php">Users</a>
					</li>
					<li>
						<a class="subnav-text" href="index.php">CPC Content Portal</a>
					</li>
				</ul>
			</li>
                        <li>
				<a href="http://dsc.du.ac.in" target='_blank'>
					<i class="icon-font nav-icon"></i>
					<span class="nav-text">
					Website
					</span>
				</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="http://dsc.du.ac.in" title="Dyal Singh College"><img src="logo"/></a></h1>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
					<div class="profile_details">		
						<ul>
						    <li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
                                                                        <li> <a href="index.php"><i class="fa fa-user"></i> Hello, <?php echo $name=$_SESSION['username'];
?> 
</a> </li>
									<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
