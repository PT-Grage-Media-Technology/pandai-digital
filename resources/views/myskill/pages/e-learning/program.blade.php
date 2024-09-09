@extends('./myskill/layouts.main')
@section('container')
<section class="e-learning w-screen">
    <!-- Section Main -->
    <section class="bg-gradient-to-b from-orange-400 to-red-500 p-4 md:p-8 w-screen">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-col lg:flex-row items-center">
                <img src="{{ asset('assets/e-learning/header.webp') }}" alt="Woman with laptop"
                    class="mb-4 md:mb-4 w-full h-auto max-sm:max-w-xs md:max-w-sm lg:w-1/2 rounded-lg">

                <div class="text-center max-sm:text-start md:text-start lg:ml-6 lg:text-left">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4 text-white max">Digital Marketing.</h1>
                    <p class="text-sm md:text-base text-white mb-4">
                        <i class="fa-solid fa-book-open mr-1"></i>12 Topik <i class="fa-solid fa-list ml-2"></i> 153 Materi
                    </p>
                    <p class="text-sm md:text-base text-white mb-4">
                        🎯 Belajar & praktek 140+ materi tentang Marketing Management, Brand Strategy, Copywriting, Social Media, Campaign, Facebook Ads, Google Ads, TikTok Ads, SEO, CRM dan Influencer Marketing.
                    </p>
                    <p class="text-sm md:text-base font-semibold text-white mb-4">
                        ✅ Testimoni Tutor:
                    </p>
                    <p class="text-sm md:text-base text-white">
                        "Materi ini saya rancang dari 10 tahun lebih berkecimpung di multinational marketing agency dan tech companies. Terstruktur dan sesuai standar industri terkini. Yuk mulai menyelami materinya!"
                    <p class="text-sm md:text-base font-semibold text-white mb-4"> - Ryan Dwana, Business Director at Initiative - Global Media Agency. </p>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- section 2 : Horizontal scrollbar -->
    <section class="mt-8 lg:ml-10 overflow-x-auto flex gap-4 p-4 w-screen no-scrollbar">
        <!-- text area 1 -->
        <div class="flex-shrink-0 px-2 min-w-[16rem]">
            <article class="bg-white rounded-lg text-balance shadow-md p-4 md:p-6 w-64">
                <h3 class="font-semibold text-md">Materi</h3>
                <div class="h-1 w-12 bg-orange-500 mt-1 mb-2"></div>
                <p class="text-gray-800 text-sm">Kuasai 140+ skill Digital Marketing, mulai dari membuat copywriting dan konten hingga optimalisasi berbagai channel seperti Social Media, Ads, SEO, dan CRM. Dibuat oleh para top companies untuk perkembangan.</p>
            </article>
        </div>
        <!-- text area 2 -->
        <div class="flex-shrink-0 px-2 min-w-[16rem]">
            <article class="bg-white rounded-lg text-balance shadow-md p-4 md:p-6 w-64">
                <h3 class="font-semibold text-lg">Praktik</h3>
                <div class="h-1 w-12 bg-orange-500 mt-1 mb-2"></div>
                <p class="text-gray-800 text-sm">Puluhan project buatan praktisi yang disesuaikan dengan kebutuhan industri sebagai portfoliomu. Jadikan dirimu lebih unggul untuk melamar kerja, freelance, rintis bisnis hingga mengembangkan karir.</p>
            </article>
        </div>
        <!-- text area 3 -->
        <div class="flex-shrink-0 px-2 min-w-[16rem]">
            <article class="bg-white rounded-lg text-balance shadow-md p-4 md:p-6 w-64">
                <h3 class="font-semibold text-lg">Benefit</h3>
                <div class="h-1 w-12 bg-orange-500 mt-1 mb-2"></div>
                <p class="text-gray-800 text-sm">Dapatkan Sertifikat tiap menyelesaikan materi. Modul Praktik untuk Portfolio. Pre & Post Test untuk uji pemahaman. Gabung Grup Komunitas untuk berdiskusi. Short Class Gratis Bulanan yang bersertifikat.</p>
            </article>
        </div>
        <!-- text area 4 -->
        <div class="flex-shrink-0 px-2 min-w-[16rem]">
            <article class="bg-white rounded-lg text-balance shadow-md p-4 md:p-6 w-64">
                <h3 class="font-semibold text-lg">Persyaratan</h3>
                <div class="h-1 w-12 bg-orange-500 mt-1 mb-2"></div>
                <p class="text-gray-800 text-sm">Tidak harus memiliki background pendidikan tertentu. Tutor akan mengajarimu dari level dasar hingga lanjut dengan kombinasi konsep, studi kasus dan praktik. Video bisa dipelajari dengan berbagai device.</p>
            </article>
        </div>
    </section>

    <!-- Section 3 : Program Lainnya -->
    <section class="w-screen">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between px-6 py-4 w-screen">
            <h2 class="text-xl font-bold mb-2 sm:mb-0">Marketing Management</h2>
            <br class="max-sm:hidden md:hidden">
            <div class="w-full sm:flex-1 border-t-2 border-orange-500 mb-2 sm:mb-0 sm:mx-4"></div>
            <button class="bg-orange-500 text-white px-4 sm:px-8 py-2 rounded-md flex items-center">
                Selengkapnya <i class="fa-solid fa-arrow-right ml-2"></i>
            </button>
        </div>

    </section>


    @endsection