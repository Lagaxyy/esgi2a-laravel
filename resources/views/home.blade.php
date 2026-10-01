<!-- Version BRUTE : du HTML pur, sans aucune syntaxe Blade.
     Tout est écrit en dur et recopié dans chaque page (head, menu, pied de page). -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil · Portfolio</title>

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
                <a href="/" class="rounded-full px-4 py-2 text-sm font-medium transition-colors bg-indigo-50 text-indigo-700">Accueil</a>
                <a href="/about" class="rounded-full px-4 py-2 text-sm font-medium transition-colors text-stone-600 hover:bg-stone-100 hover:text-stone-900">À propos</a>
                <a href="/contact" class="rounded-full px-4 py-2 text-sm font-medium transition-colors text-stone-600 hover:bg-stone-100 hover:text-stone-900">Contact</a>
            </div>
        </nav>
    </header>

    <main class="mx-auto w-full max-w-5xl flex-1 px-6 py-12 sm:py-16">
        <!-- En-tête de la page -->
        <section class="grid items-center gap-10 md:grid-cols-[1fr_auto]">
            <div>
                <p class="mb-6 inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1 text-sm font-medium text-emerald-700 ring-1 ring-emerald-200">
                    <span class="size-2 rounded-full bg-emerald-500"></span>
                    Disponible pour une alternance
                </p>

                <h1 class="text-4xl font-bold tracking-tight text-stone-900 sm:text-5xl">
                    Bonjour, je suis <span class="text-indigo-600">Ada Lovelace</span>
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
                <li class="rounded-lg bg-white px-4 py-2 text-sm font-medium text-stone-700 shadow-sm ring-1 ring-stone-200">
                    HTML
                </li>
                <li class="rounded-lg bg-white px-4 py-2 text-sm font-medium text-stone-700 shadow-sm ring-1 ring-stone-200">
                    CSS
                </li>
                <li class="rounded-lg bg-white px-4 py-2 text-sm font-medium text-stone-700 shadow-sm ring-1 ring-stone-200">
                    PHP
                </li>
                <li class="rounded-lg bg-white px-4 py-2 text-sm font-medium text-stone-700 shadow-sm ring-1 ring-stone-200">
                    Laravel
                </li>
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
