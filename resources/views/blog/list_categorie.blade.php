@extends('layout')

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
    <div class="full-w p-5">
        <a class="link color-secondary" href="{{ route('blog.index') }}">Início do Blog</a><span class="text-muted"> |
            {{ $categorie }}</span>
    </div>

    <h5 class="sub-title text-uppercase color-secondary mb-5 text-center">Todas as postagens de {{ $categorie }}</h5>

    {{-- demais cards --}}
    @if ($categorie == 'Laravel')
        <div class="row d-flex flex-row flex-wrap m-4">
            <div class="col-md-6 p-4">
                <div class="card d-flex flex-column">
                    <img src="/assets/upload/img/8b3dcefa2209ca2ce21e901763eebec8.jpg" alt="" class="img-card">
                    <div class="card-body d-flex flex-column justify-content-evenly">
                        <div class="d-flex flex-row">
                            <h5 class="sub-title color-primary">Começando no Laravel 10</h5>
                        </div>
                        <span class="text-categorie pt-1 pb-2">Laravel</span>
                        <p class="post-description">Neste artigo vou explicar a estrutura básica do Laravel 10 e mostrar uma
                            forma de instalação, também comento brevemente sobre a estrutura do MVC já que é um ponto
                            importante para o Laravel.</p>
                        <a href="{{ route('blog.post') }}" class="btn btn-primary">Continue
                            lendo</a>
                        <p class="mt-2 legend">Data da Postagem: 02/01/2024</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
