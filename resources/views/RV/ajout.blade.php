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





    <h1 class="text-center">Ajouter un nouveau Rendez-vous</h1>


    <form action="{{ route('RV.store') }}" method="POST">
    @csrf
    <div class="row">

        <div class="col-lg-6 mt-3">
          <label for="inputNom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom">
        </div>
          <div class="col-lg-6 mt-3">
            <label for="inputTelephone" class="form-label">telephone</label>
            <input type="number" class="form-control" name="telephone">
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputDate" class="form-label">Date</label>
            <input type="date" class="form-control" name="date">
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputHeure" class="form-label">Heure</label>
            <input type="time" class="form-control" name="heure">
        </div>

        <div class="col-lg-6 mt-3">
            <label for="inputDepartement" class="form-label">Departement</label>
            <input type="text" class="form-control" name="departement">
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputMessage" class="form-label">Message</label>
            <input type="text" class="form-control" name="message">
        </div>




        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
