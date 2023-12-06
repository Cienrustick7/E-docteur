@extends('layouts.mainlayout')
@section('content')

@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

<div class="text-center">
    <h1>Liste des Docteurs</h1>
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
                  <th scope="col">Nom_doc</th>
                  <th scope="col">Prenom_doc</th>
                  <th scope="col">Adresse</th>
                  <th scope="col">Telephone</th>
                  <th scope="col">email</th>
                  <th scope="col">Specialité</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>


              @foreach ($docteur as $doc)
              <tr>
                  <td>{{ $doc->id }}</td>
                  <td>{{ $doc->nom_doc }}</td>
                  <td>{{ $doc->prenom_doc }}</td>
                  <td>{{ $doc->adresse }}</td>
                  <td>{{ $doc->telephone }}</td>
                  <td>{{ $doc->email }}</td>
                  <td>{{ $doc->specialités->nom_spec }}</td>

                  <td>
                    <a href="{{ route('Docteur.show', $doc->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ route('Docteur.edit', $doc->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('Docteur.destroy', $doc->id ) }}" class="btn btn-danger"><i class="bi bi-trash" title="supprimer"></i></a>

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
