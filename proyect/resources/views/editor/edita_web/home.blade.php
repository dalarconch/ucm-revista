
@extends('layouts.material')
@section('content')

    <form method="post" id="form01" action="{{action('Home2Controller@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
  
       
        <textarea name="cuerpo" id="editor1" form="form01" rows="10" cols="80">
        {{$home->cuerpo}}
            </textarea>
        <br>
        <button type="submit" class="btn btn-default" >Update</button>
    </form>

    <script>
       CKEDITOR.replace('editor1');
    </script> 
@endsection