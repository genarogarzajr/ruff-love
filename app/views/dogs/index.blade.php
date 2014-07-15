@extends.layout('master')

@section('topscript')
@stop

@section('content')
<div class="container col-md-12">

<p><a class="btn btn-success btn-block" href="{{ action('DogsController@create') }}"> Create New Dog </a></p>

<table class="table table-striped fixed">
	<tr>
		<th width="20px">ID</th>
		<th>Name</th>
		<th>Owner</th>
		<th>...</th>
		<th>...</th>
		<th width="220px">Actions</th>
	</tr>

	@foreach ($dogs as $dog)
	<tr>
		<td>{{{ $dog->id }}}</td>
		<td>{{{ $dog->dogname }}}</td>
		<td>{{{ $dog->first_name . ' ' . $dog->last_name }}}</td>
		<td>{{{ ucfirst($dog->role) }}}</td>
		<td>{{{ count($dog->posts) }}}</td>
		<td>
			<div class="btn-group">
				<button type="button" class="btn btn-default">
			  		<a href="{{ action('DogsController@show', $dog->id) }}"><span class="glyphicon glyphicon-zoom-in"></span></a>
				</button>

				<button type="button" class="btn btn-default">
					<a href="{{ action('DogsController@edit', $dog->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
				</button>				

				<a href="#" class="deleteDog btn btn-danger" data-dogid="{{ $dog->id }}"><span class="glyphicon glyphicon-remove-sign"></span></a>

			</div>
		</td>
	</tr>
	@endforeach
</table>

			{{ Form::open(array('action' => 'DogsController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
			{{ Form::close() }}

	<div class="centered">{{ $dogs->links() }}</div>	

</div> <!-- end main container -->
@stop

@section('bottomscript')
<script type="text/javascript">
$(".deleteDog").click(function() {
	var dogid = $(this).data('dogid');
	$("#deleteForm").attr('action', '/dogs/' + dogid);
	if (confirm("Are you sure you want to delete this dog?")) {
		$('#deleteForm').submit();
	}
});
</script>
@stop