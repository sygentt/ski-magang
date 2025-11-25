<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    @fluxAppearance
</head>

<body class="min-h-screen bg-gray-50 dark:bg-gray-950 gradient-mesh">
<flux:sidebar sticky collapsible class="glass-sidebar">
    <flux:sidebar.header class="flex! items-center!">
        <flux:sidebar.brand class="gap-0!" href="{{ route('admin.dashboard') }}" name="{{ config('app.name') }}">
            <x-slot name="logo" class="w-0! min-w-0!">
            </x-slot>
        </flux:sidebar.brand>
        <flux:sidebar.collapse
            class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2 opacity-100!"/>
    </flux:sidebar.header>
    <flux:sidebar.nav>
        <flux:sidebar.item icon="chart-bar-square" href="{{ route('admin.dashboard') }}" wire:navigate>
            Dashboard
        </flux:sidebar.item>
        <flux:sidebar.item href="" icon="user-group" href="{{ route('admin.users') }}" wire:navigate>
            Users List
        </flux:sidebar.item>
        <flux:sidebar.item icon="arrow-up-on-square-stack" href="{{ route('admin.posts') }}" wire:navigate>
            Posts List
        </flux:sidebar.item>
    </flux:sidebar.nav>
    <flux:sidebar.spacer/>
    <flux:sidebar.nav>
        <flux:sidebar.item href="/settings" icon="cog-6-tooth">Settings</flux:sidebar.item>
    </flux:sidebar.nav>
    <flux:dropdown position="top" align="start" class="max-lg:hidden">
        <flux:profile :chevron="false" avatar:name="{{ ucfirst(strtolower(Auth::user()->name)) }}"
                      name="{{Auth::user()->name}}" avatar:color="auto"/>
        <flux:menu>
            <flux:sidebar.item icon="arrow-left-start-on-rectangle" href="{{ route('home') }}">
                Exit Admin
            </flux:sidebar.item>
            <flux:menu.separator/>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <flux:menu.item type="submit" icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </form>
        </flux:menu>
    </flux:dropdown>
</flux:sidebar>
<flux:header class="lg:hidden glass-header">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>
    <flux:spacer/>
    <flux:dropdown position="top" align="start">
        <flux:profile :chevron="false" avatar:name="{{ ucfirst(strtolower(Auth::user()->name)) }}"
                      name="{{Auth::user()->name}}" avatar:color="auto" class="transition-transform duration-200 hover:scale-105"/>
        <flux:menu class="glass-modal !rounded-xl">
            <flux:sidebar.item icon="arrow-left-start-on-rectangle" href="{{ route('home') }}">
                Exit Admin
            </flux:sidebar.item>
            <flux:menu.separator/>
            <flux:sidebar.item href="/settings" icon="cog-6-tooth">Settings</flux:sidebar.item>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <flux:navlist.item type="submit" icon="arrow-right-start-on-rectangle">Logout
                </flux:navlist.item>
            </form>
        </flux:menu>
    </flux:dropdown>
</flux:header>

<flux:main>
    {{ $slot }}
</flux:main>
<x-penguin-ui.toast/>

@fluxScripts
</body>

</html>
