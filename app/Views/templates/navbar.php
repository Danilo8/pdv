<!-- Fontawesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<!-- CSS Style -->
<link rel="stylesheet" href="<?=URL?>/public/css/navbar-style.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?=URL?>"><h2>PDV</h2></a>
    <button class="navbar-toggler hidden-lg-up text-light border-light" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <small><i class="fas fa-ellipsis-v"></i> Menu</small>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <div class="dropdown nav-item">
                <span style="cursor: pointer" class="nav-link">
                    Sobre
                </span>                                       
                <div class="dropdown-content text-center p-1">
                    <a class="dropdown-item" href="<?=URL?>/sobre">Sobre o PDV</a>
                    <a class="dropdown-item" href="<?=URL?>/termos">Termos de Uso</a>
                </div>
            </div>
            <li class="nav-item">
                <a href="" class="nav-link">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Contato</a>
            </li>
            <li class="nav-item">
                <a href="<?=URL?>/login" class="nav-link btn-outline-info bg-info border">Acessar Painel</a>
            </li>
        </ul>
    </div>
</nav>