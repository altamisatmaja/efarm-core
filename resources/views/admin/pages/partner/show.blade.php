@extends('admin.layouts.app')

@section('title', 'Admin | Partner')

@section('content')
    <!-- component -->
    <div class="flex flex-col justify-center items-center py-4">
        <div
            class="relative flex flex-col items-center rounded-[20px]  mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:!shadow-none p-3">
            <div class="mt-2 mb-8 w-full">
                <h4 class="px-2 text-xl font-bold text-navy-700">
                    General Information
                </h4>
                <p class="mt-2 px-2 text-base text-gray-600">
                    As we live, our hearts turn colder. Cause pain is what we go through
                    as we become older. We get insulted by others, lose trust for those
                    others. We get back stabbed by friends. It becomes harder for us to
                    give others a hand. We get our heart broken by people we love, even
                    that we give them all...
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 px-2 w-full">
                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Education</p>
                    <p class="text-base font-medium text-navy-700">
                        {{ $partner->nama_partner }}
                    </p>
                </div>

                <div
                    class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Languages</p>
                    <p class="text-base font-medium text-navy-700">
                        English, Spanish, Italian
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Department</p>
                    <p class="text-base font-medium text-navy-700">
                        Product Design
                    </p>
                </div>

                <div
                    class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Work History</p>
                    <p class="text-base font-medium text-navy-700">
                        English, Spanish, Italian
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Organization</p>
                    <p class="text-base font-medium text-navy-700">
                        Simmmple Web LLC
                    </p>
                </div>

                <div
                    class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Birthday</p>
                    <p class="text-base font-medium text-navy-700">
                        20 July 1986
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Foto Profil</p>
                    <img src="https://cdn.pixabay.com/photo/2023/08/15/11/47/mushroom-8191823_1280.jpg" alt="Featured Image 1" class="rounded-t-xl"/>
                </div>

                <div
                    class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Foto peternakan</p>
                    <img src="https://cdn.pixabay.com/photo/2023/08/15/11/47/mushroom-8191823_1280.jpg" alt="Featured Image 1" class="rounded-t-xl"/>
                </div>
            </div>
        </div>
        <form action="{{ route('partner.verify.account') }}" method="POST">
            @csrf
                <input value="{{ $partner->users->nama }}" type="text" name="nama" id="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="name@company.com" required="">
                <input value="{{ $partner->users->username }}" type="text" name="username" id="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="name@company.com" required="">
                <input value="{{ $partner->users->email }}" type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="name@company.com" required="">
                <input value="{{ $partner->users->password }}" type="password" name="password" id="password" placeholder="••••••••"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    required="">
            <button type="submit" class="w-full bg-primarybase px-3 text-white py-3 rounded-lg">Verfikasi</button>
        </form>
    </div>

    <!-- Ripple Effect from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
    @endpush
@endsection
