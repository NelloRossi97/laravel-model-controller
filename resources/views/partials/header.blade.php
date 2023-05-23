<header>
    <nav class="d-flex justify-content-between align-items-center px-5 container">
        <div class="logo h-100">
            <img src="/img/logo.png" alt="logo" class="h-100">
        </div>
        <div class="links">
            <ul class="d-flex list-unstyled gap-5 text-uppercase fw-bold">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/movies">Lista film</a>
                </li>
            </ul>
        </div>
        <div class="search">
            <input type="search" placeholder="Cerca film...">
            <button>Cerca</button>
        </div>
    </nav>
</header>

<style lang="scss" scoped>
    nav {
        height: 90px
    }

    a {
        text-decoration: none;
        color: white;

        &:hover {}
    }
</style>
