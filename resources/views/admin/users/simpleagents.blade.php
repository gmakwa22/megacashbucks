@extends('admin.layouts.app')

@section('content')
<style type="text/css">
	.dataTables_filter{
		top: 0; 
	}
</style>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB --> 

<div class="page-content-wrap">

<!-- START WIDGETS -->                    
<div class="row">
	<div class="col-md-12">
		<h2>Listing Users <!-- <a href="{{url('admin/users/create')}}"><button>Add New</button></a> --></h2>

		@if(Session::has('flash_message_error'))
			<div class="alert alert-danger alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{!! session('flash_message_error') !!}</strong>
			</div>
		@endif

		@if(Session::has('flash_message_success'))
			<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{!! session('flash_message_success') !!}</strong>
			</div>
		@endif

	</div>
</div>
<div class="clearfix"></div>
<div class="row">

	<div class="col-md-12">

		@if(count($users))
			<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
					<th>Admin Agent</th>
					<th>Status</th>
					<th>Date</th> 
					<th>Action</th>
				</thead>
				<tbody>
					<?php $i=1; ?>
					@foreach($users as $user)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>
								@if($user->role == 1)
									Super admin
								@elseif($user->role == 2)
									Agent
								@elseif($user->role == 3)
									Simple Agent
								@else
									Buyer
								@endif
							</td>
							<td>{{$user->adminagent->email}}</td>
							<td>
								@if($user->status == 1)
									Active
								@else
									Inactive
								@endif
							</td>
							<td>{{$user->created_at}}</td>
							<td>
								<a href='{{ url("admin/simpleagents/{$user->id}/update") }}'  class=" btn btn-primary"><i class="fa fa-edit"></i></a>
								<a href='{{ url("admin/simpleagents/{$user->id}/delete") }}' onclick="return confirm('Are you sure to delete this user?')"  class=" btn btn-danger"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		@else
			<p>No users found here !</p>
		@endif

	</div>
</div>
<!-- END WIDGETS -->                    


</div>

@endsection

@section('scripts')

<script type="text/javascript">

</script>

@endsection