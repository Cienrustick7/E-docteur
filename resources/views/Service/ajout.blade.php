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





    <h1 class="text-center">Ajouter un nouveau Service</h1>


    <form action="{{ route('Service.store') }}" method="POST">
    @csrf
    <div class="row">

        <div class="col-lg-6 mt-3">
          <label for="inputNom" class="form-label">type_serv</label>
          <input type="text" class="form-control" name="nom">

        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputNom" class="form-label">Description</label>
            <input type="text" class="form-control" name="nom">

          </div>

        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
