@extends('partner.layouts.app')

@section('title', 'Dashboard | Order')

@section('content')
    <div class="flex items-center justify-center">
        @if (session('success'))
            <div id="successMessage"
                class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                <div class="relative w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
                    data-dismissible="alert">
                    <div class="absolute top-4 left-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            class="mt-px h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-8 mr-12">
                        <h5
                            class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                            Berhasil
                        </h5>
                        <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                            {{ session('success') }}
                        </p>
                    </div>
                    <div data-dismissible-target="alert" data-ripple-dark="true"
                        class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                        <div role="button" class="w-max rounded-lg p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div id="successMessage"
                class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                <div class="relative w-full max-w-screen-md rounded-lg bg-red-500 px-4 py-4 text-base text-white"
                    data-dismissible="alert">
                    <div class="absolute top-4 left-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            class="mt-px h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-8 mr-12">
                        <h5
                            class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                            Gagal
                        </h5>
                        <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                            {{ session('error') }}
                        </p>
                    </div>
                    <div data-dismissible-target="alert" data-ripple-dark="true"
                        class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                        <div role="button" class="w-max rounded-lg p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="mx-auto w-full ">
            <div class="mb-5">
                <h3 class="font-semibold text-2xl text-textbase">Informasi pribadi anda 👋</h3>
            </div>
            <form action="{{ route('partner.account.information.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <label for="nama_partner" class=" text-lg font-semibold text-textbase block mb-2">Nama
                            Partner</label>
                        <input value="{{ $partner->nama_partner }}" type="text" id="nama_partner" name="nama_partner"
                            placeholder="Nama parnter"
                            class="border border-textbase font-medium text-lg p-2 rounded w-full">
                        @error('nama_partner')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="nama_perusahaan_partner" class="font-semibold text-lg text-textbase block mb-2">Nama
                            perusahaan partner</label>
                        <input value="{{ $partner->nama_perusahaan_partner }}" type="text" id="nama_perusahaan_partner"
                            name="nama_perusahaan_partner" placeholder="nama_perusahaan_partner"
                            class="border border-textbase p-2 rounded w-full font-medium text-lg">
                        @error('nama_perusahaan_partner')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-5">
                    <label for="lama_peternakan_berdiri" class="font-semibold text-lg text-textbase block mb-2">
                        Lama peternakan berdiri
                    </label>
                    <input value="{{ $partner->lama_peternakan_berdiri }}" type="number" name="lama_peternakan_berdiri"
                        id="lama_peternakan_berdiri" placeholder="Lama peternakan berdiri" min="0"
                        class="w-full appearance-none rounded-md border border-textbase bg-white py-3 px-6 font-medium text-lg text-textbase outline-none focus:border-primarybase " />
                    @error('lama_peternakan_berdiri')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="provinsi_partner">Provinsi *</label>
                        <select name="provinsi_partner" id="provinsi_partner"
                            class="provinsi_partner border p-2 rounded w-full">
                            <option data-id="1" value="JAWA TIMUR">Pilih provinsi</option>
                        </select>
                    </div>
                    <div>
                        <label for="kabupaten_partner">Kabupaten *</label>
                        <select disabled name="kabupaten_partner" id="kabupaten_partner"
                            class="kabupaten_partner border p-2 rounded w-full">
                            <option data-id="1" value="KAB. NGAWI">Pilih kabupaten</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="kecamatan_partner">Kecamatan *</label>
                        <select disabled name="kecamatan_partner" id="kecamatan_partner"
                            class="kecamatan_partner border p-2 rounded w-full">
                            <option data-id="1" value="Paron">Pilih kecamatan</option>
                        </select>
                    </div>
                    <div>
                        <label for="kelurahan_partner">kelurahan *</label>
                        <select disabled name="kelurahan_partner" id="kelurahan_partner"
                            class="kelurahan_partner border p-2 rounded w-full">
                            <option data-id="1" value="1">Pilih kelurahan</option>
                        </select>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="alamat_partner" class="font-semibold text-lg text-textbase block mb-2">
                        Alamat partner
                    </label>
                    <input value="{{ $partner->alamat_partner }}" type="text" name="alamat_partner"
                        id="alamat_partner" placeholder="5" min="0"
                        class="w-full appearance-none rounded-md border border-textbase bg-white py-3 px-6 font-medium text-lg text-textbase outline-none focus:border-primarybase " />
                    @error('alamat_partner')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="no_hp" class="font-semibold text-lg text-textbase block mb-2">
                        Nomor Handphone
                    </label>
                    <input value="{{ $partner->no_hp }}" type="text" name="no_hp" id="no_hp"
                        placeholder="Masukkan nomor hp anda" min="0"
                        class="w-full appearance-none rounded-md border border-textbase bg-white py-3 px-6 font-medium text-lg text-textbase outline-none focus:border-primarybase " />
                    @error('no_hp')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" onclick="return confirm('Apakah anda yakin ingin mengubah?')"
                        class="w-full hover:shadow-form rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script>
            $(function() {
                $('#dismiss-button').click(function(e) {
                    e.preventDefault();
                    $('#alert-dissmiss').addClass('hidden');
                });
            });

            $(function() {
                // get provinsi
                $(document).ready(function() {
                    $.ajax({
                        url: `https://ibnux.github.io/data-indonesia/provinsi.json`,
                        method: 'GET',
                        success: function(response) {
                            console.log(response);

                            let row = '';

                            const selectprovinsi = $('.provinsi_partner');
                            selectprovinsi.empty();

                            selectprovinsi.append($('<option>', {
                                value: '',
                                'data-id': '',
                                text: 'Pilih provinsi'
                            }));

                            response.map(function(data) {
                                // console.log(data);
                                selectprovinsi.append($('<option>', {
                                    'data-id': data.id,
                                    value: data.nama,
                                    text: data.nama,
                                }))
                            });

                            $("select.provinsi_partner").change(function() {
                                document.getElementById("kabupaten_partner")
                                    .removeAttribute("disabled");
                                var selectprovince = $(this).children("option:selected")
                                    .attr('data-id');
                                var valofselectprovince = $(this).children(
                                        "option:selected")
                                    .val();

                                console.log(selectprovince);
                                console.log(valofselectprovince);

                                $.ajax({
                                    url: `https://ibnux.github.io/data-indonesia/kabupaten/${selectprovince}.json`,
                                    method: 'GET',
                                    success: function(response) {
                                        console.log(response);

                                        let row = '';

                                        const selectkabupaten = $(
                                            '.kabupaten_partner');
                                        selectkabupaten.empty();

                                        selectkabupaten.append($('<option>', {
                                            value: '',
                                            'data-id': '',
                                            text: 'Pilih kabupaten'
                                        }));

                                        response.map(function(data) {
                                            // console.log(data);
                                            selectkabupaten.append($(
                                                '<option>', {
                                                    value: data
                                                        .nama,
                                                    'data-id': data
                                                        .id,
                                                    text: data
                                                        .nama,
                                                }))
                                        });

                                        $("select.kabupaten_partner").change(
                                            function() {
                                                document.getElementById(
                                                        "kecamatan_partner")
                                                    .removeAttribute(
                                                        "disabled");
                                                var selectkabupaten = $(
                                                        this).children(
                                                        "option:selected")
                                                    .attr('data-id');

                                                console.log(
                                                    selectkabupaten);

                                                $.ajax({
                                                    url: `https://ibnux.github.io/data-indonesia/kecamatan/${selectkabupaten}.json`,
                                                    method: 'GET',
                                                    success: function(
                                                        response
                                                    ) {
                                                        console
                                                            .log(
                                                                response
                                                            );

                                                        let row =
                                                            '';

                                                        const
                                                            selectkecamatan =
                                                            $(
                                                                '.kecamatan_partner'
                                                            );
                                                        selectkecamatan
                                                            .empty();

                                                        selectkecamatan
                                                            .append(
                                                                $('<option>', {
                                                                    value: '',
                                                                    'data-id': '',
                                                                    text: 'Pilih kecamatan'
                                                                })
                                                            );

                                                        response
                                                            .map(
                                                                function(
                                                                    data
                                                                ) {
                                                                    // console.log(data);
                                                                    selectkecamatan
                                                                        .append(
                                                                            $('<option>', {
                                                                                value: data
                                                                                    .nama,
                                                                                'data-id': data
                                                                                    .id,
                                                                                text: data
                                                                                    .nama,
                                                                            })
                                                                        )
                                                                }
                                                            );

                                                        $("select.kecamatan_partner")
                                                            .change(
                                                                function() {
                                                                    document
                                                                        .getElementById(
                                                                            "kelurahan_partner"
                                                                        )
                                                                        .removeAttribute(
                                                                            "disabled"
                                                                        );
                                                                    var selectkec =
                                                                        $(
                                                                            this
                                                                        )
                                                                        .children(
                                                                            "option:selected"
                                                                        )
                                                                        .attr(
                                                                            'data-id'
                                                                        );
                                                                    console
                                                                        .log(
                                                                            `Ini data id kecamtan: ${selectkec}`
                                                                        );

                                                                    // ini yang diterusin al
                                                                    $.ajax({
                                                                        url: `https://ibnux.github.io/data-indonesia/kelurahan/${selectkec}.json`,
                                                                        method: 'GET',
                                                                        success: function(
                                                                            response
                                                                        ) {
                                                                            console
                                                                                .log(
                                                                                    response
                                                                                );

                                                                            let row =
                                                                                '';

                                                                            const
                                                                                selectkelurahan =
                                                                                $(
                                                                                    '.kelurahan_partner'
                                                                                );
                                                                            selectkelurahan
                                                                                .empty();

                                                                            selectkelurahan
                                                                                .append(
                                                                                    $('<option>', {
                                                                                        value: '',
                                                                                        'data-id': '',
                                                                                        text: 'Pilih kelurahan',
                                                                                    })
                                                                                );

                                                                            response
                                                                                .map(
                                                                                    function(
                                                                                        data
                                                                                    ) {
                                                                                        console
                                                                                            .log(
                                                                                                data
                                                                                            );
                                                                                        selectkelurahan
                                                                                            .append(
                                                                                                $('<option>', {
                                                                                                    value: data
                                                                                                        .nama,
                                                                                                    'data-id': data
                                                                                                        .id,
                                                                                                    text: data
                                                                                                        .nama,
                                                                                                })
                                                                                            )
                                                                                    }
                                                                                )
                                                                        }
                                                                    })
                                                                }
                                                            );
                                                    }
                                                })
                                            });

                                    },
                                    error: function(xhr, status, error) {
                                        console.error(status, error);
                                    }
                                });

                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(status, error);
                        }
                    });
                });
            })
        </script>
    @endpush
@endsection
