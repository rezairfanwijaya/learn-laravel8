  {{-- navbar --}}
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="img/{{ $logo }}" class="logo" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item text-decoration-none {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                <a class="nav-item text-decoration-none  {{ ($title === "History") ? 'active' : '' }}" href="/history">History</a>
                <a class="nav-item text-decoration-none {{ ($title === "Post") ? 'active' : '' }} " href="/blog">Blog</a>
                <a class="nav-item text-decoration-none {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
                <a class="nav-item text-decoration-none {{ ($title === "Note") ? 'active' : '' }}" href="/note">Notes</a>
                
            </div>
        </div>
    </div>
</nav>
{{-- navbar --}}