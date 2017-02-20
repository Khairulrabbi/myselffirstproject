@foreach($users as $user)
	<li> {!! $user['last_name']  !!}  {!! $user['first_name']  !!} {!! $user['Location'] !!}</li> 
@endforeach