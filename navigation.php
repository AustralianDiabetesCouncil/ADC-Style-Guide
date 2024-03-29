<?php 
$page = 'navigation';
include (dirname(__FILE__) . "/header.php"); 
?>

<h1>Navigation</h1>

<!--
	Primary Navigation
-->

<article class="example-section" id="primarynav">
	<h3 class="example-section-heading">Primary Navigation</h3>
	<p class="example-intro"></p>
	<div class="example">
		<div class="navbar">
			<div class="navbar-inner">
			  <div class="container">
					<ul class="nav">
						<li><a href="" style="">Home</a></li>
						<li class="HighLighted" style=""><a href="" style="">Selected Page</a></li>
						<li><a href="">Another Page</a></li>
						<li><a href="">Last Page</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<pre><code class="language-markup">&lt;div class=&quot;navbar&quot;&gt;
	&lt;div class=&quot;navbar-inner&quot;&gt;
	  &lt;div class=&quot;container&quot;&gt;
			&lt;ul class=&quot;nav&quot;&gt;
				&lt;li&gt;&lt;a href=&quot;&quot; style=&quot;&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
				&lt;li class=&quot;HighLighted&quot;&gt;&lt;a href=&quot;&quot;&gt;Selected Page&lt;/a&gt;&lt;/li&gt;
				&lt;li&gt;&lt;a href=&quot;&quot;&gt;Another Page&lt;/a&gt;&lt;/li&gt;
				&lt;li&gt;&lt;a href=&quot;&quot;&gt;Last Page&lt;/a&gt;&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
</article>


<!--
	Header Navigation
-->

<article class="example-section" id="header">
	<h3 class="example-section-heading">Header Navigation</h3>
	<p class="example-intro"></p>
	<div class="example">
		<div class="secondarynav">
			<ul class="nav nav-pills">
				<li style=""><a href="">Link One</a></li>
				<li style=""><a href="">Link Two</a></li>
				<li style=""><a href="">Link Three</a></li>
			</ul>
		</div>
	</div>
	<pre><code class="language-markup">&lt;div class=&quot;secondarynav&quot;&gt;
	&lt;ul class=&quot;nav nav-pills&quot;&gt;
		&lt;li style=&quot;&quot;&gt;&lt;a href=&quot;&quot;&gt;Link One&lt;/a&gt;&lt;/li&gt;
		&lt;li style=&quot;&quot;&gt;&lt;a href=&quot;&quot;&gt;Link Two&lt;/a&gt;&lt;/li&gt;
		&lt;li style=&quot;&quot;&gt;&lt;a href=&quot;&quot;&gt;Link Three&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;</code></pre>
</article>


<!--
	Sidebar Navigation
-->

<article class="example-section" id="sidebarnav">
	<h3 class="example-section-heading">Sidebar navigation</h3>
	<p class="example-intro"></p>
	<div class="example">
		<ul id="menuElem">
			<li><a>Top Level Item</a></li>
			<li class="HighLighted"><a>Top Level Item (Selected)</a></li>
			<ul>
				<li><a>Second Level Item</a></li>
				<li class="HighLighted"><a>Second Level Item (selected)</a></li>
				<li><a>Second Level Item</a></li>
			</ul>
			<li><a>Top Level Item</a></li>
		</ul>
	</div>
	<pre><code class="language-markup">&lt;ul id=&quot;menuElem&quot;&gt;
	&lt;li&gt;&lt;a&gt;Top Level Item&lt;/a&gt;&lt;/li&gt;
	&lt;li class=&quot;HighLighted&quot;&gt;&lt;a&gt;Top Level Item (Selected)&lt;/a&gt;&lt;/li&gt;
	&lt;ul&gt;
		&lt;li&gt;&lt;a&gt;Second Level Item&lt;/a&gt;&lt;/li&gt;
		&lt;li class=&quot;HighLighted&quot;&gt;&lt;a&gt;Second Level Item (selected)&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a&gt;Second Level Item&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
	&lt;li&gt;&lt;a&gt;Top Level Item&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
</article>


<!--
	Breadcrumb
-->

<article class="example-section" id="breadcrumb">
	<h3 class="example-section-heading">Breadcrumb</h3>
	<p class="example-intro">Breadcrumbs provide the user another form of navigation based on parent pages to the one they're on. The breadcrumbs sit above the main content area on the inner pages.</p>
	<div class="example">
		<a href="">Home</a>&nbsp;&nbsp; / &nbsp;&nbsp;<span class="CMSBreadCrumbsCurrentItem">Current Page</span>
	</div>
	<pre><code class="language-markup">&lt;a href=&quot;&quot;&gt;Home&lt;/a&gt;&amp;nbsp;&amp;nbsp; / &amp;nbsp;&amp;nbsp;&lt;span class=&quot;CMSBreadCrumbsCurrentItem&quot;&gt;Current Page&lt;/span&gt;</code></pre>
</article>


<?php include (dirname(__FILE__) . "/footer.php"); ?>