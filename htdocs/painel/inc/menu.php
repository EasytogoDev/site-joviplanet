<ul class="nav metismenu" id="sidebar-menu">
		
	<li  <?php if($make=='home' or $make==''){echo 'class="active open"';}?>>
	<a href="?make=home"> <i class="fa fa-home"></i> Painel administrativo </a>
	</li>

	<li <?php if($make=='atendimento' or $make=='chamados'){echo 'class="active open"';}?>>
		<a href="?make=atendimento"> <i class="fa fa-comments-o"></i> Atendimento  </a>

			<!--<i class="fa arrow"></i><ul>

				<li <?php if($make=='atendimento'){echo 'class="active"';}?>>
					<a href="?make=atendimento"> <i class="fa fa-envelope-o"></i> listagem </a>
				</li>    
											
			</ul>-->
	</li>

	<li <?php if($make=='analise-fornecedores'){echo 'class="active open"';}?>>
		<a href="?make=analise-fornecedores"> <i class="fa fa-comments-o"></i> Analise dos Fornecedores  </a>

			<!--<i class="fa arrow"></i><ul>

				<li <?php if($make=='analise-fornecedores'){echo 'class="active"';}?>>
					<a href="?make=atendimento"> <i class="fa fa-envelope-o"></i> listagem </a>
				</li>    
											
			</ul>-->
	</li>

	<li <?php if($make=='cadastro' or $make=='usuarios'){echo 'class="active open"';}?>>
	<a href="?make=cadastro"> <i class="fa fa-pencil-square-o"></i> Configurações <i class="fa arrow"></i> </a>
		<ul>

			<li <?php if($make=='cadastro' and $acao==''){echo 'class="active"';}?>> 
				<a href="?make=cadastro"> <i class="fa fa-list-alt"></i>Empresa	</a> 
			</li>

			<li <?php if($make=='cadastro' and !$acao==''){echo 'class="active"';}?>> 
				<a href="?make=cadastro&acao=perfil"> <i class="fa fa-pencil-square-o"></i>	Meus Dados	</a> 
			</li>

			<li <?php if($make=='usuarios'){echo 'class="active"';}?>> 
				<a href="?make=usuarios"> <i class="fa fa-list-alt"></i>Usuários</a>
			</li>
		</ul> 
	</li>

	
	
	<li <?php if(
	   $make=='paginas'
	or $make=='destaques'
	or $make=='faq'
	or $make=='banner'
	or $make=='artigos'
	or $make=='midias'
	or $make=='redes'
	){echo 'class="active open"';}?>>
	<a href="#"> <i class="fa fa-cog"></i> Ferramentas  <i class="fa arrow"></i></a>

		<ul>
			 
			</li>
			
			<li <?php if($make=='paginas' and $acao==''){echo 'class="active"';}?>> 
				<a href="?make=paginas"> <i class="fa fa-bars"></i>Páginas</a> 
			</li>

			<li <?php if($make=='destaques' and $acao==''){echo 'class="active"';}?>> 
				<a href="?make=destaques"> <i class="fa fa-bars"></i>Destaques</a> 
			</li>

			<li <?php if($make=='faq' and $acao==''){echo 'class="active"';}?>> 
				<a href="?make=faq"> <i class="fa fa-bars"></i>F.A.Q</a> 
			</li>

			<li <?php if($make=='faq' and $acao=='grupos'){echo 'class="active"';}?>> 
				<a href="?make=faq&acao=grupos"> <i class="fa fa-bars"></i>Grupo F.A.Q</a> 
			</li>

			<li <?php if($make=='banner'){echo 'class="active"';}?>>
			<a href="?make=banner"> <i class="fa fa-bars"></i> Banners </a>

			</li>
		 
			
			<li <?php if($make=='artigos' and $acao==''){echo 'class="active"';}?>>
				<a href="?make=artigos"> <i class="fa fa-bars"></i> Artigos  </a>
			</li>
			
			<li <?php if($make=='categorias' and $acao='categorias'){echo 'class="active"';}?>>
				<a href="?make=artigos&acao=categorias"> <i class="fa fa-bars"></i> Categorias  </a>
			</li>
	 

			<li <?php if($make=='midias'){echo 'class="active"';}?>>
				<a href="?make=midias"> <i class="fa fa-bars"></i> Midias  </a>
			</li>

			<li <?php if($make=='redes'){echo 'class="active"';}?>>
				<a href="?make=redes"> <i class="fa fa-bars"></i> Redes Sociais  </a>
			</li>

			</li> 
		</ul>

	</li>


	</li>


	<li <?php if($make=='produtos'){echo 'class="active open"';}?>>
	<a href="?make=produtos"> <i class="fa fa-newspaper-o"></i> Produtos <i class="fa arrow"></i></a>

		<ul>

			<li <?php if($make=='produtos' and $acao==''){echo 'class="active"';}?>>
				<a href="?make=produtos"> <i class="fa fa-newspaper-o"></i> Listagem  </a>
			</li>

			<li <?php if($make=='produtos' and $acao=='grupos'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=grupos"> <i class="fa fa-bars"></i> Grupos </a>
			</li>

			<li <?php if($make=='produtos' and $acao=='categorias'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=categorias"> <i class="fa fa-bars"></i> Categorias </a>
			</li>
			
			<li <?php if($make=='produtos' and $acao=='linhas'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=linhas"> <i class="fa fa-bars"></i> Linhas </a>
			</li>

			<li <?php if($make=='produtos' and $acao=='montadoras'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=montadoras"> <i class="fa fa-bars"></i> Montadoras </a>
			</li>
			
			<li <?php if($make=='produtos' and $acao=='veiculos'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=veiculos"> <i class="fa fa-bars"></i> Veiculos </a>
			</li>

			<li <?php if($make=='produtos' and $acao=='fabricantes'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=fabricantes"> <i class="fa fa-bars"></i> Fabricante Original </a>
			</li>

			<li <?php if($make=='produtos' and $acao=='combustivel'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=combustivel"> <i class="fa fa-bars"></i> Combustivel </a>
			</li>

			<li <?php if($make=='produtos' and $acao=='especificacoes'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=especificacoes"> <i class="fa fa-bars"></i> Especificações </a>
			</li>

			<li <?php if($make=='produtos' and $acao=='concorrentes'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=concorrentes"> <i class="fa fa-bars"></i> Concorrentes </a>
			</li>

			<li <?php if($make=='produtos' and $acao=='intercambiabilidade'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=intercambiabilidade"> <i class="fa fa-bars"></i> Intercambiabilidade </a>
			</li>

			<li <?php if($make=='produtos' and $acao=='tipos'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=tipos"> <i class="fa fa-bars"></i> Tipos de Contrapeças</a>
			</li>

			<li <?php if($make=='produtos' and $acao=='modelos'){echo 'class="active"';}?>>
				<a href="?make=produtos&acao=modelos"> <i class="fa fa-bars"></i> Modelos </a>
			</li>

		</ul>

	</li>

 

	<li>
		<a href="?make=login&=&acao=logout"> <i class="fa fa-times"></i> Sair </a>
	</li>
</ul>