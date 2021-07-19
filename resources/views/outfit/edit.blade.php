<form method="POST" action="{{route('outfit.update',[$outfit])}}">
Type: <input type="text" name="outfit_title" value="{{$outfit->type}}">
Color: <input type="text" name="outfit_isbn" value="{{$outfit->color}}">
Size: <input type="text" name="outfit_pages" value="{{$outfit->size}}">
About: <textarea name="outfit_about">{{$outfit->about}}</textarea>
<select name="master_id">
@foreach ($masters as $master)
<option value="{{$master->id}}" @if($master->id == $outfit->master_id)
selected @endif>
{{$master->name}} {{$master->surname}}
</option>
@endforeach
</select>
@csrf
<button type="submit">EDIT</button>
</form>
