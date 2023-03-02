@extends('layout')
@section('title','Contact')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
              <div class="flex justify-center pt-8">
                    <h1>Contact</h1>
              </div>
              <div class="mt-8">
                <form  action="/thankyou"  method="post">
                  @csrf
                      <!-- Nom -->
                      <label for="nom">Nom : </label>
                      <input type="text" name="nom" id="nom" />
                      <br/><br/>

                      <!-- Email -->
                      <label for="email">Email : </label>
                      <input type="email" name="email" id="email"  />
                      <br/><br/>

                      <!-- Message -->
                      <label for="Message">Message : </label>
                      <textarea name="Message" id="Message" placeholder="Message"></textarea>
                      <br/><br/>

                      <!-- Submit button -->
                      <button type="submit">submit</button>
                      
                </form>
                    </div>
          </div>
@endsection