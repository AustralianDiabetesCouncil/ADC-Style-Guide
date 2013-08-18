<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Style Guide - Australian Diabetes Council</title>
        <meta name="viewport" content="width=device-width">
        
		<!-- From ADC website -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.css">
		<link rel="stylesheet" href="css/website.css">
		
		<!-- For the Style Guide -->
        <link rel="stylesheet" href="css/styleguide.css">
        
        <!-- Added stylesheet which fixes website bugs -->
        <link rel="stylesheet" href="updates.css">
        
        <?php if ($page == 'newbuttons') { ?>
        	<!-- buttons stylesheet -->
			<link rel="stylesheet" href="buttons/style.css">
		<?php } ?>
        
    </head>
    <body class="style-guide">

	<div class="container container-body">
		<div class="row">
			<div class="header"> 
				<div id="logo" class="span3 pull-left">
				  <img width="300" src="img/ADC.png" alt="ADC Logo">
				</div>
			</div>
		</div>
		<div class="zoneMainContent">
			<div class="row">
				<div class="span3"> 		  
					<ul id="menuElem" class="example-navigation sticky">
						<li <?php echo ($page == 'home') ? 'class="HighLighted"' : '';?>><a href="index.php">Overview</a></li>
						<li <?php echo ($page == 'scaffolding') ? 'class="HighLighted"' : '';?>><a href="pagetemplates.php">Page Templates</a>
							<ul>
								<li><a href="pagetemplates.php#homelayout">Page Layouts</a></li>
								<li><a href="pagetemplates.php#responsive">Responsive Design</a></li>
								<li><a href="pagetemplates.php#responsiveutility">Responsive Utility Classes</a></li>
							</ul>
						</li>
						<li <?php echo ($page == 'colours') ? 'class="HighLighted"' : '';?>><a href="colours.php">Colours</a>
							<ul>

							</ul>
						</li>
						<li <?php echo ($page == 'logos') ? 'class="HighLighted"' : '';?>><a href="logos.php">Logos</a>
							<ul>
								<li><a href="logos.php#usage">Usage</a></li>
								<li><a href="logos.php#logos">ADC Brand Logo List</a></li>
								<li><a href="logos.php#speciallogos">Special Logos</a></li>
							</ul>
						</li>
						<li <?php echo ($page == 'typography') ? 'class="HighLighted"' : '';?>><a href="typography.php">Typography</a>
							<ul>
								<li><a href="typography.php#fontfamily">Font Families</a></li>
								<li><a href="typography.php#headings">Headings</a></li>
								<li><a href="typography.php#body">Body Copy</a></li>
								<li><a href="typography.php#lead">Lead Copy</a></li>
								<li><a href="typography.php#boldcopy">Bold Copy</a></li>
								<li><a href="typography.php#bodylinks">Links</a></li>
								<li><a href="typography.php#emphasis">Emphasis</a></li>
								<li><a href="typography.php#address">Address</a></li>
								<li><a href="typography.php#unorderedlists">Unordered Lists</a></li>
								<li><a href="typography.php#orederedlists">Ordered Lists</a></li>
							</ul>
						</li>
						<li <?php echo ($page == 'buttons') ? 'class="HighLighted"' : '';?>><a href="buttons.php">Buttons</a>
							<ul>
								<li><a href="buttons.php#standard">Standard Buttons</a></li>
								<li><a href="buttons.php#fullwidth">Full Width</a></li>
								<li><a href="buttons.php#sized">Sized</a></li>
								<li><a href="buttons.php#tooltip">Button with Tooltip</a></li>
							</ul>
						</li>
						<li <?php echo ($page == 'images') ? 'class="HighLighted"' : '';?>><a href="images.php">Images</a>
							<ul>
								<li><a href="images.php#imageusage">Image Usage</a></li>
								<li><a href="images.php#polaroid">Polaroid</a></li>
								<li><a href="images.php#imageleft">Floated Left</a></li>
								<li><a href="images.php#imageright">Floated Right</a></li>
								<li><a href="images.php#caption">Image with Caption</a></li>
								<li><a href="images.php#homepagenewsicon">Homepage News Icons</a></li>
							</ul>
						</li>
						<li <?php echo ($page == 'media') ? 'class="HighLighted"' : '';?>><a href="media.php">Media</a>
							<ul>
								<li><a href="media.php#mediaitem">Media Entry</a></li>
								<li><a href="media.php#newsitem">News Entry</a></li>
							</ul>
						</li>
						<li <?php echo ($page == 'navigation') ? 'class="HighLighted"' : '';?>><a href="navigation.php">Navigation</a>
							<ul>
								<li><a href="navigation.php#primarynav">Primary Navigation</a></li>
								<li><a href="navigation.php#headernav">Header Navigation</a></li>
								<li><a href="navigation.php#sidebarnav">Sidebar Navigation</a></li>
								<li><a href="navigation.php#breadcrumb">Breadcrumb</a></li>
							</ul>
						</li>
						<li <?php echo ($page == 'tables') ? 'class="HighLighted"' : '';?>><a href="tables.php">Tables</a>
							<ul>
								<li><a href="tables.php#tablestandard">Standard Table</a></li>
								<li><a href="tables.php#tablestripped">Stripped Table</a></li>
								<li><a href="tables.php#tablebordered">Bordered Table</a></li>
							</ul>
						</li>
						<li <?php echo ($page == 'email') ? 'class="HighLighted"' : '';?>><a href="email.php">Email</a>
							<ul>
								<li><a href="email.php#emailsig">Email Signature</a></li>
								<li><a href="email.php#newslettertemplates">Newsletter Templates</a></li>
							</ul>
						</li>
						<li <?php echo ($page == 'other') ? 'class="HighLighted"' : '';?>><a href="other.php">Other Elements</a>
							<ul>
								<li><a href="other.php#faq">FAQ</a></li>
								<li><a href="other.php#well">Well</a></li>
								<li><a href="other.php#searchbox">Search Box</a></li>
								<li><a href="other.php#icons">Icons</a></li>
								<li><a href="other.php#clearfix">Clearfix</a></li>
								<li><a href="other.php#footerlink">Footer Link</a></li>
								<li><a href="other.php#footer">Website Footer</a></li>
								<li><a href="other.php#thumbnailbox">Homepage Elements</a></li>
							</ul>
						</li>
					</ul>
				</div>              
				<div class="span8">
					<div id="example-content">