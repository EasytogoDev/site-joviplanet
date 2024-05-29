	<?php


		if($act=='' ){

			if(file_exists("inc/paginas/".$make."/".$acao."/home.php")){include("inc/paginas/".$make."/".$acao."/home.php");}

		} else{

			if(file_exists("inc/paginas/".$make."/".$acao."/".$act.".php")){include("inc/paginas/".$make."/".$acao."/".$act.".php");}

		} 


	?>