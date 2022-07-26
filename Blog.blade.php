@extends('layout.main')

@section('container')
    @foreach ($blog as $blog)
    <article class="mb-5">
      <table border="1">
        <tr>
          <th>title</th>
          <th>excerpt</th>
          <th>body</th>
        <tr>
      <td><h2>{{ $blog["title"] }}</h2></td>
      <td><h5>{{ $blog["excerpt"] }}</h5></td>
      <td><p>{{ $blog["body"] }}</p></td>
        </tr>
      </table>  
    </article>
    @endforeach
@endsection