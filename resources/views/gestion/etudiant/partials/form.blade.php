<form method="POST" action="" >
    @csrf
    <div class="row mb-3">
        <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

        <div class="col-md-7">
            <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror"
                name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
        </div>
    </div>

    <div class="row mb-3">
        <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>

        <div class="col-md-7">
            <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror"
                name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
        </div>
    </div>

    <div class="row mb-3">
        <label for="sexe" class="col-md-4 col-form-label text-md-end">{{ __('Sexe') }}</label>

        <div class="col-md-7">
            <select id="sexe" type="text" class="form-control @error('sexe') is-invalid @enderror"
                name="sexe" value="{{ old('sexe') }}" required autocomplete="sexe" autofocus>

                <option value="" selected disabled>{{ __('Choisir Sexe') }}</option>
            
                    <option value="M">Masculin</option>
                    <option value="F">Feminin</option>
                    <option value='undifined'>Undefined</option>
        
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="ine" class="col-md-4 col-form-label text-md-end">{{ __('INE') }}</label>
        <div class="col-md-7">
            <input id="ine" type="text" class="form-control @error('ine') is-invalid @enderror"
                name="ine" value="{{ old('ine') }}" required autocomplete="ine" autofocus>
        </div>
    </div>

     <div class="row mb-3">
        <label for="code_etu" class="col-md-4 col-form-label text-md-end">{{ __('Code Etudiant') }}</label>
        <div class="col-md-7">
            <input id="code_etu" type="text" class="form-control @error('code_etu') is-invalid @enderror"
                name="code_etu" value="{{ old('code_etu') }}" required autocomplete="code_etu" autofocus>
        </div>
    </div>

    <div class="row mb-3">
        <label for="mail_ugb" class="col-md-4 col-form-label text-md-end">{{ __('Email Ugb') }}</label>
        <div class="col-md-7">
            <input id="mail_ugb" type="text" class="form-control @error('mail_ugb') is-invalid @enderror"
                name="mail_ugb" value="{{ old('mail_ugb') }}" required autocomplete="mail_ugb" autofocus>
        </div>
    </div>
    <div class="row mb-3">
        <label for="date_naiss_etu" class="col-md-4 col-form-label text-md-end">{{ __('Date de  naissance') }}</label>
        <div class="col-md-7">
            <input id="date_naiss_etu" type="date" class="form-control @error('date_naiss_etu') is-invalid @enderror"
                name="date_naiss_etu" value="{{ old('date_naiss_etu') }}" required autocomplete="date_naiss_etu" autofocus>
        </div>
    </div>

    <div class="row mb-3">
        <label for="lieu_naiss_etu" class="col-md-4 col-form-label text-md-end">{{ __('Lieu de naissance') }}</label>
        <div class="col-md-7">
            <input id="lieu_naiss_etu" type="text" class="form-control @error('lieu_naiss_etu') is-invalid @enderror"
                name="lieu_naiss_etu" value="{{ old('lieu_naiss_etu') }}" required autocomplete="lieu_naiss_etu" autofocus>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-secondary">
                {{ __('Ajouter Etudiant') }}
            </button>
        </div>
    </div>
</form>
