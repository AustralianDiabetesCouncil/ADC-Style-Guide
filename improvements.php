<?php 
$page = 'improvements';
include (dirname(__FILE__) . "/header.php"); 
?>
<h1>Improvements</h1>

<h3>Element updates required to match branding guidelines</h3>
<ul>
<li>
	<h5>Correct font family</h5>
	<ul>
		<li>Should be Humanist 521 throughout website (currently only menu and footer links)</li>
	</ul>
</li>
<li>
	<h5>Heading and link colour to be updated</h5>
	<ul>
		<li>Should be rgb(0,136,178) or #0088b2. Currently rgb(21,83,117)</li>
	</ul>
</li>
<li>
	<h5>Body copy colour to be updated</h5>
	<ul>
		<li>Should be rgb(109,111,113) or #6d6f71. Currently rgb(51,51,51)</li>
	</ul>
</li>
</ul>

<h2>Suggesstions:</h2>
<ul>
<li>
	<h5>Improved Breadcumbs</h5>
	<ul>
		<li>use psuedo-elements to add '/' after items rather than manually</li>
	</ul>
</li>
<li>
	<h5>Remove thumnail from news items on homepage (dont appear to be used)</h5>
</li>
<li>
	<h4>Standardise markup for lists</h4>
	<ul>
		<li>Currentyly manually adding buttet points to lines of text. HTML list markup should be used</li>
		<li>Example: <a href="http://australiandiabetescouncil.com/Events">http://australiandiabetescouncil.com/Events</a></li>
	</ul>
</li>
<li>
	<h5>Remove glow off footer links</h5>
	<ul>
		<li>Perhaps darken on hover like links throughout the site</li>
	</ul>
</li>
<li>
	<h5>Remove <code>&lt;u&gt;</code> element from underlined text</h5>
	<ul>
		<li>This HTML element is deprecated</li>
		<li>Use <code>&lt;em&gt;</code> or a class with CSS for text-decoration: underline; instead</li>
	</ul>
</li>
<li>
	<h5>Standardised font family</h5>
	<ul>
		<li>Example <a href="http://australiandiabetescouncil.com/Events/For-People-with-Diabetes/Camps-for-type-1-(Young-Adults)">http://australiandiabetescouncil.com/Events/For-People-with-Diabetes/Camps-for-type-1-(Young-Adults)</a></li>
	</ul>
</li>	
<li>
	<h5>Improving markup of images</h5>
	<ul>
		<li>Currently use tables to lay out image with text below. Example at: <a href="http://australiandiabetescouncil.com/Living-with-Diabetes/The-Diabetes-Team">http://australiandiabetescouncil.com/Living-with-Diabetes/The-Diabetes-Team</a></li>
		<li>Suggest using <code>&lt;figure&gt;</code> with <code>&lt;figcaption&gt;</code> instead</li>
	</ul>
</li>
<li>
	<h5>spacing issues</h5>
	<ul>
		<li>>More consistent spacing between elements on homepage</li>
		<li>top of sidebar navigation and breadcrumbs not aligned</li>
		<li>Between bottom of main container and footer</li>
	</ul>
</li>
<li>
	<h5>New border colour (or no border?) for homepage boxes</h5>
	<ul>
		<li>Branding guidelines give a very clean look. The border is restrictive and the dark colour doesn't mix well with the imagery</li>
	</ul>
</li>
<li>
	<h5>SIngle Event Pages</h5>
	<ul>
		<li>More consistency required in format</li>
		<li>Many contain spacing and formatting errors. Example: http://australiandiabetescouncil.com/Events/For-People-with-Diabetes/Information-Day/Information-Day-Temora</li>
	</ul>
</li>
<li>
	<h5>Other issues</h5>
	<ul>
		<li>Incorrect search button on search results page</li>
		<li>Image next to each result not needed on search results page</li>
		<li>Add sidebar navigation to FAQ page. These can direct link down the page to the relevant FAQ</li>
		<li>Dead links for document downloads: http://australiandiabetescouncil.com/Events/Diabetes-Prevention/Exercise-and-Prevention</li>
	</ul>
</li>
</ul>

<h3>New Elements for site</h3>

<ul>
<li>
	<h5>Updated sidebar secondary lists</h5>
</li>
<li>
	<h5>Button for downloads</h5>
</li>
<li>
	<h5>Icons for footer and buttons</h5>
</li>
</ul>

<?php include (dirname(__FILE__) . "/footer.php"); ?>