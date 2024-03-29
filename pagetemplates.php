<?php 
$page = 'scaffolding';
include (dirname(__FILE__) . "/header.php"); 
?>

<h1>Page Templates</h1>

<!--
	Homepage Layout
-->

<article class="example-section" id="homelayout">
	<h3 class="example-section-heading">Homepage Layout</h3>
	<p class="example-intro">This demo illustrates how the various homepage elements interact responsively. Click the below button and resize the browser window horizontally.<br><br><a target="_blank" href="layouts/home.php" class="btn btn-medium">View the layout</a></p>
</article>

<!--
	Content Page Layout
-->

<article class="example-section" id="contentlayout">
	<h3 class="example-section-heading">Content Page Layout</h3>
	<p class="example-intro">This demo illustrates how the various content page elements interact responsively. Click the below button and resize the browser window horizontally.<br><br><a target="_blank" href="layouts/page.php" class="btn btn-medium">View the layout</a></p>
</article>


<!--
	Responsive
-->

<article class="example-section" id="responsive">
	<h3 class="example-section-heading">Responsive Design</h3>
	<p class="example-intro">The Australian Diabetes Council website utilises the Boostrap Responsive CSS Framework.</p>
	<table class="table table-bordered table-striped">
		<thead>
		<tr>
		  <th>Label</th>
		  <th>Layout width</th>
		  <th>Column width</th>
		  <th>Gutter width</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td>Large display</td>
				<td>1200px and up</td>
				<td>70px</td>
				<td>30px</td>
			</tr>
			<tr>
				<td>Default</td>
				<td>980px and up</td>
				<td>60px</td>
				<td>20px</td>
			</tr>
			<tr>
				<td>Portrait tablets</td>
				<td>768px and above</td>
				<td>42px</td>
				<td>20px</td>
			</tr>
			<tr>
				<td>Phones to tablets</td>
				<td>767px and below</td>
				<td class="muted" colspan="2">Fluid columns, no fixed widths</td>
			</tr>
			<tr>
				<td>Phones</td>
				<td>480px and below</td>
				<td class="muted" colspan="2">Fluid columns, no fixed widths</td>
			</tr>
		</tbody>
	</table>
	<pre><code class="language-css">@media (min-width: 1200px) {
	/* Large desktop */
}
 
@media (min-width: 768px) and (max-width: 979px) {
	/* Portrait tablet to landscape and desktop */
}
 
@media (max-width: 767px) {
	/* Landscape phone to portrait tablet */
}
 
@media (max-width: 480px) {
	/* Landscape phones and down */
}</code></pre>
</article>

<!--
	Responsive Utility Classes
-->

<article class="example-section" id="responsiveutility">
	<h3 class="example-section-heading">Responsive Utility Classes</h3>
	<p class="example-intro">For faster mobile-friendly development, use these utility classes for showing and hiding content by device. Below is a table of the available classes and their effect on a given media query layout (labeled by device).</p>
	<table class="table table-bordered table-striped responsive-utilities">
		<thead>
			<tr>
				<th>Class <small>Added to the HTML</small></th>
				<th>Phones <small>767px and below</small></th>
				<th>Tablets <small>979px to 768px</small></th>
				<th>Desktops <small>Default</small></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th><code>.visible-phone</code></th>
				<td class="is-visible">Visible</td>
				<td class="is-hidden">Hidden</td>
				<td class="is-hidden">Hidden</td>
			</tr>
			<tr>
				<th><code>.visible-tablet</code></th>
				<td class="is-hidden">Hidden</td>
				<td class="is-visible">Visible</td>
				<td class="is-hidden">Hidden</td>
			</tr>
			<tr>
				<th><code>.visible-desktop</code></th>
				<td class="is-hidden">Hidden</td>
				<td class="is-hidden">Hidden</td>
				<td class="is-visible">Visible</td>
			</tr>
			<tr>
				<th><code>.hidden-phone</code></th>
				<td class="is-hidden">Hidden</td>
				<td class="is-visible">Visible</td>
				<td class="is-visible">Visible</td>
			</tr>
			<tr>
				<th><code>.hidden-tablet</code></th>
				<td class="is-visible">Visible</td>
				<td class="is-hidden">Hidden</td>
				<td class="is-visible">Visible</td>
			</tr>
			<tr>
				<th><code>.hidden-desktop</code></th>
				<td class="is-visible">Visible</td>
				<td class="is-visible">Visible</td>
				<td class="is-hidden">Hidden</td>
			</tr>
		</tbody>
	</table>
</article>


<?php include (dirname(__FILE__) . "/footer.php"); ?>