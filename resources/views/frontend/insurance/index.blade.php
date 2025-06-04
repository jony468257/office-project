@extends('layouts.frontend')

@section("title", "Registration")

@section("content")
    <div class="container form-container pt-5" id="registration">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <!-- Display Title (English or Bangla based on preference) -->
                <h1 class="mb-5"><span class="text-success fs-1">{{ $insurances->title_en ?? $insurances->title_bn }}</span></h1>
                <!-- Display Description (English or Bangle based on preference) -->
                <p class="text-center">
                    {{ $insurances->description_en ?? $insurances->description_bn }}
                </p>
                @if($insurances && $insurances->attachment)
                    @if(in_array($fileExtension, ['jpg', 'jpeg', 'png']))
                        <!-- If the attachment is an image, display it -->
                        <img src="{{ asset('storage/' . $insurances->attachment) }}" alt="Insurance Attachment" class="img-fluid d-block mx-auto">
                    @elseif($fileExtension === 'pdf')
                        <!-- If the attachment is a PDF, embed it directly in the page -->
                        <embed src="{{ asset('storage/' . $insurances->attachment) }}" type="application/pdf" width="100%" height="800px" />
                    @elseif(in_array($fileExtension, ['mp4', 'webm', 'ogg']))
                        <!-- If the attachment is a video, embed it using the video tag -->
                        <video controls width="100%">
                            <source src="{{ asset('storage/' . $insurances->attachment) }}" type="video/{{ $fileExtension }}">
                            Your browser does not support the video tag.
                        </video>
                    @elseif(in_array($fileExtension, ['mp3', 'wav', 'ogg']))
                        <!-- If the attachment is an audio file, embed it using the audio tag -->
                        <audio controls>
                            <source src="{{ asset('storage/' . $insurances->attachment) }}" type="audio/{{ $fileExtension }}">
                            Your browser does not support the audio element.
                        </audio>
                    @else
                        <!-- For other file types, just provide a download link -->
                        <a href="{{ asset('storage/' . $insurances->attachment) }}" target="_blank" class="btn btn-secondary d-block mx-auto mt-4">
                            Download Attachment
                        </a>
                    @endif
                @else
                    <p class="text-center text-muted">No attachment available.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
