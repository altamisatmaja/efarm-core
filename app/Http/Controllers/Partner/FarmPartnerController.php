<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\CategoryLivestock;
use App\Models\ConditionLivestock;
use App\Models\Farm;
use App\Models\GenderLivestock;
use App\Models\Partner;
use App\Models\TypeLivestock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FarmPartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Read data peternakan
     */
    public function list()
    {
        $partner = Auth::user();
        $farms = Farm::with(['type_livestocks', 'gender_livestocks', 'partner', 'condition_livestock', 'category_livestock'])->get();

        return view('partner.pages.farm.index', compact('farms', 'partner'));
    }

    /**
     * Read page tambah data peternakan
     */
    public function add()
    {
        $typelivestocks = TypeLivestock::all();
        $genderlivestocks = GenderLivestock::all();
        $conditionlivestock = ConditionLivestock::all();
        $categorylivestock = CategoryLivestock::all();

        return view('partner.pages.farm.create', compact('typelivestocks', 'genderlivestocks', 'conditionlivestock', 'categorylivestock'));
    }

    /**
     * Tambah data peternakan
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        $validator = Validator::make($request->all(), [
            'id_kondisi_hewan' => 'required',
            'id_jenis_gender_hewan' => 'required',
            'id_jenis_hewan' => 'required',
            'lahir_hewan' => 'required|date',
            'deskripsi_hewan' => 'required',
            'berat_badan_hewan' => 'required|numeric',
            'id_kategori_hewan' => 'required',
            'nama_hewan' => 'required',
            'kode_hewan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        $data['id_partner'] = $partner->id;

        Farm::create($data);

        return redirect()->route('partner.farm.list')->with('success', 'Data hewan telah berhasil ditambahkan!');
    }

    /**
     * Hapus data
     */
    public function destroy($slug_farm)
    {
        $farm = Farm::where('slug_farm', $slug_farm)->first();
        dd($farm);

        if ($farm) {
            $farmid = $farm->id;

            dd($farmid);
            
            Farm::destroy($farmid);

            return redirect()->route('partner.farm.list')->with('success', 'Data peternakan berhasil dihapus');
        } else {
            return redirect()->route('partner.farm.list')->with('status', 'Data peternakan gagal dihapus');
        }
    }
}
