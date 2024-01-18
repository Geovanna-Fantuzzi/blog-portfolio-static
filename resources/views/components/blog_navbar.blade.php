<nav class="navbar dark-shadow-h">
    <ul class="nav-list">

        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
                <i class="fa-solid fa-home fa-2x"></i>
                <span class="link-text">Início</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('about.index') }}" class="nav-link">
                <i class="fa-solid fa-user fa-2x"></i>
                <span class="link-text">Sobre mim</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('portfolio.index') }}" class="nav-link">
                <i class="fa-solid fa-briefcase fa-2x"></i>
                <span class="link-text">Portfolio</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#categorie-list" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false"
                aria-controls="categorie-list">
                <i class="fa-solid fa-comments fa-2x"></i>
                <span class="link-text">Blog</span>
            </a>
            
        </li>
        <li class="nav-item">
            <div class="row">
                <div class="col">
                    <ul class="collapse multi-collapse list-group" id="categorie-list">
                        <li class="p-1">
                            <a href="{{ route('blog.categorie', ['categorie' => 'Dicas']) }}" class="link-text text-muted">Dicas</a>
                        </li>
                        <li class="p-1">
                            <a href="{{ route('blog.categorie', ['categorie' => 'PHP']) }}" class="link-text text-muted">PHP</a>
                        </li>
                        <li class="p-1">
                            <a href="{{ route('blog.categorie', ['categorie' => 'Laravel']) }}" class="link-text text-muted">Laravel</a>
                        </li>
                        <li class="p-1">
                            <a href="{{ route('blog.categorie', ['categorie' => 'SQL']) }}" class="link-text text-muted">SQL</a>
                        </li>
                        <li class="p-1">
                            <a href="{{ route('blog.categorie', ['categorie' => 'Bibliotecas']) }}" class="link-text text-muted">Bibliotecas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a id="switch-mode" class="nav-link">
                <i class="fa-solid fa-cloud-sun fa-2x"></i>
                <span class="link-text">Tema</span>
            </a>
        </li>
    </ul>
</nav>
