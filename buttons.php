<?php 
$page = 'buttons';
include (dirname(__FILE__) . "/header.php"); 
?>

<h1>Buttons</h1>

<!--
	Standard Button
-->

<article class="example-section" id="standard">
	<h3  id="standard" class="example-section-heading">Standard Buttons</h3>
	<p class="example-intro">The most common buttons used throughout the website.</p>
	<table class="table table-bordered table-striped">
		<thead>
		  <tr>
			<th>Button</th>
			<th>class=""</th>
			<th>Description</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td><a href="" class="btn">Default</a></td>
			<td><code>btn</code></td>
			<td>Standard blue button</td>
		  </tr>
		  <tr>
			<td><a href="" class="btn btn-danger">Donate</a></td>
			<td><code>btn btn-danger</code></td>
			<td>Red button for donations</td>
		  </tr>
		  <tr>
			<td><a href="" class="btn btn-success">Download</a></td>
			<td><code>btn btn-success</code></td>
			<td>Button for resource downloads</td>
		  </tr>
		  <tr>
			<td><a href="">Read More &raquo;</a></td>
			<td>&nbsp;</td>
			<td>Read More link</td>
		  </tr>
		</tbody>
	</table>
	<pre><code class="language-markup">&lt;a href=&quot;&quot; class=&quot;btn&quot;&gt;Standard button&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;btn btn-danger&quot;&gt;Donate button&lt;/a&gt;
&lt;a href=&quot;&quot; class=&quot;btn btn-success&quot;&gt;Download button&lt;/a&gt;
&lt;a href=&quot;&quot;&gt;Read More &raquo;&lt;/a&gt;</code></pre>
</article>

<!--
	Full Width Button
-->

<article class="example-section" id="fullwidth">
	<h3  id="standard" class="example-section-heading">Full Width Button</h3>
	<p class="example-intro">Add a class of <code>.btn-block</code> to any button to make the button full width.</p>
	<div class="example">
		<a class="btn btn-block">Full Width Button</a>
	</div>
	<pre><code class="language-markup">&lt;a class=&quot;btn btn-block btn-large&quot;&gt;Full Width Button&lt;/a&gt;</code></pre>
</article>

<!--
	Sized Button
-->

<article class="example-section" id="sized">
	<h3 class="example-section-heading">Sized Buttons</h3>
	<p class="example-intro">Buttons can easily be sized to command a greater visual importance. Use the class of <code>.btn-small</code>, <code>.btn-medium</code> or <code>.btn-large</code> to specify the botton size. The default size is medium.</p>
	<div class="example">
		<a class="btn btn-large">Large Button</a><br><br>
		<a class="btn btn-medium">Medium Button</a><br><br>
		<a class="btn btn-small">Small Button</a>
	</div>
	<pre><code class="language-markup">&lt;a class=&quot;btn btn-large&quot;&gt;Large Button&lt;/a&gt;<br>
&lt;a class=&quot;btn btn-medium&quot;&gt;Medium Button&lt;/a&gt;<br>
&lt;a class=&quot;btn btn-small&quot;&gt;Small Button&lt;/a&gt;</code></pre>
</article>


<!--
	Button with Tooltip
-->

<article class="example-section" id="tooltip">
	<h3 class="example-section-heading">Button with Tooltip</h3>
	<p class="example-intro">A tooltip can be added to a donate button to provide the visitor with additional information about the buttons action. Based on the buttons position, the <code>dada-placement</code> value can be changed to top, left, right or bottom. Bottom should be used where possible.</p>
	<div class="example">
		<a class="btn btn-danger" data-original-title="Did you know donations are tax deductible?" data-placement="right" data-toggle="modal" href="" id="btndonate" rel="tooltip" role="button">Hover to See Tooltip</a>
	</div>
	<pre><code class="language-markup">&lt;a class=&quot;btn btn-danger&quot; data-original-title=&quot;Tooltip Text&quot; data-placement=&quot;right&quot; data-toggle=&quot;modal&quot; href=&quot;#&quot; id=&quot;btndonate&quot; rel=&quot;tooltip&quot; role=&quot;button&quot;&gt;Donate Online Now&lt;/a&gt;</code></pre>
</article>

<?php include (dirname(__FILE__) . "/footer.php"); ?>