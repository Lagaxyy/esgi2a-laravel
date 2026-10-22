{{-- Attend : $project, un projet (id, title, description, status, et en option technologies). --}}
<x-layout :title="$project['title'] . ' · Portfolio'">
    <a href="{{ route('projects.index') }}" class="text-sm font-medium text-stone-500 hover:text-indigo-600">← Tous les projets</a>

    <div class="mt-6 flex flex-wrap items-center gap-4">
        <h1 class="text-4xl font-bold tracking-tight text-stone-900">{{ $project['title'] }}</h1>
        <x-status-badge :status="$project['status']" />
    </div>

    <div class="mt-10 grid gap-12 md:grid-cols-[3fr_2fr]">
        <div class="space-y-5 text-lg leading-relaxed text-stone-600">
            <p>{{ $project['description'] }}</p>
        </div>

        @isset($project['technologies'])
            <aside class="space-y-6">
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
                    <h2 class="font-semibold text-stone-900">Technologies</h2>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($project['technologies'] as $technology)
                            <span class="rounded-full bg-stone-100 px-3 py-1 text-sm font-medium text-stone-700">{{ $technology }}</span>
                        @endforeach
                    </div>
                </div>
            </aside>
        @endisset
    </div>
</x-layout>
