<?php 
$page = 'typography';
include (dirname(__FILE__) . "/header.php"); 
?>

<h1>Typography</h1>

<!--
	Font Family
-->

<article class="example-section" id="fontfamily">
	<h3 class="example-section-heading">Font Family</h3>
	<p class="example-intro">There are two font stacks used on the Australian Diabetes Council website. The primary font stack for body copy and headings and the secondary font stack for the navigation menu.</p>
	<div class="example">
		<h4>This is the primary font stack</h4>
		<h4 style="font-family:humanist521, Helvetica, Arial, sans-serif;">This is the secondary font stack</h4>
	</div>
	<pre><code class="language-css">/* Primary Font Stack */
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

/* Secondary Font Stack */
font-family: humanist521, Helvetica, Arial, sans-serif;</code></pre>
</article>


<!--
	Headings
-->

<article class="example-section" id="headings">
	<h3 class="example-section-heading">Headings</h3>
	<p class="example-intro">Heading elements are used to create hierarchy on the page and separate out sections of content. They should be used in a step-down manner and only one <code>&lt;h1&gt;</code> should be used per page.</p>
	<div class="example">
		<h1>Primary Heading</h1>
		<h2>Second Level Heading</h2>
		<h3>Third Level Heading</h3>
		<h4>Fourth Level Heading</h4>
	</div>
	<pre><code class="language-markup">&lt;h1&gt;Primary Heading&lt;/h1&gt;
&lt;h2&gt;Second Level Heading&lt;/h2&gt;
&lt;h3&gt;Third Level Heading&lt;/h3&gt;
&lt;h4&gt;Fourth Level Heading&lt;/h4&gt;</code></pre>
</article>


<!--
	Lead Copy
-->

<article class="example-section" id="lead">
	<h3 class="example-section-heading">Lead Copy</h3>
	<p class="example-intro">The lead copy is designed to be placed straight after the page heading and is used to provide a subtitle that introduces the body copy.</p>
	<div class="example">
		<p class="lead">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout... </p>
	</div>
	<pre><code class="language-markup">&lt;p class=&quot;lead&quot;&gt;
	It is a long established fact... 
&lt;/p&gt;</code></pre>
</article>

<!--
	Body
-->

<article class="example-section" id="body">
	<h3 class="example-section-heading">Body</h3>
	<p class="example-intro"></p>
	<div class="example">
		<p class="normaltext">This is a plain paragraph of text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero massa, ullamcorper id semper in, interdum ac leo. Nunc a velit purus, quis volutpat nibh. Nam porta metus vitae sapien semper dapibus.</p> 
	</div>
	<pre><code class="language-markup">&lt;p class=&quot;normaltext&quot;&gt;This is a plain paragraph of text.&lt;/p&gt; </code></pre>
</article>


<!--
	Bold Copy
-->

<article class="example-section" id="boldcopy">
	<h3 class="example-section-heading">Bold Copy</h3>
	<p class="example-intro">The <code>&lt;strong&gt;</code> tag is used to bold important text.</p>
	<div class="example">
		<strong>This is bold text</strong> 
	</div>
	<pre><code class="language-markup">&lt;strong&gt;This is bold text&lt;/strong&gt;</code></pre>
</article>


<!--
	Links
-->

<article class="example-section" id="bodylinks">
	<h3 class="example-section-heading">Links</h3>
	<p class="example-intro">Links are used to redirect users to pages within or outside the website.</p>
	<div class="example">
		<a href="">This is a link by itself</a><br><br>
		<p class="normaltext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="">This is a link within a paragraph of text</a> praesent libero massa, ullamcorper id semper in, interdum ac leo. Nunc a velit purus, quis volutpat nibh. Nam porta metus vitae sapien semper dapibus.</p> 
	</div>
	<pre><code class="language-markup">&lt;a href=&quot;#&quot;&gt;This is a link&lt;/a&gt;
&lt;a target=&quot;_blank&quot; href=&quot;#&quot;&gt;This is a link that will open in a new window&lt;/a&gt;</code></pre>
</article>


<!--
	Emphasis
-->

<article class="example-section" id="emphasis">
	<h3 class="example-section-heading">Emphasis</h3>
	<p class="example-intro">Use the <code>&lt;em&gt;</code> tag to emphasise a word. It is important when emphasising text to not use the <code>&lt;u&gt;</code> tag.</p>
	<div class="example">
		In this paragraph the word <em>important</em> is emphasised.
	</div>
	<pre><code class="language-markup">In this paragraph the word &lt;em&gt;important&lt;/em&gt; is emphasised.</code></pre>
</article>


<!--
	Address
-->

<article class="example-section" id="address">
	<h3 class="example-section-heading">Address</h3>
	<p class="example-intro">The <code>&lt;address&gt;</code> element is used to wrap an address. This is used primarily on the contact page.</p>
	<div class="example">
		<address>
			<strong><a href="">OFFICE NAME</a></strong><br>
			1 Street Name<br>
			City, STATE 0000<br>
			<abbr title="Phone">P:</abbr> 1300 000 000
			<abbr title="Fax">F:</abbr> 02 0000 0000
		</address>
	</div>
	<pre><code class="language-markup">&lt;address&gt;
	&lt;strong&gt;
	    &lt;a href=&quot;&quot;&gt;OFFICE NAME&lt;/a&gt;
	&lt;/strong&gt;&lt;br&gt;
	1 Street Name&lt;br&gt;
	City, STATE 0000&lt;br&gt;
	&lt;abbr title=&quot;Phone&quot;&gt;P:&lt;/abbr&gt; 1300 000 000
	&lt;abbr title=&quot;Fax&quot;&gt;F:&lt;/abbr&gt; 02 0000 0000
&lt;/address&gt;</code></pre>
</article>

<!--
	Unordered Lists
-->

<article class="example-section" id="unorderedlists">
	<h3 class="example-section-heading">Unordered Lists</h3>
	<p class="example-intro">Unordered lists are created using the <code>&lt;ul&gt;</code> element. They are used to list items.</p>
	<div class="example">
		<ul>
			<li>A list item</li>
			<li>Another List Item</li>
				<ul>
					<li>A list item within a list item</li>	
				</ul>
			<li>Last List Item</li>
		</ul>
	</div>
	<pre><code class="language-markup">&lt;ul&gt;
    &lt;li&gt;A list item&lt;/li&gt;
    &lt;li&gt;Another List Item&lt;/li&gt;
        &lt;ul&gt;
	        &lt;li&gt;A list item within a list item&lt;/li&gt;	
	    &lt;/ul&gt;
    &lt;li&gt;Last List Item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
</article>

<!--
	Ordered Lists
-->

<article class="example-section" id="orderedlists">
	<h3 class="example-section-heading">Ordered Lists</h3>
	<p class="example-intro">Ordered lists are created using the <code>&lt;ol&gt;</code> element. They are used to list items in a numerical order.</p>
	<div class="example">
		<ol>
			<li>A list item</li>
			<li>Another List Item</li>
				<ol>
					<li>A list item within a list item</li>	
				</ol>
			<li>Last List Item</li>
		</ol>
	</div>
	<pre><code class="language-markup">&lt;ol&gt;
    &lt;li&gt;A list item&lt;/li&gt;
    &lt;li&gt;Another List Item&lt;/li&gt;
        &lt;ol&gt;
	        &lt;li&gt;A list item within a list item&lt;/li&gt;	
	    &lt;/ol&gt;
    &lt;li&gt;Last List Item&lt;/li&gt;
&lt;/ol&gt;</code></pre>
</article>


<?php include (dirname(__FILE__) . "/footer.php"); ?>