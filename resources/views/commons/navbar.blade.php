<header class="mb-4">
    <nav class="navbar bg-neutral text-neutral-content">
        {{-- トップページへのリンク --}}
        <div class="flex-1">
            <h1><a class="btn btn-ghost normal-case text-xl" href="/">TaskList</a></h1>
        </div>

        <div class="flex-none">
            <ul tabindex="0" class="menu hidden lg:block lg:menu-horizontal">
                {{-- タスク作成ページへのリンク --}}
                <li><a class="link link-hover" href="{{ route('tasks.create') }}">新規タスクの登録</a></li>
            </ul>
            <div class="dropdown dropdown-end">
                <button type="button" tabindex="0" class="btn btn-square btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-info">
                    {{-- タスク作成ページへのリンク --}}
                    <li><a class="link link-hover" href="{{ route('tasks.create') }}">新規タスクの登録</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>