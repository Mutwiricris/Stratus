<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative Services &mdash; Ascend Stratus</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #020617;
            color: #f8fafc;
            font-sans antialiased;
        }

        .as-hero-bg {
            background: radial-gradient(circle at 50% 100%, rgba(20, 184, 166, 0.15), rgba(15, 23, 42, 1) 70%);
        }

        .as-glow-text {
            text-shadow: 0 0 30px rgba(20, 184, 166, 0.5);
        }
    </style>
</head>

<body class="as-hero-bg min-h-screen flex flex-col">

    @include('components.navigation')

    @php
    $services = [
    'logo-animation' => [
    'title' => 'Logo Animation',
    'icon' => '🎬',
    'subtitle' => 'Bring Your Brand to Life with Motion',
    'description' => 'A static logo is good, but an animated one tells a story. We create captivating logo animations
    that instantly grab attention and make your brand memorable. Perfect for video intros, presentations, and social
    media.',
    'features' => ['Custom 2D/3D Animation', 'Sound Design & VFX', 'Intro/Outro Sequences', 'Seamless Looping'],
    'tools' => [
    ['name' => 'After Effects', 'icon' => 'https://cdn.svglogos.dev/logos/adobe-after-effects.svg'],
    ['name' => 'Premiere Pro', 'icon' => 'https://cdn.svglogos.dev/logos/adobe-premiere.svg'],
    ]
    ],
    'grafix-design' => [
    'title' => 'Grafix & Design',
    'icon' => '🎨',
    'subtitle' => 'Visually Stunning Digital Artwork',
    'description' => 'From eye-catching social media graphics to high-end advertising materials, our graphic design
    service ensures your visual communication is top-tier. We blend creativity with strategy.',
    'features' => ['Social Media Kits', 'Marketing Collateral', 'Digital Illustration', 'Advertising Banners'],
    'tools' => [
    ['name' => 'Photoshop', 'icon' => 'https://cdn.svglogos.dev/logos/adobe-photoshop.svg'],
    ['name' => 'CorelDRAW', 'icon' =>
    'https://imgs.search.brave.com/MRFs6m9rhw5S9cvefTiaK0mus-0DoTUqfrJWM7vjir0/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9tZWRp/YS5vZmZpY2VkZXBv/dC5jb20vaW1hZ2Vz/L3RfbGFyZ2UsZl9h/dXRvL3Byb2R1Y3Rz/Lzg4MjIxMTgvMS5q/cGc'],
    ]
    ],
    'logo-design' => [
    'title' => 'Logo Design',
    'icon' => '✏️',
    'subtitle' => 'The Cornerstone of Your Brand Identity',
    'description' => 'Your logo is the face of your company. We design timeless, scalable, and meaningful logos that
    perfectly encapsulate your brand values and resonate with your target audience.',
    'features' => ['Brand Identity Concepts', 'Vector Scalability', 'Color Palette Selection', 'Typography Pairing'],
    'tools' => [
    ['name' => 'Illustrator', 'icon' => 'https://cdn.svglogos.dev/logos/adobe-illustrator.svg'],
    ['name' => 'CorelDRAW', 'icon' =>
    'https://imgs.search.brave.com/MRFs6m9rhw5S9cvefTiaK0mus-0DoTUqfrJWM7vjir0/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9tZWRp/YS5vZmZpY2VkZXBv/dC5jb20vaW1hZ2Vz/L3RfbGFyZ2UsZl9h/dXRvL3Byb2R1Y3Rz/Lzg4MjIxMTgvMS5q/cGc'],
    ]
    ],
    'video-after-effects' => [
    'title' => 'Video After Effects',
    'icon' => '🎞️',
    'subtitle' => 'High-End Visual Effects & Compositing',
    'description' => 'Take your footage to the next level. We specialize in motion tracking, green screen keying,
    particle effects, and advanced compositing to deliver cinematic visuals.',
    'features' => ['VFX Compositing', 'Motion Tracking', 'Color Grading', 'Title Sequences'],
    'tools' => [
    ['name' => 'After Effects', 'icon' => 'https://cdn.svglogos.dev/logos/adobe-after-effects.svg'],
    ]
    ],
    'video-editing' => [
    'title' => 'Video Editing',
    'icon' => '🎥',
    'subtitle' => 'Crafting Compelling Narratives',
    'description' => 'We turn raw footage into masterpieces. Whether it is a corporate documentary, commercial ad, or
    social reel, our precision editing ensures your story flows perfectly.',
    'features' => ['Multi-cam Editing', 'Audio Mixing', 'Cinematic Color Correction', 'Pacing & Rhythm'],
    'tools' => [
    ['name' => 'Premiere Pro', 'icon' => 'https://cdn.svglogos.dev/logos/adobe-premiere.svg'],
    ['name' => 'DaVinci Resolve', 'icon' =>
    'https://imgs.search.brave.com/SGndp4503Aazenjx84FAysRQpgvtoaAoCp3PdpUPYzw/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/cmlwcGxldHJhaW5p/bmcuY29tL3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDE4LzAyL2Rh/dmluY2ktcmVzb2x2/ZS0xNC1sb2dvLnBu/Zw'],
    ]
    ],
    ];

    $data = $services[$slug] ?? null;
    @endphp

    @if(!$data)
    <div class="flex-grow flex items-center justify-center pt-32 pb-20">
        <div class="text-center">
            <h1 class="text-6xl font-black text-teal-500 mb-4">404</h1>
            <p class="text-xl text-gray-400">Creative service not found.</p>
            <a href="{{ url('/') }}"
                class="mt-8 inline-block px-6 py-3 bg-teal-600 hover:bg-teal-500 text-white rounded-full transition-colors">Return
                Home</a>
        </div>
    </div>
    @else
    <main class="flex-grow pt-40 pb-20 px-6">
        <div class="max-w-5xl mx-auto">
            <div class="mb-12 text-center">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-slate-800/80 border border-teal-500/30 text-4xl mb-6 shadow-[0_0_30px_rgba(20,184,166,0.2)]">
                    {{ $data['icon'] }}
                </div>
                <h1 class="text-5xl md:text-7xl font-black mb-6 tracking-tight as-glow-text"
                    style="font-family: 'Playfair Display', serif;">
                    {{ $data['title'] }}
                </h1>
                <p class="text-2xl text-teal-300 font-light max-w-2xl mx-auto">
                    {{ $data['subtitle'] }}
                </p>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center bg-slate-800/40 p-10 md:p-16 rounded-3xl border border-white/5 backdrop-blur-xl">

                <div>
                    <h2 class="text-3xl font-bold mb-6 text-white border-b border-white/10 pb-4">The Service</h2>
                    <p class="text-lg text-gray-300 leading-relaxed mb-8">
                        {{ $data['description'] }}
                    </p>

                    <h3 class="text-xl font-semibold mb-4 text-teal-400">What's Included:</h3>
                    <ul class="space-y-3">
                        @foreach($data['features'] as $feature)
                        <li class="flex items-center gap-3 text-gray-300">
                            <svg class="w-5 h-5 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div
                    class="bg-slate-900/80 p-10 rounded-2xl border border-teal-500/20 text-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-teal-500/5 to-cyan-500/10 z-0"></div>
                    <div class="relative z-10">
                        <h3 class="text-sm uppercase tracking-widest text-teal-400 font-bold mb-8">Powered By Industry
                            Tools</h3>

                        <div class="flex flex-wrap justify-center gap-8">
                            @foreach($data['tools'] as $tool)
                            <div class="flex flex-col items-center gap-3 group">
                                <div
                                    class="w-20 h-20 rounded-2xl bg-slate-800 flex items-center justify-center p-4 border border-white/10 group-hover:border-teal-500/50 group-hover:shadow-[0_0_20px_rgba(20,184,166,0.3)] transition-all">
                                    <img src="{{ $tool['icon'] }}" alt="{{ $tool['name'] }}"
                                        class="w-full h-full object-contain">
                                </div>
                                <span
                                    class="text-sm font-medium text-gray-400 group-hover:text-white transition-colors">{{
                                    $tool['name'] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-20 text-center">
                <p class="text-xl text-gray-400 mb-8">Ready to elevate your brand's visual identity?</p>
                <a href="{{ url('/contact') }}"
                    class="inline-flex items-center justify-center px-10 py-5 bg-gradient-to-r from-teal-500 to-cyan-500 text-white rounded-full text-xl font-bold hover:from-teal-400 hover:to-cyan-400 shadow-[0_0_30px_rgba(20,184,166,0.3)] hover:shadow-[0_0_40px_rgba(20,184,166,0.5)] transition-all transform hover:-translate-y-1">
                    Start Your Project &nbsp; ↗
                </a>
            </div>
        </div>
    </main>
    @endif

    <script>
        // Simple script to handle mobile menu if navigation.blade.php relies on it
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const close = document.getElementById('mobile-menu-close');

            if (btn && menu) {
                btn.addEventListener('click', () => {
                    menu.style.visibility = 'visible';
                    menu.style.opacity = '1';
                    menu.style.transform = 'translateX(0)';
                });
            }
            if (close && menu) {
                close.addEventListener('click', () => {
                    menu.style.opacity = '0';
                    menu.style.transform = 'translateX(100%)';
                    setTimeout(() => menu.style.visibility = 'hidden', 300);
                });
            }
        });
    </script>
</body>

</html>