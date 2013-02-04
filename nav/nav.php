<?//navigation bar?>
<script>
	var el = document.getElementsByTagName("body")[0];
	el.className = "";
</script>
<noscript>
<!--[if IE]>
	<link rel="stylesheet" href="nav/css/ie.css">
<![endif]-->
</noscript>
<link rel="stylesheet" href="nav/css/nav.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<nav id="topNav" class="no-js">
		<ul>
			<li><a href="index.php" title="Home">Home</a></li>
			<li><a href="#" title="Projects">Projects</a>
				<ul>
					<li><a href="" title="Personal Projects">Personal Projects</a></li>
					<li><a href="" title="Work Projects">Work Projects</a></li>
					<li class="last"><a href="pages/sitepage.php" target="new" title="About this site">This Site</a></li>
				</ul>
			</li>
			<li><a href="contactme.php" title="Contact Me">Contact Me</a>
				<ul>
					<li><a href="http://www.facebook.com/BillyThaKidd" target="new" title="FaceBook">FaceBook</a></li>
					<li><a href="" target="new" title="Google Plus">Google +</a></li>
					<li><a href="" target="new" title="LinkedIn">LinkedIn</a></li>
					<li class="last"><a href="" title="Email Me">Email Me</a></li>
				</ul>
			</li>
			<li><a href="/pages/viewblog.php" title="About Me">About Me</a>
				<ul>
					<li><a href="/pages/viewblog.php">Blog</a></li>
					<li><a href="" title="Resume">Resume</a></li>
					<li class="last"><a target="new" href="https://github.com/billythakidd04" title="GitHub">GitHub</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<script src="nav/js/modernizr.custom.69568.js"></script>
	<script>
		(function($)
		{
			//cache nav
			var nav = $("#topNav");

			//add indicators and hovers to submenu parents
			nav.find("li").each(function()
			{
				if ($(this).find("ul").length > 0)
				{
					$("<span>").text("").appendTo($(this).children(":first"));

					//show subnav on hover
					$(this).mouseenter(function()
					{
						$(this).find("ul").stop(true, true).slideDown();
					});

					//hide submenus on exit
					$(this).mouseleave(function()
					{
						$(this).find("ul").stop(true, true).slideUp();
					});
				}
			});
		})(jQuery);
	</script>
