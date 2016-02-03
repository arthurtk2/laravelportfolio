<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Laravel</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  
</head>

<body>
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Portfólio</a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/about">Sobre mim</a></li>
        <li><a href="/projects">Projetos</a></li>
        <li><a href="/contact">Contato</a></li> 
      </ul>
    </div>
</nav>

	<div class="container">
		@yield('content')

    @yield('content2')

    @yield('projects')

    @yield('contact')

		<div class="navbar navbar-default navbar-fixed-bottom">
      <p class="navbar-text text-center">© 2015 - Site portfólio criado por
          <a href="" target="_blank" >Arthur Utiyama Marubayashi</a>
      </p>
	  </div>

	</div>



</body>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</html>