@extends('layout');

@section('content')
    <h2 class="title text-center mb-4">Aprenda <span class="color-primary">comigo</span></h2>

    <div class="list-categories p-2">
        <ul class="list-group d-flex flex-row justify-content-around">
            <li class="p-4">
                <a href="{{ route('blog.categorie', ['categorie' => 'Dicas']) }}" class="link color-secondary">Dicas</a>
            </li>
            <li class="p-4">
                <a href="{{ route('blog.categorie', ['categorie' => 'PHP']) }}" class="link color-secondary">PHP</a>
            </li>
            <li class="p-4">
                <a href="{{ route('blog.categorie', ['categorie' => 'Laravel']) }}" class="link color-secondary">Laravel</a>
            </li>
            <li class="p-4">
                <a href="{{ route('blog.categorie', ['categorie' => 'SQL']) }}" class="link color-secondary">SQL</a>
            </li>
            <li class="p-4">
                <a href="{{ route('blog.categorie', ['categorie' => 'Bibliotecas']) }}"
                    class="link color-secondary">Bibliotecas</a>
            </li>
        </ul>
    </div>

    <h5 class="sub-title text-uppercase color-secondary m-5">Última postagem</h5>

    {{-- card principal --}}
    <div class="row m-5">
        <div class="card d-flex flex-direction p-4">
            <img src="/assets/upload/img/8b3dcefa2209ca2ce21e901763eebec8.jpg" class="img-card">
            <div class="card-body d-flex flex-column justify-content-evenly">
                <div class="d-flex flex-row justify-content-between">
                    <h5 class="sub-title color-primary">Começando no Laravel 10</h5>
                    <span class="text-categorie">Laravel</span>
                </div>
                <p class="post-description">
                    Neste artigo vou explicar a estrutura básica do Laravel 10 e mostrar uma forma de instalação, também comento brevemente sobre a estrutura do MVC já que é um ponto importante para o Laravel.
                </p>
                <a href="{{ route('blog.post') }}"class="btn btn-primary">Continue lendo</a>
                <p class="mt-2 legend">Data de postagem: 02/01/2024</p>
            </div>
        </div>
    </div>

    {{-- <h5 class="sub-title text-uppercase color-secondary m-5">Postagens mais antigas</h5> --}}

    {{-- demais cards --}}
    {{-- <div class="row d-flex flex-row flex-wrap m-4">
                @foreach ($all_articles as $article)
                    <div class="col-md-6 p-4">
                        <div class="card d-flex flex-column">
                            <img src="{{ $article->image }}" alt="" class="img-card">
                            <div class="card-body d-flex flex-column justify-content-evenly">
                                <div class="d-flex flex-row justify-content-between">
                                    <h5 class="sub-title color-primary">{{ $article['title'] }}</h5>
                                </div>
                                <span class="text-categorie pt-1 pb-2">{{ $article['categorie'] }}</span>
                                <p class="post-description">{{ $article['summary'] }}</p>
                                <a href="{{ route('blog.post', ['id' => $article['id']]) }}" class="btn btn-primary">Continue lendo</a>
                                <p class="mt-2 legend">Data da Postagem: {{ $article['created_at'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
@endsection
