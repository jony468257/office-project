@extends('layouts.frontend')

@section("title", "Registration")

@section("content")
    <div class="container form-container" id="registration" style="pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <h1 class="mb-5"><span class="text-success fs-1">Mimba FAQ</span></h1>
                <div class="accordion my-5" id="accordionPanelsStayOpenExample">
                    @foreach($faqs as $faqIndex => $faq)
                        @php
                            // Decode the JSON data
                            $faqItems = json_decode($faq->faq_data, true);
                        @endphp

                        @foreach($faqItems as $item)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-4 fw-bold @if($item['faq_id'] != 0) collapsed @endif"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapse{{ $item['faq_id'] }}"
                                            aria-expanded="{{ $item['faq_id'] == 0 ? 'true' : 'false' }}"
                                            aria-controls="panelsStayOpen-collapse{{ $item['faq_id'] }}">
                                        {{ $item['faq_question'] }}
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse{{ $item['faq_id'] }}"
                                     class="accordion-collapse collapse @if($item['faq_id'] == 0) show @endif">
                                    <div class="accordion-body">
                                        <strong class="fs-5 text-muted">{{ $item['faq_answer'] }}</strong>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach

                </div>



            </div>
        </div>
    </div>

@endsection
