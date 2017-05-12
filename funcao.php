<?php 
$a = isset($_POST['n1'])?$_POST['n1']:0;
$b = isset($_POST['n2'])?$_POST['n2']:0;
$c = isset($_POST['n3'])?$_POST['n3']:0;
$d = isset($_POST['n4'])?$_POST['n4']:0;

function media(float ...$resultado):float{

		return	array_sum($resultado)/4;

	}

	$media = media($a,$b,$c,$d);

	if ($media < 6) {
		
		echo "Aluno reprovado ";

	}elseif (($media >= 6) && ($media < 7)) {
		
		echo "Aluno de recuperação ";
	}else{
		
		echo "Aluno aprovado ";
	}

	echo "Sua média é ".$media;

 ?>

 <form method="post" action="">
 	<input type="number" name="n1" placeholder="Primeira nota"><br/>
 	<input type="number" name="n2" placeholder="Segunda nota"><br/>
 	<input type="number" name="n3" placeholder="terceira nota"><br/>
 	<input type="number" name="n4" placeholder="Quarta nota"><br/>
 	<button type="submit">Media</button>
 </form>