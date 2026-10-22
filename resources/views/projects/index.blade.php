{{-- Attend : $projects, un tableau de projets (id, title, description, status). --}}
<x-layout title="Projets · Portfolio">
    <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">Projets</p>
    <h1 class="mt-2 text-4xl font-bold tracking-tight text-stone-900">Mes projets</h1>
    <p class="mt-4 max-w-2xl text-lg text-stone-600">
        Les projets réalisés pendant ma formation, en cours ou terminés.
    </p>

    <div class="mt-10 grid gap-6 md:grid-cols-2">
        @forelse ($projects as $project)
            <article class="flex flex-col rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
                <h2 class="text-lg font-semibold text-stone-900">{{ $project['title'] }}</h2>
                <p class="mt-2 flex-1 leading-relaxed text-stone-600">{{ $project['description'] }}</p>
                <div class="mt-6 flex items-center justify-between border-t border-stone-100 pt-4">
                    <x-status-badge :status="$project['status']" />
                    <a href="{{ route('projects.show', $project['id']) }}" class="rounded-lg px-3 py-2 text-sm font-semibold text-indigo-600 hover:bg-indigo-50">
                        Voir le projet →
                    </a>
                </div>
            </article>
        @empty
            <div class="rounded-2xl border border-dashed border-stone-300 bg-white p-10 text-center text-stone-500 md:col-span-2">
                Aucun projet pour le moment.
            </div>
        @endforelse
    </div>
</x-layout>
