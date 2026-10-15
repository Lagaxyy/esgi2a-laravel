<x-layout title="À propos">
    <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">À propos</p>
    <h1 class="mt-2 text-4xl font-bold tracking-tight text-stone-900">Qui suis-je ?</h1>

    <div class="mt-10 grid gap-12 md:grid-cols-[3fr_2fr]">
        <div class="space-y-5 text-lg leading-relaxed text-stone-600">
            <p>
                Étudiant·e en 2e année à l'ESGI, je me spécialise dans le développement web.
                Ce portfolio est construit avec <span class="font-semibold text-stone-900">Laravel</span>, séance après
                séance.
            </p>
            <p>
                J'aime comprendre comment les choses fonctionnent : du HTML affiché dans le navigateur
                jusqu'aux données enregistrées en base.
            </p>
            <p>
                En dehors du code : [vos passions, un sport, un projet personnel…].
            </p>
        </div>

        <!-- Parcours -->
        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
            <h2 class="font-semibold text-stone-900">Mon parcours</h2>
            <ol class="mt-6 space-y-6 border-l-2 border-indigo-100 pl-6">
                <li>
                    <p class="text-sm font-medium text-indigo-600">2025 · aujourd'hui</p>
                    <p class="font-medium text-stone-900">Bachelor développement web, ESGI</p>
                </li>
                <li>
                    <p class="text-sm font-medium text-indigo-600">2025</p>
                    <p class="font-medium text-stone-900">Baccalauréat [spécialités]</p>
                </li>
                <li>
                    <p class="text-sm font-medium text-indigo-600">[année]</p>
                    <p class="font-medium text-stone-900">[Stage, projet, job d'été…]</p>
                </li>
            </ol>
        </div>
    </div>

    <section class="mt-16">
        <h2 class="text-2xl font-bold tracking-tight text-stone-900">Questions fréquentes</h2>

        <div class="mt-6 divide-y divide-stone-200 rounded-2xl bg-white shadow-sm ring-1 ring-stone-200">
            <div x-data="{
                open: false,
                init() {
                    console.log('hello world, i am ', this.open)
                }
            }">
                <button type="button"
                    class="flex w-full items-center justify-between px-6 py-4 text-left font-medium text-stone-900"
                    x-on:click = "open = !open">
                    Pourquoi Laravel ?
                    <span class="text-indigo-600 transition-all">+</span>
                </button>
                <div class="px-6 pb-4 text-stone-600" x-show="open" x-collapse x-cloak>
                    Parce qu'il fournit tout le nécessaire : routes, vues, base de données, sécurité.
                </div>
            </div>
            <div>
                <button type="button"
                    class="flex w-full items-center justify-between px-6 py-4 text-left font-medium text-stone-900">
                    Quelles technologies utilisez-vous ?
                    <span class="text-indigo-600">+</span>
                </button>
                <div class="px-6 pb-4 text-stone-600">
                    Laravel pour le back-end, Tailwind CSS pour le style, Alpine.js pour l'interactivité.
                </div>
            </div>
            <div>
                <button type="button"
                    class="flex w-full items-center justify-between px-6 py-4 text-left font-medium text-stone-900">
                    Êtes-vous disponible pour un stage ?
                    <span class="text-indigo-600">+</span>
                </button>
                <div class="px-6 pb-4 text-stone-600">
                    Oui, contactez-moi via la page Contact.
                </div>
            </div>
        </div>
    </section>
</x-layout>
