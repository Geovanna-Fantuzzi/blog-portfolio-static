@extends('layout')

@section('content')

<h2 class="title text-center mb-4">Meus <span class="color-primary">Projetos</span></h2>

<div class="list-categories p-4 mb-4">
    <a class="link color-secondary" href="{{ route('portfolio.index') }}">Portfolio</a><span class="text-muted"> | ProTSA</span>
</div>

<h1 class="title text-center color-primary"> ProTSA </h1>

<div class="full-w text-center">
    <img src="/assets/upload/img/bb663a6ce182c2a8c4736cea243cd77a.png" class="img-capa mb-4">
</div>

<div class="container-description">
    <h2 style="text-align: center;"><strong><span style="color: rgb(230, 126, 35);">Sobre o ProTSA</span></strong></h2>
<p>A pedido de confidencialidade do cliente n&atilde;o posso mostrar imagens nem revelar particularidades sobre seu desenvolvimento, mas basicamente era um sistema privado com formul&aacute;rios de testes e resultados baseados em requisi&ccedil;&otilde;es SQL.</p>
<p>&nbsp;</p>
<h3 style="text-align: center;"><span style="color: rgb(230, 126, 35);"><strong>Minha experi&ecirc;ncia com o desenvolvimento</strong></span></h3>
<p>Este projeto foi o mais dificil que j&aacute; fiz, participei dele como freelancer a pedido da empresa na qual trabalhei como est&aacute;giaria, e sua dura&ccedil;&atilde;o foi de mais de 6 meses. Tivemos reuni&otilde;es quase que todas as semanas com o cliente no qual planificou todo o sistema. Tive que pesquisar bastante e aprender diversas coisas enquanto trabalhava nele, al&eacute;m de lidar com diversos bugs e ter que fazer diversas corre&ccedil;&otilde;es ao longo da jornada, foi muito gratificante adiquirir tanta experi&ecirc;ncia com este projeto apesar de ter sido muito longo e cansativo.</p>
<p>Aqui v&atilde;o alguns dos conhecimentos novos que aprendi enquanto participava do projeto:</p>
<ul>
<li>Requisi&ccedil;&otilde;es SQL complexas com muitas liga&ccedil;&otilde;es entre tabelas.</li>
<li>Leitura de planilhas excell XML e XLSX.</li>
<li>Convers&atilde;o de p&aacute;ginas de resultados em PDF.</li>
<li>Envio de email com anexos.</li>
<li>Gerar gr&aacute;ficos utilizando Chart.js.</li>
</ul>
</div>
@endsection