@extends('backendtemplate')

@section('title', 'Checkin List')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/vendor/datatables/datatables.min.css') }}">
@endsection

@section('content')

	<section class="py-5">
		<div class="mb-4">
			<h5 class="title-heading d-inline-block">Coming Up Check in List</h5>
		</div>

		<div class="card">
      <div class="card-header">
        <h3 class="h6 mb-0">Booking List</h3>
      </div>
      <div class="card-body">
      	<div class="table-responsive pb-5">
				  <table class="table" id="datatable" style="width: 100%; font-size: .85rem;">
				    <thead>
				    	<tr>
				    		<td>No.</td>
				    		<td>Booking_ID</td>
				    		<td>Book_Date</td>
				    		<td>Duration</td>
				    		<td>Booked_By</td>
				    		<td>Status</td>
				    		<td>Action</td>
				    	</tr>
				    </thead>

				    <tbody>
				    	@php $i = 1 @endphp
				    	@foreach ($bookings as $booking)
				    		<tr>
				    			<td>{{ $i }}.</td>
				    			<td>{{ $booking->bookingid }}</td>
				    			<td><small @if ($booking->bookstartdate == date('Y-m-d')) class="text-success" @elseif($booking->bookstartdate < date('Y-m-d')) class="text-danger" @endif>{{ $booking->bookstartdate }} to {{ $booking->bookenddate }}</small></td>
				    			<td>{{ $booking->duration }}</td>
				    			<td>{{ $booking->guest->user->name }}</td>
				    			<td>
				    				@if ($booking->status == "booked")
				    					<span class="badge badge-primary badge-pill">Booked</span>
				    				@endif
				    			</td>
				    			<td class="td-action">
				    				<span data-toggle="tooltip" title="Detail">
					    				<a class="a-detail btn-detail" href="{{ route('bookings.checkindetail', $booking->id) }}" 
					    				><i class="fas fa-external-link-alt"></i></a>
				    				</span>
				    			</td>
				    		</tr>
				    		@php $i++ @endphp
				    	@endforeach
				    </tbody>

				  </table>
				</div>
      </div>
    </div>

	</section>

@endsection

@section('script')
	<script type="text/javascript" src="{{ asset('backend/vendor/datatables/datatables.min.js') }}"></script>
	
	<script type="text/javascript">
		$(document).ready( function () {
	    $('#datatable').DataTable();
			$('[data-toggle="tooltip"]').tooltip();

	 	});

	</script>
@endsection