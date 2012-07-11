<?php include 'niftycolor.php'; 
?><!doctype html>
<html lang="en">
<head>
	<title>NiftyColor Demo</title>
	<style>
		html {
			background: #f9f9f9;
			color: #666;
			font-family: sans-serif;
			font-size: 87.5%;
			line-height: 1.4em;
		}
		body {
			margin: 2em;
		}
		h1 {
			margin: 1em 0 0.5em;
		}
		p, table {
			margin: 2em 0;
		}
		table {
			background: #fff;
			border-collapse: collapse;
			border: 1px solid #eee;
			border-top-color: #ccc;
			border-top-width: 3px;
			width: 100%;
		}
		tr {
			border-bottom: 1px solid #eee;
		}
		th, td {
			padding: 1em;
		}
		th {
			text-align: left;
			text-transform: uppercase;
		}
		.swatch {
			border-radius: 1em;
			box-shadow: inset 0 0 0 1px rgba(0,0,0,0.1);
			display: inline-block;
			height: 2em;
			vertical-align: middle;
			width: 2em;
		}
	</style>
</head>
<body>

	<h1>Color Keywords</h1>

	<p>Every color keyword supported by NiftyColor is output below.</p>

	<table>
		<thead>
			<tr>
				<th scope="col">&nbsp;</th>
				<th scope="col">Keyword</th>
				<th scope="col">Hex</th>
				<th scope="col">RGB</th>
				<th scope="col">HSL</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach (NiftyColor::$keywords as $keyword => $arr) : $clr = new NiftyColor($keyword, 'hex'); ?>
			<tr>
				<td><i class="swatch" style="background-color:<?php echo $clr; ?>"></i></td>
				<td><?php echo $keyword;?></td>
				<td><?php echo $clr->hex; ?></td>
				<td><?php echo $clr->rgb; ?></td>
				<td><?php echo $clr->hsl; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>