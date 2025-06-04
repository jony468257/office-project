@extends('layouts.frontend')

@section("title","Gallery")

@section("content")
    <div class="container form-container pt-5" id="registration">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 mb-5">
                <div class="row">
                    <h1 class="mb-5"><span class="text-success fs-1">Mimba Gallery's</span></h1>
                    @foreach($gallerys as $key => $gallery)
                        <div class="col-md-4 mb-4">
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title_en }}" class="img-fluid border border-success" data-bs-toggle="modal" data-bs-target="#galleryModal{{ $key }}">
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="galleryModal{{ $key }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!-- Close Button -->
                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>

                                    <!-- Modal Image -->
                                    <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid" alt="{{ $gallery->title_en }}">

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <h5>{{ $gallery->title_en }}</h5>
                                        <p>{{ $gallery->description_en }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
