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





    <h1 class="text-center">Ajouter un nouveau Specialité</h1>


    <form action="{{ route('Specialité.store') }}" method="POST">
    @csrf
    <div class="row">

        <div class="col-lg-12 mt-3">
          <label for="inputNom" class="form-label">Nom_spec</label>
          <input type="text" class="form-control" name="nom_spec">



        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
