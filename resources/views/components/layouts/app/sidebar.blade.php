<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                <x-app-logo />
            </a>

            <flux:navlist variant="outline">
                    <flux:navlist.item icon="layout-dashboard" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>


        {{-- Modulos --}}
                <flux:navlist.group :heading="__('Modulos')" class="grid">
                    
                    {{-- Modulo de compras --}}
                    <flux:navlist.group heading="Compras" expandable data-group-id="compras">
                        <flux:navlist.item icon="shopping-bag" href="{{ route('orden-de-compra') }}">Orden de Compra</flux:navlist.item>
                        <flux:navlist.item icon="shopping-cart" href="{{ route('detalle-de-compra') }}">Detalle de Compra</flux:navlist.item>
                        <flux:navlist.item icon="users-round" href="{{ route('proveedores') }}">Proveedores</flux:navlist.item>
                        <flux:navlist.item icon="receipt" href="{{ route('impuestos') }}">Impuestos</flux:navlist.item>
                    </flux:navlist.group>

                    {{-- Modulo de Inventario --}}
                    <flux:navlist.group heading="Almacen" expandable data-group-id="almacen">
                        <flux:navlist.item icon="database" href="{{ route('inventario') }}">Inventario</flux:navlist.item>
                        <flux:navlist.group heading="Productos" expandable>
                            <flux:navlist.item icon="list" href="{{ route('lista-de-productos') }}">Lista de Productos</flux:navlist.item>
                            <flux:navlist.item icon="book-image" href="{{ route('presentacion') }}">Presentacion</flux:navlist.item>
                            <flux:navlist.item icon="book-marked" href="{{ route('categoria') }}">Categorias</flux:navlist.item>
                            <flux:navlist.item icon="book-type" href="{{ route('marcas') }}">Marcas</flux:navlist.item>
                            <flux:navlist.item icon="scale" href="{{ route('unidades-de-medida') }}">Unidades de Medida</flux:navlist.item>
                        </flux:navlist.group>
                    </flux:navlist.group>

                    {{-- Modulo de Laboratorio --}}
                    <flux:navlist.group heading="Laboratorio" expandable data-group-id="laboratorio">
                        <flux:navlist.item icon="test-tube" href="{{ route('examenes') }}">Lista de Exámenes</flux:navlist.item>
                        <flux:navlist.item icon="grid-2x2-plus" href="{{ route('registrar-examen') }}">Registrar Examen</flux:navlist.item>
                        <flux:navlist.item icon="person-standing" href="{{ route('pacientes') }}">Pacientes</flux:navlist.item>
                    </flux:navlist.group>

                    {{-- Modulo de Empleados --}}
                    <flux:navlist.group heading="Empleados" expandable data-group-id="empleados">
                        <flux:navlist.item icon="id-card-lanyard" href="{{ route('empleados') }}">Lista de Empleados</flux:navlist.item>
                        <flux:navlist.item icon="user-round-plus" href="{{ route('registrar-empleado') }}">Registrar Empleado</flux:navlist.item>
                        <flux:navlist.item icon="history" href="#">Historial Laboral</flux:navlist.item>
                    </flux:navlist.group>

                    {{-- Modulo de Departamentos --}}
                    <flux:navlist.group heading="Departamentos" expandable data-group-id="departamentos">
                        <flux:navlist.item icon="building" href="{{ route('departamentos') }}">Lista de Departamentos</flux:navlist.item>
                        <flux:navlist.item icon="house-plus" href="{{ route('registrar-departamento') }}">Registrar Departamento</flux:navlist.item>
                        <flux:navlist.item icon="history" href="#">Historial de Departamentos</flux:navlist.item>
                    </flux:navlist.group>

                    {{-- Modulo de Reportes --}}
                    <flux:navlist.group heading="Reportes" expandable data-group-id="reportes">
                        <flux:navlist.item icon="file-text" href="#">Lista de Reportes</flux:navlist.item>
                        <flux:navlist.item icon="file-plus-2" href="#">Generar Reporte</flux:navlist.item>
                    </flux:navlist.group>

                    {{-- Modulo de Roles --}}
                    <flux:navlist.group heading="Roles" expandable data-group-id="roles">
                        <flux:navlist.item icon="user" href="{{ route('roles') }}">Lista de Roles</flux:navlist.item>
                        <flux:navlist.item icon="user-plus" href="{{ route('registrar-rol') }}">Registrar Rol</flux:navlist.item>
                    </flux:navlist.group>

                </flux:navlist.group>
            </flux:navlist>

            <flux:spacer />

            <!-- Desktop User Menu -->
            <flux:dropdown class="hidden lg:block" position="bottom" align="start">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon:trailing="chevrons-up-down"
                />

                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="settings" wire:navigate>{{ __('Opciones') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="log-out" class="w-full">
                            {{ __('Salir') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
