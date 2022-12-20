@extends('layout/aplikasi')
@section('header')
    <h1>{{ $judul }}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dicta cum assumenda vel optio, voluptas quae provident
        accusamus ratione molestiae!</p>
    <ul>
        <li>Email : {{ $kontak['email'] }}</li>
        <li>no Hp : {{ $kontak['hp'] }}</li>
    </ul>
@endsection
