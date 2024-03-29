<?php 
$page = 'media';
include (dirname(__FILE__) . "/header.php"); 
?>

<h1>Media</h1>

<!--
	Media Item
-->

<article class="example-section" id="mediaitem">
	<h3 class="example-section-heading">Media Item</h3>
	<p class="example-intro"></p>
	<div class="example">
		<div class="media">
			<a href="" class="pull-left">
				<div class="datebox">
					<span class="month">Jan</span>
					<span class="day">01</span>
				</div>
			</a>
			<div class="media-body">
				<p>Title of the Event - Day Month Year<br>
					<a href=""> <small>More Details &raquo;</small></a>
				</p>
			</div>
		</div>
		<div class="media">
			<a href="" class="pull-left">
				<div class="datebox">
					<span class="month">Jan</span>
					<span class="day">01</span>
				</div>
			</a>
			<div class="media-body">
				<p>Title of the Event - Day Month Year<br>
					<a href=""> <small>More Details &raquo;</small></a>
				</p>
			</div>
		</div>
	</div>
	<pre><code class="language-markup">&lt;div class=&quot;media&quot;&gt;
	&lt;a href=&quot;&quot; class=&quot;pull-left&quot;&gt;
		&lt;div class=&quot;datebox&quot;&gt;
			&lt;span class=&quot;month&quot;&gt;Jan&lt;/span&gt;
			&lt;span class=&quot;day&quot;&gt;01&lt;/span&gt;
		&lt;/div&gt;
	&lt;/a&gt;
	&lt;div class=&quot;media-body&quot;&gt;
		&lt;p&gt;Title of the Event - Day Month Year&lt;br&gt;
			&lt;a href=&quot;&quot;&gt; &lt;small&gt;More Details &amp;raquo;&lt;/small&gt;&lt;/a&gt;
		&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
</article>

<!--
	News Item
-->

<article class="example-section" id="newsitem">
	<h3 class="example-section-heading">News Item</h3>
	<p class="example-intro"></p>
	<div class="example">
		<div class="media">
			<a href="" class="pull-left">
				<img class="newsthumbnail" src="http://australiandiabetescouncil.com/Images/blank-state-images/defaultnews.aspx">
			</a>
			<div class="media-body">
				<p>
					<b>Heading of the News Story</b><br>
					<small>Intro. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nisi leo, faucibus vel interdum vel, aliquet quis nisi. Vestibulum facilisis cursus facilisis.</small>
					<a href=""> <small>Read More</small></a>
				</p>
			</div>
		</div>
		<div class="media">
			<a href="" class="pull-left">
				<img class="newsthumbnail" src="http://australiandiabetescouncil.com/Images/blank-state-images/defaultnews.aspx">
			</a>
			<div class="media-body">
				<p>
					<b>Heading of the News Story</b><br>
					<small>Intro. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nisi leo, faucibus vel interdum vel, aliquet quis nisi. Vestibulum facilisis cursus facilisis.</small>
					<a href=""> <small>Read More</small></a>
				</p>
			</div>
		</div>
	</div>
	<pre><code class="language-markup">&lt;div class=&quot;media&quot;&gt;
	&lt;a href=&quot;&quot; class=&quot;pull-left&quot;&gt;
		&lt;img class=&quot;newsthumbnail&quot; src=&quot;http://australiandiabetescouncil.com/Images/blank-state-images/defaultnews.aspx&quot;&gt;
	&lt;/a&gt;
	&lt;div class=&quot;media-body&quot;&gt;
		&lt;p&gt;
			&lt;b&gt;Heading of the News Story&lt;/b&gt;&lt;br&gt;
			&lt;small&gt;Intro. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nisi leo, faucibus vel interdum vel, aliquet quis nisi. Vestibulum facilisis cursus facilisis.&lt;/small&gt;
			&lt;a href=&quot;&quot;&gt; &lt;small&gt;Read More&lt;/small&gt;&lt;/a&gt;
		&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
</article>


<?php include (dirname(__FILE__) . "/footer.php"); ?>