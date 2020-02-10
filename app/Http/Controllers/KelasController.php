<?php
namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $kelas = Kelas::orderBy('tahun_ajaran','desc')->get();
        return view('admin.kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        return view('admin.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param
     * @return
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'kelas' => 'required',
            'wali_kelas' => 'required',
            'tahun_ajaran' => 'required'
        ]);

        Kelas::create($request->all());
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param
     * @return
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param
     * @return
     */
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.kelas.edit',compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param
     * @param
     * @return
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'kelas' => 'required',
            'wali_kelas' => 'required',
            'tahun_ajaran' => 'required'
        ]);

        Kelas::find($id)->update($request->all());
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param
     * @return
     */
    public function destroy($id)
    {
        Kelas::find($id)->delete();
        return redirect()->route('kelas.index');
    }
}
