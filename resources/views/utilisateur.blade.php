@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h5 class="border-bottom pb-2 mb-4">Liste des utilisateurs :</h5>
    <div class="mt-4">
    <div class="d-flex justify-content-between mb-2">
      {{ $utilisateurs->links() }}
    </div>

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Email</th>
          <th scope="col">Date de naissance</th>
          <th scope="col">Sexe</th>
          <th scope="col">Photo</th>
          <th scope="col">Abonnement</th>
          <th scope="col">Rôle</th>
        </tr>
      </thead>
      <tbody>
        @foreach($utilisateurs as $utilisateur)
        <tr>
          <td>{{ $utilisateur->id }}</td>
          <td>{{ $utilisateur->nom }}</td>
          <td>{{ $utilisateur->prenom }}</td>
          <td>{{ $utilisateur->email }}</td>
          <td>{{ $utilisateur->datenaissance }}</td>
          <td>{{ $utilisateur->sexe }}</td>
          <td>{{ $utilisateur->photo }}</td>
          <td>{{ $utilisateur->abonnement->nom }}</td>
          @if($utilisateur->admin==1)
          <td>Admin</td>
          @else
          <td>User</td>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
</div>
@endsection