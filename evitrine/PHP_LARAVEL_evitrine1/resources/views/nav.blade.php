<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link pl-0" href="{{ route('index') }}"> <strong>lister article</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create') }}">Ajouter article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('createCat') }}">Ajouter Categorie</a>
                </li>
                <li class="nav-item">
                <div class="select">
                  <select onchange="window.location.href = this.value">
                  <option value="{{ route('index') }}" >Toutes catégories</option>
                </select>
                </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">voir plus</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown07">
                        <a class="dropdown-item" href="#">Foods and Drink</a>
                        <a class="dropdown-item" href="#">Home interior</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Categorie 1</a>
                        <a class="dropdown-item" href="#">Categorie 2</a>
                        <a class="dropdown-item" href="#">Categorie 3</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>