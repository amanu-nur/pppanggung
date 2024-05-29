<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Siswa') }}
        </h2>
    </x-slot>

    <div class="pt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="fullname" class="block text-gray-700">Nama Lengkap</label>
                                <input type="text" name="fullname" id="fullname"
                                    class="border-2 w-full p-2 rounded @error('fullname') border-red-500 @enderror"
                                    value="{{ old('fullname') }}">
                                @error('fullname')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="placeofbirth" class="block text-gray-700">Tempat Lahir</label>
                                <input type="text" name="placeofbirth" id="placeofbirth"
                                    class="border-2 w-full p-2 rounded @error('placeofbirth') border-red-500 @enderror"
                                    value="{{ old('placeofbirth') }}" placeholder="Contoh: Tulungagung">
                                @error('placeofbirth')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">

                            <div class="mb-4">
                                <label for="dateofbirth" class="block text-gray-700">Tanggal Lahir</label>
                                <input type="date" name="dateofbirth" id="dateofbirth"
                                    class="border-2 w-full p-2 rounded @error('dateofbirth') border-red-500 @enderror"
                                    value="{{ old('dateofbirth') }}">
                                @error('dateofbirth')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="gender" class="block text-gray-700">Jenis Kelamin</label>
                                <select name="gender" id="gender"
                                    class="border-2 w-full p-2 rounded @error('gender') border-red-500 @enderror">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki" {{ old('gender') == 'Laki-Laki' ? 'selected' : '' }}>
                                        Laki-laki
                                    </option>
                                    <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>
                                        Perempuan
                                    </option>
                                </select>
                                @error('gender')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="religion" class="block text-gray-700">Agama</label>
                                <input type="text" name="religion" id="religion"
                                    class="border-2 w-full p-2 rounded @error('religion') border-red-500 @enderror"
                                    value="{{ old('religion') }}" placeholder="Contoh: Islam">
                                @error('religion')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="education" class="block text-gray-700">Pendidikan</label>
                                <input type="text" name="education" id="education"
                                    class="border-2 w-full p-2 rounded @error('education') border-red-500 @enderror"
                                    value="{{ old('education') }}" placeholder="Contoh: SLTP">
                                @error('education')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">

                            <div class="mb-4">
                                <label for="work" class="block text-gray-700">Pekerjaan</label>
                                <input type="text" name="work" id="work"
                                    class="border-2 w-full p-2 rounded @error('work') border-red-500 @enderror"
                                    value="{{ old('work') }}">
                                @error('work')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="maritalstatus" class="block text-gray-700">Status Pernikahan</label>
                                <input type="text" name="maritalstatus" id="maritalstatus"
                                    class="border-2 w-full p-2 rounded @error('maritalstatus') border-red-500 @enderror"
                                    value="{{ old('maritalstatus') }}">
                                @error('maritalstatus')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="nik" class="block text-gray-700">NIK</label>
                                <input type="number" name="nik" id="nik"
                                    class="border-2 w-full p-2 rounded @error('nik') border-red-500 @enderror"
                                    value="{{ old('nik') }}" placeholder="350xxxxxxxxxxxxx">
                                @error('nik')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="earlyentry" class="block text-gray-700">Tanggal Masuk</label>
                                <input type="date" name="earlyentry" id="earlyentry"
                                    class="border-2 w-full p-2 rounded @error('earlyentry') border-red-500 @enderror"
                                    value="{{ old('earlyentry') }}">
                                @error('earlyentry')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">

                            <div class="mb-4">
                                <label for="nomail" class="block text-gray-700">Nomor Surat</label>
                                <input type="text" name="nomail" id="nomail"
                                    class="border-2 w-full p-2 rounded @error('nomail') border-red-500 @enderror"
                                    value="{{ old('nomail') }}" placeholder="Contoh: 017/Peng.PPg/YRJS/TA/A/VI/2021">
                                @error('nomail')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="datemail" class="block text-gray-700">Tanggal Surat</label>
                                <input type="date" name="datemail" id="datemail"
                                    class="border-2 w-full p-2 rounded @error('datemail') border-red-500 @enderror"
                                    value="{{ old('datemail') }}" placeholder="017/Peng.PPg/YRJS/TA/A/VI/2021">
                                @error('datemail')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="citizenship" class="block text-gray-700">Kewarganegaraan</label>
                                <input type="text" name="citizenship" id="citizenship"
                                    class="border-2 w-full p-2 rounded @error('citizenship') border-red-500 @enderror"
                                    value="{{ old('citizenship') }}" placeholder="Contoh: WNI">
                                @error('citizenship')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="address" class="block text-gray-700">Alamat Lengkap</label>
                                <input type="text" name="address" id="address"
                                    class="border-2 w-full p-2 rounded @error('address') border-red-500 @enderror"
                                    value="{{ old('address') }}">
                                @error('address')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
