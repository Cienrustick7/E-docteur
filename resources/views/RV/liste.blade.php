@extends('layouts.mainlayout')
@section('content')

@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

<div class="text-center">
    <h1>Liste des Rendez-vous</h1>
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
                  <th scope="col">nom</th>
                  <th scope="col">telephone</th>
                  <th scope="col">Date</th>
                  <th scope="col">Heure</th>
                  <th scope="col">Departement</th>
                  <th scope="col">message</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>


              @foreach ($rv as $rv)
              <tr>
                  <td>{{ $rv->id }}</td>
                  <td>{{ $rv->nom }}</td>
                  <td>{{ $rv->telephone }}</td>
                  <td>{{ $rv->Date }}</td>
                  <td>{{ $rv->Heure }}</td>
                  <td>{{ $rv->departement }}</td>
                  <td>{{ $rv->message }}</td>


                  <td>
                    <a href="{{ route('RV.show', $rv->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ route('RV.edit', $rv->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('RV.destroy', $rv->id ) }}" class="btn btn-danger"><i class="bi bi-trash" title="supprimer"></i></a>

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
