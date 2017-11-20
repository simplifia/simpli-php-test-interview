<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Super Table</title>
	<link rel="stylesheet" type="text/css" href="/statics/css/index.css">
</head>
<body>
<h1 class="super-title">Our super table</h1>
<table class="super-table">
	<tr class="super-header">
		<th class="super-header-column">Item1</th>
		<th class="super-header-column">Item2</th>
		<th class="super-header-column">Item1 + item2</th>
		<th class="super-header-column">Paire/impaire</th>
	</tr>
	
	<?php foreach ($table->lines as $line): ?>
		<tr class="super-line">
			<td class="super-column"><?= $line->item1 ?></td>
			<td class="super-column"><?= $line->item2 ?></td>
			<td class="super-column"><?= $line->summ ?></td>
			<td class="super-column"><?= $line->parity ?></td>
		</tr>
	<?php endforeach ?>
</table>

</body>
</html>