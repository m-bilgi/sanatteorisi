<!doctype html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sanat Teorisi</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{ asset('assets/js/utils.js') }}"></script>
        <script src="{{ asset('assets/js/cookie.js') }}"></script>
        <script src="{{ asset('assets/js/slider.js') }}"></script>
        <script src="{{ asset('assets/js/modal.js') }}"></script>
    </head>
    <body class="light" id="body">
        <div class="st-container" id="container">
            <header class="st-header" id="header">
                <h1><a href="/" class="st-header-logo">Sanat Teorisi</a></h1>

                <div class="st-header-center group">
                    <ul class="uppercase font-semibold">
                        <li>
                            <input type="checkbox" class="hidden peer" id="mobile-menu">
                            <label class="block lg:hidden cursor-pointer" for="mobile-menu">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 mx-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </label>
                            <span class="hidden lg:flex hover:peer-checked:block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mx-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>Kategoriler
                            </span>
                            <ul class="st-header-nav peer-checked:block">
                                <li class="st-header-nav-link"><a href="javascript:;">Galeri</a></li>
                                <li class="st-header-nav-link"><a href="javascript:;">Makale</a></li>
                                <li class="st-header-nav-link"><a href="javascript:;">Şiir</a></li>
                                <li class="st-header-nav-link"><a href="javascript:;">Sözlük</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="st-header-right">
                    <a href="javascript:;" title="dark/light mode" id="dark-light-mode">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path class="hidden dark:block" stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                            <path class="block dark:hidden" stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                        </svg>
                    </a>
                    <a href="javascript:;" class="text-[#06ff00]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                        </svg>
                    </a>
                    <a href="javascript:;" data-name="modal" id="login">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                        </svg>
                    </a>
                </div>
            </header>

            <main id="main">
                <section class="st-hero" id="hero">
                    <h2>Hero Section</h2>
                    <div class="st-slider" id="slider">
                        <div class="st-slider-track" id="sliderTrack">
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=1" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=2" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=3" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=4" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=5" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=6" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=7" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=8" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=9" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=10" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=11" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=12" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=13" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=14" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=15" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=16" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=17" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=18" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=19" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="st-slider-group group">
                                <img src="https://picsum.photos/200/150?random=20" alt="." class="st-slider-img">
                                <div class="st-slider-text">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                        </div>
                        <div class="st-slider-nav" id="navButtons">
                            <button data-index="0" class="st-slider-nav-item"></button>
                            <button data-index="1" class="st-slider-nav-item"></button>
                            <button data-index="2" class="st-slider-nav-item"></button>
                            <button data-index="3" class="st-slider-nav-item"></button>
                        </div>
                    </div>
                </section>

                <section class="bg-gray-300 dark:bg-gray-700" id="article-contents">
                    <div class="grid lg:grid-cols-2">
                        <div class="p-5 lg:p-10 bg-gray-50 text-gray-600 dark:bg-gray-600/50 dark:text-gray-300" id="best-articles">
                            <h2><span class="p-3">EN İYİ MAKALELER</span></h2>
                            <p class="p-3 mb-2 border-b border-gray-400 dark:border-gray-800">Makaleler bölümündeki en iyi 5 içerik.</p>
                            <article class="block p-3 rounded-xl transition duration-30 hover:bg-gray-200 dark:hover:bg-gray-700">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Eser Analiz Yöntemleri</a></h4>
                                <p>Sanat olgusunun varlığını kavramanın en doğru yolu, sanat eserini çözümlemekte yatmaktadır. Bu konuy...</p>
                            </article>
                            <article class="block p-3 rounded-xl transition duration-30 hover:bg-gray-200 dark:hover:bg-gray-700">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Türk Resminde Kurtuluş Savaşı Teması</a></h4>
                                <p>Sanatın toplumsal yapılara, bağlı gelişmesiyle, sanatçının yaratımını politik, ekonomik, kültürel şa...</p>
                            </article>
                            <article class="block p-3 rounded-xl transition duration-30 hover:bg-gray-200 dark:hover:bg-gray-700">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Altın Oran</a></h4>
                                <p>“Altın oran kavramı ve bu kavramın gizemi nedir?” diye düşündüğünüz olmuştur. Belki de bu kavramı il...</p>
                            </article>
                            <article class="block p-3 rounded-xl transition duration-30 hover:bg-gray-200 dark:hover:bg-gray-700">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Sokrates ve Felsefesi</a></h4>
                                <p>M.Ö. 469-399 yılları arasında yaşamış olan ünlü Yunanlı düşünür. Platon’un hocası olan Sokrates, yaz...</p>
                            </article>
                            <article class="block p-3 rounded-xl transition duration-30 hover:bg-gray-200 dark:hover:bg-gray-700">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Modernizm ve Sanat Akımlarından Notlar</a></h4>
                                <p>1750’lerden 1890’lara kadar süren ilk sanayi devrimi ardından, 2. Sanayi Devri 1896’larda başlayıp 1...</p>
                            </article>
                        </div>
                        <div class="p-5 lg:p-10 text-gray-600 dark:text-gray-300" id="last-articles">
                            <h2><span class="p-3">SON 5 MAKALE</span></h2>
                            <p class="p-3 mb-2 border-b border-gray-400 dark:border-gray-800">Makaleler bölümündeki son 5 içerik.</p>
                            <article class="block p-3 rounded-xl transition duration-30 hover:bg-gray-200 dark:hover:bg-gray-800">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Sürreal Resimde Kadın İmgesi</a></h4>
                                <p>Sürrealizm, sanat ve yaşam alanında radikal başkaldırı ve kural tanımaz tavrın 20 yüz yılın ilk çeyr...</p>
                            </article>
                            <article class="block p-3 rounded-xl transition duration-30 hover:bg-gray-200 dark:hover:bg-gray-800">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Büyük Masturbator</a></h4>
                                <p>Büyük Masturbator, Salvador Dalinin ikonik bir eseri ve ressamın sürrealist dönemine ait olarak kabu...</p>
                            </article>
                            <article class="block p-3 rounded-xl transition duration-30 hover:bg-gray-200 dark:hover:bg-gray-800">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Ölümün Kitsch Bir İmge Örneği Olarak Günümüz İran’ında Üretilen Mezar Taşları</a></h4>
                                <p>Farklı çağlarda ölümle ilgili üretilen imgeler, metafiziğe nasıl bakıldığını dışa vurmaktadır. Kitsc...</p>
                            </article>
                            <article class="block p-3 rounded-xl transition duration-30 hover:bg-gray-200 dark:hover:bg-gray-800">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Sanatta Bedenin Uyku Hali</a></h4>
                                <p>Beden, canlının maddesel kanıtıdır. Bedeni betimlemek çağlar boyunca sanatın en önemli sorunsalların...</p>
                            </article>
                            <article class="block p-3 rounded-xl transition duration-30 hover:bg-gray-200 dark:hover:bg-gray-800">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Orhan Pamuk’un Beyaz Kale Romanında Ayna Oyunları</a></h4>
                                <p>Genelde ayna varlıkların görüntüsünü yansıtan ya da süs olarak kullanılan eşyalardan biri olarak düş...</p>
                            </article>
                        </div>
                    </div>
                </section>

                <section class="px-5 lg:px-10 py-5 bg-gray-200 text-white dark:bg-gray-600" id="gallery-contents">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4" id="gallery-top-8">
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=21" alt="." class="st-gallery-img">
                            <div class="st-gallery-img-text">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=22" alt="." class="st-gallery-img">
                            <div class="st-gallery-img-text">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=23" alt="." class="st-gallery-img">
                            <div class="st-gallery-img-text">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=24" alt="." class="st-gallery-img">
                            <div class="st-gallery-img-text">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=25" alt="." class="st-gallery-img">
                            <div class="st-gallery-img-text">
                                <h4>Title</h4>
                                <p>2Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=26" alt="." class="st-gallery-img">
                            <div class="st-gallery-img-text">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=27" alt="." class="st-gallery-img">
                            <div class="st-gallery-img-text">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=28" alt="." class="st-gallery-img">
                            <div class="st-gallery-img-text">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="px-5 lg:px-10 py-5 bg-white text-gray-600 dark:bg-gray-700 dark:text-gray-300" id="popular-contents">
                    <div class="block py-5 border-b border-gray-300 dark:border-gray-600">
                        <h2>POPÜLER KATEGORİLER</h2>
                        <p>Tüm kategoriler, tüm eserler.</p>
                    </div>
                    <div class="block md:flex justify-between py-5">
                        <div id="popular-gallery">
                            <h3><a href="javascript:;" class="st-orange-link">GALERİ KATEGORİLERİ</a></h3>
                            <nav class="py-5">
                                <a href="javascript:;" class="block hover:underline">Yeşilçam</a>
                                <a href="javascript:;" class="block hover:underline">Müzisyenler</a>
                                <a href="javascript:;" class="block hover:underline">Şair ve Yazarlar</a>
                                <a href="javascript:;" class="block hover:underline">Picasso</a>
                                <a href="javascript:;" class="block hover:underline">İbrahim Çallı</a>
                                <a href="javascript:;" class="block hover:underline">Pino Daeni</a>
                                <a href="javascript:;" class="block hover:underline">Ekrem Kahraman</a>
                                <a href="javascript:;" class="block hover:underline">Alex Stevenson Diaz</a>
                                <a href="javascript:;" class="block hover:underline">Ahmet Yeşil</a>
                                <a href="javascript:;" class="block hover:underline">Giovanni Gasparro</a>
                            </nav>
                        </div>
                        <div id="popular-articles">
                            <h3><a href="javascript:;" class="st-orange-link">MAKALE KATEGORİLERİ</a></h3>
                            <nav class="py-5">
                                <a href="javascript:;" class="block hover:underline">Makaleler</a>
                                <a href="javascript:;" class="block hover:underline">Felsefe</a>
                                <a href="javascript:;" class="block hover:underline">Araştırmalar</a>
                                <a href="javascript:;" class="block hover:underline">Ressamlar</a>
                                <a href="javascript:;" class="block hover:underline">Denemeler</a>
                                <a href="javascript:;" class="block hover:underline">Köşe Yazıları</a>
                                <a href="javascript:;" class="block hover:underline">Şairler</a>
                                <a href="javascript:;" class="block hover:underline">Hikaye ve Öyküler</a>
                                <a href="javascript:;" class="block hover:underline">Resim ve Eser Analizleri</a>
                                <a href="javascript:;" class="block hover:underline">Müzik</a>
                            </nav>
                        </div>
                        <div id="popular-poems">
                            <h3><a href="javascript:;" class="st-orange-link">ŞİİR KATEGORİLERİ</a></h3>
                            <nav class="py-5">
                                <a href="javascript:;" class="block hover:underline">Necip Fazıl Kısakürek</a>
                                <a href="javascript:;" class="block hover:underline">Edip Cansever</a>
                                <a href="javascript:;" class="block hover:underline">Nazım Hikmet</a>
                                <a href="javascript:;" class="block hover:underline">Attila İlhan</a>
                                <a href="javascript:;" class="block hover:underline">Orhan Veli</a>
                                <a href="javascript:;" class="block hover:underline">Özdemir Asaf</a>
                                <a href="javascript:;" class="block hover:underline">Ahmet Telli</a>
                                <a href="javascript:;" class="block hover:underline">Ceyhun Yılmaz</a>
                                <a href="javascript:;" class="block hover:underline">Cemal Süreya</a>
                                <a href="javascript:;" class="block hover:underline">Yılmaz Erdoğan</a>
                            </nav>
                        </div>
                    </div>
                </section>

                <section class="px-5 lg:px-10 py-5 bg-white dark:bg-gray-700" id="expand-collapse">
                    <details class="st-details group" data-name="open-close" id="home1">
                        <summary class="st-summary">
                            <h3>Haftanın Yazısı: Dada Manifestosu</h3>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-6 transform transition-transform duration-200 group-open:rotate-180">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </summary>
                        <div class="pb-4 text-gray-600 dark:text-gray-200">
                            <h4><a href="javascript:;" class="hover:underline">Dada Manifestosu</a></h4>
                            <p class="py-2">Gazetecileri beklenmedik bir dünyanın kapısına getiren bir sözcüğün – DADA – büyüsü, bizim için hiçbir önem taşımıyor...</p>
                            <p class="py-2">Yazar: Tristan Tzara</p>
                        </div>
                    </details>

                    <details class="st-details group" data-name="open-close" id="home2">
                        <summary class="st-summary">
                            <h3>Haftanın Şiiri: Daha Ne Zaman</h3>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-6 transform transition-transform duration-200 group-open:rotate-180">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </summary>
                        <div class="pb-4 text-gray-600 dark:text-gray-200">
                            <h4><a href="javascript:;" class="hover:underline">Daha Ne Zaman</a></h4>
                            <p class="py-2">
                                Toz pembe hayaller<br>
                                Kuran mebuslar,<br>
                                Umutları, renkli<br>
                                Geleceğe salmayın...<br>
                                Halka gidip,<br>
                                Ne kabuslar<br>
                                Gördüklerini görün;<br>
                                Aldatmayın!..<br>
                                Yaşanan gerçekler<br>
                                Somuttur;<br>
                                Rakam oyunlarıyla<br>
                                Kimse kanmaz,<br>
                                Oynamayın!..<br>
                                "İşler yolunda"<br>
                                "Tıkırında" diyerek,<br>
                                Ölüyor zaman!..<br>
                                Gerçek;<br>
                                İşsizim,cebim boş,<br>
                                Midem de uğulduyor;<br>
                                Acılar hep bana mı?..<br>
                                Daha ne zaman?!..<br>
                            </p>
                            <p class="py-2"><b>Şair:</b> <a href="javascript:;" class="hover:underline">M.Nazım Güler</a></p>
                        </div>
                    </details>
                </section>

                <section class="st-bottom" id="bottom">
                    <div class="st-bottom-up" id="bottom-up">
                        <div class="st-bottom-logo">Sanat Teorisi</div>
                        <div class="px-5 text-sm">
                            <h5>Makaleler</h5>
                            <nav>
                                <a href="javascript:;" class="block hover:underline">Popüler makaleler</a>
                                <a href="javascript:;" class="block hover:underline">En çok okunan makaleler</a>
                                <a href="javascript:;" class="block hover:underline">En çok yorum alan makaleler</a>
                                <a href="javascript:;" class="block hover:underline">Yeni eklenen makaleler</a>
                                <a href="javascript:;" class="block hover:underline">Alfabetik sıraya göre makaleler</a>
                                <a href="javascript:;" class="block hover:underline">Toplam makale (390)</a>
                            </nav>
                        </div>
                        <div class="px-5 text-sm">
                            <h5>Şiirler</h5>
                            <nav>
                                <a href="javascript:;" class="block hover:underline">Popüler şiirler</a>
                                <a href="javascript:;" class="block hover:underline">En çok okunan şiirler</a>
                                <a href="javascript:;" class="block hover:underline">En çok yorum alan şiirler</a>
                                <a href="javascript:;" class="block hover:underline">Yeni eklenen şiirler</a>
                                <a href="javascript:;" class="block hover:underline">Alfabetik sıraya göre şiirler</a>
                                <a href="javascript:;" class="block hover:underline">Toplam şiir (2578)</a>
                            </nav>
                        </div>
                        <div class="px-5 text-sm">
                            <h5>Galeri</h5>
                            <nav>
                                <a href="javascript:;" class="block hover:underline">Popüler resimler</a>
                                <a href="javascript:;" class="block hover:underline">En çok izlenen resimler</a>
                                <a href="javascript:;" class="block hover:underline">En çok yorum alan resimler</a>
                                <a href="javascript:;" class="block hover:underline">Yeni eklenen resimler</a>
                                <a href="javascript:;" class="block hover:underline">Alfabetik sıraya göre resimler</a>
                                <a href="javascript:;" class="block hover:underline">Toplam resim (1010)</a>
                            </nav>
                        </div>
                        <div class="px-5 text-sm">
                            <h5>Üye/Ziyaret</h5>
                            <nav>
                                <a href="javascript:;" class="block hover:underline">Aktif üye sayısı (1)</a>
                                <a href="javascript:;" class="block hover:underline">Aktif ziyaretçiler (0)</a>
                                <a href="javascript:;" class="block hover:underline">Kayıtlı üye (1171)</a>
                                <a href="javascript:;" class="block hover:underline">Yeni Üyelik</a>
                            </nav>
                        </div>
                        <div class="st-bottom-right">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            <a href="#body">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            </a>
                        </div>
                    </div>
                    <div class="st-bottom-down" id="bottom-down">
                        <div class="text-sm">
                            <h6>Proje ve Referanslar</h6>
                            <nav>
                                <a href="javascript:;" class="block hover:underline">sanatteorisi.com</a>
                                <a href="javascript:;" class="block hover:underline">sanatteorisi.net</a>
                                <a href="javascript:;" class="block hover:underline">mustafabilgi.com</a>
                            </nav>
                        </div>
                        <div class="text-sm">
                            <h6>Sanat Teorisi</h6>
                            <nav>
                                <a href="javascript:;" class="block hover:underline">Hakkımızda</a>
                                <a href="javascript:;" class="block hover:underline">Gizlilik İlkesi</a>
                                <a href="javascript:;" class="block hover:underline">Reklam</a>
                                <a href="javascript:;" class="block hover:underline">İletişim</a>
                                <a href="javascript:;" class="block hover:underline">Site Haritası</a>
                            </nav>
                        </div>
                        <div class="text-sm">
                            <h6>Yardım</h6>
                            <nav>
                                <a href="javascript:;" class="block hover:underline">Kurallar</a>
                                <a href="javascript:;" class="block hover:underline">Kullanım Klavuzu</a>
                                <a href="javascript:;" class="block hover:underline">Sık Sorulan Sorular</a>
                                <a href="javascript:;" class="block hover:underline">Tüm Yardım Konuları</a>
                            </nav>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="st-footer" id="footer">
                <p>Resimlerin izin alınmadan kopyalanması ve kullanılması <a href="javascript:;" class="text-gray-300 hover:underline">5846 sayılı fikir ve sanat eserleri kanunu</a>na göre suçtur.</p>
                <p>© 2003-2024 <span class="text-[#06ff00]">SanatTeorisi</span>. Görsel yayınların tüm hakları ve sorumluluğu eser sahiplerine aittir.</p>
            </footer>
        </div>

        <div class="st-modal invisible" id="login-modal">
            <form name="loginForm" id="login-form">
                @csrf
                <div class="st-modal-content" data-name="modal-content">
                    <div class="dark:text-gray-200"><h2>Login</h2></div>
                    <div class="flex justify-end dark:text-gray-200">
                        <a href="javascript:;" data-name="close-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </a>
                    </div>

                    <div class="st-input-group col-span-2 py-3">
                        <label class="st-input-group-text md:w-36" for="uName">Username</label>
                        <input type="text" name="uName" id="uName" autocomplete="off" minlength="5" maxlength="25" placeholder="username" class="st-form-control w-20 md:w-auto" />
                    </div>

                    <div class="st-input-group col-span-2 py-3">
                        <label class="st-input-group-text md:w-36" for="uPass">Password</label>
                        <input type="password" name="uPass" id="uPass" autocomplete="off" minlength="5" maxlength="25" placeholder="password" class="st-form-control w-20 md:w-auto" />
                        <span class="st-input-group-text" data-name="toogle-password" data-id="uPass">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path id="eye-open" class="" stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path id="eye-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>
                        </span>
                    </div>

                    <div class="col-span-2 text-sm dark:text-gray-200">
                        <input type="checkbox" name="rememberMe" id="remember-me" checked /><label class="px-2" for="remember-me">Beni Hatırla</label>
                    </div>

                    <div class="col-span-2 flex justify-end text-sm">
                        <span class="py-2 px-5 dark:text-gray-200">
                            <a href="javascript:;" class="px-1 hover:underline">Yeni Üyelik</a> | <a href="javascript:;" class="px-1 hover:underline">Şifremi unuttum</a>
                        </span>
                        <button class="st-button st-button-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                            </svg>
                            <span class="hidden md:block">Giriş yap</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
<!--
* MEDIA RESOLUTION
* Extra small devices (phones, 600px and down)
* Small devices (portrait tablets and large phones, 600px and up)
* Medium devices (landscape tablets, 768px and up)
* Large devices (laptops/desktops, 992px and up)
* Extra large devices (large laptops and desktops, 1200px and up)
*
* SVG ICONS PACK
* https://heroicons.com/outline
*
* h1: Only Logo
* h2: UI & section title (example: 'Best Articles', 'Top 10 Topics' etc...)
* h3: UI & section title (example: 'Best Articles', 'Top 10 Topics' etc...)
* h4: Content title
* h5: UI bottom title
* h6: UI bottom & footer title
-->
