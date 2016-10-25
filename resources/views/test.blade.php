@extends('testtemp')

@section("title","テストページだよ")
@section('contents')
    <main>
    @foreach($data as $datainner)
    <h1> id = {{$datainner["id"]}}</h1>
    <p> name = {{$datainner["name"]}}</p>
    @endforeach

    <button type="button" name="button">おしてね</button>
    </main>
@endsection
