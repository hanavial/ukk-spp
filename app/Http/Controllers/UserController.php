<?php

namespace App\Http\Controllers;

use App\Spp;
use App\User;
use App\Kelas;
use App\Level;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $user = User::with('kelas','level')->get();
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        $level = Level::all();
        $kelas = Kelas::all();
        $spp = Spp::all();
        return view('admin.user.create',compact('level','kelas','spp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param
     * @return
     */
    public function store(Request $request)
    {
//        $count = User::where('username',$request->input('username'))->count();
//
//        if ($count>0){
//            return redirect()->route('user.create');
//        }

        $this->validate($request, [
            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tahun_masuk' => 'required',
        ]);

        User::create([
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'tahun_masuk' => $request->input('tahun_masuk'),
            'id_level' => $request->input('level'),
            'id_kelas' => $request->input('kelas'),
            'id_spp' => $request->input('spp')
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param
     * @return
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param
     * @return
     */
    public function edit($id)
    {
        $level = Level::all();
        $kelas = Kelas::all();
        $spp = Spp::all();
        $user = User::findOrFail($id);
        return view('admin.user.edit',compact('level','kelas','user','spp'));
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
        $this->validate($request, [
            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tahun_masuk' => 'required',
        ]);

        User::find($id)->update($request->all());
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param
     * @return
     */
    public function destroy($id)
    {
        //
    }
}
