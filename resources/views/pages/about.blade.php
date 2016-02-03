
@extends('todo')

	@section('content2')

		<!--Header principal-->
		<div class="row ">
			<div class="col-lg-12 text-center ">
					<h1 class="page-header">
						<img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
					</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet est ut sem scelerisque, at pretium velit posuere. Phasellus in nisl tellus. Nam sit amet odio magna. Mauris quam est, pellentesque ut bibendum quis, luctus ut erat. Nulla erat leo, scelerisque in sagittis id, aliquam ut purus. Nullam laoreet blandit nulla, eu lacinia elit laoreet sit amet. Mauris et nulla sed nisi maximus hendrerit. Maecenas faucibus massa id ante molestie, at aliquam mi aliquam. Aenean vitae mi odio. Morbi quis sapien porttitor, tincidunt neque sit amet, pharetra eros. Maecenas consectetur ac orci sit amet lacinia. Nulla congue quis sapien sed sodales.
				</p>
			</div>	
		</div>

		<!--Infos Extras-->
		<div class="row">
			<div class="col-lg-12 text-center">
                <h2>{{ $nome }}</h2>
                <p>{{ $email }}</p>
            </div>
		</div>
	@stop
