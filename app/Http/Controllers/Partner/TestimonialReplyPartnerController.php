<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\TestimonialReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TestimonialReplyPartnerController extends Controller
{
    public function store(Request $request){
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
    public function show($id_testimonial){
        $testimonial = Testimonial::where('id', $id_testimonial)->first();

        return;
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