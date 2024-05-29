<?php
		$codigoEMPRESA = $usuario['codigoEMPRESA'];

	if(@$_POST['btn_salvar']=='Alterar')
	{	
	

$codigoEMPRESA=$usuario['codigoEMPRESA'];
$emailEMPRESA=$_POST['email'];
$nomeEMPRESA=$_POST['nome'];
$codigotelefoneEMPRESA=$_POST['codigotelefone'];
$telefoneEMPRESA=$_POST['telefone'];
$telefone2EMPRESA=$_POST['telefone2'];
$celularEMPRESA=$_POST['celular'];
$watsEMPRESA=$_POST['wats'];
$ruaEMPRESA=$_POST['rua'];
$numeroEMPRESA=$_POST['numero'];
$cepEMPRESA=$_POST['cep'];
$bairroEMPRESA=$_POST['bairro'];
$cidadeEMPRESA=$_POST['cidade'];
$estadoEMPRESA=$_POST['estado'];
$paisEMPRESA=$_POST['pais'];
$paisenEMPRESA=$_POST['paisen'];
$locationEMPRESA=$_POST['location'];
$logoEMPRESA=$_POST['logo'];
$breveEMPRESA=$_POST['breve'];
$sobreEMPRESA=utf8_decode($_POST['sobre']);
$missaoEMPRESA=utf8_decode($_POST['missao']);
$missaoenEMPRESA=utf8_decode($_POST['missaoen']);
$missaoesEMPRESA=utf8_decode($_POST['missaoes']);
$visaoEMPRESA=utf8_decode($_POST['visao']);
$visaoenEMPRESA=utf8_decode($_POST['visaoen']);
$visaoesEMPRESA=utf8_decode($_POST['visaoes']);
$valoresEMPRESA=utf8_decode($_POST['valores']);
$valoresenEMPRESA=utf8_decode($_POST['valoresen']);
$valoresesEMPRESA=utf8_decode($_POST['valoreses']);
$qualidadeEMPRESA=utf8_decode($_POST['qualidade']);
$qualidadeenEMPRESA=utf8_decode($_POST['qualidadeen']);
$qualidadeesEMPRESA=utf8_decode($_POST['qualidadees']);
$keyworksEMPRESA=$_POST['keyworks'];
$descriptionEMPRESA=$_POST['description'];
$dominioEMPRESA=$_POST['dominio'];
$analyctisEMPRESA=$_POST['analyctis'];

$manutencaoEMPRESA=@$_POST['manutencao'];

$facebookEMPRESA=$_POST['facebook'];
$youtubeEMPRESA=$_POST['youtube'];
$twitterEMPRESA=$_POST['twitter'];
$linkedinEMPRESA=$_POST['linkedin'];
$instagranEMPRESA=$_POST['instagran'];
$googleplusEMPRESA=$_POST['googleplus'];
$tiktokEMPRESA=$_POST['tiktok'];
 
$videoEMPRESA=$_POST['video'];
$seguroEMPRESA=@$_POST['seguro'];



	
		
$update = mysqli_query($conexao, "
UPDATE tb0151_empresas
SET
  emailEMPRESA='".$emailEMPRESA."',
  nomeEMPRESA='".$nomeEMPRESA."',
  codigotelefoneEMPRESA='".$codigotelefoneEMPRESA."',
  telefoneEMPRESA='".$telefoneEMPRESA."',
  telefone2EMPRESA='".$telefone2EMPRESA."',
  celularEMPRESA='".$celularEMPRESA."',
  watsEMPRESA='".$watsEMPRESA."',
  ruaEMPRESA='".$ruaEMPRESA."',
  numeroEMPRESA='".$numeroEMPRESA."',
  cepEMPRESA='".$cepEMPRESA."',
  bairroEMPRESA='".$bairroEMPRESA."',
  cidadeEMPRESA='".$cidadeEMPRESA."',
  estadoEMPRESA='".$estadoEMPRESA."',
  paisEMPRESA='".$paisEMPRESA."',
  paisenEMPRESA='".$paisenEMPRESA."',
  locationEMPRESA='".$locationEMPRESA."',
  logoEMPRESA='".$logoEMPRESA."',
  breveEMPRESA='".$breveEMPRESA."',
  sobreEMPRESA='".$sobreEMPRESA."',
  missaoEMPRESA='".$missaoEMPRESA."',
  missaoenEMPRESA='".$missaoenEMPRESA."',
  missaoesEMPRESA='".$missaoesEMPRESA."',
  visaoEMPRESA='".$visaoEMPRESA."',
  visaoenEMPRESA='".$visaoenEMPRESA."',
  visaoesEMPRESA='".$visaoesEMPRESA."',
  valoresEMPRESA='".$valoresEMPRESA."',
  valoresenEMPRESA='".$valoresenEMPRESA."',
  valoresesEMPRESA='".$valoresesEMPRESA."',
  qualidadeEMPRESA='".$qualidadeEMPRESA."',
  qualidadeenEMPRESA='".$qualidadeenEMPRESA."',
  qualidadeesEMPRESA='".$qualidadeesEMPRESA."',
  keyworksEMPRESA='".$keyworksEMPRESA."',
  descriptionEMPRESA='".$descriptionEMPRESA."',
  dominioEMPRESA='".$dominioEMPRESA."',
  analyctisEMPRESA='".$analyctisEMPRESA."',
  manutencaoEMPRESA='".$manutencaoEMPRESA."',
  facebookEMPRESA='".$facebookEMPRESA."',
  youtubeEMPRESA='".$youtubeEMPRESA."',
  twitterEMPRESA='".$twitterEMPRESA."',
  linkedinEMPRESA='".$linkedinEMPRESA."',
  instagranEMPRESA='".$instagranEMPRESA."',
  googleplusEMPRESA='".$googleplusEMPRESA."',
  tiktokEMPRESA='".$tiktokEMPRESA."',
  videoEMPRESA='".$videoEMPRESA."',
  seguroEMPRESA='".$seguroEMPRESA."'
WHERE codigoEMPRESA	= '".$codigoEMPRESA."'
		");


		if($update)
		{
			
			echo "<script>alert('Editado com sucesso');
			top.location.href='?make=".$make."';</script>";
		}
		else
		{
			 echo"<script>alert('Erro!');
				top.location.href='?make=".$make."';</script>";	
		}
		
	}
	else
	{
		$query_produtos = mysqli_query($conexao, "SELECT * FROM tb0151_empresas WHERE 
		codigoEMPRESA ='".$usuario['codigoEMPRESA']."' ");
		$produtos = mysqli_fetch_assoc($query_produtos);
		
	?>
<div class="title-block">
    <h3 class="title"> Empresa <span class="sparkline bar" data-type="bar"></span> </h3>
</div>
<form name="item" action="" method="post"> 
    <div class="card card-block">
                            
                
        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Logotipo:
            </label>
            <div class="col-sm-10">
                <input name="logo" type="text" class="form-control boxed" id="logo" placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele"  value="<?php echo $produtos['logoEMPRESA']; ?>" onclick="openKCFinder(this)" readonly="readonly">
          </div>
        </div>
        
          <div class="form-group row">  
            <div class="col-sm-10">
                <div class="images-container">
                    
                  
                  
                    <div class="image-container">
                        <div class="controls">
                              
                            <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o"></i> </a>
                        </div>
                        <div class="image" style="background-image:url('<?php echo $produtos['logoEMPRESA']; ?>')"></div>
                    </div> 
                </div>
            </div>
  </div>
        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Empresa:
            </label>
            <div class="col-sm-10">
                <input name="nome" type="text" class="form-control boxed" id="nome"  value="<?php echo $produtos['nomeEMPRESA']; ?>">
            </div>
        </div>
                
        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Descrição:
            </label>
            <div class="col-sm-10">
              <textarea name="breve" class="ckeditor" id="breve"><?php echo $produtos['breveEMPRESA']; ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Descrição (EN):
            </label>
            <div class="col-sm-10">
              <textarea name="breveen" class="ckeditor" id="breveen"><?php echo $produtos['breveenEMPRESA']; ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Descrição (ES):
            </label>
            <div class="col-sm-10">
              <textarea name="brevees" class="ckeditor" id="brevees"><?php echo $produtos['breveesEMPRESA']; ?></textarea>
            </div>
        </div>
        
                
        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Sobre:
            </label>
            <div class="col-sm-10">
              <textarea name="sobre" rows="5" class="ckeditor" id="sobre" ><?php echo utf8_encode($produtos['sobreEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Sobre (EN):
            </label>
            <div class="col-sm-10">
              <textarea name="sobreen" rows="5" class="ckeditor" id="sobreen" ><?php echo utf8_encode($produtos['sobreenEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Sobre (ES):
            </label>
            <div class="col-sm-10">
              <textarea name="sobrees" rows="5" class="ckeditor" id="sobrees" ><?php echo utf8_encode($produtos['sobreesEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Missão:
            </label>
            <div class="col-sm-10">
              <textarea name="missao" rows="5" class="ckeditor" id="missao" ><?php echo utf8_encode($produtos['missaoEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Missão (EN):
            </label>
            <div class="col-sm-10">
              <textarea name="missaoen" rows="5" class="ckeditor" id="missaoen" ><?php echo utf8_encode($produtos['missaoenEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Missão (ES):
            </label>
            <div class="col-sm-10">
              <textarea name="missaoes" rows="5" class="ckeditor" id="missaoes" ><?php echo utf8_encode($produtos['missaoesEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Visão:
            </label>
            <div class="col-sm-10">
              <textarea name="visao" rows="5" class="ckeditor" id="visao" ><?php echo utf8_encode($produtos['visaoEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Visão (EN):
            </label>
            <div class="col-sm-10">
              <textarea name="visaoen" rows="5" class="ckeditor" id="visaoen" ><?php echo utf8_encode($produtos['visaoenEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Visão (ES):
            </label>
            <div class="col-sm-10">
              <textarea name="visaoes" rows="5" class="ckeditor" id="visaoes" ><?php echo utf8_encode($produtos['visaoesEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Valores:
            </label>
            <div class="col-sm-10">
              <textarea name="valores" rows="5" class="ckeditor" id="valores" ><?php echo utf8_encode($produtos['valoresEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Valores (EN):
            </label>
            <div class="col-sm-10">
              <textarea name="valoresen" rows="5" class="ckeditor" id="valoresen" ><?php echo utf8_encode($produtos['valoresenEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Valores (ES):
            </label>
            <div class="col-sm-10">
              <textarea name="valoreses" rows="5" class="ckeditor" id="valoreses" ><?php echo utf8_encode($produtos['valoresesEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Qualidade:
            </label>
            <div class="col-sm-10">
              <textarea name="qualidade" rows="5" class="ckeditor" id="qualidade" ><?php echo utf8_encode($produtos['qualidadeEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
              Qualidade (EN):
            </label>
            <div class="col-sm-10">
              <textarea name="qualidadeen" rows="5" class="ckeditor" id="qualidadeen" ><?php echo utf8_encode($produtos['qualidadeenEMPRESA']); ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
              Qualidade (ES):
            </label>
            <div class="col-sm-10">
              <textarea name="qualidadees" rows="5" class="ckeditor" id="qualidadees" ><?php echo utf8_encode($produtos['qualidadeesEMPRESA']); ?></textarea>
            </div>
        </div>
             
        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                E-mail:
            </label>
            <div class="col-sm-10">
                <input name="email" type="text" value="<?php echo $produtos['emailEMPRESA']; ?>" class="form-control boxed" id="email" placeholder="Seu endereço completo aqui">
            </div>
        </div>
        
                
        <div class="form-group row">
            <label class="col-sm-2 form-control-label text-xs-right">
                Telefone  1 / 2:
            </label>
            <div class="col-sm-1">
                <input name="codigotelefone" type="text"  value="<?php echo $produtos['codigotelefoneEMPRESA']; ?>" class="form-control boxed" id="codigotelefone" placeholder="##">
            </div>
            
             <div class="col-sm-2">
                <input name="telefone" type="text"  value="<?php echo $produtos['telefoneEMPRESA']; ?>" class="form-control boxed" id="telefone" placeholder="## ####-####">
          </div>
            
              <div class="col-sm-2">
                <input name="telefone2" type="text"  value="<?php echo $produtos['telefone2EMPRESA']; ?>" class="form-control boxed" id="telefone2" placeholder="## ####-####">
            </div>
             
            <div class="col-sm-2">
                <input name="celular" type="text"  value="<?php echo $produtos['celularEMPRESA']; ?>" class="form-control boxed" id="celular" placeholder="## # ####-####">
            </div>
            
            <div class="col-sm-2">
                <input name="wats" type="text"  value="<?php echo $produtos['watsEMPRESA']; ?>" class="form-control boxed" id="wats" placeholder="## # ####-####">
            </div>
            
  </div>
                            
  <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Rua:
			</label>
            <div class="col-sm-8">
              <input name="rua" type="text" class="form-control boxed" id="rua" placeholder="Rua" value="<?php echo $produtos['ruaEMPRESA']; ?>" size="" />
      </div>
      
       <div class="col-sm-2">
              <input name="numero" type="text" class="form-control boxed" id="ruaEMPRESA" placeholder="N°" value="<?php echo $produtos['numeroEMPRESA']; ?>" size="" />
      </div>
		</div>
                            
        <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				CEP:
			</label>
            <div class="col-sm-10">
              <input name="cep" type="text" class="form-control boxed" id="cep" placeholder="coloque o horario de funcionamento do seu negócio" value="<?php echo $produtos['cepEMPRESA']; ?>" size="" />
            </div>
		</div>
        
        <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Bairro:
			</label>
            <div class="col-sm-10">
              <input name="bairro" type="text" class="form-control boxed" id="bairro" placeholder="coloque o horario de funcionamento do seu negócio" value="<?php echo $produtos['bairroEMPRESA']; ?>" size="" />
            </div>
		</div>
        
        <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Cidade:
			</label>
            <div class="col-sm-10">
              <input name="cidade" type="text" class="form-control boxed" id="cidade" placeholder="coloque o horario de funcionamento do seu negócio" value="<?php echo $produtos['cidadeEMPRESA']; ?>" size="" />
            </div>
		</div>
        
        <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Estado:
			</label>
            <div class="col-sm-10">
              <input name="estado" type="text" class="form-control boxed" id="estado" placeholder="coloque o horario de funcionamento do seu negócio" value="<?php echo $produtos['estadoEMPRESA']; ?>" size="" />
            </div>
		</div>

    <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				País:
			</label>
            <div class="col-sm-10">
              <input name="pais" type="text" class="form-control boxed" id="pais" placeholder="coloque o horario de funcionamento do seu negócio" value="<?php echo $produtos['paisEMPRESA']; ?>" size="" />
            </div>
		</div>

    <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				País (EN):
			</label>
            <div class="col-sm-10">
              <input name="paisen" type="text" class="form-control boxed" id="paisen" placeholder="coloque o horario de funcionamento do seu negócio" value="<?php echo $produtos['paisenEMPRESA']; ?>" size="" />
            </div>
		</div>

    <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Localização:
			</label>
            <div class="col-sm-10">
              <input name="location" type="text" class="form-control boxed" id="location" placeholder="coloque o link da localizacao" value="<?php echo $produtos['locationEMPRESA']; ?>" size="" />
            </div>
		</div>
        
        
        <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Domínio:
			</label>
            <div class="col-sm-10">
              <input name="dominio" type="text" class="form-control boxed" id="dominio"   value="<?php echo $produtos['dominioEMPRESA']; ?>" size="" />
            </div>
		</div>
        
        <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				META TAG Keyworks:
			</label>
            <div class="col-sm-10">
              <textarea name="keyworks" cols="" class="form-control boxed" id="keyworks" ><?php echo $produtos['keyworksEMPRESA']; ?></textarea>
            </div>
		</div>
        
        
        
        
        
         <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				META TAG Description:
			</label>
            <div class="col-sm-10">
              <textarea name="description" cols="" class="form-control boxed" id="description" ><?php echo $produtos['descriptionEMPRESA']; ?></textarea>
            </div>
		</div>
        
        
        
        
        
        
         <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Acompanhamento:
			</label>
            <div class="col-sm-10">
              <textarea name="analyctis" cols="" class="form-control boxed" id="analytics" placeholder="coloque o de acompanhamento"><?php echo $produtos['analyctisEMPRESA']; ?></textarea>
            </div>
		</div>
		
		  <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Video :
			</label>
            <div class="col-sm-10">
              <input name="video" type="text" class="form-control boxed" id="video"   value="<?php echo $produtos['videoEMPRESA']; ?>" size="" />
			  Aparecerá no topo das páginas (Vimeo ou Youtube) 'Basta colocar a url do vídeo'
            </div>
		</div>
		 
		
		 <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Facebook:
			</label>
            <div class="col-sm-6">
              <input name="facebook" type="text" class="form-control boxed" id="facebook"   value="<?php echo $produtos['facebookEMPRESA']; ?>" size="" />
            </div>
		</div>
		
		<div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Youtube:
			</label>
            <div class="col-sm-6">
              <input name="youtube" type="text" class="form-control boxed" id="youtube"   value="<?php echo $produtos['youtubeEMPRESA']; ?>" size="" />
            </div>
		</div>
		
		<div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				twitter:
			</label>
            <div class="col-sm-6">
              <input name="twitter" type="text" class="form-control boxed" id="twitter"   value="<?php echo $produtos['twitterEMPRESA']; ?>" size="" />
            </div>
		</div>
		
		<div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Linkedin:
			</label>
            <div class="col-sm-6">
              <input name="linkedin" type="text" class="form-control boxed" id="linkedin"   value="<?php echo $produtos['linkedinEMPRESA']; ?>" size="" />
            </div>
		</div>
		
		<div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Instagram:
			</label>
            <div class="col-sm-6">
              <input name="instagran" type="text" class="form-control boxed" id="instagran"   value="<?php echo $produtos['instagranEMPRESA']; ?>" size="" />
            </div>
		</div>
		
		<div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Google+:
			</label>
            <div class="col-sm-6">
              <input name="googleplus" type="text" class="form-control boxed" id="googleplus"   value="<?php echo $produtos['googleplusEMPRESA']; ?>" size="" />
            </div>
		</div>

    <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				Tik Tok:
			</label>
            <div class="col-sm-6">
              <input name="tiktok" type="text" class="form-control boxed" id="tiktok"   value="<?php echo $produtos['tiktokEMPRESA']; ?>" size="" />
            </div>
		</div>
		
		 <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				 Modo Seguro 
			</label>
            <div class="col-sm-10">
			
			<input type="checkbox"   name="seguro" id="seguro" value="1" <?php if($produtos['seguroEMPRESA']=='1'){echo 'checked="checked"';} ?> /> <label for="seguro"> ( Criptografado ) HTTPS://  | Colocar Certificado digital no site?</label>
			 
            </div>
		</div>
		
         <div class="form-group row">
        	<label class="col-sm-2 form-control-label text-xs-right">
				 Manutenção
			</label>
            <div class="col-sm-10">
			
			<input type="checkbox"   name="manutencao" id="manutencao" value="1" <?php if($produtos['manutencaoEMPRESA']=='1'){echo 'checked="checked"';} ?> /> <label for="manutencao"> Colocar o site em modo de manutenção</label>
			 
            </div>
		</div>
		
		
        <div class="form-group row">
       	   <label class="col-sm-2 form-control-label text-xs-right">
&nbsp;			</label>
             <div class="col-sm-10">
                  <input type="submit" class="btn btn-primary" value="Alterar" name="btn_salvar"/>
             </div>
         
  </div>
         
         
         
                  <div class="form-group row">  
			</label>
                                
 
                            
                            
                            
      </div>
</form>
               <?php } ?>