@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h5 class="border-bottom pb-2 mb-4">Liste des produits :</h5>
    <div class="mt-4">
    <div class="d-flex justify-content-between mb-2">
      {{ $produits->links() }}
      <div>
        <a href="{{ route('produit.create') }}" class="btn btn-primary">Ajouter un produit</a>
      </div>
    </div>

    @if(session()->has("successDelete"))
        <div class="alert alert-success">
            <h6>{{ session()->get("successDelete") }}</h6>
        </div>
    @endif

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Titre</th>
          <th scope="col">Description</th>
          <th scope="col">Prix</th>
          <th scope="col">Quantité</th>
          <th style="width: 20%" scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach($produits as $produit)
        <tr>
          <td>{{ $produit->id }}</td>
          <td>{{ $produit->titre }}</td>
          <td>{{ $produit->description }}</td>
          <td>{{ $produit->prix }}</td>
          <td>{{ $produit->quantite }}</td>
          <td>{{ $produit->image }}</td>
          <td>
            <a href="{{ route('produit.edit', ['produit'=>$produit->id]) }}" class="btn btn-info">Modifier</a>
            <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer {{ $produit->titre }}?'))
            {document.getElementById('form-{{ $produit->id }}').submit()}">Supprimer</a>
            <form id="form-{{ $produit->id }}" action="{{ route('produit.supprimer', ['produit'=>$produit->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="delete">
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
</div>
@endsection