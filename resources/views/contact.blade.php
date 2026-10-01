<!-- Version BRUTE : du HTML pur, sans aucune syntaxe Blade.
     Tout est écrit en dur et recopié dans chaque page (head, menu, pied de page). -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact · Portfolio</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet">

    <!-- Tailwind CSS chargé depuis un CDN (pratique pour débuter, pas pour la production) -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme { --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif; }
    </style>
</head>
<body class="flex min-h-screen flex-col bg-stone-50 font-sans text-stone-800 antialiased">
    <header class="sticky top-0 z-10 border-b border-stone-200 bg-white/80 backdrop-blur">
        <nav class="mx-auto flex max-w-5xl flex-wrap items-center justify-between gap-4 px-6 py-4">
            <a href="/" class="flex items-center gap-3">
                <span class="flex size-9 items-center justify-center rounded-lg bg-indigo-600 text-sm font-bold text-white">P</span>
                <span class="text-lg font-semibold tracking-tight text-stone-900">Portfolio</span>
            </a>

            <div class="flex gap-1">
                <a href="/" class="rounded-full px-4 py-2 text-sm font-medium transition-colors text-stone-600 hover:bg-stone-100 hover:text-stone-900">Accueil</a>
                <a href="/about" class="rounded-full px-4 py-2 text-sm font-medium transition-colors text-stone-600 hover:bg-stone-100 hover:text-stone-900">À propos</a>
                <a href="/contact" class="rounded-full px-4 py-2 text-sm font-medium transition-colors bg-indigo-50 text-indigo-700">Contact</a>
            </div>
        </nav>
    </header>

    <main class="mx-auto w-full max-w-5xl flex-1 px-6 py-12 sm:py-16">
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
    </main>

    <footer class="border-t border-stone-200 bg-white">
        <div class="mx-auto flex max-w-5xl flex-wrap items-center justify-between gap-4 px-6 py-6 text-sm text-stone-500">
            <p>&copy; 2026 · Portfolio réalisé avec Laravel</p>
            <div class="flex gap-4">
                <a href="https://github.com/" class="hover:text-indigo-600">GitHub</a>
                <a href="https://www.linkedin.com/" class="hover:text-indigo-600">LinkedIn</a>
            </div>
        </div>
    </footer>
</body>
</html>
