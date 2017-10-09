@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<h1> EDIT </h1>
<form action="/detail/{{$var->id}}" method="post">
	<input type="string" name="NomorResep" value="{{$var->NomorResep}}" placeholder="nomor resep">
	<input type="string" name="KodeObat" value="{{$var->KodeObat}}" placeholder="kode obat">
	<input type="string" name="Harga" value="{{$var->Harga}}" placeholder="harga">
	<input type="string" name="Dosis" value="{{$var->Dosis}}" placeholder="dosis">
	<input type="string" name="SubTotal" value="{{$var->SubTotal}}" placeholder="sub total">
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">

    
</form>