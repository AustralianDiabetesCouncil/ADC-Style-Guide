<?php 
$page = 'images';
include (dirname(__FILE__) . "/header.php"); 
?>

<h1>Images</h1>

<!--
	Image Usage
-->

<h3 class="example-section-heading" id="imageusage">Image Usage Guidelines</h3>
<ul>
	<li>Images should be no more than 72ppi in resolution</li>
	<li>Images should be pre-cropped for the space they will be inserted into (as indicated below)</li>
	<li>Wrap images within articles in the appropriate HTML code as indicated in the <a href="#imageleft">floated sections</a>.
</ul>
<h3>Image Sizes</h3>
<p>The below table indicates the required images sizes throghout the website</p>
<table class="table table-bordered table-striped">
	<thead>
	  <tr>
		<th width="30%">Image Name</th>
		<th width="25%">Size (width by height)</th>
		<th>Image Location</th>
	  </tr>
	</thead>
	<tbody>
		<tr>
			<td>Homepage Banner</td>
			<td>868px by 388px</td>
			<td>Within the courasel on the homepage</td>
		</tr>
		<tr>
			<td>Homepage Thumbnail Images</td>
			<td>268px by 199px</td>
			<td>Within a homepage thumbnail box on the homepage</td>
		</tr>
		<tr>
			<td>Small Article Image</td>
			<td>300px by 300px</td>
			<td>Within an Article</td>
		</tr>
		<tr>
			<td>Large Article Image</td>
			<td>670px by 300px</td>
			<td>Within an Article</td>
		</tr>
		<tr>
			<td>News Article Thumbnail</td>
			<td>84px by 74px</td>
			<td>In the Latest News section of the homepage and on the <a href="http://australiandiabetescouncil.com/Media/News">Latest News</a> page.</td>
		</tr>
		<tr>
			<td>Recipe Image</td>
			<td>380px by 380px</td>
			<td>On the <a href="http://australiandiabetescouncil.com/Recipes">Recipes</a> page.</td>
		</tr>
	</tbody>
</table>


<!--
	Polaroid
-->

<article class="example-section" id="polaroid">
	<h3 class="example-section-heading">Polariod Image</h3>
	<p class="example-intro">The polaroid image is used exclusively in recipes.</p>
	<div class="example">
		<img class="img-polaroid" width="380" src="img/recipe.jpg">
	</div>
	<pre><code class="language-markup">&lt;img class=&quot;img-polaroid&quot; src=&quot;&quot;&gt;</code></pre>
</article>

<!--
	Floated Left
-->

<article class="example-section" id="imageleft">
	<h3 class="example-section-heading">Image Floated Left</h3>
	<p class="example-intro">To float an image to the left, enclose the image within a <code>&lt;figure&gt;</code> element with a class of <code>&lt;pull-left&gt;</code>.</p>
	<div class="example">
		<figure class="pull-left"><img src="img/image-page-example.jpg" width="120"></figure><p class="normaltext">This is some text which is floated around a left aligned image. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero massa, ullamcorper id semper in, interdum ac leo. Nunc a velit purus, quis volutpat nibh. Nam porta metus vitae sapien semper dapibus.</p>
	</div>
	<pre><code class="language-markup">&lt;figure class=&quot;pull-left&quot;&gt;
	&lt;img src=&quot;&quot; alt=&quot;&quot;&gt;
&lt;/figure&gt;
&lt;p class=&quot;normaltext&quot;&gt;
	This is some text which is floated around a left-aligned image.
&lt;/p&gt;</code></pre>
</article>

<!--
	Floated Right
-->

<article class="example-section" id="imageright">
	<h3 class="example-section-heading">Image Floated Right</h3>
	<p class="example-intro">To float an image to the right, enclose the image within a <code>&lt;figure&gt;</code> element with a class of <code>&lt;pull-right&gt;</code>.</p>
	<div class="example">
		<figure class="pull-right"><img src="img/image-page-example.jpg" width="120"></figure><p>This is some text which is floated around a left aligned image. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero massa, ullamcorper id semper in, interdum ac leo. Nunc a velit purus, quis volutpat nibh. Nam porta metus vitae sapien semper dapibus.</p>
	</div>
	<pre><code class="language-markup">&lt;figure class=&quot;pull-right&quot;&gt;
	&lt;img src=&quot;&quot; alt=&quot;&quot;&gt;
&lt;/figure&gt;
&lt;p class=&quot;normaltext&quot;&gt;
	This is some text which is floated around a right-aligned image.
&lt;/p&gt;
</code></pre>
</article>


<!--
	Image With Caption
-->

<article class="example-section" id="caption">
	<h3 class="example-section-heading">Image With Caption</h3>
	<p class="example-intro">To give an image a caption, the <code>&lt;figure&gt;</code> element should be used to wrap the image and a <code>&lt;figcaption&gt;</code> element should be used inside the figure element to hold the caption. To align the image/caption use <code>pull-left</code> or <code>pull-right</code>. To set the images width relative to the container, give the figure elemnt a span width (<code>span-2</code> for example).</p>
	<div class="example">
		<figure class="pull-left span2"><img src="img/image-page-example.jpg" width="140"><figcaption>This is the caption of the floated left image</figcaption></figure><p>This text floats aorund the image and caption. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero massa, ullamcorper id semper in, interdum ac leo. Nunc a velit purus, quis volutpat nibh. Nam porta metus vitae sapien semper dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero massa, ullamcorper id semper in, interdum ac leo. Nunc a velit purus, quis volutpat nibh. Nam porta metus vitae sapien semper dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero massa, ullamcorper id semper in, interdum ac leo. Nunc a velit purus, quis volutpat nibh. Nam porta metus vitae sapien semper dapibus.</p>
	</div>
	<pre><code class="language-markup">&lt;figure class=&quot;pull-left span2&quot;&gt;
	&lt;img src=&quot;&quot; alt=&quot;&quot;&gt;
	&lt;figcaption&gt;This is the caption of the floated left image&lt;/figcaption&gt;
&lt;/figure&gt;
&lt;p class=&quot;normaltext&quot;&gt;
	This text floats aorund the image and caption.
&lt;/p&gt;
</code></pre>
</article>


<!--
	Homepage News Icon
-->

<article class="example-section" id="homepagenewsicon">
	<h3 class="example-section-heading">Homepage News Icon</h3>
	<p class="example-intro"></p>
	<div class="example">
		<img src="img/homepage-news-icon.jpg">
	</div>
	<pre><code class="language-markup">&lt;img class=&quot;newsthumbnail&quot; src=&quot;&quot;&gt;</code></pre>
</article>


<?php include (dirname(__FILE__) . "/footer.php"); ?>