@extends('layouts.mainlayout')


@section('content')

@if (session('status'))
                    <div class="alert alert-succès">
                        {{ session('status') }}
                    </div>
                @endif
<section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire inscription directeur -->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Formulaire d'ajout</h5>

              <form class="row g-3" action="{{ route('directeurmemoire.update',  $directeurmemoire->id) }}" method="POST">
                @method('PATCH')
                @csrf
              <div class="col-md-12">
                <label for="inputNom" class="form-label">Nom_doc</label>
                <input type="text" class="form-control" name="nom">
              </div>
              <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputPrenom" class="form-label">Prenom_doc</label>
                  <input type="text" class="form-control" name="prenom">
                </div>
                <div class="col-md-6">
                    <label for="inputAdresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" name="adresse">
                  </div>

              <div class="col-md-6">
                <label for="inputTelephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" name="telephone">
              </div>


              <div class="col-md-6">
                <label for="inputSpecialité" class="form-label">Specialité</label>
                <input type="text" class="form-control" name="specialité">
              </div>


              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire inscription -->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>

@endsection
