<x-layouts.app :title="__('Lista de Roles')">
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">{{ __('Dashboard') }}</flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('roles')">{{ __('Lista de Roles') }}</flux:breadcrumbs.item>
    </flux:breadcrumbs>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div >
            {{-- div vacio --}}
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>