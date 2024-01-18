@extends('layout')

@section('content')
    <div class="home-container d-flex justify-content-evenly align-items-center">
        <img src="{{ asset(assets/img/notebook.png) }}" alt="Imagem de um notebook" class="img-home">
        <div class="text-center">
            <h1 class="title color-primary"><i class="fa-solid fa-minus"></i> Meu nome é Geovanna.</h1>
            <h1 class="mb-4">Programadora WEB</h1>
            <p class="p-home">Comecei a trabalhar com programação em 2022. Ainda tenho muito o que aprender, e não me atrevo a dizer que sou Full-Stack já que não tenho tanta afinidade com o Front-End, mas estou sempre disposta a aprender mais, já que me apaixonei pela programação.</p>
            <a href="{{ route('about.index')}}" class="btn btn-outline-primary btn-lg mt-2">Mais sobre mim</a>
        </div>
    </div>
@endsection
