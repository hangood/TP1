@extends('layout')
@section('title','Contacts')
@section('content')
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                      <div class="flex justify-center pt-8">
                                  <h1>Contacts</h1>
                      </div>
                      <div class="mt-8">
                                  <p>Hello To My Contacts Page</p>
                                  @if (count($contacts) > 0 )
                                  <table style="border-collapse: collapse">
                                    <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>message</th>
                                    </tr>
                                      @foreach ($contacts as $contact)
                                      <tr>
                                        <td>{{$contact['id']}}</td>
                                        <td>{{$contact['name']}}</td>
                                        <td>{{$contact['email']}}</td>
                                        <td>{{$contact['message']}}</td>
                                      </tr>
                                      @endforeach
                                    @else
                                        <p style='color:red;background:black;padding:10px;'><b> There are no Contacts to display. </b></p>
                                    </table>
                                    @endif
                      </div>
            </div>
@endsection