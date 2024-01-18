@extends('layout');

@section('content')
    <h1 class="title text-center">Port<span class="color-primary">folio</span></h1>

    <h5 class="sub-title text-center text-uppercase color-secondary m-5">Projetos</h5>

    {{-- demais cards --}}
    <div class="row d-flex flex-row flex-wrap m-4">
        <div class="col-md-4 p-4">
            <div class="card d-flex flex-column">
                <img src="/assets/upload/img/a64f614e4ea8a350241e8784bc17f772.png" alt="" class="card-img-top">
                <div class="card-body d-flex flex-column justify-content-evenly">
                    <div class="d-flex flex-row justify-content-between">
                        <h5 class="sub-title color-primary">ADVocê</h5>
                    </div>
                    <p class="post-description">Este site foi desenvolvido para facilitar a comunicação entre advogados e clientes.</p>
                    <a href="{{ route('portfolio.project_advoce') }}" class="btn btn-primary">Continue lendo</a>
                    <p class="mt-2 legend">Data da Postagem: 16/01/2024</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 p-4">
            <div class="card d-flex flex-column">
                <img src="/assets/upload/img/bb663a6ce182c2a8c4736cea243cd77a.png" alt="" class="card-img-top">
                <div class="card-body d-flex flex-column justify-content-evenly">
                    <div class="d-flex flex-row justify-content-between">
                        <h5 class="sub-title color-primary">ProTSA</h5>
                    </div>
                    <p class="post-description">ProTSA é um sistema de automação de peças de veículos, desenvolvido a pedido de um Engenheiro Mecânico para seu TCC.</p>
                    <a href="{{ route('portfolio.project_protsa') }}" class="btn btn-primary">Continue lendo</a>
                    <p class="mt-2 legend">Data da Postagem: 17/01/2024</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 p-4">
            <div class="card d-flex flex-column">
                <img src="/assets/upload/img/fafb42861483921afc3f441b64d404c1.png" alt="" class="card-img-top">
                <div class="card-body d-flex flex-column justify-content-evenly">
                    <div class="d-flex flex-row justify-content-between">
                        <h5 class="sub-title color-primary">Meu Blog Portfolio</h5>
                    </div>
                    <p class="post-description">Meu blog portfolio tem como objetivo mostrar minhas habilidades aos contratadores e também ajudar outros com o meu conhecimento.</p>
                    <a href="{{ route('portfolio.project_blog') }}" class="btn btn-primary">Continue lendo</a>
                    <p class="mt-2 legend">Data da Postagem: 17/01/2024</p>
                </div>
            </div>
        </div>

    </div>
@endsection
