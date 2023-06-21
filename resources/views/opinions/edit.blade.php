@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Opinion</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('opinions.update', $opinion->id) }}" enctype="multipart/form-data">
                        @csrf
                        <!--si cambiamos el post por PUT no va a funcionar entonces tenemos que usar este metodo-->
                        @method('PUT')


                        <div class="row mb-3">
                            <label for="message" class="col-md-4 col-form-label text-md-end">Content</label>

                            <div class="col-md-6">
                                <textarea id="message" style="height: 200px; width: 100%;" class="form-control @error('message') is-invalid @enderror" name="message"  required autofocus>{{$opinion->message}}</textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                        </div>

                        {{-- Estoy intentando meter una foto --}}

                        <div class="row mb-3">
                            <label for="photo" class="col-md-4 col-form-label text-md-end">Photo</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" autofocus>

                                @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit Opinion
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
