<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'PartyFinder')</title>

    {{-- Bootstrap 5 (CDN) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons (optional but helpful for UI icons) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root{
            --pf-bg: #0b0b14;
            --pf-surface: rgba(20, 20, 33, .72);
            --pf-surface-2: rgba(28, 28, 45, .72);
            --pf-border: rgba(255,255,255,.12);
            --pf-text-dim: rgba(255,255,255,.75);
            --pf-glow-pink: rgba(255, 85, 235, .55);
            --pf-glow-purple: rgba(152, 95, 255, .55);
            --pf-glow-cyan: rgba(0, 208, 255, .45);
        }

        body {
            background:
                radial-gradient(1200px 700px at 20% 15%, rgba(152,95,255,.22), transparent 55%),
                radial-gradient(900px 600px at 85% 10%, rgba(255,85,235,.18), transparent 55%),
                radial-gradient(800px 600px at 75% 85%, rgba(0,208,255,.12), transparent 55%),
                linear-gradient(180deg, #070711 0%, #0b0b14 40%, #070711 100%);
            color: #fff;
            min-height: 100vh;
        }

        /* Glass surface */
        .pf-glass {
            background: var(--pf-surface);
            border: 1px solid var(--pf-border);
            box-shadow:
                0 18px 60px rgba(0,0,0,.45),
                0 0 0 1px rgba(255,255,255,.03) inset;
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-radius: 18px;
        }

        .pf-glass-2 {
            background: var(--pf-surface-2);
            border: 1px solid var(--pf-border);
            border-radius: 18px;
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }

        .pf-brand {
            font-weight: 800;
            letter-spacing: .2px;
            background: linear-gradient(90deg, #ff63f6 0%, #b680ff 45%, #3fe5ff 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 0 18px rgba(255, 99, 246, .25);
        }

        .pf-input {
            background: rgba(0,0,0,.35);
            border: 1px solid rgba(255,255,255,.12);
            color: #fff;
        }
        .pf-input::placeholder { color: rgba(255,255,255,.55); }
        .pf-input:focus {
            border-color: rgba(178,128,255,.55);
            box-shadow: 0 0 0 .25rem rgba(178,128,255,.18);
            background: rgba(0,0,0,.35);
            color: #fff;
        }

        .pf-btn-gradient {
            border: 0;
            color: #0b0b14;
            font-weight: 700;
            background: linear-gradient(90deg, #ff63f6 0%, #b680ff 50%, #3fe5ff 100%);
            box-shadow:
                0 10px 30px rgba(152,95,255,.25),
                0 0 0 1px rgba(255,255,255,.10) inset;
        }
        .pf-btn-gradient:hover { filter: brightness(1.05); }

        .pf-chip {
            font-size: .72rem;
            letter-spacing: .3px;
            padding: .2rem .55rem;
            border-radius: 999px;
            border: 1px solid rgba(255,255,255,.14);
            background: rgba(0,0,0,.25);
            color: rgba(255,255,255,.85);
        }

        .pf-card {
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,.12);
            background: rgba(16, 16, 28, .75);
            box-shadow: 0 18px 45px rgba(0,0,0,.35);
        }
        .pf-card .card-img-top {
            height: 170px;
            object-fit: cover;
            filter: saturate(1.1) contrast(1.05);
        }
        .pf-card:hover {
            transform: translateY(-2px);
            transition: .18s ease;
            box-shadow:
                0 24px 60px rgba(0,0,0,.48),
                0 0 0 1px rgba(255,255,255,.08) inset;
        }

        .pf-muted { color: var(--pf-text-dim); }

        .pf-panel-title {
            font-weight: 700;
            font-size: .95rem;
        }

        .pf-divider {
            height: 1px;
            background: rgba(255,255,255,.10);
            margin: 1rem 0;
        }

        footer a { color: rgba(255,255,255,.7); text-decoration: none; }
        footer a:hover { color: #fff; text-decoration: underline; }

        /* Make the central "hero search" feel like the design */
        .pf-hero {
            position: relative;
            overflow: hidden;
            border-radius: 22px;
            border: 1px solid rgba(255,255,255,.14);
            background:
                linear-gradient(180deg, rgba(0,0,0,.30) 0%, rgba(0,0,0,.55) 100%),
                url('https://images.unsplash.com/photo-1524169358666-79f22534bc6e?auto=format&fit=crop&w=1600&q=70');
            background-size: cover;
            background-position: center;
            box-shadow: 0 30px 90px rgba(0,0,0,.45);
        }
        .pf-hero::after{
            content:"";
            position:absolute; inset:-2px;
            background:
                radial-gradient(700px 280px at 20% 15%, rgba(255,99,246,.20), transparent 55%),
                radial-gradient(700px 280px at 80% 15%, rgba(178,128,255,.20), transparent 55%);
            pointer-events:none;
        }
        .pf-hero-inner { position: relative; z-index: 1; }

        /* Mobile spacing tweaks */
        @media (max-width: 991.98px) {
            .pf-card .card-img-top { height: 160px; }
        }
    </style>

    @stack('styles')
</head>
<body>
    {{-- Navbar --}}
    @includeIf('partials.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @includeIf('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>