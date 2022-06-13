<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand">BlogPost</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('welcome') }}">Accueil</a></li>
        <li><a href="{{ route('posts.create') }}">Créer un post</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
</nav>