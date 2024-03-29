<?php 
$page = 'tables';
include (dirname(__FILE__) . "/header.php"); 
?>

<h1>Tables</h1>

<!--
	Standard Table
-->

<article class="example-section" id="tablestandard">
	<h3 class="example-section-heading">Standard Table</h3>
	<p class="example-intro"></p>
	<div class="example">
		<table class="table">
			<thead>
				<tr>
					<th>Col One</th>
					<th>Col Two</th>
					<th>Col Three</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Col One Row One</td>
					<td>Col Two Row One</td>
					<td>Col Three Row One</td>
				</tr>
				<tr>
					<td>Col One Row Two</td>
					<td>Col Two Row Two</td>
					<td>Col Three Row Two</td>
				</tr>
			</tbody>
		</table>
	</div>
	<pre><code class="language-markup">&lt;table class=&quot;table&quot;&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;Col One&lt;/th&gt;
			&lt;th&gt;Col Two&lt;/th&gt;
			&lt;th&gt;Col Three&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;Col One Row One&lt;/td&gt;
			&lt;td&gt;Col Two Row One&lt;/td&gt;
			&lt;td&gt;Col Three Row One&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;Col One Row Two&lt;/td&gt;
			&lt;td&gt;Col Two Row Two&lt;/td&gt;
			&lt;td&gt;Col Three Row Two&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;</code></pre>
</article>

<!--
	Stripped Table
-->

<article class="example-section" id="tablestripped">
	<h3 class="example-section-heading">Stripped Table</h3>
	<p class="example-intro">A class of <code>table-striped</code> can be added in to a standard table markup to produce a banded effect.</p>
	<div class="example">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Col One</th>
					<th>Col Two</th>
					<th>Col Three</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Col One Row One</td>
					<td>Col Two Row One</td>
					<td>Col Three Row One</td>
				</tr>
				<tr>
					<td>Col One Row Two</td>
					<td>Col Two Row Two</td>
					<td>Col Three Row Two</td>
				</tr>
			</tbody>
		</table>
	</div>
	<pre><code class="language-markup">&lt;table class=&quot;table table-striped&quot;&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;Col One&lt;/th&gt;
			&lt;th&gt;Col Two&lt;/th&gt;
			&lt;th&gt;Col Three&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;Col One Row One&lt;/td&gt;
			&lt;td&gt;Col Two Row One&lt;/td&gt;
			&lt;td&gt;Col Three Row One&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;Col One Row Two&lt;/td&gt;
			&lt;td&gt;Col Two Row Two&lt;/td&gt;
			&lt;td&gt;Col Three Row Two&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;</code></pre>
</article>

<!--
	Bordered Table
-->

<article class="example-section" id="tablebordered">
	<h3 class="example-section-heading">Boxed Table</h3>
	<p class="example-intro">A class of <code>table-bordered</code> to self-contain the table within a border.</p>
	<div class="example">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Col One</th>
					<th>Col Two</th>
					<th>Col Three</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Col One Row One</td>
					<td>Col Two Row One</td>
					<td>Col Three Row One</td>
				</tr>
				<tr>
					<td>Col One Row Two</td>
					<td>Col Two Row Two</td>
					<td>Col Three Row Two</td>
				</tr>
			</tbody>
		</table>
	</div>
	<pre><code class="language-markup">&lt;table class=&quot;table table-striped table-bordered&quot;&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;Col One&lt;/th&gt;
			&lt;th&gt;Col Two&lt;/th&gt;
			&lt;th&gt;Col Three&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;Col One Row One&lt;/td&gt;
			&lt;td&gt;Col Two Row One&lt;/td&gt;
			&lt;td&gt;Col Three Row One&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;Col One Row Two&lt;/td&gt;
			&lt;td&gt;Col Two Row Two&lt;/td&gt;
			&lt;td&gt;Col Three Row Two&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;</code></pre>
</article>


<?php include (dirname(__FILE__) . "/footer.php"); ?>