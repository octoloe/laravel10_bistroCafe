@extends('layouts.admin')

@section('content')

<div class="container">

    <h3 class="text-center">Eine Spezialität Aktualisieren</h3>
    <div class="row">
        <div class="d-flex justify-content-end mt-5">
            <a href="{{ route('admin.menus.index') }}" class="btn btn-outline-secondary btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path
                        d="M10 12.796V3.204L4.519 8zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753" />
                </svg>
                zurück
            </a>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger mt-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow mt-4 mx-5 mb-5 p-3 rounded">
        <form action="{{ route('admin.menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-3 mb-5">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" value="{{ $menu->name }}"
                        class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Coffee Ipsum" />

                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Preis</label>
                    <input type="number" min="0.00" max="1000.00" value="{{ $menu->price}}"
                        class="form-control @error('price') is-invalid @enderror" name="price" id="price" />

                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-5">
                <label for="image" class="form-label">Bisheriges Bild</label>
                <div class="">
                    <img src="{{ Storage::url($menu->image) }}" class="p-2 w-25 rounded" width="" />
                </div>
                <label for="image" class="form-label mt-3">Neues Bild</label>
                <input class="@error('image') is-invalid @enderror form-control" type="file" id="formFile" name="image"
                    onchange="preview()" />
                @error('image')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror

                <button onclick="clearImage()" class="btn btn-outline-secondary btn-sm mt-3">Click me</button>
            </div>
            <img id="frame" src="" class="img-thumbnail" width="70" />
            <script>
                function preview() {
                     frame.src = URL.createObjectURL(event.target.files[0]);
                        }
                        function clearImage() {
                        document.getElementById('formFile').value = null;
                        frame.src = "";
                         }
            </script>


            <div class="mb-5">
                <label for="description" class="form-label">Beschreibung</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" rows="3">
                {{ $menu->description }}"
                </textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="categories" class="form-label">Spezialitäten</label>
                <select id="categories" name="categories[]" class="form-select" multiple
                    aria-label="Multiple select example">
                    <option>-- Bitte Auswählen --</option>
                    @foreach ($categories as $category )
                    <option value="{{ $category->id }}" @selected($menu->
                        categories->contains($category))>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('categories')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <div class="col-12">
                    <button class="btn btn-outline-primary btn-sm" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check2-all" viewBox="0 0 16 16">
                            <path
                                d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                        </svg>
                        Aktualisieren
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection