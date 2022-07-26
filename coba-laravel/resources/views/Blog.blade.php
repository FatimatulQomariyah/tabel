@extends('layout.main')

@section('container')
    <article class="mb-5">
      <table border="1">
        <tr>
          <th>title</th>
          <th>excerpt</th>
          <th>body</th>
        </tr>
        @foreach ($blog as $blog)
        <tr>
      <td><h2>{{ $blog["title"] }}</h2></td>
      <td><h5>{{ $blog["excerpt"] }}</h5></td>
      <td><p>{{ $blog["body"] }}</p></td>
        </tr>
        @endforeach
      </table>  
    </article>
@endsection