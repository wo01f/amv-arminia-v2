@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="contact">

        <div class="row col-lg-6 mx-auto">
            <div class="px-4 py-5 my-5">
                @if (session('status'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif

                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post" action="/admin/article/edit/{{$article->id}}">
                                @csrf
                                @method('PATCH')
                                <h2>Artikel bearbeiten</h2>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Überschrift des Artikels</label>
                                    <input type="text" class="form-control" name="name" value="{{$article->name}}" id="name" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Text des Artikels</label>
                                    <textarea class="form-control" name="description" id="description" rows="20">{{$article->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Änderung speichern</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
