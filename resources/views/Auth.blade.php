@extends('layouts.mainlayout')
@section('content')
<body style="background-color: #0BE0FD">




<div class="row">
    <div class="mt-5">
        <h2 class="text-center text-light">AUTHENTIFICATION</h2>
    </div>

<div class="col-lg-12 mt-3">
<form class="shadow p-5 mt-5 bg-secondary" method="POST" action="{{ route('login') }}">
@csrf
<div class="mb-3 text-light">
<label for="exampleInputEmail1" class="form-label text-light">Adresse email</label>
<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<div id="emailHelp" class="form-text-light">Entrez votre email s'il vous plait</div>
</div>
<div class="mb-3 text-light">
<label for="exampleInputPassword1" class="form-label">Mot de passe</label>
<input type="password" name="password" class="form-control " id="exampleInputPassword1">

</div>
<div class="mb-3 form-check text-light">
<input type="checkbox" class="form-check-input text-light" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
<button type="submit" class="btn btn-info">Soumettre</button>
</form>
</div>

</div>



</body>

@endsection
