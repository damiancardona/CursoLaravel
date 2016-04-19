
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Consultas Eloquent
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ route('all') }}">
                Todos los usuarios (ALL)
            </a>
        </li>
        <li>
            <a href="{{ route('get', 'f') }}">
                Lista los usuarios femeninos (GET)
            </a>
        </li>
        <li>
            <a href="{{ route('get', 'm') }}">
                Lista los usuarios masculinos (GET)
            </a>
        </li>
        <li>
            <a href="{{ route('get-custom') }}">
                Lista los usuarios (GET con Array)
            </a>
        </li>
    </ul>
</li>