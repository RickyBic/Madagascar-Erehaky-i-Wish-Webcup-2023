@extends("layouts.master")

@section("contenu")
<div style="width:40%;" class="my-3 p-3 bg-body rounded shadow-sm">
    <h5 class="border-bottom pb-2 mb-4">Liste des abonnements :</h5>
    <div class="mt-4">
    <div class="d-flex justify-content-between mb-2">
      {{ $abonnements->links() }}
    </div>

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nom</th>
          <th scope="col">Prix</th>
        </tr>
      </thead>
      <tbody>
        @foreach($abonnements as $abonnement)
        <tr>
          <td>{{ $abonnement->id }}</td>
          <td>{{ $abonnement->nom }}</td>
          <td>{{ $abonnement->prix }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
</div>
@endsection