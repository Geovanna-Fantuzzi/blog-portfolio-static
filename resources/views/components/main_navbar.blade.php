<nav class="navbar dark-shadow-h">
    <ul class="nav-list">

        <li class="nav-item">
            <a href="{{ route('home')}}" class="nav-link">
                <i class="fa-solid fa-home fa-2x"></i>
                <span class="link-text">Início</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('about.index')}}" class="nav-link">
                <i class="fa-solid fa-user fa-2x"></i>
                <span class="link-text">Sobre mim</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('portfolio.index')}}" class="nav-link">
                <i class="fa-solid fa-briefcase fa-2x"></i>
                <span class="link-text">Portfolio</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('blog.index')}}" class="nav-link">
                <i class="fa-solid fa-comments fa-2x"></i>
                <span class="link-text">Blog</span>
            </a>
        </li>
        <li class="nav-item">
            <a id="switch-mode" class="nav-link">
                <i class="fa-solid fa-cloud-sun fa-2x"></i>
                <span class="link-text">Tema</span>
            </a>
        </li>
    </ul>
</nav>