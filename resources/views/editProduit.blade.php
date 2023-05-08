@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h5 class="border-bottom pb-2 mb-4">Modifier produit :</h5>
    <div class="mt-4">
        @if(session()->has("success"))
            <div class="alert alert-success">
                <h6>{{ session()->get("success") }}</h6>
            </div>
        @endif

        @if($errors->any())
        <div class='alert alert-danger'>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form style="width:65%;" method="POST" action="{{ route('produit.update', ['produit'=>$produit->id]) }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titre</label>
                <input type="text" name="titre" value="{{ $produit->titre }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea name="description" class="form-control" required>{{ $produit->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prix</label>
                <input type="number" name="prix" value="{{ $produit->prix }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Quantité</label>
                <input type="number" name="quantite" value="{{ $produit->quantite }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('produit') }}" class="btn btn-danger">Annuler</a>
        </form>
    </div>
</div>
@endsection