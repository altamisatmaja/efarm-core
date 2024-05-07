<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialAdminController extends Controller
{
    public function list()
    {
        $testimonials = Testimonial::with('product', 'user')->get();
        return view('admin.pages.testimoni.list', compact('testimonials'));
    }

    public function destroy($id)
    {
        try {
            $testimonial = Testimonial::where('id', $id)->first();

            File::delete('uploads/' . $testimonial->id);

            $testimonial->delete();

            return redirect()->route('admin.testimoni.list')->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $testimonials = Testimonial::where('id', $id)->first();

            if ($testimonials) {
                return view('admin.pages.testimoni.show', compact('testimonials'));
            } else {
                return redirect()->route('admin.testimoni.list')->with('error', 'Data tidak ditemukan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan:' . $e->getMessage());
        }
    }
}
