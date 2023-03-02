@extends('layout')
@section('title','thankyou')
@section('content')
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                      <div class="flex justify-center pt-8">
                                  <h1>thankyou</h1>
                      </div>
                      <div class="mt-8">
                                  <p>Hello and thakyou <b>{{$_POST['nom']}}</b></p>
                      </div>
            </div>
@endsection