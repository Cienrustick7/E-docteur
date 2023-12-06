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





    <h1 class="text-center">Ajouter un nouveau Patient</h1>


    <form action="{{ route('Patient.store') }}" method="POST">
    @csrf
    <div class="row">

        <div class="col-lg-6 mt-3">
          <label for="inputNom" class="form-label">Nom_pat</label>
          <input type="text" class="form-control" name="nom_pat">

        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputPrenom" class="form-label">Prenom_pat</label>
          <input type="text" class="form-control" name="prenom_pat">
        </div>

        <div class="col-lg-6 mt-3">
          <label for="inputAge" class="form-label">Age</label>
          <input type="text" class="form-control" name="age">
        </div>
        <div class="col-lg-6 mt-3">
          <label for="">Sexe</label>
          <select name="sexe" class="form-control m-2">
            <option value="">Choisir</option>
            <option>Masculin</option>
            <option>Feminin</option>
            </select>
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputAdresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" name="adresse">
          </div>
          <div class="col-lg-6 mt-3">
            <label for="inputTelephone" class="form-label">Telephone</label>
            <input type="text" class="form-control" name="telephone">
        </div>


        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
