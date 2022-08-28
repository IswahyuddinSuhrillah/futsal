<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\Jadwal;
use App\Models\Lapangan;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $nomor = 1;
            $sewa = Sewa::where('nama','like','%'.$request->search.'%')->paginate(5);
        }else{
            $nomor = 1;
            $sewa = Sewa::all();
        }

        // $nomor = 1;
        // $sewa = Sewa::all();
        return view('page.sewa.index', compact('sewa','nomor'));
    }

    public function cetaksewa()
    {
        $nomor = 1;
        $cetaksewa = Sewa::all()->all();
        return view('page.cetak.cetaksewa', compact('cetaksewa','nomor'));
    }

    public function indexcetak()
    {
        $nomor = 1;
        $indexcetak = Sewa::all()->all();
        return view('page.cetak.indexcetak', compact('indexcetak','nomor'));
    }

    public function home()
    {
        $home = Sewa::all();
        return view('home', compact('home'));
    }

    public function lapanganuser()
    {
        $lapanganuser = Sewa::all();
        return view('page.user.lapanganuser', compact('lapanganuser'));
    }

    public function sewalapangan()
    {
        $sewalapangan = Sewa::all();
        $jadwal = Jadwal::all();
        $lapangan = Lapangan::all();
        return view('page.user.sewalapangan', compact('sewalapangan','jadwal','lapangan'));
    }

    public function homeuser()
    {
        $homeuser = Sewa::all();
        return view('homeuser', compact('homeuser'));
    }

    public function tentang()
    {
        $tentang = Sewa::all();
        return view('page.user.tentang', compact('tentang'));
    }

    public function buktibayar()
    {
        $buktibayar = Sewa::all();
        return view('page.user.buktibayar', compact('buktibayar'));
    }

    public function user(Request $request)
    {
        $sewa = new Sewa;
        $sewa->nama = $request->nama;
        $sewa->tanggal = $request->tanggal;
        $sewa->jadwals_id = $request->jadwal;
        $sewa->lapangans_id = $request->lapangan;
        $sewa->nohp = $request->nohp;
        $sewa->uangmuka = $request->uangmuka;
        $sewa->sisabayar = $request->sisabayar;
        $sewa->totalbayar = $request->totalbayar;
        // $sewa->foto = $request->foto->getClientOriginalName();
        $sewa->save();

        
        return redirect('/buktibayar/'.$sewa->id);
    }

    public function upload($id)
    {
        $sewa = Sewa::find($id);
        return view('page.user.buktibayar',compact('sewa'));
    }

    public function updatebukti(Request $request, $id)
    {
        $validasi = $request->validate(
            [
                'foto' => 'required|file|mimes:png,jpg,jpeg',
            ]
            );
        $nama_file = $request->foto->getClientOriginalName();

        $upload3 = $request->foto->move('berkas',$nama_file);
        // $sewa = new Sewa;
        $sewa = Sewa::find($id);
        // dd($sewa);

        $sewa->foto = $request->foto->getClientOriginalName();
        $sewa->save();
        return view('page.user.struk',compact('sewa'));

        // return redirect('/sewa');
    }

    public function uploadedit($id)
    {
        $uploadedit = Sewa::find($id);
        return view('page.uploadedit.edit',compact('uploadedit'));
    }

    public function struk($id)
    {
        $sewa = Sewa::find($id);
        return view('page.user.struk',compact('sewa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadwal = Jadwal::all();
        $lapangan = Lapangan::all();
        return view('page.sewa.form',compact('jadwal','lapangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sewa = new Sewa;

        $sewa->nama = $request->nama;
        $sewa->tanggal = $request->tanggal;
        $sewa->jadwals_id = $request->jadwal;
        $sewa->lapangans_id = $request->lapangan;
        $sewa->nohp = $request->nohp;
        $sewa->uangmuka = $request->uangmuka;
        $sewa->sisabayar = $request->sisabayar;
        $sewa->totalbayar = $request->totalbayar;
        $sewa->foto = $request->foto;
        $sewa->save();

        return redirect('/sewa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sewa  = Sewa::find($id);
        $jadwal = Jadwal::all();
        $lapangan = Lapangan::all();
        return view('page.sewa.edit',compact('sewa','jadwal','lapangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sewa = Sewa::find($id);

        $sewa->nama = $request->nama;
        $sewa->tanggal = $request->tanggal;
        $sewa->jadwals_id = $request->jadwal;
        $sewa->lapangans_id = $request->lapangan;
        $sewa->nohp = $request->nohp;
        $sewa->uangmuka = $request->uangmuka;
        $sewa->sisabayar = $request->sisabayar;
        $sewa->totalbayar = $request->totalbayar;
        $sewa->foto = $request->foto;
        $sewa->save();

        return redirect('/sewa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sewa = Sewa::find($id);
        $sewa->delete();
        return redirect('/sewa');
    }
    public function updateedit(Request $request,$id)
    {
        $sewa = Sewa::find($id);
        return view('page.user.buktibayar',compact('sewa'));
    }
}
