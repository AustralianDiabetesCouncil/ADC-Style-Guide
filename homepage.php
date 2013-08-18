<?php 
$page = 'homepage';
include (dirname(__FILE__) . "/header.php"); 
?>

<h1>Homepage Elements</h1>

<!--
	Homepage Thumbnail Box
-->

<article class="example-section" id="thumbnailbox">
	<h3 class="example-section-heading">Homepage Thumnail Box</h3>
	<p class="example-intro"></p>
	<div class="example">
		<div style="width: 270px;">
			<div class="thumbnails">
				<img alt="" class="homepagethumbnails" src="http://placehold.it/268x199&text=Thumbnail">
				<div class="thumbnailscont">
					<h5>The heading associated with the thumbnail</h5>
					<a class="pull-right" href="">Read More &raquo;</a></div>
				</div>
			</div>
		</div>
	<pre><code class="language-markup">&lt;div class=&quot;span3&quot;&gt;
	&lt;div class=&quot;thumbnails&quot;&gt;
		&lt;img alt=&quot;&quot; class=&quot;homepagethumbnails&quot; src=&quot;&quot;&gt;
		&lt;div class=&quot;thumbnailscont&quot;&gt;
			&lt;h5&gt;The heading associated with the thumbnail&lt;/h5&gt;
			&lt;a class=&quot;pull-right&quot; href=&quot;&quot;&gt;Read More&raquo;&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
</article>


<!--
	Carousel
-->

<article class="example-section" id="carousel">
	<h3 class="example-section-heading">Carousel</h3>
	<p class="example-intro"></p>
	<div class="example">
		<div class="carousel slide" id="myCarousel">
			<div class="carousel-inner">
				<div class="active item">
					<img src="http://placehold.it/728x200&text=Slide+Image">
					<div class="carousel-caption">
						<h4>Slide Heading</h4>
						<p>This is the text associated with the slide</p>
					</div>
				</div>
				<div class="item">
					<img src="http://placehold.it/728x200&text=Slide+Image">
					<div class="carousel-caption">
						<h4>Slide Heading</h4>
						<p>This is the text associated with the slide</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<pre><code class="language-markup">&lt;div class=&quot;carousel slide&quot; id=&quot;myCarousel&quot;&gt;
	&lt;div class=&quot;carousel-inner&quot;&gt;
		&lt;div class=&quot;item&quot;&gt;
			&lt;img src=&quot;&quot;&gt;
			&lt;div class=&quot;carousel-caption&quot;&gt;
				&lt;h4&gt;Slide Heading&lt;/h4&gt;
				&lt;p&gt;This is the text associated with the slide&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
</article>


<?php include (dirname(__FILE__) . "/footer.php"); ?>