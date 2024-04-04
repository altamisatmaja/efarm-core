<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <title>eFarm | Partner</title>
    <style>
        * {
            font-family: Montserrat;
        }
    </style>
    <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
    <script type="text/javascript">
        function showLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            document.getElementById('latitude').placeholder = `${latitude}`;
            document.getElementById('longitude').placeholder = `${longitude}`;

            document.getElementById('latitude').value = `${latitude}`;
            document.getElementById('longitude').value = `${longitude}`;
            console.log("Latitude:", latitude);
            console.log("Longitude:", longitude);
        }

        function showIP() {
            var ip = geoplugin_request();
            console.log("IP Address:", ip);
        }

        function getLocationAndIP() {
            showLocation();
            showIP();
        }
    </script>
</head>

<body onload="getLocationAndIP()">
    <div>
        @include('includes.navbar')
        <div class="container mx-auto p-4">
            <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Formulir pengajuan partner</h1>
                <p class="text-gray-600 dark:text-gray-300 mb-6">Silahkan diisi dengan kesesuaian data yang ada
                    dilapangan. Akan terjadi pengecekan dari admin ke lokasi</p>
                    <form class="form-submission" action="" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="nama_partner">Nama Partner *</label>
                            <input name="nama_partner" id="nama_partner" type="text" placeholder="Nama Partner"
                                class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="nama_perusahaan_partner">Nama peternakan *</label>
                            <input name="nama_perusahaan_partner" id="nama_perusahaan_partner" type="text"
                                placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="provinsi_partner">Provinsi *</label>
                            <select name="provinsi_partner" id="provinsi_partner"
                                class="provinsi_partner border p-2 rounded w-full">
                                <option value="1">Pilih provinsi</option>
                            </select>
                        </div>
                        <div>
                            <label for="kabupaten_partner">Kabupaten *</label>
                            <select disabled name="kabupaten_partner" id="kabupaten_partner"
                                class="kabupaten_partner border p-2 rounded w-full">
                                <option value="1">Pilih kabupaten</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="kecamatan_partner">Kecamatan *</label>
                            <select disabled name="kecamatan_partner" id="kecamatan_partner"
                                class="kecamatan_partner border p-2 rounded w-full">
                                <option value="1">Pilih kecamatan</option>
                            </select>
                        </div>
                        <div>
                            <label for="kelurahan_partner">kelurahan *</label>
                            <select disabled name="kelurahan_partner" id="kelurahan_partner"
                                class="kelurahan_partner border p-2 rounded w-full">
                                <option value="1">Pilih kelurahan</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 hidden">
                        <div>
                            <label>Latitude *</label>
                            <input type="text" name="latitude" id="latitude" placeholder="Masih belum terdeteksi"
                                class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label>Longitude *</label>
                            <input type="text" name="longitude" id="longitude" placeholder="Masih belum terdeteksi"
                                class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="id_user">id_user</label>
                        <input value="3" name="id_user" id="id_user" type="text" placeholder="Detail alamat"
                            class="border p-2 rounded w-full">
                    </div>
                    <div class="mb-4 hidden">
                        <label for="status">Status</label>
                        <input value="Belum terverifikasi" name="status" id="status" type="text"
                            placeholder="Detail alamat" class="border p-2 rounded w-full">
                    </div>
                    <div class="mb-4">
                        <label for="alamat_partner">Detail alamat</label>
                        <input name="alamat_partner" id="alamat_partner" type="text" placeholder="Detail alamat"
                            class="border p-2 rounded w-full">
                    </div>
                    <div class="mb-4">
                        <div>
                            <label for="tanggal_lahir">Tanggal lahir *</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                placeholder="Masukkan Tanggal lahir" class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="mb-4">
                        <div>
                            <label for="jenis_kelamin">Jenis kelamin *</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="border p-2 rounded w-full">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="lama_peternakan_berdiri">Berdiri sejak*</label>
                        <input name="lama_peternakan_berdiri" id="lama_peternakan_berdiri" type="number"
                            placeholder="Berdiri sejak" class="border p-2 rounded w-full">
                    </div>
                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                            Foto diri
                        </label>

                        <div class="mb-8">
                            <input type="file" name="foto_profil" id="foto_profil" class="sr-only" />
                            <label for="foto_profil"
                                class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                <div>
                                    <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                        Drop files here
                                    </span>
                                    <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                        Or
                                    </span>
                                    <span
                                        class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                        Browse
                                    </span>
                                </div>
                            </label>
                        </div>

                    </div>
                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                            Foto peternakan
                        </label>

                        <div class="mb-8">
                            <input type="file" name="foto_peternakan" id="foto_peternakan" class="sr-only" />
                            <label for="foto_peternakan"
                                class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                <div>
                                    <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                        Drop files here
                                    </span>
                                    <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                        Or
                                    </span>
                                    <span
                                        class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                        Browse
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Ajukan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <script>
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
                            text: 'Pilih provinsi'
                        }));

                        response.map(function(data) {
                            // console.log(data);
                            selectprovinsi.append($('<option>', {
                                value: data.id,
                                text: data.nama,
                            }))
                        });

                        $("select.provinsi_partner").change(function() {
                            document.getElementById("kabupaten_partner")
                                .removeAttribute("disabled");
                            var selectprovince = $(this).children("option:selected")
                                .val();


                            console.log(selectprovince);

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
                                        text: 'Pilih kabupaten'
                                    }));

                                    response.map(function(data) {
                                        // console.log(data);
                                        selectkabupaten.append($(
                                            '<option>', {
                                                value: data
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
                                                .val();

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
                                                                    .val();
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

            // Tambah partner
            $('.form-submission').submit(function(e) {
                e.preventDefault();
                const form = $(this);
                const token = localStorage.getItem('token-efarm');
                var formData = new FormData(this);
                console.log(formData);
                var nama_partner = formData.get('nama_partner');
                var nama_perusahaan_partner = formData.get('nama_perusahaan_partner');
                var provinsi_partner = formData.get('provinsi_partner');
                var kabupaten_partner = formData.get('kabupaten_partner');
                var kecamatan_partner = formData.get('kecamatan_partner');
                var kelurahan_partner = formData.get('kelurahan_partner');
                var alamat_partner = formData.get('alamat_partner');
                var lama_peternakan_berdiri = formData.get('lama_peternakan_berdiri');
                var latitude = formData.get('latitude');
                var longitude = formData.get('longitude');
                var tanggal_lahir = formData.get('tanggal_lahir');
                var jenis_kelamin = formData.get('jenis_kelamin');
                var status = formData.get('status');
                var foto_profil = formData.get('foto_profil');
                var foto_peternakan = formData.get('foto_peternakan');
                var updated_at = formData.get('updated_at');
                var created_at = formData.get('created_at');
                console.log(nama_partner);
                console.log(nama_perusahaan_partner);
                console.log(provinsi_partner);
                console.log(kabupaten_partner);
                console.log(kecamatan_partner);
                console.log(kelurahan_partner);
                console.log(lama_peternakan_berdiri);
                console.log(latitude);
                console.log(longitude);
                console.log(tanggal_lahir);
                console.log(jenis_kelamin);
                console.log(status);
                console.log(foto_profil);
                console.log(foto_peternakan);
                console.log(created_at);
                console.log(updated_at);
                // const form = $(this);
                // const token = localStorage.getItem('token-efarm');
                // var formData = {};
                // formData.id_user = 3;
                // formData.nama_partner = $('#nama_partner').val();
                // formData.nama_perusahaaan_partner = $('#nama_perusahaaan_partner').val();
                // formData.provinsi_partner = $('#provinsi_partner option:selected').text();
                // formData.kabupaten_partner = $('#kabupaten_partner option:selected').text();
                // formData.kecamatan_partner = $('#kecamatan_partner option:selected').text();
                // formData.kelurahan_partner = $('#kelurahan_partner option:selected').text();
                // formData.alamat_partner = $('#alamat_partner').val();
                // formData.lama_peternakan_berdiri = $('#lama_peternakan_berdiri').val();
                // formData.latitude = $('#latitude').val();
                // formData.longitude = $('#longitude').val();
                // formData.tanggal_lahir = $('#tanggal_lahir').val();
                // formData.jenis_kelamin = $('#jenis_kelamin').val();
                // formData.foto_profil = $('#foto_profil').val();
                // formData.foto_peternakan = $('#foto_peternakan').val();
                // formData.status = "Belum terverifikasi";
                // formData.created_at = new Date().toISOString();
                // formData.updated_at = new Date().toISOString();

                console.log(formData);

                $.ajax({
                    url: '/api/partner',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    // headers: {
                    //     "accept": "application/json",
                    //     "Authorization": "Bearer" + token,
                    //     "Access-Control-Allow-Origin": "*"
                    // },
                    success: function(data) {
                        if (data.success) {
                            alert('Data berhasil ditambahkan');
                            location.reload();
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log('error');
                    }
                })
            });
        })
    </script>
</body>

</html>
