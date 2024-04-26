<style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>

@extends('admin.layouts.app')

@section('title', 'Dashboard | Tambah Category')

@section('content')
    <section class="w-full px-4 mx-auto">
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                {{-- ignored really --}}
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">Tambah Kategori Hewan</h3>
                        </div>
                    </div>
                </div>
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <div class="fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
                            style="background: rgba(0,0,0,.7);">
                            <div
                                class="border border-teal-500 modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                                <div class="modal-content py-4 text-left px-6">
                                    <!--Title-->
                                    <div class="flex justify-between items-center pb-3">
                                        <p class="text-2xl font-bold">Tambah kategori produk</p>
                                        <div class="modal-close cursor-pointer z-50">
                                            <svg class="cancel-tambah-data-categoryproduct fill-current text-black"
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 18 18">
                                                <path
                                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <!--Body-->
                                    <form class="form-tambah-categoryproduct" action="" method="POST">
                                        <div class="mb-5">
                                            <label for="nama_kategori_product"
                                                class="mb-3 block text-base font-medium text-[#07074D]">
                                                Masukkan nama kategori hewan
                                            </label>
                                            <input type="nama_kategori_product" name="nama_kategori_product"
                                                id="nama_kategori_product" placeholder="Kambing"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>

                                        <div class="mb-6 pt-4">
                                            <label for="deskripsi_kategori_product"
                                                class="mb-3 block text-base font-medium text-[#07074D]">
                                                Masukkan deskripsi kategori hewan
                                            </label>
                                            <textarea type="deskripsi_kategori_product" name="deskripsi_kategori_product" id="deskripsi_kategori_product"
                                                placeholder="Kambing adalah lorem ipsum"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                                        </div>

                                        <div class="mb-6 pt-4">
                                            <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                                                Upload File
                                            </label>

                                            <div class="mb-8">
                                                <input type="file" name="gambar_kategori_product"
                                                    id="gambar_kategori_product" class="sr-only" />
                                                <label for="gambar_kategori_product"
                                                    class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                                    <div>
                                                        <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                                            Drop files here
                                                        </span>
                                                        <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                                            Or
                                                        </span>
                                                        <span
                                                            class="inline-flex rounded py-2 px-7 text-base font-medium text-[#07074D]">
                                                            Browse
                                                        </span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="pb-4">
                                            <button type="submit"
                                                class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-black outline-none">
                                                Simpan
                                            </button>
                                        </div>

                                        <div class="pt-1">
                                            <button type="button"
                                                class="cancel-edit-form-categoryproduct hover:shadow-form w-full border hover:bg-primarybase hover:text-white border-primarybase rounded-md py-3 px-8 text-center text-base font-semibold text-primarybase">
                                                Batal
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
