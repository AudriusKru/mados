@foreach ($outfits as $outfit)
<a href="{{route('outfit.edit',[$outfit])}}">{{$outfit->type}} Size: {{$outfit->size}}</a>
<form method="POST" action="{{route('outfit.destroy', [$outfit])}}">
@csrf
<button type="submit">DELETE</button>
</form>
<br>
@endforeach
