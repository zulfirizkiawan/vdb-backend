<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {!! __('Membuat &raquo; Transaksi Praktik') !!}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            Ada yang salah!
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </p>
                        </div>
                    </div>
                @endif
                <form class="w-full" action="{{ route('praktikmanual.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Nama pelanggan
                            </label>
                            <input value="{{ old('customer_name') }}" name="customer_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Nama Pelanggan">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Jenis Hewan
                            </label>
                            <input value="{{ old('animal_type') }}" name="animal_type" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Jenis Hewan">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Jenis Kelamin Hewan
                            </label>
                            <input value="{{ old('animal_gender') }}" name="animal_gender" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Jenis Kelamin Hewan">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Warna Hewan
                            </label>
                            <input value="{{ old('animal_color') }}" name="animal_color" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Warna Hewan">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Gejala Pertama
                            </label>
                            <select name="first_symptom" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name">
                                <option value="">-- Pilih Gejala Hewan --</option>
                                <option value="Bersin - Bersin">Bersin - Bersin</option>
                                <option value="Demam">Demam</option>
                                <option value="Benjolan">Benjolan</option>
                                <option value="Pembengkakan">Pembengkakan</option>
                                <option value="Kehilangan Selera Makan">Kehilangan Selera Makan</option>
                                <option value="Muntah - Muntah">Muntah</option>
                                <option value="Bulu Rontok">Bulu Rontok</option>
                                <option value="Infeksi Mata">Infeksi Mata</option>
                                <option value="Gusi Berdarah">Gusi Berdarah</option>
                                <option value="Penurunan Berat Badan">Penurunan Berat Badan</option>
                                <option value="Kejang - Kejang">Kejang-Kejang</option>
                                <option value="Pingsan">Pingsan</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Gejala Kedua
                            </label>
                            <select name="second_symptom" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name">
                                <option value="">-- Pilih Gejala Hewan --</option>
                                <option value="Bersin - Bersin">Bersin - Bersin</option>
                                <option value="Demam">Demam</option>
                                <option value="Benjolan">Benjolan</option>
                                <option value="Pembengkakan">Pembengkakan</option>
                                <option value="Kehilangan Selera Makan">Kehilangan Selera Makan</option>
                                <option value="Muntah - Muntah">Muntah</option>
                                <option value="Bulu Rontok">Bulu Rontok</option>
                                <option value="Infeksi Mata">Infeksi Mata</option>
                                <option value="Gusi Berdarah">Gusi Berdarah</option>
                                <option value="Penurunan Berat Badan">Penurunan Berat Badan</option>
                                <option value="Kejang - Kejang">Kejang-Kejang</option>
                                <option value="Pingsan">Pingsan</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Catatan
                            </label>
                            <textarea value="{{ old('note') }}" name="note" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Catatan">{{ old('note') }}</textarea>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Harga
                            </label>
                            <input value="{{ old('price') }}" name="price" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="number" placeholder="Harga Penitipan">
                        </div>
                    </div>
            
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 text-right">
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
