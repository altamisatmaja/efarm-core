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
     * View create data peternakan
     */
    public function create()
    {
        $partner = Auth::user();
        $typelivestocks = TypeLivestock::all();
        $genderlivestocks = GenderLivestock::all();
        $conditionlivestock = ConditionLivestock::all();
        $categorylivestock = CategoryLivestock::all();
        
        return view('partner.pages.farm.create', compact('typelivestocks', 'genderlivestocks', 'conditionlivestock', 'categorylivestock', 'partner'));
    }

    /**
     * View edit data peternakan
     */
    public function update($slug_farm)
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        $farm = Farm::where('slug_farm', $slug_farm)->first();
        $partnerid = $farm->id;

        $typelivestocks = TypeLivestock::all();
        $genderlivestocks = GenderLivestock::all();
        $conditionlivestock = ConditionLivestock::all();
        $categorylivestock = CategoryLivestock::all();
    
        return view('partner.pages.farm.edit', compact('partner', 'farm', 'partnerid', 'typelivestocks', 'genderlivestocks', 'conditionlivestock', 'categorylivestock'));
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
        // dd($request->all());

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
        $data['slug_farm'] = $this->generateSlug($request->nama_hewan, $request->kode_hewan);

        Farm::create($data);

        return redirect()->route('partner.farm.list')->with('success', 'Data hewan telah berhasil ditambahkan!');
    }

    /**
     * Edit data peternakan
     */
    public function edit(Request $request, $slug_farm)
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        $validator = Validator::make($request->all(), [
            'lahir_hewan' => 'required|date',
            'deskripsi_hewan' => 'required',
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
        $data['slug_farm'] = $this->generateSlug($request->nama_hewan, $request->kode_hewan);

        $farm = Farm::where('slug_farm', $slug_farm)->firstOrFail();
        $farm->update($data);

        return redirect()->route('partner.farm.list')->with('status', 'Data hewan telah berhasil ditambahkan!');
    }

    /**
     * Hapus data
     */
    public function destroy($slug_farm)
    {
        $farm = Farm::where('slug_farm', $slug_farm)->first();

        if ($farm) {
            $farmid = $farm->id;

            Farm::destroy($farmid);

            return redirect()->route('partner.farm.list')->with('success', 'Data peternakan berhasil dihapus');
        } else {
            return redirect()->route('partner.farm.list')->with('status', 'Data peternakan gagal dihapus');
        }
    }

    /**
     * Generate slug
     */
    public function generateSlug($nama_hewan, $kode_hewan)
    {
        $slug_farm = strtolower($nama_hewan.'-'.$kode_hewan);
        $slug_farm = str_replace(' ', '-', $slug_farm);
        return $slug_farm;
    }
}
