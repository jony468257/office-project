@extends('layouts.frontend')

@section("title","Home")

@section("content")
    <div class="container pb-5  text-center" style="margin-top: 86px;">
        <h1 class="mb-5"><span class="text-success fs-1">{{ $service->title_en }}</span></h1>
        <div class="row row-cols-sm-1 row-cols-md-12 g-2">
            <div class="col text-center">
                <div class="card" style=" width:100%; height:100%;">
                        <img class="mx-auto mt-4" src="{{ asset('storage/'. $service->banner_image) }}" alt="image1.png"
                             width="100%"
                             height="">
                        <h4 class="my-3 fs-5">{{ $service->title_bn }}</h4>
                </div>
            </div>
        </div>
        <section class="pt-0 mt-5">
            <div class="container">
                <div class="row g-4 g-lg-7">
                    <!-- Our Approach -->
                    <div class="col-md-6">
                        <h4 class="mb-4"><span class="text-success fs-1">Our Approach</span></h4>
                        <p>{{ $service->description_en }}</p>
                    </div>

                    <!-- Service benefits -->
                    <div class="col-md-6">
                        <div class="card card-body bg-light border p-md-5">
                            <h4 class="mb-3"><span class="text-success fs-1">Service benefits</span></h4>

                            <!-- List -->
                            <ul class="list-group list-group-borderless border-0">
                                <li class="list-group-item heading-color d-flex mb-0">
                                    <i class="bi bi-patch-check text-primary me-2"></i> {{ $service->benefits_one_en ?? '' }}
                                </li>
                                <li class="list-group-item heading-color d-flex mb-0">
                                    <i class="bi bi-patch-check text-primary me-2"></i>{{ $service->benefits_four_en ?? '' }}
                                </li>
                                <li class="list-group-item heading-color d-flex mb-0">
                                    <i class="bi bi-patch-check text-primary me-2"></i>{{ $service->benefits_three_en ?? '' }}
                                </li>
                                <li class="list-group-item heading-color d-flex mb-0">
                                    <i  class="bi bi-patch-check text-primary me-2"></i>{{ $service->benefits_four_en ?? '' }}
                                </li>
                                <li class="list-group-item heading-color d-flex mb-0">
                                    <i class="bi bi-patch-check text-primary me-2"></i>{{ $service->benefits_five_en ?? '' }}
                                </li>
                                <li class="list-group-item heading-color d-flex mb-0">
                                    <i class="bi bi-patch-check text-primary me-2"></i>{{ $service->benefits_six_en ?? '' }}
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-0 mt-5">
            <div class="container">
                <h1 class="text-center"><span class="text-success fs-1">Pricing</span></h1>
                <p class="mb-5 text-center fs-4">Cattle Registration with QR code base ear Tag Breeding Management</p>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="table-responsive">
                            <table class="table table-success table-hover text-center">
                                <thead>
                                <tr>
                                    <th scope="col" class="fs-5">S/L</th>
                                    <th scope="col" class="fs-5">Services</th>
                                    <th class="fs-5">Basic (BDT 50/-)</th>
                                    <th class="fs-5">Premium (BDT 80/-)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>AI</td>
                                    <td><span class="badge text-bg-success">Yes</span></td>
                                    <td><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>PD</td>
                                    <td><span class="badge text-bg-success">Yes</span></td>
                                    <td><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Calving</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Dry Off</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Health Management</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Vaccination</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Deworming</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Treatment</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Milk Production data Record</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Report</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Milk collection</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>

                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Calving report</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>Vaccination report</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td>Deworming report</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">15</th>
                                    <td>Treatment report</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td>Cattle lifetime history</td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>

                                </tr>
                                <tr>
                                    <th scope="row">17</th>
                                    <td>Notification on expected calving</td>
                                    <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">18</th>
                                    <td>Notification for Vaccination, deworming, treatment follow-up.</td>
                                    <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">19</th>
                                    <td>Daily Action plan</td>
                                    <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">20</th>
                                    <td>Alert Action</td>
                                    <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">21</th>
                                    <td>Different parameter-wise report generate</td>
                                    <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">22</th>
                                    <td>Report of PD check greater than 90 days</td>
                                    <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">23</th>
                                    <td>Report On A.I. Done</td>
                                    <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">24</th>
                                    <td>PD Checked</td>
                                    <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                                    <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-outline-success mt-3">
                            <a class="text-decoration-none text-dark" href="{{ route('registration') }}" target="_blank">Registration</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
