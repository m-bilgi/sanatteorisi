<!doctype html>
<html lang="tr" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sanat Teorisi</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <link rel="stylesheet" type="text/css" href="{{ url('/css/tailwindcss-4-0-7.css') }}" />
            <style type="text/tailwindcss">
              @theme {
                --breakpoint-3xl: 120rem; /* 1920px */
                --breakpoint-4xl: 160rem; /* 2560px */
                --breakpoint-5xl: 240rem; /* 3840px */
              }
            </style>
        @endif
    </head>
    <body class="bg-linear-to-b from-gray-700 from-20% to-white to-80%">
        <div class="3xl:w-[1905px] justify-self-center" id="container">

            <header class="grid grid-cols-2 md:grid-cols-3 gap-4 sticky top-0 bg-linear-to-b from-black to-transparent drop-shadow-md/50 text-white p-5 lg:p-10" id="header">
                <div class="text-lg lg:text-2xl font-medium">
                    <h1><a href="javascript:;">Sanat Teorisi</a></h1>
                </div>
                <nav class="hidden md:flex gap-x-8 justify-start self-center lg:text-xl font-medium text-gray-400 uppercase">
                    <a href="javascript:;" class="hover:text-orange-400 transition duration-300">Galeri</a>
                    <a href="javascript:;" class="hover:text-orange-400 transition duration-300">Makale</a>
                    <a href="javascript:;" class="hover:text-orange-400 transition duration-300">Şiir</a>
                    <a href="javascript:;" class="hover:text-orange-400 transition duration-300">Sözlük</a>
                </nav>
                <div class="hidden md:flex self-center justify-end text-gray-400">
                    Sign up | Login
                </div>
                <div class="flex md:hidden self-center justify-end" id="mobile-menu">
                    <div class="relative inline-block">
                        <input type="checkbox" class="hidden peer" id="menu-toggle">
                        <label for="menu-toggle" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </label>
                        <div class="hidden peer-checked:block absolute mt-5 -ml-14 left-1/2 -translate-x-1/2 w-40 shadow-lg z-9 bg-black" id="dropdown">
                            <a href="javascript:;" for="menu-toggle" class="block p-2 hover:bg-gray-800 hover:text-orange-500 transition duration-300">Galeri</a>
                            <a href="javascript:;" for="menu-toggle" class="block p-2 hover:bg-gray-800 hover:text-orange-500 transition duration-300">Makale</a>
                            <a href="javascript:;" for="menu-toggle" class="block p-2 hover:bg-gray-800 hover:text-orange-500 transition duration-300">Şiir</a>
                            <a href="javascript:;" for="menu-toggle" class="block p-2 hover:bg-gray-800 hover:text-orange-500 transition duration-300">Sözlük</a>
                            <a href="javascript:;" for="menu-toggle" class="block p-2 hover:bg-gray-800 hover:text-orange-500 transition duration-300">Sign up</a>
                            <a href="javascript:;" for="menu-toggle" class="block p-2 hover:bg-gray-800 hover:text-orange-500 transition duration-300">Login</a>
                        </div>
                    </div>
                </div>
            </header>

            <div class="grid grid-cols-1 gap-4 px-10 bg-gray-400" id="hero"><!--bg-[url(image.png)]-->
                <div class="h-100">
                    Hero
                </div>
            </div>

            <main class="grid bg-gray-300" id="main">
                <div class="grid grid-cols-1 lg:grid-cols-2 bg-gray-300 text-slate-200">
                    <div class="p-10 text-gray-600 bg-gray-50" id="best-articles">
                        <h2 class="flex p-3 text-2xl font-bold">EN İYİ MAKALELER</h2>
                        <p class="p-3 border-b border-gray-400">Makaleler bölümündeki en iyi 5 içerik.</p>
                        <article class="block p-3 hover:bg-gray-200 transition duration-300">
                            <h3 class="text-orange-500 font-medium"><a href="javascript:;" class="hover:underline">Eser Analiz Yöntemleri</a></h3>
                            <p>Sanat olgusunun varlığını kavramanın en doğru yolu, sanat eserini çözümlemekte yatmaktadır. Bu konuy...</p>
                        </article>
                        <article class="block p-3 hover:bg-gray-200 transition duration-300">
                            <h3 class="text-orange-500 font-medium"><a href="javascript:;" class="hover:underline">Türk Resminde Kurtuluş Savaşı Teması</a></h3>
                            <p>Sanatın toplumsal yapılara, bağlı gelişmesiyle, sanatçının yaratımını politik, ekonomik, kültürel şa...</p>
                        </article>
                        <article class="block p-3 hover:bg-gray-200 transition duration-300">
                            <h3 class="text-orange-500 font-medium"><a href="javascript:;" class="hover:underline">Altın Oran</a></h3>
                            <p>“Altın oran kavramı ve bu kavramın gizemi nedir?” diye düşündüğünüz olmuştur. Belki de bu kavramı il...</p>
                        </article>
                        <article class="block p-3 hover:bg-gray-200 transition duration-300">
                            <h3 class="text-orange-500 font-medium"><a href="javascript:;" class="hover:underline">Sokrates ve Felsefesi</a></h3>
                            <p>M.Ö. 469-399 yılları arasında yaşamış olan ünlü Yunanlı düşünür. Platon’un hocası olan Sokrates, yaz...</p>
                        </article>
                        <article class="block p-3 hover:bg-gray-200 transition duration-300">
                            <h3 class="text-orange-500 font-medium"><a href="javascript:;" class="hover:underline">Modernizm ve Sanat Akımlarından Notlar</a></h3>
                            <p>1750’lerden 1890’lara kadar süren ilk sanayi devrimi ardından, 2. Sanayi Devri 1896’larda başlayıp 1...</p>
                        </article>
                    </div>
                    <div class="p-10 text-gray-600" id="last-articles">
                        <h2 class="flex p-3 text-2xl font-bold">SON 5 MAKALE</h2>
                        <p class="p-3 border-b border-gray-400">Makaleler bölümündeki son 5 içerik.</p>
                        <article class="block p-3 hover:bg-gray-200 transition duration-300">
                            <h3 class="text-orange-500 font-medium"><a href="javascript:;" class="hover:underline">Sürreal Resimde Kadın İmgesi</a></h3>
                            <p>Sürrealizm, sanat ve yaşam alanında radikal başkaldırı ve kural tanımaz tavrın 20 yüz yılın ilk çeyr...</p>
                        </article>
                        <article class="block p-3 hover:bg-gray-200 transition duration-300">
                            <h3 class="text-orange-500 font-medium"><a href="javascript:;" class="hover:underline">Büyük Masturbator</a></h3>
                            <p>Büyük Masturbator, Salvador Dalinin ikonik bir eseri ve ressamın sürrealist dönemine ait olarak kabu...</p>
                        </article>
                        <article class="block p-3 hover:bg-gray-200 transition duration-300">
                            <h3 class="text-orange-500 font-medium"><a href="javascript:;" class="hover:underline">Ölümün Kitsch Bir İmge Örneği Olarak Günümüz İran’ında Üretilen Mezar Taşları</a></h3>
                            <p>Farklı çağlarda ölümle ilgili üretilen imgeler, metafiziğe nasıl bakıldığını dışa vurmaktadır. Kitsc...</p>
                        </article>
                        <article class="block p-3 hover:bg-gray-200 transition duration-300">
                            <h3 class="text-orange-500 font-medium"><a href="javascript:;" class="hover:underline">Sanatta Bedenin Uyku Hali</a></h3>
                            <p>Beden, canlının maddesel kanıtıdır. Bedeni betimlemek çağlar boyunca sanatın en önemli sorunsalların...</p>
                        </article>
                        <article class="block p-3 hover:bg-gray-200 transition duration-300">
                            <h3 class="text-orange-500 font-medium"><a href="javascript:;" class="hover:underline">Orhan Pamuk’un Beyaz Kale Romanında Ayna Oyunları</a></h3>
                            <p>Genelde ayna varlıkların görüntüsünü yansıtan ya da süs olarak kullanılan eşyalardan biri olarak düş...</p>
                        </article>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-6 gap-4 p-10 bg-gray-200"
                    id="gallery">
                    <div class="">
                        <img src="https://images.unsplash.com/photo-1526400473556-aac12354f3db" alt=".">
                    </div>
                    <div class="">
                        <img src="https://images.unsplash.com/photo-1526400473556-aac12354f3db" alt=".">
                    </div>
                    <div class="">
                        <img src="https://images.unsplash.com/photo-1526400473556-aac12354f3db" alt=".">
                    </div>
                    <div class="">
                        <img src="https://images.unsplash.com/photo-1526400473556-aac12354f3db" alt=".">
                    </div>
                    <div class="">
                        <img src="https://images.unsplash.com/photo-1526400473556-aac12354f3db" alt=".">
                    </div>
                    <div class="">
                        <img src="https://images.unsplash.com/photo-1526400473556-aac12354f3db" alt=".">
                    </div>
                </div>
            </main>

            <div class="p-10 bg-gray-400" id="bottom">
                Bottom
            </div>

            <footer class="p-10 bg-gray-800 text-gray-500 text-right text-sm" id="footer">
                <p>Resimlerin izin alınmadan kopyalanması ve kullanılması <a href="javascript:;" class="text-gray-300 hover:underline">5846 sayılı fikir ve sanat eserleri kanunu</a>na göre suçtur.</p>
                <p>© 2003-2024 <span style="color: #1efe00;">SanatTeorisi</span>. Görsel yayınların tüm hakları ve sorumluluğu eser sahiplerine aittir.</p>
            </footer>
        </div>
    </body>
</html>
<!--
* Extra small devices (phones, 600px and down)
* Small devices (portrait tablets and large phones, 600px and up)
* Medium devices (landscape tablets, 768px and up)
* Large devices (laptops/desktops, 992px and up)
* Extra large devices (large laptops and desktops, 1200px and up)
-->
