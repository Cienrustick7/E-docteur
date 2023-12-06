@extends('layouts.mainlayout')
@section('content')

@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

<div class="text-center">
    <h1>Liste des Specialités</h1>
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
                  <th scope="col">Nom_spec</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>


              @foreach ($specialite as $spe)
              <tr>
                  <td>{{ $spe->id }}</td>
                  <td>{{ $spe->nom_spec }}</td>


                  <td>
                    <a href="{{ route('Specialité.show', $spe->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ route('Specialité.edit', $spe->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('Specialité.destroy', $spe->id ) }}" class="btn btn-danger"><i class="bi bi-trash" title="supprimer"></i></a>

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
