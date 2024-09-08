@extends('layouts.main')
@section('container')
    <div class="payment bg-gray-50 font-inter w-screen">
        <div class="max-w-5xl mx-auto py-10 px-4 md:px-10">
            <!-- Main Container -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Section -->
                <div class="lg:col-span-2">
                    <!-- eLearning Banner -->
                    <div
                        class="bg-gradient-to-r from-blue-500 to-teal-500 rounded-lg p-6 flex flex-col md:flex-row items-center space-x-0 md:space-x-4 space-y-4 md:space-y-0">
                        <div class="md:w-1/2">
                            <h2 class="text-2xl font-bold text-white mb-2">eLearning</h2>
                            <p class="text-white mb-4">Pelajari Ratusan Skill Bersertifikat Sekali Bayar. Fleksibel &
                                Praktikal.</p>
                            <button
                                class="bg-yellow-400 text-black px-4 py-2 rounded-full font-semibold">Selengkapnya</button>
                        </div>
                        <div class="md:w-1/2">
                            <img src="https://placehold.co/250x150" alt="eLearning Image" class="rounded-lg mx-auto">
                        </div>
                    </div>

                    <!-- Testimonial Section -->
                    <div class="mt-8 px-4 border-b mb-4 pb-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Testimoni</h3>
                        <div class="flex items-center mb-6 flex-col sm:flex-row sm:items-start">
                            <!-- Gambar dan teks rating -->
                            <img src="https://placehold.co/50x50" alt="Course Report" class="mb-2 sm:mb-0 sm:mr-2 max-w-[50px]">
                            <span class="text-green-600 font-semibold text-center sm:text-left">4.9 rating on Course Report</span>
                            <!-- Ikon rating -->
                            <div class="flex items-center mt-2 sm:mt-0">
                                <img src="https://placehold.co/50x50" alt="Course Report" class="rounded-full mr-1 max-w-[30px]">
                                <img src="https://placehold.co/50x50" alt="Course Report" class="rounded-full mr-1 max-w-[30px]">
                                <img src="https://placehold.co/50x50" alt="Course Report" class="rounded-full mr-1 max-w-[30px]">
                                <img src="https://placehold.co/50x50" alt="Course Report" class="rounded-full mr-1 max-w-[30px]">
                            </div>
                            <span class="text-gray-500 mx-2">></span>
                            <span class="text-gray-600">1.5 Juta Member</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Testimonial 1 -->
                            <div class="flex items-center p-4 bg-white rounded-lg shadow">
                                <img src="https://placehold.co/60x60" alt="Paksi Cahyo Baskoro" class="rounded-full mr-4 max-w-[60px]">
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Paksi Cahyo Baskoro</p>
                                    <p class="text-gray-600 text-xs">Diterima sebagai Copywriter di DBS Bank Indonesia.</p>
                                </div>
                            </div>
                            <!-- Testimonial 2 -->
                            <div class="flex items-center p-4 bg-white rounded-lg shadow">
                                <img src="https://placehold.co/60x60" alt="M. Arkhan Doohan" class="rounded-full mr-4 max-w-[60px]">
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">M. Arkhan Doohan</p>
                                    <p class="text-gray-600 text-xs">Diterima sebagai Data Analyst di United Tractors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Right Section -->
                <div class="lg:ml-9 lg:w-full">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h3 class="text-gray-700 font-semibold mb-4">RINGKASAN PRODUK</h3>
                        <div class="border-b border-gray-300 pb-4 mb-4">
                            <p class="text-gray-800">Paket Video E-Learning 6 Bulan</p>
                            <p class="text-gray-600">Rp 99.000</p>
                        </div>
                        <div class="mb-4">
                            <label for="promo" class="text-gray-700 text-sm mb-2 block">Kode Promo / Kupon</label>
                            <input type="text" id="promo" class="w-full p-2 border border-gray-300 rounded-md">
                            <button class="mt-2 w-full text-sm text-blue-600 flex items-center bg-transparent hover:bg-blue-100 border border-blue-600 rounded-md px-3 py-2">
                                <i class="fa-solid fa-tag mr-2"></i>Lihat Promo Hari Ini
                            </button>
                        </div>
                        
                        <button class="w-full bg-teal-600 text-white py-2 rounded-md mb-4">Pilih Metode Pembayaran > </button>
                        <div class="border-b border-gray-300 pb-4 mb-4">
                            <div class="flex justify-between text-gray-700">
                                <span>Subtotal</span>
                                <span>Rp 99.000</span>
                            </div>
                            <div class="flex justify-between text-gray-500 text-sm font-medium">
                                <span>PPN (11%)</span>
                                <span>Rp 10.890</span>
                            </div>
                            
                            
                        </div>
                        <div class="flex justify-between font-semibold text-gray-800 text-lg">
                            <span>Total</span>
                            <span>Rp 109.890</span>
                        </div>
                        <p class="text-gray-500 text-xs mt-2 text-right ml-auto">+ kode unik</p>

                        <button class="w-full bg-gray-200 text-gray-600 py-2 rounded-md mt-4">Lanjut Bayar</button>
                    </div>
                </div>
            </div>

            <div class="mt-9">
                <!-- Header Section -->
                <h2 class="text-gray-500 font-semibold text-sm mb-2">Berlangganan E-Learning</h2>
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Paket Video E-Learning 6 Bulan</h1>
                <div class="text-2xl font-semibold text-gray-700">
                    Rp 99.000 <span class="text-sm line-through text-gray-500">Rp 2.100.000</span>
                </div>

                <!-- Product Description -->
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-teal-600 mb-2">Deskripsi Produk</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Langganan sekali bayar untuk bisa akses semua materi bersertifikat. Tanpa Batas. Makin lama periode
                        langganan, makin hemat dan untung banyak!
                    </p>
                </div>

                <!-- Benefits Section -->
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-teal-600 mb-2">Benefits</h3>
                    <ul class="text-gray-700 space-y-2">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-teal-600 mr-2"></i>
                            <span>1400+ Materi Video</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-teal-600 mr-2"></i>
                            <span>1400+ Modul Praktik Portfolio</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-teal-600 mr-2"></i>
                            <span>Sertifikat di Tiap Materi</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-teal-600 mr-2"></i>
                            <span>Grup Komunitas</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-teal-600 mr-2"></i>
                            <span>FREE 6-12x Webinar Series</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-teal-600 mr-2"></i>
                            <span>Diskon untuk Bootcamp</span>
                        </li>
                    </ul>
                </div>

                <!-- Terms and Conditions -->
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-teal-600 mb-2">Ketentuan</h3>
                    <ul class="text-gray-700 space-y-2">
                        <li class="flex items-start">
                            <i class="fa-solid fa-exclamation-triangle text-gray-500 mr-2"></i>
                            <span>Hanya berlaku untuk new member.</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-exclamation-triangle text-gray-500 mr-2"></i>
                            <span>Kode promo tidak berlaku kelipatan.</span>
                        </li>
                    </ul>
                </div>

                <!-- Call to Action Button -->
                <button class="mt-6 w-full bg-teal-600 text-white py-4 rounded-md text-lg">Pilih Metode Pembayaran</button>
            </div>
        </div>
    </div>
@endsection
