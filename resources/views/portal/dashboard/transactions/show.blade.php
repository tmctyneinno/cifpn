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

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transaction Log</h4>
                        <p class="text-muted mb-0">This table displays a detailed log of all transactions.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            
                        </div><!--end /tableresponsive-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div>
        </div>

    </div>

  </div>


@endsection