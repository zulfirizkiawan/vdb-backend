<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dokter') }}
        </h2>
    </x-slot> 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-18">
                <a href="{{ route('doctor.create') }}" class="text-white font-bold py-2 px-4 rounded" style="background-color: #22b43a;">
                    + Create Dokter
                </a>
           </div>
           <div class="bg-white mt-8">
            <table class="table-auto w-full">
                <thead>
                <tr>
                    <th class="border px-6 py-4">ID</th>
                    <th class="border px-6 py-4">Gambar</th>
                    <th class="border px-6 py-4">Nama</th>
                    <th class="border px-6 py-4">No. Hp</th>
                    <th class="border px-6 py-4">Harga Konsultasi</th>
                    <th class="border px-6 py-4">Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($doctor as $item)
                        <tr>
                            <td class="border px-6 py-4 text-center">{{ $item->id }}</td>
                            <td class="border px-6 py-2 ">
                                <img src="{{ asset("storage/$item->doctor_photo_path ") }}" alt="" class="rounded" style="width: 100px">    
                            </td>
                            <td class="border px-6 py-4 ">{{ $item->name }}</td>
                           
                            <td class="border px-6 py-4 text-center">{{ $item->phoneNumber }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->price }}</td>

                            <td class=" px-6 py-3" style="display:flex; justify-content: space-evenly;">
                                    <a href="{{ route('doctor.show', $item->id) }}" class="text-white font-bold py-2 px-4 rounded" style="background-color: #d2d43c;">
                                        View
                                    </a>
                                    <a href="{{ route('doctor.edit', $item->id) }}" class="text-white font-bold py-2 px-4 rounded" style="background-color: #2666CF;">
                                        Edit
                                    </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                           <td colspan="7" class="border text-center p-5">
                               Data Tidak Ditemukan
                           </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="text-center mt-5">
            {{ $doctor->links() }}
        </div>
        </div>
    </div>
</x-app-layout>
