<h1>Our super table </h1>

<table style="width:100%">
  	<tr>
    	<th>Item 1</th>
    	<th>Item 2</th> 
    	<th>Item1 + Item2</th>
    	<th>Paire/impaire</th>
  	</tr>
  	<?php foreach($data as $num1=>$num2){ ?>
  	<tr>
    	<th> <?php echo $num1; ?> </th>
    	<th> <?php echo $num2; ?></th> 
    	<th> rslt </th>
  	</tr>
  	<?php } ?>
</table>