<!-- Version BRUTE : du HTML pur, sans aucune syntaxe Blade.
     Tout est écrit en dur et recopié dans chaque page (head, menu, pied de page). -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>À propos · Portfolio</title>

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
                <a href="/about" class="rounded-full px-4 py-2 text-sm font-medium transition-colors bg-indigo-50 text-indigo-700">À propos</a>
                <a href="/contact" class="rounded-full px-4 py-2 text-sm font-medium transition-colors text-stone-600 hover:bg-stone-100 hover:text-stone-900">Contact</a>
            </div>
        </nav>
    </header>

    <main class="mx-auto w-full max-w-5xl flex-1 px-6 py-12 sm:py-16">
        <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">À propos</p>
        <h1 class="mt-2 text-4xl font-bold tracking-tight text-stone-900">Qui suis-je ?</h1>

        <div class="mt-10 grid gap-12 md:grid-cols-[3fr_2fr]">
            <div class="space-y-5 text-lg leading-relaxed text-stone-600">
                <p>
                    Étudiant·e en 2e année à l'ESGI, je me spécialise dans le développement web.
                    Ce portfolio est construit avec <span class="font-semibold text-stone-900">Laravel</span>, séance après séance.
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
