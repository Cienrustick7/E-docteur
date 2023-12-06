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
                  <th scope="col">type_serv</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>


              @foreach ($service as $serv)
              <tr>
                  <td>{{ $serv->id }}</td>
                  <td>{{ $serv->type_serv }}</td>
                  <td>{{ $serv->Description }}</td>



                  <td>
                    <a href="{{ route('Service.show', $doc->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ route('Service.edit', $doc->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('Service.destroy', $doc->id ) }}" class="btn btn-danger"><i class="bi bi-trash" title="supprimer"></i></a>

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
