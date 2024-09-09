@extends('./myskill/layouts.main')
@section('container')
    <section class="e-learning w-screen">
        <!-- Section 1: Hero -->
        <section class="bg-gradient-to-b from-orange-400 to-red-500 p-4 md:p-8 h-1/6">
            <div class="container mx-auto">
                <div class="grid grid-flow-col bg-white rounded-3xl items-center h-96">
                    <div class="grid grid-flow-row text-center mx-32">
                        <h3 class="font-bold text-xl py-2">Yuk Berlangganan Untuk Akses Materinya!</h3>
                        <h3 class="text-md py-2">Berlangganan sekarang juga untuk mulai. Pilih skill apapun dan pelajari
                            kapanpun. Dapatkan video materi terstruktur, modul praktik plus webinar series rancangan para
                            experts dari top companies.</h3>
                        <div class="py-2">
                            <button class="font-semibold py-3 px-6 bg-yellow-400 rounded-xl">Berlangganan Sekarang!</button>
                        </div>
                        <h3 class="font-bold text-sm text-red-500 p-2">10.000+ Orang Berlangganan Tiap Bulan</h3>
                    </div>
                    <div class="mx-20 -mt-28">
                        <h3 class="text-gray-500 font-semibold py-4">Materi</h3>
                        <div class="py-2 flex items-center justify-between">
                            <div class="flex items-center space-x-2 mx-6">
                                <i class="fa-regular fa-circle-play text-lg"></i>
                                <h3>1. Copywriting Introduction</h3>
                            </div>
                            <i class="fa-regular fa-square text-xl"></i>
                        </div>
                        <div class="py-2 flex items-center justify-between">
                            <div class="flex items-center space-x-2 mx-6">
                                <i class="fa-regular fa-circle-play text-lg"></i>
                                <h3>2. The Importance of Copywriting</h3>
                            </div>
                            <i class="fa-regular fa-square text-xl"></i>
                        </div>
                        <div class="py-2 flex items-center justify-between">
                            <div class="flex items-center space-x-2 mx-6">
                                <i class="fa-regular fa-circle-play text-lg"></i>
                                <h3>3. Copywriting vs Content Writing</h3>
                            </div>
                            <i class="fa-regular fa-square text-xl"></i>
                        </div>
                        <div class="py-2 flex items-center justify-between">
                            <div class="flex items-center space-x-2 mx-6">
                                <i class="fa-regular fa-circle-play text-lg"></i>
                                <h3>4. Characteristic of Copywriting</h3>
                            </div>
                            <i class="fa-regular fa-square text-xl"></i>
                        </div>
                        <div class="py-2 flex items-center justify-between">
                            <div class="flex items-center space-x-2 mx-6">
                                <i class="fa-regular fa-circle-play text-lg"></i>
                                <h3>5. Copywriting Media</h3>
                            </div>
                            <i class="fa-regular fa-square text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Section 2: Testimonials -->
        <section class="bg-white p-4 md:p-8">
            <div class="grid grid-flow-row">
                <div class="space-x-2 flex items-center">
                    <button class="border border-teal-600 text-teal-600 px-3 py-1 text-sm rounded-lg">
                        Digital Marketing
                    </button>
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                    <button class="border border-teal-600 text-teal-600 px-3 py-1 text-sm rounded-lg">
                        Digital Marketing
                    </button>
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                    <button class="text-teal-600 px-3 text-sm">
                        Digital Marketing
                    </button>
                </div>
                <div class="text-start py-4 me-96">
                    <h3 class="text-4xl font-bold py-2">Copywriting Introduction</h3>
                    <h3 class="text-lg font-semibold py-1">Veronica Gabriella - Senior Copywriter SATU Dental Group</h3>
                    <h3 class="text-md py-1">Copywriting menjadi bagian dalam digital marketing sebagai sarana untuk
                        berkomunikasi dengan audiens mengenai produk supaya pada akhirnya akan menjadi keputusan dalam
                        pembelian. Dalam materi ini kita akan mempelajari pengertian copywriting serta perkembangan dalam
                        copywriting. Kita juga akan mempelajari kedudukan dari copywriting.</h3>
                </div>
                <hr class="py-4">
                <div>
                    <h3 class="font-bold text-2xl">Akan Didapatkan</h3>
                    <div class="py-8 flex space-x-2">
                        <div>
                            <button class="bg-blue-600 px-5 py-2 flex items-center rounded-lg">
                                <i class="fa-solid fa-medal text-white text-sm mr-2"></i>
                                <span class="text-white font-semibold text-sm">Sertifikat</span>
                            </button>
                        </div>
                        <div>
                            <button class="bg-blue-600 px-5 py-2 flex items-center rounded-lg">
                                <i class="fa-regular fa-file-lines text-white text-sm mr-2"></i>
                                <span class="text-white font-semibold text-sm">Modul Praktik</span>
                            </button>
                        </div>
                        <div>
                            <button class="bg-blue-600 px-5 py-2 flex items-center rounded-lg">
                                <i class="fa-solid fa-book-bookmark text-white text-sm mr-2"></i>
                                <span class="text-white font-semibold text-sm">Bahan Bacaan</span>
                            </button>
                        </div>
                        <div>
                            <button class="bg-blue-600 px-5 py-2 flex items-center rounded-lg">
                                <i class="fa-solid fa-users text-white text-sm mr-2"></i>
                                <span class="text-white font-semibold text-sm">Grup Diskusi</span>
                            </button>
                        </div>
                    </div>
                    <hr class="py-4">
                </div>

                <div class="container mx-auto">
                    <h2 class="text-2xl font-bold mb-6 text-start">Rating Materi</h2>
                    <div class="flex overflow-x-auto space-x-4 pb-4 no-scrollbar">
                        <div class="bg-white p-4 rounded-2xl shadow-md min-w-[290px] sm:min-w-[290px] md:min-w-[290px]">
                            <div class="flex flex-col items-start mb-4">
                                <h3 class="font-bold py-1.5">
                                    Sukisworo nurrudin rizky
                                </h3>
                                <div class="flex flex-row space-x-1">
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                </div>
                                <div class="flex flex-row space-x-2 py-1.5">
                                    <i class="fa-regular fa-calendar-days text-sm text-gray-400"></i>
                                    <h3 class="text-sm text-gray-400">9 Sep 2024</h3>                                    
                                </div>
                                <h3><h3 class="pt-4">informasi terkait copy writting sangat bisa dipahami. serta penyampainyan materi yang sangat mudah didengar</h3></h3>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-2xl shadow-md min-w-[290px] sm:min-w-[290px] md:min-w-[290px]">
                            <div class="flex flex-col items-start mb-4">
                                <h3 class="font-bold py-1.5">
                                    Muhammad Aridy Muchasta
                                </h3>
                                <div class="flex flex-row space-x-1">
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                </div>
                                <div class="flex flex-row space-x-2 py-1.5">
                                    <i class="fa-regular fa-calendar-days text-sm text-gray-400"></i>
                                    <h3 class="text-sm text-gray-400">9 Sep 2024</h3>                                    
                                </div>
                                <h3><h3 class="pt-4">cutup mud untuk memahami course ini, smog kedepannya saya semangat terus belajarnya</h3></h3>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-2xl shadow-md min-w-[290px] sm:min-w-[290px] md:min-w-[290px]">
                            <div class="flex flex-col items-start mb-4">
                                <h3 class="font-bold py-1.5">
                                    Berlian Gangga Ayodyah
                                </h3>
                                <div class="flex flex-row space-x-1">
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                </div>
                                <div class="flex flex-row space-x-2 py-1.5">
                                    <i class="fa-regular fa-calendar-days text-sm text-gray-400"></i>
                                    <h3 class="text-sm text-gray-400">9 Sep 2024</h3>                                    
                                </div>
                                <h3><h3 class="pt-4">Alhamdulillah, course ini sangat lengkap untuk menambah wawasan saya seputar copywriting</h3></h3>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-2xl shadow-md min-w-[290px] sm:min-w-[290px] md:min-w-[290px]">
                            <div class="flex flex-col items-start mb-4">
                                <h3 class="font-bold py-1.5">
                                    Rukmono Danang Nugroho
                                </h3>
                                <div class="flex flex-row space-x-1">
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                </div>
                                <div class="flex flex-row space-x-2 py-1.5">
                                    <i class="fa-regular fa-calendar-days text-sm text-gray-400"></i>
                                    <h3 class="text-sm text-gray-400">9 Sep 2024</h3>                                    
                                </div>
                                <h3><h3 class="pt-4">Saya sangat suka course tentang copywriting ini! Akhirnya, saya tahu tentang copywriting, content writing, dan UX writing.</h3></h3>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-2xl shadow-md min-w-[290px] sm:min-w-[290px] md:min-w-[290px]">
                            <div class="flex flex-col items-start mb-4">
                                <h3 class="font-bold py-1.5">
                                    Diva Syafiul
                                </h3>
                                <div class="flex flex-row space-x-1">
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                </div>
                                <div class="flex flex-row space-x-2 py-1.5">
                                    <i class="fa-regular fa-calendar-days text-sm text-gray-400"></i>
                                    <h3 class="text-sm text-gray-400">7 Sep 2024</h3>                                    
                                </div>
                                <h3><h3 class="pt-4">Materi yang dijelaskan sangat mudah di fahami dan ringkas. Bisa menjadi langkah awal mengetahui copywriting</h3></h3>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-2xl shadow-md min-w-[290px] sm:min-w-[290px] md:min-w-[290px]">
                            <div class="flex flex-col items-start mb-4">
                                <h3 class="font-bold py-1.5">
                                    Diva Syafiul
                                </h3>
                                <div class="flex flex-row space-x-1">
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                </div>
                                <div class="flex flex-row space-x-2 py-1.5">
                                    <i class="fa-regular fa-calendar-days text-sm text-gray-400"></i>
                                    <h3 class="text-sm text-gray-400">7 Sep 2024</h3>                                    
                                </div>
                                <h3><h3 class="pt-4">Materi yang dijelaskan sangat mudah di fahami dan ringkas. Bisa menjadi langkah awal mengetahui copywriting</h3></h3>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-2xl shadow-md min-w-[290px] sm:min-w-[290px] md:min-w-[290px]">
                            <div class="flex flex-col items-start mb-4">
                                <h3 class="font-bold py-1.5">
                                    Agus Wijaya
                                </h3>
                                <div class="flex flex-row space-x-1">
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                </div>
                                <div class="flex flex-row space-x-2 py-1.5">
                                    <i class="fa-regular fa-calendar-days text-sm text-gray-400"></i>
                                    <h3 class="text-sm text-gray-400">6 Sep 2024</h3>                                    
                                </div>
                                <h3><h3 class="pt-4">dengan mengambil course ini saya jadi mengetahui dasar dari copywriting</h3></h3>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-2xl shadow-md min-w-[290px] sm:min-w-[290px] md:min-w-[290px]">
                            <div class="flex flex-col items-start mb-4">
                                <h3 class="font-bold py-1.5">
                                    Githa Suci Purwadi Putri
                                </h3>
                                <div class="flex flex-row space-x-1">
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                </div>
                                <div class="flex flex-row space-x-2 py-1.5">
                                    <i class="fa-regular fa-calendar-days text-sm text-gray-400"></i>
                                    <h3 class="text-sm text-gray-400">6 Sep 2024</h3>                                    
                                </div>
                                <h3><h3 class="pt-4">Pembelajarannya seru dan mudah dipahami. Contohnya juga variatif dan nyata. Alhamdulillah menambah wawasan.</h3></h3>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-2xl shadow-md min-w-[290px] sm:min-w-[290px] md:min-w-[290px]">
                            <div class="flex flex-col items-start mb-4">
                                <h3 class="font-bold py-1.5">
                                    Dinda Ayu Muthia
                                </h3>
                                <div class="flex flex-row space-x-1">
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                    <i class="fa-solid fa-star text-yellow-300"></i>
                                </div>
                                <div class="flex flex-row space-x-2 py-1.5">
                                    <i class="fa-regular fa-calendar-days text-sm text-gray-400"></i>
                                    <h3 class="text-sm text-gray-400">6 Sep 2024</h3>                                    
                                </div>
                                <h3><h3 class="pt-4">Materinya gampang banget buat dicerna, penyampaiannya bagus banget, mudah dipahami</h3></h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
        </section>


        {{-- Section 4: Skills --}}
        <section class="bg-white p-4 md:p-8">
            <div class="container mx-auto text-start">
                <h2 class="text-2xl font-bold mb-4">Rekomendasi Kelas Lainnya</h2>
                <p class="mb-4 text-gray-600">Pelajari skill melalui serial short video + mini quiz dengan learning path
                    dan topik yang terstruktur.</p>

                <!-- Carousel Container -->
                <div class="overflow-x-auto pb-2 no-scrollbar mb-5">
                    @include('./myskill/partials.cards-elearning')
                </div>
            </div>
        </section>
        </div>
    </section>
@endsection
