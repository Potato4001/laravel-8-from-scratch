@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48">
            <h3 class="text-lg font-semibold border-b mr-10">Links</h3>
            <ul>
                <li class="border-r mr-10">
                    <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}">Dashboard</a>
                </li>

                <li class="border-r mr-10">
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a>
                </li>
            </ul>
        </aside>

    <main class="flex-1">
        <x-panel>
            {{ $slot }}
        </x-panel>
    </main>
    </div>
</section>