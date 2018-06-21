@extends('layouts.header')

@section('content')


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form enctype="multipart/form-data" action="{{ route('formateurs.store') }}" method="post" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Inscrire un formateur Oschool
				</span>
                 {{ csrf_field() }} 
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Nom</span>
					<input class="input100" type="text" name="nom" required placeholder="Entrer le nom">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Prénoms</span>
					<input class="input100" type="text" name="prenom"required placeholder="Entrer les prénoms">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Date de naissance</span>
					<input class="input100" type="date" name="DateNaiss"required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" required placeholder="Entrer l'adresse email oschool">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Nationalité</span>
					<input class="input100" type="text" name="nationalité" required placeholder="Entrer la nationalité">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Compte paypal</span>
					<input class="input100" type="number" name="ComptePaypal" required placeholder="Entrer le compte paypal">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Numero is required">
					<span class="label-input100">Numéro</span>
					<input class="input100" type="number" name="numero" required placeholder="Entrer le numéro de téléphone">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 input100-select">
					<span class="label-input100">Genre</span>
					<div>
						<select class="selection-2" name="genre">
							<option>M</option>
							<option>F</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Cours enseigné</span>
					<div>
						<select class="selection-2" name="cours">
							<option>Développement full stack</option>
							<option>Community Manager</option>
							<option>Laboratoire Cisco CCNA</option>
						</select>
					</div>
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
