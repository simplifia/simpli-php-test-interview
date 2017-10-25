<style>
	<?php include 'styles/pages/my-work.css'; ?>
</style>

<h1 class="super-header">Our super table </h1>

<table class="super-table">
  	<tr>
    	<th>Item 1</th>
    	<th>Item 2</th> 
    	<th>Item1 + Item2</th>
    	<th>Paire/impaire</th>
  	</tr>
  	<?php foreach($items as $item){ ?>
  	<tr>
    	<td> <?php echo $item->getNum1(); ?> </td>
    	<td> <?php echo $item->getNum2(); ?></td>
    	<td> <?php echo $item->getSum(); ?> </td>
    	<td> <?php echo $item->getPair(); ?> </td>
  	</tr>
  	<?php } ?>
</table>