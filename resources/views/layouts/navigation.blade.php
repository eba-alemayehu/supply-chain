<nav x-data="{ open: false }" class="navbar navbar-light bg-light shadow-sm" style="padding-left: 5em; padding-right: 5em">
    <div class="flex">
        <h5>Supply chain</h5>
    </div>
    <div class="flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="display: flex; flex-flow: row">
{{--            <li class="nav-item" style="margin: .1em 1em">--}}
{{--                <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item" style="margin: .1em 1em">--}}
{{--                <a class="nav-link" href="#">Features</a>--}}
{{--            </li>--}}
            <li class="nav-item" style="margin: .1em 1em">
                <a class="nav-link" href="#">{{Auth::user()->name}}</a>
            </li>
        </ul>
    </div>
</nav>
