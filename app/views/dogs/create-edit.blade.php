@extends('layouts.master')

@section('topscript')
@stop

@section('content')
<div class="col-md-6">

<div class="clearfix"></div>

<div class="page-header">
		<div class="btn-group pull-right admin-buttons">

				<button type="button" class="btn btn-default">
			  		<a href="{{ action('DogsController@index') }}"><span class="glyphicon glyphicon-home"></span></a>
				</button>
			@if (isset($dog))
				<button type="button" class="btn btn-default">
			  		<a href="{{ action('DogsController@show', $dog->id) }}"><span class="glyphicon glyphicon-zoom-in"></span></a>
				</button>
			@endif
			
			@if (Auth::user()->role == 'admin' && isset($dog))

				<a href="#" class="deleteDog btn btn-danger" data-dogid="{{ $dog->id }}"><span class="glyphicon glyphicon-remove-sign"></span></a>

			@endif
			
		</div>

	@if (isset($dog))
			<h2>Edit Dog: {{{ $dog->name }}}</h2>
		{{ Form::model($dog, array('action' => array('DogsController@update', $dog->id), 'class'=>'form', 'role'=>'form', 'method' => 'PUT', 'files' => true)) }}
	@else
			<h2>Create New Dog</h2>
		{{ Form::open(array('action' => 'DogsController@store'), array('files' => true))}}
	@endif
	</div>

	<div class="clearfix"></div>

	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', Input::old('name'), array('class' => 'form-group form-control', 'placeholder' => 'Name')) }}
	{{ $errors->first('name', '<span class="help-block text-danger text-right">:message</span><br>') }}

	<div class="form-group zero-left-margin">
	{{ Form::label('owner', 'Owner') }}
	{{ Form::select('owner', User::lists('username', 'id'), null, array('class' => 'form-group form-control dropdown btn btn-default')) }}
	</div>

	{{ Form::label('age', 'Age') }}
	{{ Form::text('age', Input::old('age'), array('class' => 'form-group form-control', 'placeholder' => 'Age')) }}
	{{ $errors->first('age', '<span class="help-block"><p class="text-danger text-right">:message</p></span><br>') }}

	{{ Form::label('weight', 'Weight') }}
	{{ Form::text('weight', Input::old('weight'), array('class' => 'form-group form-control', 'placeholder' => 'Weight')) }}
	{{ $errors->first('last_name', '<span class="help-block"><p class="text-danger text-right">:message</p></span><br>') }}

	<div class="form-group zero-left-margin">
		{{ Form::label('sex', 'Sex') }}
		{{ Form::select('sex', array('M' => 'Male', 'F' => 'Female'), 'M', array('class' => 'form-group form-control dropdown btn btn-default')) }}	
	</div>

	<div id="prefetch" style="margin-top: 18px;">
	{{ Form::label('breed', 'Breed') }}
	{{ Form::text('breed', null, array('class' => 'form-group form-control typeahead', 'placeholder' => 'Breed')) }}
	{{ $errors->first('breed', '<span class="help-block"><p class="text-danger text-right">:message</p></span><br>') }}
	</div>

	{{ Form::submit('Save', array('class' => 'btn btn-success pull-right')) }}

</div> <!-- end left container -->

<div class="col-md-6" style="margin-top: 4px;">
	<div class="page-header">
		<h2 class="text-right">Image Preview</h2>
	</div>

	@if (isset($dog))
		<div>
			<img src="{{{ $dog->image()->first()->path }}}">
		</div>
	@endif

	<div class="form-group zero-left-margin">
	{{ Form::label('image', 'Image') }}

	{{ Form::file('image', array('class' => 'form-group button-space-top')) }}
	{{ $errors->first('image', '<span class="help-block"><p class="text-danger text-right">:message</p></span><br>') }}

	{{ Form::close() }}
	</div>

</div> <!-- end right container -->

{{ Form::open(array('action' => 'DogsController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
{{ Form::close() }}

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

var breeds = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  limit: 10,
  prefetch: {
    url: '/includes/data/breeds.json',
    filter: function(list) {
      return $.map(list, function(breed) { return { name: breed }; });
    }
  }
});
 
// kicks off the loading/processing of `local` and `prefetch`
breeds.initialize();
 
// passing in `null` for the `options` arguments will result in the default
// options being used
$('#prefetch .typeahead').typeahead(null, {
  name: 'breeds',
  displayKey: 'name',
  // `ttAdapter` wraps the suggestion engine in an adapter that
  // is compatible with the typeahead jQuery plugin
  source: breeds.ttAdapter()
});
</script>
@stop