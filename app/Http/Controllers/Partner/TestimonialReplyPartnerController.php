<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Testimonial;
use App\Models\TestimonialReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class TestimonialReplyPartnerController extends Controller
{
    public function store(Request $request){
        try {
            $user = auth()->user();
            $partner = Partner::where('id_user', $user->id)->first();
            $validator = Validator::make($request->all(), [
                'id_testimonial' => 'required',
                'pesan_reply' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);
            $input['id_partner'] = $partner->id;

            // dd($input);

            $testimonialreply = TestimonialReply::create($input);

            if($testimonialreply){
                return redirect()->back()->with('success', 'Data review berhasil dibalas');
            }  else {
                return redirect()->back()->with('errors', 'Data review gagal dibalas');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function reply($slug_product, $slug_testimonial){
        $partner = Auth::user();
        $testimonials = Testimonial::with('product')->where('slug_testimonial', $slug_testimonial)->first();
        // dd($testimonials);

        return view('partner.pages.testimonialreply.show', compact('testimonials', 'partner'));
    }

    public function update(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'id_user' => 'required',
                'id_testimonial' => 'required',
                'pesan_reply' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);

            $testimonialreply = TestimonialReply::update($input);

            if($testimonialreply){
                return redirect()->back()->with('success', 'Data review berhasil dibalas');
            }  else {
                return redirect()->back()->with('errors', 'Data review gagal dibalas');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}