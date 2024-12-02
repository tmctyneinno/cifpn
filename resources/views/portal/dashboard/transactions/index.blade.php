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
                            <table class="table table-bordered mb-0 table-centered">
                                <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Transaction Reference</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Payment Status</th>
                                    <th>Transaction Type</th>
                                    <th> Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse ($transactions as $index => $transaction)
                                    <tr> 
                                        <td><strong>{{  $index + 1 }}</strong></td>
                                        <td>{{ $transaction->transaction_reference}}</td>
                                        <td>{{ $transaction->created_at->format('d F Y') }}</td>
                                        <td>₦{{ number_format($transaction->amount, 2) }}</td>
                                        <td>
                                            @if($transaction->status === 'pending')
                                                <span class="badge badge-soft-success">{{ ucfirst($transaction->status) }}</span>
                                            @elseif($transaction->status === 'completed' || $transaction->status === 'success')
                                                <span class="badge badge-soft-success">{{ ucfirst($transaction->status) }}</span>
                                            @elseif($transaction->status === 'failed' || $transaction->status === 'cancelled')
                                                <span class="badge badge-soft-danger">{{ ucfirst($transaction->status) }}</span>
                                            @endif
                                        </td>
                                        <td>{{ ucfirst($transaction->transaction_type)}}</td>
                                        <td >
                                            <a href="{{ route('user.transaction.show', encrypt($transaction->id)) }}" class="badge badge-boxed  badge-outline-primary">View </a>
                                        </td>
                                        
                                    </tr>
                                    @empty
                                        <p>No data found</p>
                                    @endforelse
                                
                                
                                </tbody>
                            </table><!--end /table-->
                        </div><!--end /tableresponsive-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div>
        </div>

    </div>

  </div>


@endsection