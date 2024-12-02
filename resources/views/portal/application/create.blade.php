@extends('layouts.portal')

@section('content')

<div class="page-wrapper">

  <!-- Page Content-->
  <div class="page-content-tab">

      <div class="container-fluid">
          <!-- Page-Title -->
          <div class="row">
              <div class="col-sm-12">
                  <div class="page-title-box">
                      <div class="float-end">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item active">Application Form</li>
                          </ol>
                      </div>
                      <h4 class="page-title">Membership Portal</h4>
                  </div>
                  <!--end page-title-box-->
              </div>
              <!--end col-->
          </div>
          <!-- end page title end breadcrumb -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Application Form </h4>
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-error">{{ session('error') }}</div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <h4 class="card-title text-end">
                                @if (isset($application))
                                    @if ($application->applicant_status == 'pending')
                                        <snap class="badge bg-warning">Pending</snap>
                                    @elseif($application->applicant_status == 'approved')
                                        <snap class="badge bg-success">Approved</snap>
                                    @endif
                                @else
                                    {{ ' ' }}
                                @endif
                            </h4>
                            

                      </div><!--end card-header-->
                      <div class="card-body">  
                        <form action="{{ isset($application) ? route('user.application.update', $application->id) : route('user.application.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row"> 
                                <div class="col-lg-6">
                                    <div class="mb-3 row">
                                        <label for="name" class="col-sm-2 col-form-label text-end">Full Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="{{ Auth::user()->name }}" id="name" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-2 col-form-label text-end">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="email" value="{{ Auth::user()->email }}" id="email" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="phone_number" class="col-sm-2 col-form-label text-end">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="phone_number" type="tel" placeholder="Phone number"  value=" {{ isset($application) ? $application->phone_number : '' }}" required>
                                        </div>
                                        @error('phone_number')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label text-end">Educational Qualifications</label>
                                        <div class="col-sm-10">
                                            <select name="qualification" class="form-select" required>
                                                <option value="">-- Select Qualification --</option>
                                                <option value="High School Diploma" {{ isset($application) && $application->qualification == 'High School Diploma' ? 'selected' : '' }}>High School Diploma</option>
                                                <option value="Bachelor's Degree" {{ isset($application) && $application->qualification == "Bachelor's Degree" ? 'selected' : '' }}>Bachelor's Degree</option>
                                                <option value="Master's Degree" {{ isset($application) && $application->qualification == "Master's Degree" ? 'selected' : '' }}>Master's Degree</option>
                                                <option value="PhD" {{ isset($application) && $application->qualification == 'PhD' ? 'selected' : '' }}>PhD</option>
                                                <option value="Professional Certification" {{ isset($application) && $application->qualification == 'Professional Certification' ? 'selected' : '' }}>Professional Certification</option>
                                                <option value="Other" {{ isset($application) && $application->qualification == 'Other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                        </div>
                                        @error('qualification')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label text-end">Membership Category</label>
                                        <div class="col-sm-10">
                                            <select name="membership_category" class="form-select" required>
                                                <option value="">-- Select Membership Category --</option>
                                                <option value="Student Membership" {{ isset($application) && $application->membership_category == 'Student Membership' ? 'selected' : '' }}>Student Membership</option>
                                                <option value="Associate Membership" {{ isset($application) && $application->membership_category == 'Associate Membership' ? 'selected' : '' }}>Associate Membership</option>
                                                <option value="Full Membership" {{ isset($application) && $application->membership_category == 'Full Membership' ? 'selected' : '' }}>Full Membership</option>
                                                <option value="Fellow Membership" {{ isset($application) && $application->membership_category == 'Fellow Membership' ? 'selected' : '' }}>Fellow Membership</option>
                                                <option value="Corporate Membership" {{ isset($application) && $application->membership_category == 'Corporate Membership' ? 'selected' : '' }}>Corporate Membership</option>
                                            </select>
                                        </div>
                                        @error('membership_category')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    

                                    <!-- Membership category -->
                                    <div class="mb-3 row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-10">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title">The application fee is non-refundable.</h4>                                    
                                                        </div><!--end col-->                                        
                                                    </div>  <!--end row-->                                  
                                                </div><!--end card-header-->
                                                <div class="card-body">
                                                    <div class="row"> 
                                                        <div class="col-md-12 align-self-center">
                                                            <div class="card-body">
                                                                <div class="alert alert-warning border-0" role="alert">
                                                                    <strong>Application Fee </strong> ₦5,000
                                                                </div>                                                                
                                                            </div><!--end card-body-->
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more fields here as needed -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label>Upload Relevant Certifications</label>
                                        <input type="file" name="certification" class="form-control" {{ isset($application) && $application->certification_path ? '' : 'required' }}>
                                    
                                        @if (isset($application) && $application->certification_path)
                                            <small class="form-text text-muted">
                                                Previously uploaded: 
                                                <a class="badge bg-warning" href="{{ asset($application->certification_path) }}" target="_blank">View Certification</a>
                                            </small>
                                        @endif
                                    
                                        @error('certification')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Proof of Academic Qualifications</label>
                                        <input type="file" name="academic_qualifications" class="form-control" {{ isset($application) && $application->academic_qualifications_path ? '' : 'required' }}>
                                    
                                        @if (isset($application) && $application->academic_qualifications_path)
                                            <small class="form-text text-muted">
                                                Previously uploaded: 
                                                <a class="badge bg-warning" href="{{ asset($application->academic_qualifications_path) }}" target="_blank">View Document</a>
                                            </small>
                                        @endif
                                    
                                        @error('academic_qualifications')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Work Experience Letters</label>
                                        <input type="file" name="work_experience" class="form-control" {{ isset($application) && $application->work_experience_path ? '' : 'required' }}>
                                    
                                        @if (isset($application) && $application->work_experience_path)
                                            <small class="form-text text-muted">
                                                Previously uploaded: 
                                                <a class="badge bg-warning"  href="{{ asset($application->work_experience_path) }}" target="_blank">View Document</a>
                                            </small>
                                        @endif
                                    
                                        @error('work_experience')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Professional Certifications</label>
                                        <input type="file" name="professional_certifications" class="form-control" {{ isset($application) && $application->professional_certifications_path ? '' : '' }}>
                                    
                                        @if (isset($application) && $application->professional_certifications_path)
                                            <small class="form-text text-muted">
                                                Previously uploaded: 
                                                <a class="badge bg-warning" href="{{ asset($application->professional_certifications_path) }}" target="_blank">View Document</a>
                                            </small>
                                        @endif
                                    
                                        @error('professional_certifications')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Proof of Identification</label>
                                        <input type="file" name="identification" class="form-control" {{ isset($application) && $application->identification_path ? '' : 'required' }}>
                                    
                                        @if (isset($application) && $application->identification_path)
                                            <small class="form-text text-muted">
                                                Previously uploaded: 
                                                <a class="badge bg-warning" href="{{ asset($application->identification_path) }}" target="_blank">View Document</a>
                                            </small>
                                        @endif
                                    
                                        @error('identification')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    
                                    <input type="hidden" name="amount" value="5000" >
                                    @if (!isset($application))
                                    <div class="mb-3">
                                        <label>Payment Option</label>
                                        <select  name="payment_option" class="form-select" required>
                                            <option value="">-- Select Payment Option --</option>
                                            <option value="paystack" {{ isset($application) && $application->payment_option == 'paystack' ? 'selected' : '' }}>Paystack</option>
                                            <option value="opay" {{ isset($application) && $application->payment_option == 'opay' ? 'selected' : '' }}>Opay</option>
                                        </select>
                                    
                                        @error('payment_option')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    @endif
                                    
                                    @if (!isset($application))
                                        <div class="mb-3">
                                            <input type="checkbox" name="fee_acknowledged" required>
                                            <label>I understand that the application fee is non-refundable.</label>
                                        </div>
                                    @endif
                                    
                                  
                                    <button type="submit" class="btn btn-primary">
                                        {{ isset($application) ? 'Update' : 'Continue' }}
                                    </button>
                                    


                                </div>
                            </div>
                        </form>
                                                                                         
                      </div><!--end card-body-->
                  </div><!--end card-->
              </div><!--end col-->
          </div><!--end row-->

          
         
      </div><!-- container -->

     
    
  </div>
  <!-- end page content -->
</div>

@endsection
