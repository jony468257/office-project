@extends('layouts.frontend')

@section("title", "Registration")

@section("content")
    <div class="container form-container" id="registration" style="pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card card-custom text-center">
                    <div>
                        <img src="{{ asset('backend/assets/images/mimba.svg') }}" alt="" class="w-50 card-header">
                    </div>
                    <div class="card-header fs-4 text-dark fw-light">Digital Data Record Keeping Management</div>
                    <div class="card-body">
                        <!-- Success Modal -->
                        @if(session('success'))
                            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="background-color: #d4edda; border: 2px solid #28a745;">
                                        <div class="modal-header" style="background-color: #ffffff; color: white;">
                                            <img src="{{ asset('backend/assets/images/mimba.svg') }}" alt="" class="w-100 card-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
                                        </div>
                                        <div class="modal-body" style="color: #155724; font-size: 1.2rem;">
                                            <i class="bi bi-check-circle-fill" style="font-size: 2rem; color: #28a745;"></i>
                                            <p>Dear {{ session('success.customerName') }},</p>
                                            <p>Thank you for your message. We have successfully received your message for interest in the <span class="text-dark">{{ session('success.package') }}</span> package.</p>
                                            <p>If you have any questions or need further assistance, feel free to contact us.</p>
                                            <p>Best regards,<br> {{ session('success.companyName') }}</p>
                                        </div>
                                        <div class="modal-footer" style="background-color: #f8f9fa;">
                                            <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Ok!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Script to automatically trigger modal on success -->
                            <script>
                                window.onload = function() {
                                    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                                    successModal.show();
                                };
                            </script>
                        @endif

                        <!-- Registration Form -->
                        <form action="{{ route('registrationStore') }}" method="post" class="row g-4">
                            @csrf
                            <!-- Name and Email Fields -->
                            <div class="col-md-6">
                                <label for="" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name"
                                       value="{{ old('name') }}" placeholder="Your Name" >
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                       value="{{ old('email') }}" placeholder="test@gmail.com">
                            </div>

                            <!-- Mobile and Address Fields -->
                            <div class="col-md-6">
                                <label for="mobile" class="form-label">Mobile <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="mobile" name="mobile" placeholder="Enter 11-digit mobile number" required>
                                @error('mobile')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="" class="form-label">Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="address" name="address"
                                       value="{{ old('address') }}" placeholder="Your Address" >
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Number of Cattle and Interested Package -->
                            <div class="col-md-6">
                                <label for="" class="form-label">Number Of Cattle <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-lg" id="cattle" name="cattle"
                                       value="{{ old('cattle') }}" placeholder="Your total cattle" >
                                @error('cattle')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="package" class="form-label">Interested Package <span
                                        class="text-danger">*</span></label>
                                <select id="" class="form-select form-select-lg" name="package">
                                    <option value="" disabled selected>Choose Package</option>
                                    <option value="basic" {{ old('package') == 'basic' ? 'selected' : '' }}>Basic
                                        (Monthly BDT 50 Per Cattle)
                                    </option>
                                    <option value="premium" {{ old('package') == 'premium' ? 'selected' : '' }}>Premium
                                        (Monthly BDT 80 Per Cattle)
                                    </option>
                                    <option value="custom" {{ old('package') == 'custom' ? 'selected' : '' }}>Custom
                                    </option>
                                </select>
                                @error('package')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description Field -->
                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="description" style="height: 120px;" name="description">{{ old('description') }}</textarea>
                                    <label for="description">Leave a comment here</label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-custom">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
