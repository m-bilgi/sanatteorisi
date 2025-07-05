<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sanat Teorisi</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
            <style type="text/tailwindcss">
                @theme {
                  --breakpoint-3xl: 120rem; /* 1920px */
                  --breakpoint-4xl: 160rem; /* 2560px */
                  --breakpoint-5xl: 240rem; /* 3840px */
                }
                @layer base {
                    html {@apply scroll-smooth;}
                    body {@apply bg-gray-100 dark:bg-gray-900;}
                    header {@apply flex justify-between sticky top-0 z-50 h-16 px-5 lg:px-10 items-center bg-gray-800 dark:bg-black drop-shadow-md text-gray-400;}
                    footer {@apply p-5 lg:p-10 bg-gray-800 dark:bg-gray-950 text-gray-500 text-right text-sm;}
                    h1 {@apply text-2xl lg:text-3xl font-medium;}
                    h2 {@apply text-xl lg:text-2xl font-bold;}
                    h3 {@apply md:text-lg lg:text-xl font-bold;}
                    h4 {@apply font-medium;}
                    h5 {@apply lg:text-lg font-bold;}
                    h6 {@apply font-bold;}
                }
                @layer components {
                    .testCard {background-color: var(--color-red-700);}
                }
            </style>
        @endif
        <script src="js/utils.js"></script>
        <script src="js/cookie.js"></script>
        <script src="js/slider.js"></script>
    </head>
    <body class="light" id="body">
        <div class="3xl:w-[1905px] justify-self-center" id="container">
            <header id="header">
                <h1><a href="/" class="text-gray-300 font-bold hover:text-orange-500 transition duration-300">Sanat Teorisi</a></h1>

                <div class="flex-1 group max-w-50 mx-auto py-3 ml-2 lg:ml-10 hover:text-orange-500 lg:hover:bg-white transition duration-300 dark:hover:dark:bg-gray-700">
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

                            <ul class="hidden peer-checked:block lg:group-hover:block absolute w-50 pt-4 bg-white text-gray-600 font-semibold dark:bg-gray-700 dark:text-gray-300">
                                <li class="pl-4 py-2 hover:bg-gray-300 hover:text-orange-500 transition duration-300"><a href="javascript:;">Galeri</a></li>
                                <li class="pl-4 py-2 hover:bg-gray-300 hover:text-orange-500 transition duration-300"><a href="javascript:;">Makale</a></li>
                                <li class="pl-4 py-2 hover:bg-gray-300 hover:text-orange-500 transition duration-300"><a href="javascript:;">Şiir</a></li>
                                <li class="pl-4 py-2 hover:bg-gray-300 hover:text-orange-500 transition duration-300"><a href="javascript:;">Sözlük</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="flex justify-end w-20 py-3 space-x-1">
                    <a href="javascript:;" title="dark/light mode" id="dark-light-mode">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path class="hidden dark:block" stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                            <path class="block dark:hidden" stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                        </svg>
                    </a>
                    <a href="javascript:;" class="text-sm text-[#06ff00] hover:underline" id="cc">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                        </svg>
                    </a>
                    <a href="javascript:;" onclick="getModal('login-modal');return false;" class="text-sm hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                        </svg>
                    </a>
                </div>
            </header>

            <main id="main">
                <section class="grid px-5 lg:px-10 bg-gray-400 dark:bg-gray-800 dark:text-gray-400" id="hero">
                    <h2>Hero Section</h2>
                    <div class="w-full my-12 mx-auto overflow-hidden box-border block relative" id="slider">
                        <div class="flex text-white transition duration-500" id="sliderTrack">
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=1" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=2" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=3" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=4" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=5" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=6" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=7" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=8" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=9" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=10" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=11" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=12" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=13" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=14" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=15" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=16" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=17" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=18" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=19" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="shrink-0 basis-full sm:basis-2/4 md:basis-2/6 lg:basis-1/4 xl:basis-1/5 px-2 group">
                                <img src="https://picsum.photos/200/150?random=20" alt="" class="w-full rounded-lg group-hover:brightness-50 m-auto">
                                <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                    <h4>Title</h4>
                                    <p>Description</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-2" id="navButtons">
                            <button data-index="0" class="h-1 px-4 cursor-pointer bg-gray-500"></button>
                            <button data-index="1" class="h-1 px-4 cursor-pointer bg-gray-500"></button>
                            <button data-index="2" class="h-1 px-4 cursor-pointer bg-gray-500"></button>
                            <button data-index="3" class="h-1 px-4 cursor-pointer bg-gray-500"></button>
                        </div>
                    </div>
                </section>

                <section class="bg-gray-300 dark:bg-gray-700" id="article-contents">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="p-5 lg:p-10 bg-gray-50 text-gray-600 dark:bg-gray-600/50 dark:text-gray-300" id="best-articles">
                            <h2><span class="p-3">EN İYİ MAKALELER</span></h2>
                            <p class="p-3 mb-2 border-b border-gray-400 dark:border-gray-800">Makaleler bölümündeki en iyi 5 içerik.</p>
                            <article class="block p-3 rounded-xl hover:bg-gray-200 transition duration-300 dark:hover:bg-gray-700">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Eser Analiz Yöntemleri</a></h4>
                                <p>Sanat olgusunun varlığını kavramanın en doğru yolu, sanat eserini çözümlemekte yatmaktadır. Bu konuy...</p>
                            </article>
                            <article class="block p-3 rounded-xl hover:bg-gray-200 transition duration-300 dark:hover:bg-gray-700">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Türk Resminde Kurtuluş Savaşı Teması</a></h4>
                                <p>Sanatın toplumsal yapılara, bağlı gelişmesiyle, sanatçının yaratımını politik, ekonomik, kültürel şa...</p>
                            </article>
                            <article class="block p-3 rounded-xl hover:bg-gray-200 transition duration-300 dark:hover:bg-gray-700">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Altın Oran</a></h4>
                                <p>“Altın oran kavramı ve bu kavramın gizemi nedir?” diye düşündüğünüz olmuştur. Belki de bu kavramı il...</p>
                            </article>
                            <article class="block p-3 rounded-xl hover:bg-gray-200 transition duration-300 dark:hover:bg-gray-700">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Sokrates ve Felsefesi</a></h4>
                                <p>M.Ö. 469-399 yılları arasında yaşamış olan ünlü Yunanlı düşünür. Platon’un hocası olan Sokrates, yaz...</p>
                            </article>
                            <article class="block p-3 rounded-xl hover:bg-gray-200 transition duration-300 dark:hover:bg-gray-700">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Modernizm ve Sanat Akımlarından Notlar</a></h4>
                                <p>1750’lerden 1890’lara kadar süren ilk sanayi devrimi ardından, 2. Sanayi Devri 1896’larda başlayıp 1...</p>
                            </article>
                        </div>
                        <div class="p-5 lg:p-10 text-gray-600 dark:text-gray-300" id="last-articles">
                            <h2><span class="p-3">SON 5 MAKALE</span></h2>
                            <p class="p-3 mb-2 border-b border-gray-400 dark:border-gray-800">Makaleler bölümündeki son 5 içerik.</p>
                            <article class="block p-3 rounded-xl hover:bg-gray-200 transition duration-300 dark:hover:bg-gray-800">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Sürreal Resimde Kadın İmgesi</a></h4>
                                <p>Sürrealizm, sanat ve yaşam alanında radikal başkaldırı ve kural tanımaz tavrın 20 yüz yılın ilk çeyr...</p>
                            </article>
                            <article class="block p-3 rounded-xl hover:bg-gray-200 transition duration-300 dark:hover:bg-gray-800">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Büyük Masturbator</a></h4>
                                <p>Büyük Masturbator, Salvador Dalinin ikonik bir eseri ve ressamın sürrealist dönemine ait olarak kabu...</p>
                            </article>
                            <article class="block p-3 rounded-xl hover:bg-gray-200 transition duration-300 dark:hover:bg-gray-800">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Ölümün Kitsch Bir İmge Örneği Olarak Günümüz İran’ında Üretilen Mezar Taşları</a></h4>
                                <p>Farklı çağlarda ölümle ilgili üretilen imgeler, metafiziğe nasıl bakıldığını dışa vurmaktadır. Kitsc...</p>
                            </article>
                            <article class="block p-3 rounded-xl hover:bg-gray-200 transition duration-300 dark:hover:bg-gray-800">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Sanatta Bedenin Uyku Hali</a></h4>
                                <p>Beden, canlının maddesel kanıtıdır. Bedeni betimlemek çağlar boyunca sanatın en önemli sorunsalların...</p>
                            </article>
                            <article class="block p-3 rounded-xl hover:bg-gray-200 transition duration-300 dark:hover:bg-gray-800">
                                <h4><a href="javascript:;" class="text-orange-500 hover:underline">Orhan Pamuk’un Beyaz Kale Romanında Ayna Oyunları</a></h4>
                                <p>Genelde ayna varlıkların görüntüsünü yansıtan ya da süs olarak kullanılan eşyalardan biri olarak düş...</p>
                            </article>
                        </div>
                    </div>
                </section>

                <section class="px-5 lg:px-10 py-5 bg-gray-200 text-white dark:bg-gray-600" id="gallery-top-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4" id="gallery">
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=21" alt="." class="w-full rounded-lg group-hover:brightness-50 m-auto">
                            <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=22" alt="." class="w-full rounded-lg group-hover:brightness-50 m-auto">
                            <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=23" alt="." class="w-full rounded-lg group-hover:brightness-50 m-auto">
                            <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=24" alt="." class="w-full rounded-lg group-hover:brightness-50 m-auto">
                            <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=25" alt="." class="w-full rounded-lg group-hover:brightness-50 m-auto">
                            <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                <h4>Title</h4>
                                <p>2Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=26" alt="." class="w-full rounded-lg group-hover:brightness-50 m-auto">
                            <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=27" alt="." class="w-full rounded-lg group-hover:brightness-50 m-auto">
                            <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://picsum.photos/200/150?random=28" alt="." class="w-full rounded-lg group-hover:brightness-50 m-auto">
                            <div class="bottom-0 mx-2 opacity-0 group-hover:bottom-2 group-hover:opacity-100 duration-300 absolute">
                                <h4>Title</h4>
                                <p>Description</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="px-5 lg:px-10 py-2 bg-white text-gray-600 dark:bg-gray-700 dark:text-gray-300" id="popular-content">
                    <div class="block py-5 border-b border-gray-300 dark:border-gray-600">
                        <h2>POPÜLER KATEGORİLER</h2>
                        <p>Tüm kategoriler, tüm eserler.</p>
                    </div>
                    <div class="block md:flex justify-between py-5">
                        <div id="popular-gallery">
                            <h3><a href="javascript:;" class="hover:underline">GALERİ KATEGORİLERİ</a></h3>
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
                            <h3><a href="javascript:;" class="hover:underline">MAKALE KATEGORİLERİ</a></h3>
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
                            <h3><a href="javascript:;" class="hover:underline">ŞİİR KATEGORİLERİ</a></h3>
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

                <section class="px-5 lg:px-10 py-5 space-y-1 bg-white dark:bg-gray-700" id="expand-collapse">
                    <details class="group px-5 rounded-xl bg-gray-100 text-gray-600 hover:ring-1 hover:ring-gray-300 transition duration-300 dark:bg-gray-600 dark:text-gray-400" id="home1">
                        <summary class="flex justify-between py-5 select-none cursor-pointer hover:text-orange-500 focus:text-orange-500 transition duration-300">
                            <h3>Haftanın Yazısı: Dada Manifestosu</h3>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-6 transform transition-transform duration-200 group-open:rotate-180">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </summary>
                        <div class="pb-4 space-y-2 text-gray-600 dark:text-gray-200">
                            <h4>Dada Manifestosu</h4>
                            <p>Gazetecileri beklenmedik bir dünyanın kapısına getiren bir sözcüğün – DADA – büyüsü, bizim için hiçbir önem taşımıyor...</p>
                            <p>Yazar: Tristan Tzara</p>
                        </div>
                    </details>

                    <details class="group px-5 rounded-xl bg-gray-100 text-gray-600 hover:ring-1 hover:ring-gray-300 transition duration-300 dark:bg-gray-600 dark:text-gray-400" id="home2">
                        <summary class="flex justify-between py-5 select-none cursor-pointer hover:text-orange-500 focus:text-orange-500 transition duration-300">
                            <h3>Haftanın Şiiri: Daha Ne Zaman</h3>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-6 transform transition-transform duration-200 group-open:rotate-180">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </summary>
                        <div class="pb-4 space-y-2 text-gray-600 dark:text-gray-200">
                            <h4>Daha Ne Zaman</h4>
                            <p>
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
                            <p><b>Şair:</b> <a href="javascript:;" class="hover:underline">M.Nazım Güler</a></p>
                        </div>
                    </details>
                </section>

                <section class="bg-gray-300 text-gray-700 dark:bg-gray-800 dark:text-gray-500" id="bottom">
                    <div class="grid grid-cols-2 lg:grid-cols-5 gap-4 p-5 pb-1 lg:px-10" id="bottom-up">
                        <div class="hidden lg:block w-10 -rotate-180 font-black text-4xl text-gray-400 select-none" style="writing-mode:vertical-lr">Sanat Teorisi</div>
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
                        <div class="col-2 col-start-2 lg:col-5 lg:col-start-5 flex justify-end">
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
                    <div class="flex justify-end space-x-8 p-5 lg:px-10 bg-gray-400 text-gray-700 dark:bg-gray-900 dark:text-gray-500" id="bottom-down">
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

            <footer id="footer">
                <p>Resimlerin izin alınmadan kopyalanması ve kullanılması <a href="javascript:;" class="text-gray-300 hover:underline">5846 sayılı fikir ve sanat eserleri kanunu</a>na göre suçtur.</p>
                <p>© 2003-2024 <span style="color: #1efe00;">SanatTeorisi</span>. Görsel yayınların tüm hakları ve sorumluluğu eser sahiplerine aittir.</p>
            </footer>
        </div>
        <div class="flex justify-center items-center fixed inset-0 bg-gray-900/80 backdrop-blur-md transition-opacity invisible" id="login-modal">
            <div class="min-w-[500px] max-w-full p-10 rounded-lg bg-white dark:bg-gray-700">
                <h2>Test Modal</h2>
                <a href="javascript:;" onclick="getModal('login-modal');return false;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
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
