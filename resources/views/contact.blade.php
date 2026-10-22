<x-layout title="Contact · Portfolio">
    <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">Contact</p>
    <h1 class="mt-2 text-4xl font-bold tracking-tight text-stone-900">Travaillons ensemble</h1>
    <p class="mt-4 max-w-2xl text-lg text-stone-600">
        Une question, une proposition d'alternance ou de projet ? Écrivez-moi.
    </p>

    <div class="mt-10 grid gap-8 md:grid-cols-[2fr_3fr]">
        <!-- Coordonnées -->
        <div class="space-y-4">
            <a href="mailto:contact@exemple.com" class="block rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200 hover:ring-indigo-300">
                <p class="text-sm font-medium text-stone-500">E-mail</p>
                <p class="mt-1 font-semibold text-indigo-600">contact@exemple.com</p>
            </a>
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
                <p class="text-sm font-medium text-stone-500">Localisation</p>
                <p class="mt-1 font-semibold text-stone-900">Paris, France</p>
            </div>
        </div>

        <!-- Formulaire : uniquement visuel pour l'instant, il sera branché en séance 7 -->
        <form action="#" class="space-y-5 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
            <div>
                <label for="name" class="block text-sm font-medium text-stone-700">Nom</label>
                <input id="name" type="text" class="mt-1 w-full rounded-lg border border-stone-300 px-3 py-2 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-stone-700">E-mail</label>
                <input id="email" type="email" class="mt-1 w-full rounded-lg border border-stone-300 px-3 py-2 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-stone-700">Message</label>
                <textarea id="message" rows="4" class="mt-1 w-full rounded-lg border border-stone-300 px-3 py-2 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200"></textarea>
            </div>
            <button type="button" class="w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                Envoyer
            </button>
        </form>
    </div>
</x-layout>
