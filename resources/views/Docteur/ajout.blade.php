@extends('layouts.mainlayout')
@section('content')

<div>

  @if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
<ul>
@foreach ($errors->all() as $error)
    <li class="alert alert-danger"> {{ $error }}</li>
@endforeach





    <h1 class="text-center">Ajouter un nouveau Docteur</h1>


    <form action="{{ route('Docteur.store') }}" method="POST">
    @csrf
    <div class="row">

        <div class="col-lg-6 mt-3">
          <label for="inputNom" class="form-label">Nom_doc</label>
          <input type="text" class="form-control" name="nom_doc">

        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputPrenom" class="form-label">Prenom_doc</label>
          <input type="text" class="form-control" name="prenom_doc">
        </div>

        <div class="col-lg-6 mt-3">
          <label for="inputAdresse" class="form-label">adresse</label>
          <input type="text" class="form-control" name="adresse">
        </div>
          <div class="col-lg-6 mt-3">
            <label for="inputTelephone" class="form-label">Telephone</label>
            <input type="text" class="form-control" name="telephone">
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="col-md-6 mt-3">
            <label for="inputSpecialité" class="form-label">Specialité</label>
            <select class="form-control" name="specialites_id">

                <option>Selectionner un specialité</option>;
                @foreach ( $specialite as $spe)
                    <option value="{{ $spe->id}}">{{ $spe->nom_spec  }} </option>

                @endforeach
            </select>

        </div>


        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
