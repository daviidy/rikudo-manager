@extends('layouts.header')

@section('content')

<div class="container-contact100">
		<div class="wrap-contact100">
			<form enctype="multipart/form-data" action="{{ route('clientSoutenances.store') }}" method="post" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Inscrire un étudiant a la soutenance
				</span>

				{{ csrf_field() }}

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Nom</span>
					<input class="input100" type="text" name="nom" placeholder="Entrer le nom">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Prénoms</span>
					<input class="input100" type="text" name="prenoms" placeholder="Entrer les prénoms">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Entrer l'adresse email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Filière</span>
					<input class="input100" type="text" name="filiere" placeholder="Entrer la filière">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Thème</span>
					<input class="input100" type="text" name="theme" placeholder="Entrer l'adresse email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Diplome soutenu</span>
					<div>
						<select class="selection-2" name="diplome_soutenu">
							<option>BTS</option>
							<option>Licence</option>
							<option>Master</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Numero is required">
					<span class="label-input100">Numéro</span>
					<input class="input100" type="string" name="numero" placeholder="Entrer le numéro de téléphone">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Numero is required">
					<span class="label-input100">Photo</span>
					<input class="input100" type="file" name="image">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button type="submit" class="contact100-form-btn">
							<span>
								Envoyer
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

@endsection
