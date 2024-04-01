@extends('layout')

@section('content')
    <h1 class="title color-secondary text-center mb-5">Sobre <span class="color-primary">mim</span></h1>

    <div class="container p-5 mt-5 mb-3">
        <div class="row">
            <div class="col-md-6">
                <h4 class="sub-title">Informação pessoal</h4>
                <div class="row">
                    <div class="col-md-5 pl-4 pt-4">
                        <p>Nome: Geovanna</p>
                    </div>
                    <div class="col-md-7 pt-4">
                        <p>Endereço: Viçosa - MG</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 pl-4 pt-2">
                        <p>Sobrenome: Fantuzzi Motta</p>
                    </div>
                    <div class="col-md-7 pt-2">
                        <p>Email: <a class="link color-primary"
                                href="mailto:geovanna.fantuzzi@gmail.com">geovanna.fantuzzi@gmail.com</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 pl-4 pt-2">
                        <p>Idade: 23 anos</p>
                    </div>
                    <div class="col-md-7 pt-2">
                        <p>Github: <a class="link color-primary" href="https://github.com/Geovanna-Fantuzzi"
                                target="_blank">Geovanna-Fantuzzi</a></p>
                    </div>
                </div>
                <div class="p-4">
                    <div class="row">
                        <a class="btn btn-outline-primary" href="/assets/upload/Currículo_Geovanna_Fantuzzi.pdf"
                            download="Currículo">Currículo <i class="fa-solid fa-download"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center dark-shadow-v border-top border-end border-primary rounded">
                <p class="p-4">Desde que me interessei na área da programação, estudo diariamente para conseguir uma
                    oportunidade. Fiz o curso de Programador WEB do Senac em Viçosa e participei ativamente no projeto
                    integrador da turma. Trabalhei como estagiária durante um período de 4 meses e tenho trabalhado como
                    freelancer nos últimos 10 meses. Tenho facilidade de aprendizado, boa comunicação e a todo momento busco
                    me aprimorar cada vez mais.</p>
            </div>
        </div>
    </div>

    <hr class="w-50 m-auto">

    <div class="container">
        <h4 class="sub-title text-center text-uppercase m-5">Tecno<span class="color-primary">logias</span></h4>
        <div class="row text-center">
            <div class="col-md-4 p-5">
                <img class="img-icon" alt="HTML"
                    src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg">
                <p class="mt-2 fw-bold">HTML</p>
            </div>
            <div class="col-md-4 p-5">
                <img class="img-icon" alt="CSS"
                    src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg">
                <p class="mt-2 fw-bold">CSS</p>
            </div>
            <div class="col-md-4 p-5">
                <img class="img-icon" alt="JavaScript"
                    src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-plain.svg">
                <p class="mt-2 fw-bold">JavaScript</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 p-5">
                <img class="img-icon" alt="PHP"
                    src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg">
                <p class="mt-2 fw-bold">PHP</p>
            </div>
            <div class="col-md-4 p-5">
                <img class="img-icon" alt="MySql"
                    src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg">
                <p class="mt-2 fw-bold">MySQL</p>
            </div>
            <div class="col-md-4 p-5">
                <img class="img-icon" alt="Laravel"
                    src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg">
                <p class="mt-2 fw-bold">Laravel</p>
            </div>
        </div>
    </div>

    <hr class="w-50 m-auto">

    @if (session()->has('message'))
        <div class="alert">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="container">
        <form action="{{ route('about.send') }}" method="post">
            @csrf
            <h4 class="sub-title text-center text-uppercase mt-5">Entre em <span class="color-primary">contato</span></h4>
            <p class="text-muted text-center mt-2 mb-4">Para enviar a mensagem é nescessário preencher todos os campos.</p>
            <div class="row text-center">
                <div class="col-md-6">
                    <input type="text" name="name" class="form-control input-style p-3 mb-3" placeholder="Seu nome *"
                        required>
                    <input type="email" name="email" class="form-control input-style p-3 mb-3" placeholder="Seu Email *"
                        required>
                    <input type="text" name="subject" class="form-control input-style p-3 mb-3" placeholder="Assunto *"
                        required>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control input-style p-3" name="message" placeholder="Sua mensagem... *" style="height: 210px"
                        required></textarea>
                </div>
            </div>
            <div class="d-grid gap-2 col-5 mx-auto mt-2">
                <button class="btn btn-primary rounded-pill" type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection
