<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batas Desa | Kopi di Ujung Jalan Pegunungan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-headline {
            font-family: 'Playfair Display', serif;
        }

        .font-body {
            font-family: 'Inter', sans-serif;
        }

        .noise-texture {
            background-image: url("/image/p6.png");
            opacity: 0.03;
        }
    </style>
</head>

<body x-data="{ mobileMenu: false, activeSection: 'heritage' }" class="font-body bg-[#fbf9f5] text-[#1b1c1a] antialiased selection:bg-[#a43c23]/30">

    <nav class="fixed top-0 w-full z-50 bg-[#fbf9f5]/90 backdrop-blur-md transition-all duration-300 ease-in-out border-b border-[#1b1c1a]/10" :class="{ 'shadow-lg': window.scrollY > 50 }">
        <div class="flex justify-between items-center h-20 px-6 md:px-12 max-w-7xl mx-auto">

            <a href="#heritage" @click="activeSection = 'heritage'" class="font-headline text-2xl font-bold text-[#0e0402] flex items-center gap-2 tracking-wide">
                <i class="fa-solid fa-mountain text-[#a43c23] text-xl"></i> Batas Desa
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a class="font-medium transition-colors text-sm lg:text-base pb-1"
                    :class="activeSection === 'heritage' ? 'text-[#a43c23] border-b-2 border-[#a43c23] font-bold' : 'text-[#4f4442] hover:text-[#a43c23]'" href="#heritage"
                    @click="activeSection = 'heritage'">Our Heritage</a>
                <a class="font-medium transition-colors text-sm lg:text-base pb-1"
                    :class="activeSection === 'menu' ? 'text-[#a43c23] border-b-2 border-[#a43c23] font-bold' : 'text-[#4f4442] hover:text-[#a43c23]'" href="#menu"
                    @click="activeSection = 'menu'">Coffee Menu</a>
                <a class="font-medium transition-colors text-sm lg:text-base pb-1"
                    :class="activeSection === 'story' ? 'text-[#a43c23] border-b-2 border-[#a43c23] font-bold' : 'text-[#4f4442] hover:text-[#a43c23]'" href="#story"
                    @click="activeSection = 'story'">Village Story</a>
                <a class="font-medium transition-colors text-sm lg:text-base pb-1"
                    :class="activeSection === 'gallery' ? 'text-[#a43c23] border-b-2 border-[#a43c23] font-bold' : 'text-[#4f4442] hover:text-[#a43c23]'" href="#gallery"
                    @click="activeSection = 'gallery'">Gallery</a>
                <a class="font-medium transition-colors text-sm lg:text-base pb-1"
                    :class="activeSection === 'visit' ? 'text-[#a43c23] border-b-2 border-[#a43c23] font-bold' : 'text-[#4f4442] hover:text-[#a43c23]'" href="#visit"
                    @click="activeSection = 'visit'">Visit Us</a>
            </div>

            <div class="hidden md:flex items-center gap-4 text-[#4f4442]">
                <a href="https://instagram.com" target="_blank" class="hover:text-[#a43c23] transition-colors"><i class="fa-brands fa-instagram text-lg"></i></a>
                <a href="https://maps.google.com" target="_blank" class="hover:text-[#a43c23] transition-colors"><i class="fa-solid fa-map-location-dot text-lg"></i></a>
            </div>

            <div class="flex items-center md:hidden">
                <button @click="mobileMenu = !mobileMenu" class="text-[#0e0402] focus:outline-none p-2">
                    <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                </button>
            </div>
        </div>

        <div x-show="mobileMenu" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4"
            @click.outside="mobileMenu = false" class="md:hidden bg-[#fbf9f5] border-b border-[#1b1c1a]/10 px-6 py-4 space-y-2">
            <a class="block py-2 text-sm font-semibold" :class="activeSection === 'heritage' ? 'text-[#a43c23]' : 'text-[#4f4442]'" href="#heritage"
                @click="activeSection = 'heritage'; mobileMenu = false">Our Heritage</a>
            <a class="block py-2 text-sm font-semibold" :class="activeSection === 'menu' ? 'text-[#a43c23]' : 'text-[#4f4442]'" href="#menu"
                @click="activeSection = 'menu'; mobileMenu = false">Coffee Menu</a>
            <a class="block py-2 text-sm font-semibold" :class="activeSection === 'story' ? 'text-[#a43c23]' : 'text-[#4f4442]'" href="#story"
                @click="activeSection = 'story'; mobileMenu = false">Village Story</a>
            <a class="block py-2 text-sm font-semibold" :class="activeSection === 'gallery' ? 'text-[#a43c23]' : 'text-[#4f4442]'" href="#gallery"
                @click="activeSection = 'gallery'; mobileMenu = false">Gallery</a>
            <a class="block py-2 text-sm font-semibold" :class="activeSection === 'visit' ? 'text-[#a43c23]' : 'text-[#4f4442]'" href="#visit"
                @click="activeSection = 'visit'; mobileMenu = false">Visit Us</a>
        </div>
    </nav>

    <main class="pt-20">
        <section id="heritage" class="relative min-h-[90vh] flex items-center overflow-hidden bg-[#f5f3ef]">
            <div class="noise-texture absolute inset-0 pointer-events-none"></div>
            <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center w-full py-12 lg:py-24">
                <div class="z-10 order-2 lg:order-1">
                    <span class="text-xs font-bold text-[#a43c23] tracking-widest block mb-3 uppercase">
                        <i class="fa-solid fa-compass-drafting mr-1"></i> The Mountain Roadside Heritage
                    </span>
                    <h1 class="font-headline text-4xl md:text-5xl lg:text-6xl text-[#0e0402] mb-6 leading-tight font-bold">
                        Batas Desa: Tempat Hangat di <span class="text-[#a43c23] italic">Ujung Jalan</span> Pegunungan
                    </h1>
                    <p class="text-base md:text-lg text-[#4f4442] mb-8 max-w-lg leading-relaxed">
                        Sebuah oase di tengah kabut pegunungan, tempat di mana aroma kopi robusta asli berpadu dengan sejuknya udara dataran tinggi. Tempat beristirahat sejenak dari panjangnya
                        perjalanan.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#menu" @click="activeSection = 'menu'"
                            class="inline-flex justify-center items-center bg-[#0e0402] text-white px-8 py-4 rounded-lg font-bold text-sm hover:scale-[1.02] transition-transform shadow-md gap-2">
                            <i class="fa-solid fa-mug-hot"></i> Jelajahi Menu
                        </a>
                        <a href="#visit" @click="activeSection = 'visit'"
                            class="inline-flex justify-center items-center border border-[#817471] text-[#0e0402] px-8 py-4 rounded-lg font-bold text-sm hover:bg-[#eae8e4] transition-colors gap-2">
                            <i class="fa-solid fa-route"></i> Petunjuk Lokasi
                        </a>
                    </div>
                </div>
                <div class="relative h-87.5 sm:h-112.5 lg:h-150 w-full rounded-2xl overflow-hidden shadow-2xl order-1 lg:order-2">
                    <img class="w-full h-full object-cover"
                        src="{{ asset('image/hero.png') }}"
                        alt="Batas Desa View" />
                    <div class="absolute inset-0 ring-1 ring-inset ring-black/10 rounded-2xl"></div>
                </div>
            </div>
        </section>

        <section class="py-16 md:py-24 bg-[#fbf9f5] relative">
            <div class="max-w-7xl mx-auto px-6 md:px-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl border border-[#d3c3c0]/30 shadow-sm hover:shadow-md transition-all group">
                        <div class="w-12 h-12 rounded-lg bg-[#fd7e5f]/20 flex items-center justify-center text-[#a43c23] mb-6 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-seedling text-xl"></i>
                        </div>
                        <h3 class="font-headline text-xl font-bold text-[#0e0402] mb-3">Kopi Khas Pegunungan</h3>
                        <p class="text-sm text-[#4f4442] leading-relaxed">Biji kopi pilihan yang dipanen langsung dari perkebunan lereng gunung sekitar, disangrai dengan presisi tinggi oleh warga
                            lokal.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl border border-[#d3c3c0]/30 shadow-sm hover:shadow-md transition-all group">
                        <div class="w-12 h-12 rounded-lg bg-[#fd7e5f]/20 flex items-center justify-center text-[#a43c23] mb-6 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-users-rays text-xl"></i>
                        </div>
                        <h3 class="font-headline text-xl font-bold text-[#0e0402] mb-3">Ruang Kumpul Luas</h3>
                        <p class="text-sm text-[#4f4442] leading-relaxed">Area semi-outdoor yang lapang untuk berbagi cerita bersama teman, keluarga, maupun tempat singgah komunitas motor dan sepeda.
                        </p>
                    </div>
                    <div class="bg-white p-8 rounded-xl border border-[#d3c3c0]/30 shadow-sm hover:shadow-md transition-all group">
                        <div class="w-12 h-12 rounded-lg bg-[#fd7e5f]/20 flex items-center justify-center text-[#a43c23] mb-6 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-mountain-sun text-xl"></i>
                        </div>
                        <h3 class="font-headline text-xl font-bold text-[#0e0402] mb-3">Suasana Pinggir Jalan</h3>
                        <p class="text-sm text-[#4f4442] leading-relaxed">Terletak tepat di tikungan ikonik jalur wisata, memberikan akses mudah, udara bersih, dan pemandangan lembah yang dramatis.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="menu" class="py-16 md:py-24 bg-[#2b1b17] relative overflow-hidden">
            <div class="absolute inset-0 noise-texture"></div>
            <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">

                <!-- Highlight Perpaduan Sempurna -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-20">
                    <div class="lg:col-span-7 order-2 lg:order-1">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-[#e4e2de]/10">
                            <img class="w-full h-auto object-cover"
                                src="{{ asset('image/menu.png') }}"
                                alt="Pisang Goreng Paket" />
                        </div>
                    </div>
                    <div class="lg:col-span-5 order-1 lg:order-2">
                        <span class="text-xs font-bold text-[#fd7e5f] tracking-widest block mb-3 uppercase">
                            <i class="fa-solid fa-star mr-1"></i> Perpaduan Sempurna
                        </span>
                        <h2 class="font-headline text-3xl md:text-4xl text-white font-bold mb-4">Pisang Goreng & Kopi Susu Aren</h2>
                        <p class="text-base text-[#9a817b] mb-8 leading-relaxed">
                            Pasangan abadi untuk menemani kabut sore. Pisang pilihan yang digoreng krispi dengan karamelisasi gula aren cair, disandingkan dengan kopi susu lembut khas racikan Batas
                            Desa.
                        </p>
                        <ul class="space-y-4 text-[#9a817b] text-sm border-t border-[#9a817b]/20 pt-6">
                            <li class="flex items-center gap-3"><i class="fa-regular fa-circle-check text-[#fd7e5f] text-lg"></i> Pisang Tanduk Organik</li>
                            <li class="flex items-center gap-3"><i class="fa-regular fa-circle-check text-[#fd7e5f] text-lg"></i> Kopi Susu Khas Lereng Gunung</li>
                            <li class="flex items-center gap-3"><i class="fa-regular fa-circle-check text-[#fd7e5f] text-lg"></i> Gula Aren Murni Petani Lokal</li>
                        </ul>
                    </div>
                </div>

                <!-- DAFTAR MENU LENGKAP -->
                <div class="border-t border-[#9a817b]/20 pt-16">
                    <div class="text-center mb-16">
                        <span class="text-xs font-bold text-[#fd7e5f] tracking-widest block mb-2 uppercase">Daftar Rasa</span>
                        <h3 class="font-headline text-3xl text-white font-bold">Menu Pilihan Pengendara</h3>
                        <p class="text-sm text-[#9a817b] mt-2 max-w-md mx-auto">Sajian hangat dan kudapan otentik yang siap mengembalikan stamina serta memanjakan lidah Anda di tengah perjalanan.</p>
                    </div>

                    <div class="space-y-16">
                        <!-- Kategori 1: Racikan Kopi -->
                        <div>
                            <div class="flex items-center gap-3 mb-6 border-b border-[#9a817b]/10 pb-3">
                                <i class="fa-solid fa-mug-hot text-[#fd7e5f] text-xl"></i>
                                <h4 class="text-white font-headline text-xl font-bold tracking-wide">Signature Drinks & Coffee</h4>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- Item 1 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Tubruk Robusta Hitam</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Kopi hitam pekat dengan body tebal, diseduh tradisional dari biji lereng gunung.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Classic</span>
                                </div>
                                <!-- Item 2 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Kopi Susu Gula Aren</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Perpaduan espresso lokal, susu segar, dan manis gurihnya aren murni lokal.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Best Seller</span>
                                </div>
                                <!-- Item 3 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Filter Coffee (V60)</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Seduhan manual dengan hasil akhir yang bersih, menonjolkan notes buah & rempah.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Manual</span>
                                </div>
                                <!-- Item 4 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Kopi Jahe Bakar</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Sinergi robusta tubruk dengan geprekan jahe emprit yang dibakar matang.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Warmth</span>
                                </div>
                                <!-- Item 5 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Espresso On The Rocks</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Double shot espresso murni yang dituang langsung di atas es batu kristal segar.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Bold</span>
                                </div>
                                <!-- Item 6 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Kopi Joki (Kopi Susu Kental)</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Racikan klasik andalan pengendara malam, manis, kental, dan menjamin mata melek.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Energy</span>
                                </div>
                            </div>
                        </div>

                        <!-- Kategori 2: Minuman Tradisi Non-Kopi -->
                        <div>
                            <div class="flex items-center gap-3 mb-6 border-b border-[#9a817b]/10 pb-3">
                                <i class="fa-solid fa-leaf text-[#fd7e5f] text-xl"></i>
                                <h4 class="text-white font-headline text-xl font-bold tracking-wide">Tradisi & Kebun (Non-Coffee)</h4>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- Item 1 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Bandrek Susu Kampung</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Rebusan jahe merah, serai, pandan, dan rempah rahasia dipadu susu kental manis.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Herbal</span>
                                </div>
                                <!-- Item 2 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Teh Melati Tubruk Gula Batu</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Disajikan dalam teko tanah liat kecil, wangi harum aromatik, manisnya pas.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Authentic</span>
                                </div>
                                <!-- Item 3 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Wedang Uwuh Secang</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Minuman sampah rempah kaya khasiat, menghangatkan tenggorokan dari angin malam.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Healthy</span>
                                </div>
                                <!-- Item 4 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Cokelat Batas Lembah</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Seduhan cokelat murni lokal dengan tekstur creamy yang tebal dan tidak terlalu manis.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Favorite</span>
                                </div>
                                <!-- Item 5 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Susu Segar Madu Alami</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Susu sapi murni dataran tinggi yang dipanaskan, disajikan dengan sesendok madu hutan.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Fresh</span>
                                </div>
                                <!-- Item 6 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Es Jeruk Peras Kebun</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Perasan buah jeruk segar langsung dari perkebunan warga di kaki gunung.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Vitamin</span>
                                </div>
                            </div>
                        </div>

                        <!-- Kategori 3: Kudapan & Camilan -->
                        <div>
                            <div class="flex items-center gap-3 mb-6 border-b border-[#9a817b]/10 pb-3">
                                <i class="fa-solid fa-cookie-bite text-[#fd7e5f] text-xl"></i>
                                <h4 class="text-white font-headline text-xl font-bold tracking-wide">Camilan Pedesaan (Snacks)</h4>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- Item 1 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Pisang Goreng Karamel</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Pisang tanduk krispi yang dibalut sirup gula aren kental gurih.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Must Try</span>
                                </div>
                                <!-- Item 2 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Singkong Goreng Garlic</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Singkong merekah lembut di dalam, gurih bawang putih di luar, saus cocolan terasi.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Crunchy</span>
                                </div>
                                <!-- Item 3 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Tempe Mendoan Hangat</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Isi 5 pcs tempe lebar dengan baluran tepung daun bawang tebal, disajikan bersama kecap rawit.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Sharing</span>
                                </div>
                                <!-- Item 4 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Cireng Bumbu Rujak</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Aci goreng renyah kenyal khas priangan dengan siraman saus bumbu rujak pedas manis pedas.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Spicy</span>
                                </div>
                                <!-- Item 5 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Roti Bakar Cokelat Keju</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Roti tangkup tebal dibakar mentega, diisi meses premium dan parutan keju melimpah.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Sweet</span>
                                </div>
                                <!-- Item 6 -->
                                <div class="bg-[#0e0402]/40 p-6 rounded-xl border border-[#9a817b]/10 flex justify-between items-start hover:border-[#fd7e5f]/30 transition-colors">
                                    <div>
                                        <h5 class="text-white font-semibold text-base">Kentang Goreng Wedges</h5>
                                        <p class="text-xs text-[#9a817b] mt-1">Potongan kentang berkulit tebal dengan taburan garam rosemary gurih alami.</p>
                                    </div>
                                    <span class="text-[#fd7e5f] font-mono text-xs bg-[#fd7e5f]/10 px-2 py-1 rounded">Salty</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="story" class="py-16 md:py-24 bg-[#f5f3ef]">
            <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-xs font-bold text-[#a43c23] tracking-widest block mb-3 uppercase">
                        <i class="fa-solid fa-scroll mr-1"></i> Cerita di Balik Batas
                    </span>
                    <h2 class="font-headline text-3xl md:text-4xl text-[#0e0402] font-bold mb-6 leading-tight">
                        Mengapa Dinamakan <br><span class="text-[#a43c23] italic">"Batas Desa"</span>?
                    </h2>
                    <div class="space-y-4 text-sm md:text-base text-[#4f4442] leading-relaxed">
                        <p>
                            Didirikan tepat di penanda geografis ujung desa terakhir sebelum memasuki kawasan hutan lindung pegunungan, kedai ini berawal sebagai tempat peristirahatan para pekebun
                            kopi lokal.
                        </p>
                        <p>
                            Kami percaya bahwa kopi bukan sekadar komoditas, melainkan sebuah simpul sosial. Di sini, batas-batas status sosial mencair. Para pesepeda, penjelajah motor, hingga
                            masyarakat lokal duduk di bangku kayu yang sama, berbagi cerita hangat ditemani kabut tipis yang turun perlahan.
                        </p>
                    </div>
                    <div class="mt-8 grid grid-cols-2 gap-4 border-t border-[#d3c3c0] pt-6">
                        <div>
                            <span class="block font-headline text-3xl font-bold text-[#a43c23]">100%</span>
                            <span class="text-xs text-[#4f4442] uppercase tracking-wider font-semibold">Kopi Lokal Petani</span>
                        </div>
                        <div>
                            <span class="block font-headline text-3xl font-bold text-[#a43c23]">1.200m</span>
                            <span class="text-xs text-[#4f4442] uppercase tracking-wider font-semibold">Di Atas Permukaan Laut</span>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img class="w-full h-64 object-cover rounded-xl shadow-md"
                        src="{{ asset('image/section1.png') }}"
                        alt="Coffee story 1" />
                    <img class="w-full h-64 object-cover rounded-xl shadow-md mt-6"
                        src="{{ asset('image/section2.png') }}"
                        alt="Coffee story 2" />
                </div>
            </div>
        </section>

        <section id="gallery" class="py-16 md:py-24 bg-[#fbf9f5]">
            <div class="max-w-7xl mx-auto px-6 md:px-12 text-center mb-12">
                <span class="text-xs font-bold text-[#a43c23] tracking-widest block mb-2 uppercase">Dokumentasi Lensa</span>
                <h2 class="font-headline text-3xl md:text-4xl text-[#0e0402] font-bold">Sudut-Sudut Ramai Kami</h2>
                <div class="w-24 h-1 bg-[#a43c23] mx-auto mt-4 rounded-full"></div>
            </div>
            <div class="max-w-7xl mx-auto px-4 md:px-12 grid grid-cols-2 md:grid-cols-4 gap-3">
                <div class="h-48 sm:h-64 overflow-hidden rounded-lg relative group">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        src="{{ asset('image/image1.png') }}"
                        alt="Atmosphere" />
                </div>
                <div class="h-48 sm:h-64 overflow-hidden rounded-lg relative group">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        src="{{ asset('image/image2.png') }}"
                        alt="Barista" />
                </div>
                <div class="h-48 sm:h-64 md:row-span-2 md:h-full overflow-hidden rounded-lg relative group">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        src="{{ asset('image/image3.png') }}"
                        alt="Architecture" />
                </div>
                <div class="h-48 sm:h-64 overflow-hidden rounded-lg relative group">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        src="{{ asset('image/image4.png') }}"
                        alt="Cyclists" />
                </div>
                <div class="h-48 sm:h-64 overflow-hidden rounded-lg relative group">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        src="{{ asset('image/image5.png') }}"
                        alt="Interior" />
                </div>
                <div class="h-48 sm:h-64 overflow-hidden rounded-lg relative group">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        src="{{ asset('image/image6.png') }}"
                        alt="Snacks" />
                </div>
                <div class="h-48 sm:h-64 overflow-hidden rounded-lg relative group">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        src="{{ asset('image/image7.png') }}"
                        alt="View" />
                </div>
            </div>
        </section>

        <section class="py-16 md:py-24 bg-[#2b1b17] text-white relative">
            <div class="max-w-7xl mx-auto px-6 md:px-12">
                <div class="text-center mb-12">
                    <span class="text-xs font-bold text-[#fd7e5f] tracking-widest block mb-2 uppercase">Kata Mereka</span>
                    <h2 class="font-headline text-3xl md:text-4xl font-bold text-white">Cerita Dari Para Penjelajah</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-[#0e0402]/30 p-8 rounded-xl border border-[#9a817b]/10">
                        <div class="text-[#fd7e5f] mb-4 flex gap-1">
                            <i class="fa-solid fa-star text-sm"></i><i class="fa-solid fa-star text-sm"></i><i class="fa-solid fa-star text-sm"></i><i class="fa-solid fa-star text-sm"></i><i
                                class="fa-solid fa-star text-sm"></i>
                        </div>
                        <p class="text-sm text-[#9a817b] italic leading-relaxed mb-6">
                            "Tempat paling pas buat neduh pas motoran dari kota. Pisang gorengnya renyah parah, dicelup ke kopi susu arennya pas kabut turun beneran magis sih suasana tempat ini."
                        </p>
                        <h4 class="text-white font-semibold text-sm">- Andika R., Bikers Tangerang</h4>
                    </div>
                    <div class="bg-[#0e0402]/30 p-8 rounded-xl border border-[#9a817b]/10">
                        <div class="text-[#fd7e5f] mb-4 flex gap-1">
                            <i class="fa-solid fa-star text-sm"></i><i class="fa-solid fa-star text-sm"></i><i class="fa-solid fa-star text-sm"></i><i class="fa-solid fa-star text-sm"></i><i
                                class="fa-solid fa-star text-sm"></i>
                        </div>
                        <p class="text-sm text-[#9a817b] italic leading-relaxed mb-6">
                            "Rute sepedaan pagi yang menguras tenaga terbayar lunas pas nyampe tikungan Km 24 ini. Tempatnya luas dan ramah banget sama pesepeda. Kopi robusta tubruknya mantap!"
                        </p>
                        <h4 class="text-white font-semibold text-sm">- Citra Dewanti, Komunitas Sepeda</h4>
                    </div>
                    <div class="bg-[#0e0402]/30 p-8 rounded-xl border border-[#9a817b]/10">
                        <div class="text-[#fd7e5f] mb-4 flex gap-1">
                            <i class="fa-solid fa-star text-sm"></i><i class="fa-solid fa-star text-sm"></i><i class="fa-solid fa-star text-sm"></i><i class="fa-solid fa-star text-sm"></i><i
                                class="fa-solid fa-star text-sm"></i>
                        </div>
                        <p class="text-sm text-[#9a817b] italic leading-relaxed mb-6">
                            "Desain semi-outdoor kayu lokalnya dapet banget estetika alamnya. Menunya sederhana tapi rasanya otentik perkampungan gunung, bersih, dan pelayanannya super ramah."
                        </p>
                        <h4 class="text-white font-semibold text-sm">- Kevin S., Arsitek & Desainer</h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="visit" class="py-16 md:py-24 bg-[#eae8e4] relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
                <div class="bg-white p-8 md:p-16 rounded-2xl shadow-xl border border-[#d3c3c0]/30 max-w-2xl mx-auto">
                    <span class="text-xs font-bold text-[#a43c23] tracking-widest block mb-3 uppercase">
                        <i class="fa-solid fa-location-dot mr-1"></i> Mampir Sejenak
                    </span>
                    <h2 class="font-headline text-2xl md:text-3xl text-[#0e0402] font-bold mb-4">Sapa Kami di Tikungan Kilometer 24</h2>
                    <p class="text-sm md:text-base text-[#4f4442] mb-8">Kami buka setiap hari untuk menemani perjalanan Anda. Dari fajar yang berkabut hingga senja yang syahdu.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-6 mb-8">
                        <div class="flex items-center justify-center gap-2 text-[#0e0402] font-semibold text-sm">
                            <i class="fa-regular fa-clock text-[#a43c23]"></i> 08:00 — 22:00 WIB
                        </div>
                        <div class="flex items-center justify-center gap-2 text-[#0e0402] font-semibold text-sm">
                            <i class="fa-solid fa-map-pin text-[#a43c23]"></i> Jalan Raya Puncak Km. 24
                        </div>
                    </div>
                    <a href="https://maps.google.com" target="_blank"
                        class="inline-flex justify-center items-center bg-[#a43c23] text-white px-6 py-3 rounded-lg font-bold text-sm hover:bg-[#a43c23]/90 transition-all gap-2 shadow-sm">
                        <i class="fa-solid fa-diamond-turn-right"></i> Buka di Google Maps
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-[#0e0402] pt-16 pb-8 border-t border-white/10 text-white/70">
        <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-12">
            <div>
                <div class="font-headline text-2xl text-white font-bold mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-mountain text-[#fd7e5f] text-lg"></i> Batas Desa
                </div>
                <p class="text-xs leading-relaxed mb-6 max-w-xs">
                    Rooted in mountain heritage. Sebuah perjalanan rasa dari ujung jalan setapak hingga ke cangkir Anda.
                </p>
                <div class="flex gap-4">
                    <a class="hover:text-white transition-colors" href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram text-base"></i></a>
                    <a class="hover:text-white transition-colors" href="https://tiktok.com" target="_blank"><i class="fa-brands fa-tiktok text-base"></i></a>
                    <a class="hover:text-white transition-colors" href="mailto:info@batasdesa.com"><i class="fa-solid fa-envelope text-base"></i></a>
                </div>
            </div>
            <div>
                <h4 class="text-xs font-bold text-white uppercase mb-4 tracking-widest">Navigasi</h4>
                <ul class="space-y-2 text-xs">
                    <li><a class="hover:text-white hover:underline decoration-[#a43c23] transition-all" href="#heritage" @click="activeSection = 'heritage'">Our Heritage</a></li>
                    <li><a class="hover:text-white hover:underline decoration-[#a43c23] transition-all" href="#menu" @click="activeSection = 'menu'">Coffee Menu</a></li>
                    <li><a class="hover:text-white hover:underline decoration-[#a43c23] transition-all" href="#story" @click="activeSection = 'story'">Cerita Filosofi</a></li>
                    <li><a class="hover:text-white hover:underline decoration-[#a43c23] transition-all" href="#visit" @click="activeSection = 'visit'">Lokasi Kedai</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-xs font-bold text-white uppercase mb-4 tracking-widest">Informasi</h4>
                <ul class="space-y-2 text-xs">
                    <li><a class="hover:text-white hover:underline decoration-[#a43c23] transition-all" href="#">Privacy Policy</a></li>
                    <li><a class="hover:text-white hover:underline decoration-[#a43c23] transition-all" href="#">Terms of Service</a></li>
                    <li><a class="hover:text-white hover:underline decoration-[#a43c23] transition-all" href="#">Sustainability Report</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-xs font-bold text-white uppercase mb-4 tracking-widest">Hubungi Kami</h4>
                <p class="text-xs mb-4">Dapatkan info event komunitas atau promo musiman lewat buletin kami.</p>
                <form action="#" @submit.prevent="alert('Terima kasih telah berlangganan!')" class="flex">
                    <input class="bg-[#2b1b17] border-none rounded-l-lg text-white text-xs w-full focus:ring-1 focus:ring-[#a43c23] px-3 py-2 placeholder-white/40" placeholder="Email Anda"
                        type="email" required />
                    <button type="submit" class="bg-[#a43c23] text-white px-4 rounded-r-lg hover:bg-[#a43c23]/90 transition-colors">
                        <i class="fa-solid fa-paper-plane text-xs"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 pt-6 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs">
            <p>© 2026 Batas Desa Coffee. All rights reserved.</p>
            <p class="italic">Handcrafted with heart in the highlands.</p>
        </div>
    </footer>

</body>

</html>
