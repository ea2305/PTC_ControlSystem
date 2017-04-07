@extends('templates.container')


@section('title' , 'Home')

@section('body')
    <div class="row teal lighten-5 custom-height" style="margin-bottom: 0px;">
        <div class="col m10 l10 s12 push-m1 push-l1">
            {!! Form::open( [ 'url'=>'/profile' , 'method'=>'PUT' ] ) !!}
            <div class="card">
            	
            	<div class="card-content s12 m10 l10 push-m1 push-l1">
					
						<div class="card-title col s12 m12 l12">
							<h4>Perfil de usuario</h4>
						</div>

						<img class="mm-img s12 m6 l6 push-m6 push-l6" src="images/system/user-default.svg" alt="user">
						
						<div class="file-field input-field">
							<div class="btn  yellow darken-3">
								<span>File</span>
								{!! Form::file('image',['class'=>'yellow darken-3']); !!}
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>

						<div class="input-field">

                            {!! Form::text('username','Abecedario Caballero',['class' => 'validate']); !!}

                            <label for="username">Nombre de usuario</label>
                        </div>

						<!-- Tipo de cuenta -->
                        <div class="input-field">

                            {!! Form::textarea('description','Información personal',[
                            		'class' => 'validate materialize-textarea',
                            		'id' => 'textarea1'
                    		]); !!}
                            <label for="textarea1">Textarea</label>
                        </div>

            	</div>
            	<div class="card-action">

					{!! Form::button('<i class="material-icons right">present_to_all</i>Actualizar',[
						'class'=>'btn waves-effect waves-light blue darken-4',
						'type'=>'submit',
						'name'=>'update'
					]) !!}

    			</div>
    			
            </div>
			{!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')

	<script src="js/profile.js"></script>

@endsection