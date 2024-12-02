@extends('./myskill/layouts.main')
@section('container')

<div class="flex flex-col lg:flex-row">
    <!-- Sidebar -->
    <aside class="w-full md:w-full lg:w-1/4 px-4 h-full max-md:relative lg:sticky top-5 lg:top-0">
            <!-- Sidebar Container -->
            <input type="checkbox" id="toggle-nav" class="hidden" />
            <div class="bg-white rounded-lg shadow-md md:mt-2 overflow-hidden border border-gray-300">
                <!-- Toggle Button -->
                <label for="toggle-nav" class="lg:hidden bg-blue-600 text-white font-semibold p-3 rounded-lg shadow-md cursor-pointer flex items-center justify-between">
                    Navigasi Profil
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </label>

                <!-- Sidebar Content -->
                <div class="transition-all duration-300 ease-in-out max-h-0 md:max-h-0 lg:max-h-full lg:block overflow-hidden" id="sidebar-content">
                    <h2 class="text-gray-700 font-semibold hidden lg:block ml-8 mt-4">Navigasi Profil</h2>
                    <ul class="space-y-1 py-3">
                        <li class="p-1 px-5">
                            <a href="/my-profile" class="flex items-center text-gray-600 hover:bg-blue-100 rounded-lg p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 2a6 6 0 100 12 6 6 0 000-12zM8 13a4.978 4.978 0 00-3.5 1.5A8.978 8.978 0 0110 16c1.654 0 3.18-.446 4.5-1.5A4.978 4.978 0 0012 13H8z" />
                                </svg>
                                Profil Saya
                            </a>
                        </li>
                        <li class="p-1 px-5">
                            <a href="/profile/my-purchase" class="flex items-center text-gray-600 hover:bg-gray-100 rounded-lg p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M16 6V4a2 2 0 00-2-2H6a2 2 0 00-2 2v2H3a1 1 0 00-1 1v9a3 3 0 003 3h10a3 3 0 003-3V7a1 1 0 00-1-1h-1zM6 4h8v2H6V4zm4 11a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                                Akses Pembelian
                            </a>
                        </li>
                        <li class="p-1 px-5">
                            <a href="/profile/my-activity" class="flex items-center text-gray-600 hover:bg-gray-100 rounded-lg p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-.894.553L2.382 10H4v5a2 2 0 002 2h8a2 2 0 002-2v-5h1.618l-2.724-7.447A1 1 0 0014 2H6zm4 12a2 2 0 110-4 2 2 0 010 4z" clip-rule="evenodd" />
                                </svg>
                                Aktivitas Saya
                            </a>
                        </li>
                        <li class="p-1 px-5">
                            <a href="/profile/my-transaction" class="flex items-center text-blue-600 hover:bg-gray-100 rounded-lg p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2 5a1 1 0 011-1h14a1 1 0 011 1v10a1 1 0 01-1 1H3a1 1 0 01-1-1V5zm3 7a1 1 0 100-2 1 1 0 000 2zm9-1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                                Riwayat Transaksi
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

    <style>
        /* Toggle the visibility of the sidebar content */
        #toggle-nav:checked~div #sidebar-content {
            max-height: 500px;
            /* Adjust this value as needed to accommodate the content */
        }

        /* Rotate the arrow when the dropdown is active */
        #toggle-nav:checked~div label svg {
            transform: rotate(180deg);
        }

        /* Ensure content is hidden by default on small and medium screens */
        #sidebar-content {
            max-height: 0;
            overflow: hidden;
        }

        /* For large screens, display the content fully */
        @media (min-width: 1024px) {
            #sidebar-content {
                max-height: none;
                overflow: visible;
            }
        }
    </style>


    <div class="w-full h-full">
        <h2 class="text-2xl font-semibold text-left mr-4 ml-4 md:ml-6 max-sm:ml-6 lg:mt-4 md:mt-2 max-sm:mt-8">Transaksi Saya</h2>
        <p class="text-sm text-left mb-4 ml-4 md:ml-6 ">Lihat semua transaksi kamu di MySkill.</p>
        <div class="p-4">
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
                <!-- Left Section -->
                <div class="mb-4 md:mb-0">
                    <p class="text-sm text-gray-500 mb-1">20240812-XD-1301000000001988</p>
                    <h2 class="text-lg font-bold text-gray-800">Paket Video E-Learning 6 Bulan</h2>
                    <p class="text-sm text-gray-600 mt-2">Dibuat: 12 Agu 2024, 11:32</p>
                    <p class="text-sm text-gray-600">Dibayarkan: -</p>
                    <p class="text-sm text-gray-600">Metode: qr-code/qris</p>
                </div>

                <!-- Right Section -->
                <div class="flex flex-col items-center md:items-end">
                    <!-- Status -->
                    <div class="mb-2">
                        <span class="text-sm font-semibold text-white bg-red-500 px-4 py-2 rounded-full">Kadaluarsa</span>
                    </div>
                    <!-- Price -->
                    <p class="text-lg font-semibold text-gray-800">Rp 111.514</p>
                    <!-- Detail Button -->
                    <button class="mt-2 bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-600">
                        Lihat Detail
                    </button>
                </div>
            </div>

        </div>

        <div class="flex mb-8 justify-end gap-4 mt-6 mr-4">
            <button class="bg-gray-100 text-gray-500 px-4 py-2 rounded hover:bg-gray-200">
                &lt; Sebelumnya
            </button>
            <button class="bg-gray-100 text-gray-500 px-4 py-2 rounded hover:bg-gray-200">
                Selanjutnya &gt;
            </button>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3" defer></script>
@endsection