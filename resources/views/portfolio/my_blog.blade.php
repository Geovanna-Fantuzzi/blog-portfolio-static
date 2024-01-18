@extends('layout')

@section('content')

<h2 class="title text-center mb-4">Meus <span class="color-primary">Projetos</span></h2>

<div class="list-categories p-4 mb-4">
    <a class="link color-secondary" href="{{ route('portfolio.index') }}">Portfolio</a><span class="text-muted"> | Meu Blog Portfolio</span>
</div>

<h1 class="title text-center color-primary"> Meu Blog Portfolio </h1>

<div class="full-w text-center">
    <img src="/assets/upload/img/fafb42861483921afc3f441b64d404c1.png" class="img-capa mb-4">
</div>

<div class="container-description">
    <h1 style="text-align: center;"><strong><span style="color: rgb(132, 63, 161);">Sobre este site</span></strong></h1>
<p>Tive a ideia de criar um blog al&eacute;m de portfolio, quando comecei a aprender Laravel. Eu assisti v&aacute;rios videos de cursos e para conseguir utilizar de fato tive que testar e tirar minhas pr&oacute;prias conclus&otilde;es (ali&aacute;s a maioria das outras tecnologias que conhe&ccedil;o foram assim tamb&eacute;m). Ent&atilde;o eu olhei para as minhas anota&ccedil;&otilde;es e pensei que seria uma boa ideia, ter uma biblioteca cheia de artigos sobre coisas que aprendi, explicadas da forma como eu gostaria que tivessem sido explicadas quando comecei, al&eacute;m de que seria facil procurar um topico de algo que fiz algum tempo atr&aacute;s e j&aacute; tenha esquecido.</p>
<p>Sobre a forma como o fiz, eu utilizei um painel do Laravel para fazer o painel de administra&ccedil;&atilde;o do site, mas infelizmente a vers&atilde;o do site que foi para a internet teve de ser est&aacute;tica, j&aacute; que a plataforma gratu&iacute;ta que eu utilizaria para hostear o site com o banco de dados est&aacute; sofrendo alguns problemas, mas pretendo assim que puder subir ele completo.</p>
<p>O front do site foi feito manualmente com CSS e booststrap, o do painel de administra&ccedil;&atilde;o com tailwind e um arquivo CSS. Utilizei o eloquent para fazer as requisi&ccedil;&otilde;es SQL, e o editor foi a vers&atilde;o gratis do TinyMCE. Aqui v&atilde;o algumas imagens do painel administrativo.</p>
<p>&nbsp;</p>
<h2 style="text-align: center;"><span style="color: rgb(132, 63, 161);"><strong>Imagens</strong></span></h2>
<table class="table-desc" style="border-collapse: collapse; width: 91.8448%; border-width: 0px; height: 342px; margin-left: auto; margin-right: auto;" border="1"><colgroup><col style="width: 50.0003%;"><col style="width: 50.0003%;"></colgroup>
<tbody>
<tr>
<td style="text-align: center; border-width: 0px; padding: 15px;"><img class="img-description" src="../../../assets/upload/img/tiny/65a91b5777dbf.png" alt="" width="350"></td>
<td style="border-width: 0px; text-align: center; padding: 15px;"><img class="img-description" src="../../../assets/upload/img/tiny/65a91bb09edfb.png" alt="" width="350"></td>
</tr>
</tbody>
</table>
<p style="text-align: center;"><img class="img-desc-full img-hidden" src="../../../assets/upload/img/tiny/65a91bb09edfb.png" alt="" width="500" height="349"></p>
<p style="text-align: center;"><img class="img-desc-full img-hidden" src="../../../assets/upload/img/tiny/65a91b5777dbf.png" alt="" width="500"></p>
<p style="text-align: center;"><img class="img-desc-full" src="../../../assets/upload/img/tiny/65a91c38f029c.png" alt="" width="600"></p>
</div>
@endsection