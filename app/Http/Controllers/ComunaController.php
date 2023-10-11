<?php


namespace App\Http\Controllers;
use App\Models\Comuna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD


=======
>>>>>>> f020cafd7b7c19d71f6c2504cf7c3e3649e85996

class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$comunas=Comuna::all();
<<<<<<< HEAD
        //return view("comunas.index", ["comunas"=>$comunas]);
        $comunas=DB::table('tb_comuna')
        ->join('tb_municipio', 'tb_comuna.muni_codi', '-', 'tb_municipio.muni_codi')
        ->select('tb_comuna.*', "tb_municipio.muni_nomb")
        ->get();
        return view('comuna.index', ['comunas'=>$comunas]);

=======
        $comunas = DB::table('tb_comuna')
        ->join('tb_municipio', 'tb_comuna.muni_codi','-','tb_municipio.muni_codi')
        ->select('tb_comuna.*', "tb_municipio.muni_nomb")
        ->get();
        return view('comuna.index', ['comunas'=>$comunas]);
>>>>>>> f020cafd7b7c19d71f6c2504cf7c3e3649e85996
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios=DB::table('tb_municipio')
        ->orderBy('muni_nomb')
        ->get();
        return view ('comuna.new', ['municipios'=>$municipios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comuna=new Comuna();
        $comuna->comu_nomb=$request->name;
        $comuna->muni_codi=$request->code;
        $comuna->save();

        $comunas =DB::table('tb_comuna')
        ->join('tb_municipio', 'tb_comuna.muni_codi', '=', 'tb_municipio.muni_codi')
        ->select('tb_comuna.*', "tb_municipio.muni_nomb")
        ->get();
        return view('comuna.index', ['comunas'=>$comunas]);


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
