<h1>Our super table </h1>

<table style="width:100%">
  	<tr>
    	<th>Item 1</th>
    	<th>Item 2</th> 
    	<th>Item1 + Item2</th>
    	<th>Paire/impaire</th>
  	</tr>
  	<?php foreach($items as $item){ ?>
  	<tr>
    	<th> <?php echo $item->getNum1(); ?> </th>
    	<th> <?php echo $item->getNum2(); ?></th>
    	<th> <?php echo $item->getSum(); ?> </th>
    	<th> <?php echo $item->getPair(); ?> </th>
  	</tr>
  	<?php } ?>
</table>