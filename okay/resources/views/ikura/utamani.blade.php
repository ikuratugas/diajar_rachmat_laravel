@extends('ikura.index')
@section('content')
  <h1>ini utama nih... jangan di kore-kore</h1>    
@endsection
@section('intro')
  <h4>okay ini intro</h4>
  <table border="1">
    <tr>
      <td>nama</td>
      <td>nim</td>
    </tr>
    {{-- --- --}}
    @foreach ($students as $item)
      <tr>
          <td>
            <a href="/utamani/{{$item['nim']}}">
                {{$item['nama']}}
            </a>
          </td>
        <td>{{$item['nim']}}</td>
      </tr>
    @endforeach
    {{-- --- --}}
  </table>
@endsection
