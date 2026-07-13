<!DOCTYPE html>
<html lang="pt-BR" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LV Lumen Project</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                        },
                        accent: {
                            400: '#34d399',
                            500: '#10b981',
                        }
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #0f172a;
            background-image: radial-gradient(circle at 15% 50%, rgba(14, 165, 233, 0.08), transparent 25%), 
                              radial-gradient(circle at 85% 30%, rgba(16, 185, 129, 0.08), transparent 25%);
        }
        .glass-panel {
            background: rgba(30, 41, 59, 0.4);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</head>
<body class="text-slate-200 min-h-screen flex flex-col items-center justify-center relative overflow-hidden selection:bg-brand-500 selection:text-white">

    <!-- Animated Background Blobs -->
    <div class="absolute top-0 -left-4 w-72 h-72 bg-brand-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
    <div class="absolute top-0 -right-4 w-72 h-72 bg-accent-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>

    <div class="relative z-10 max-w-5xl w-full px-6 py-12 mx-auto">
        
        <!-- Main Glass Container -->
        <div class="glass-panel rounded-3xl p-8 md:p-16 text-center transform transition-all duration-500 hover:border-slate-600/50">
            
            <!-- Logo / Icon -->
            <div class="mb-10 flex justify-center">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-brand-500 to-accent-500 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative h-24 w-24 bg-slate-800 ring-1 ring-white/10 rounded-3xl flex items-center justify-center transform group-hover:scale-105 transition-all duration-300">
                        <svg class="w-12 h-12 text-brand-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Title -->
            <h1 class="text-5xl md:text-7xl font-black tracking-tighter mb-6 drop-shadow-sm">
                <span class="text-white">LV</span> 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 via-brand-500 to-accent-400">Lumen</span>
            </h1>

            <!-- Description -->
            <p class="text-lg md:text-2xl text-slate-400 mb-12 max-w-2xl mx-auto leading-relaxed font-light">
                A estrutura perfeita para a sua próxima grande ideia. Desempenho extremo do Lumen unido à elegância do Tailwind CSS.
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="https://lumen.laravel.com/docs" target="_blank" rel="noopener noreferrer" class="group relative px-8 py-4 w-full sm:w-auto rounded-full bg-white text-slate-900 font-bold text-lg transition-all duration-300 hover:scale-105 hover:shadow-[0_0_40px_-10px_rgba(255,255,255,0.7)] flex items-center justify-center gap-2">
                    <span>Ler Documentação</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
                
                <a href="https://tailwindcss.com/docs" target="_blank" rel="noopener noreferrer" class="group px-8 py-4 w-full sm:w-auto rounded-full bg-slate-800/50 hover:bg-slate-700/50 text-white font-medium text-lg transition-all duration-300 border border-slate-600/50 hover:border-slate-400 backdrop-blur-sm flex items-center justify-center gap-2">
                    <span>Estilizar com Tailwind</span>
                </a>
            </div>

            <!-- Features Grid -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                <div class="p-6 rounded-2xl bg-slate-800/30 border border-white/5 hover:bg-slate-800/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="h-10 w-10 rounded-lg bg-brand-500/20 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-2">Ultra Rápido</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Micro-framework projetado para a máxima velocidade e eficiência para suas APIs e web apps.</p>
                </div>
                <div class="p-6 rounded-2xl bg-slate-800/30 border border-white/5 hover:bg-slate-800/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="h-10 w-10 rounded-lg bg-accent-500/20 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-2">Design Moderno</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Design rico e dinâmico habilitado pelo Tailwind CSS embutido. Pronto para impressionar.</p>
                </div>
                <div class="p-6 rounded-2xl bg-slate-800/30 border border-white/5 hover:bg-slate-800/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="h-10 w-10 rounded-lg bg-purple-500/20 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-2">Pronto para APIs</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Construa APIs RESTful robustas com a simplicidade e o ecossistema familiar do Laravel.</p>
                </div>
            </div>

        </div>
        
        <!-- Footer info -->
        <div class="mt-8 text-center text-slate-500 text-sm font-medium">
            <p>Framework versão: <span class="text-slate-400">{{ $app->version() }}</span></p>
        </div>
    </div>

</body>
</html>
