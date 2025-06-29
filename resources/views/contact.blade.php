
@extends('master')

@section('content')

        <p>This is all about contact page</p>

        <form action="{{route('contactAction')}}" method='post'>
            @csrf 
            <label for ='name'>Name: {{$errors->first('name')}} </label><br>
            <input type='text' id='name' name="name" placeholder='enter your name'>

            <button type> Add </button>
</form>

@endsection('content')