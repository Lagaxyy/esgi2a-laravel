<x-layout title="Accueil · Portfolio">
    <!-- En-tête de la page -->
    <section class="grid items-center gap-10 md:grid-cols-[1fr_auto]">
        <div>
            @if ($available ?? false)
                <p class="mb-6 inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1 text-sm font-medium text-emerald-700 ring-1 ring-emerald-200">
                    <span class="size-2 rounded-full bg-emerald-500"></span>
                    Disponible pour une alternance
                </p>
            @endif

            <h1 class="text-4xl font-bold tracking-tight text-stone-900 sm:text-5xl">
                Bonjour, je suis <span class="text-indigo-600">{{ $name }}</span>
            </h1>
            <p class="mt-6 max-w-2xl text-lg leading-relaxed text-stone-600">
                Étudiant·e en développement web à l'ESGI. Je conçois des sites et des applications avec PHP et Laravel,
                et j'aime les interfaces simples et soignées.
            </p>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="/contact" class="rounded-lg bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                    Me contacter
                </a>
                <a href="/about" class="rounded-lg bg-white px-5 py-3 text-sm font-semibold text-stone-900 shadow-sm ring-1 ring-stone-300 hover:bg-stone-50">
                    En savoir plus
                </a>
            </div>
        </div>

        <!-- Initiales dans un grand cercle (remplaçable par une photo) -->
        <div class="hidden size-48 items-center justify-center rounded-full bg-linear-to-br from-indigo-500 to-sky-400 text-6xl font-bold text-white shadow-lg md:flex">
            A
        </div>
    </section>

    <!-- Compétences -->
    <section class="mt-20">
        <h2 class="text-2xl font-semibold tracking-tight text-stone-900">Mes compétences</h2>
        <ul class="mt-6 flex flex-wrap gap-3">
            @foreach ($competences as $competence)
                <li class="rounded-lg bg-white px-4 py-2 text-sm font-medium text-stone-700 shadow-sm ring-1 ring-stone-200">
                    {{ $competence }}
                </li>
            @endforeach
        </ul>
    </section>

    <!-- Ce que je fais -->
    <section class="mt-20 grid gap-6 sm:grid-cols-3">
        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
            <p class="text-sm font-semibold text-indigo-600">01</p>
            <h3 class="mt-2 font-semibold text-stone-900">Sites vitrines</h3>
            <p class="mt-2 text-sm leading-relaxed text-stone-600">Des pages claires, rapides et adaptées au mobile.</p>
        </div>
        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
            <p class="text-sm font-semibold text-indigo-600">02</p>
            <h3 class="mt-2 font-semibold text-stone-900">Applications web</h3>
            <p class="mt-2 text-sm leading-relaxed text-stone-600">Des outils sur mesure avec une base de données.</p>
        </div>
        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
            <p class="text-sm font-semibold text-indigo-600">03</p>
            <h3 class="mt-2 font-semibold text-stone-900">Code versionné</h3>
            <p class="mt-2 text-sm leading-relaxed text-stone-600">Chaque projet suivi avec Git et publié sur GitHub.</p>
        </div>
    </section>
</x-layout>