
@extends('todo')

	@section('content2')
		<!--Header principal-->
		<div class="row ">
			<div class="col-lg-12">
					<div class="page-header text-center">
						<img class="img-circle img-responsive img-center" src="{{ URL::asset('img/perfil.jpg') }}" alt="">
						<h2>{{ $nome }}</h2>
						<p>{{ $email }}</p>
					</div>

					<h2 class="text-center">Um pouco sobre mim!</h2>

					<p>
						<dl>
							<dt>Estudo</dt><dd> - Sou um estudante de Análise e Desenvolvimento de Sistemas na Universidade Cruzeiro do Sul , estou cursando atualmente o 3º semestre com conclusão prevista para o final de 2016.</dd>
							</br>	
							<dt>Trabalho</dt><dd> - Atualmente sou estágiário na Defensoria Pública do Estado de São Paulo na área de Infraestrutura por 1 ano , realizei alguns projetos utilizando a framework chamada CodeIginiter para um sistema interno da organização.</dd>
							</br>
							<dt>Conhecimentos</dt><dd> - Tenho como foco principal o estudo da framework conhecida como Laravel , onde a mesma se encontra na versão 5 , além disso possuo conhecimentos front end como : HTML5 , CSS , Bootstrap , JavaScript , Angular , JQuery.E conceitos básicos de MVC (Model View Controller) e POO.</dd>
							</br>
							<dt>Extras</dt><dd> - Além disso , já realizei projetos utilizando C# , Java , Unity3D e Desenvolvimento Web para Jogos.</dd>
						</dl>
					</p>
			</div>	
		</div>
	@stop
