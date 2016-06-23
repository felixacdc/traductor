@extends('front.frontLayout')

@section('content')
    <!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h3>Amplia tu vocabulario</h3>
					<h1>Diccionario Virtual.</h1>
					<h5>Encuentra palabras ordenadas por su cateogria.</h5>
                    <h5>Aprende repasando el diccionario.</h5>
				</div>
				<div class="col-lg-8 col-lg-offset-2 himg">
					<img src="{{ url('front/img/browser.png') }}" class="img-responsive">
				</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->
    
@endsection
