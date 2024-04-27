@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }

/*paginateメソッドの矢印サイズ調整のために追加*/
  svg.w-5.h-5 {
    width: 30px;
    height: 30px;
  }
</style


</style>
@section('title', 'index.blade.php')

@section('content')
<table>
  <tr>
    <th>Data</th>
  </tr>
  @foreach ($authors as $author)
    <tr>
      <td>{{$author->getDetail()}}</td>
    </tr>
  @endforeach
</table>
{{ $authors->links() }}
@endsection