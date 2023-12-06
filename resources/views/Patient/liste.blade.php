@extends('layouts.mainlayout')
@section('content')

@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

<div class="text-center">
    <h1>Liste des Patients</h1>
</div>
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="">

            <table class="table ">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">age</th>
                  <th scope="col">sexe</th>
                  <th scope="col">adresse</th>
                  <th scope="col">telephone</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>


              @foreach ($patient as $pat)
              <tr>
                  <td>{{ $pat->id }}</td>
                  <td>{{ $pat->nom_pat }}</td>
                  <td>{{ $pat->prenom_pat }}</td>
                  <td>{{ $pat->age }}</td>
                  <td>{{ $pat->sexe }}</td>
                  <td>{{ $pat->adresse }}</td>
                  <td>{{ $pat->telephone }}</td>

                  <td>
                    <a href="{{ route('Patient.show', $pat->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ route('Patient.edit', $pat->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('Patient.destroy', $pat->id ) }}" class="btn btn-danger"><i class="bi bi-trash" title="supprimer"></i></a>

                </td>
              </tr>
          @endforeach
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
