<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\User;

use App\Models\Penyedia;

use App\Models\Pekerjaan;

use App\Models\Jeniskerja;

use App\Models\Personil;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admindashboard(){
        $pekerjaan = Pekerjaan::all(); //test github push 2

        $penyedia = Penyedia::query()->withAvg('pekerjaans', 'nilai_total')->get();

        return view('admin.admindashboard',compact('penyedia','pekerjaan'));
    }

    public function tabelpenyedia(){
        if(Auth::user()->status=='super'){
            $penyedia = Penyedia::all();

            return view('admin.datapenyedia', compact('penyedia'));
        }else{
            return redirect()->back();
        }
        
    }

    public function tambahpenyedia(){

        return view('admin.addpenyedia');
    }

    public function penyediabarucheck(Request $request){
        if($request->get('nama')){
            $nama = $request->get('nama');
            $data = DB::table("penyedias")
             ->where('nama', $nama)
             ->count();
            if($data > 0)
            {
                return response()->json(['message' => 'not_unique']);
            }
            else
            {
                return response()->json(['message' => 'unique']);
            }
        }
    }

    public function insertpenyedia(Request $request){
        Penyedia::create($request->all());

        return redirect()->route('datapenyedia')->with('message','Penyedia Baru Berhasil ditambahkan!');
    }

    public function editpenyedia($id){
        $penyedia = Penyedia::find($id);
        
        return view('admin.editpenyedia', compact('penyedia'));
    }

    public function updatepenyedia(Request $request, $id){
        $penyedia = Penyedia::find($id);
        $penyedia->update($request->all());
        
        return redirect()->route('datapenyedia')->with('message','Penyedia Berhasil diupdate!');
    }

    public function deletepenyedia($id){
        $penyedia = Penyedia::find($id);
        $penyedia->delete();

        return redirect()->route('datapenyedia')->with('message','Penyedia Telah dihapus!');
    }

    public function tabelpekerjaan(){
        if(Auth::user()->status=='super'){
            $pekerjaan = Pekerjaan::with('penyedia','user')->paginate(100);
            return view('admin.datapekerjaan', compact('pekerjaan'));
        }else{
            $pekerjaan = Auth::user()->pekerjaans;
            return view('admin.datapekerjaan', compact('pekerjaan'));
        }  
    }

    public function tambahpekerjaan(){
        $penyedia = Penyedia::all();
        //$user = Auth::user()->users;
        $user = User::all();
        $jeniskerja = Jeniskerja::all();

        return view('admin.addpekerjaan', compact('penyedia','user','jeniskerja'));
    }

    public function insertpekerjaan(Request $request){
        
        $pekerjaan = Pekerjaan::create($request->all());
        // if($request->hasFile('gambar')){
        //     $request->file('gambar')->move('gambarpekerjaan/', $request->file('gambar')->getClientOriginalName());
        //     $pekerjaan->gambar = $request->file('gambar')->getClientOriginalName();
        //     $pekerjaan->save();
        // }
        if($request->hasFile('gambar')){        
            $fileExtension = $request->file('gambar')->getClientOriginalExtension();
            $basename = uniqid(time());
            $filename = $basename.'.'.$fileExtension;
            
            $request->file('gambar')->move('gambarpekerjaan/', $filename);
            $pekerjaan->gambar = $filename;
            $pekerjaan->save();
        }


        return redirect()->route('datapekerjaan')->with('message','Pekerjaan Baru Berhasil ditambahkan!');
    }

    public function editpekerjaan($id){
        $pekerjaan = Pekerjaan::find($id);
        $penyedia = Penyedia::all();
        $user = User::all();
        $jeniskerja = Jeniskerja::all();
        
        return view('admin.editpekerjaan', compact('pekerjaan','penyedia','user','jeniskerja'));
    }

    public function updatepekerjaan(Request $request, $id){
        $pekerjaan = Pekerjaan::find($id);
        $pekerjaan->update($request->all());
        // if($request->hasFile('gambar')){
        //     $request->file('gambar')->move('gambarpekerjaan/', $request->file('gambar')->getClientOriginalName());
        //     $pekerjaan->gambar = $request->file('gambar')->getClientOriginalName();
        //     $pekerjaan->save();

        if($request->hasFile('gambar')){        
                $fileExtension = $request->file('gambar')->getClientOriginalExtension();
                $basename = uniqid(time());
                $filename = $basename.'.'.$fileExtension;
                
                $request->file('gambar')->move('gambarpekerjaan/', $filename);
                $pekerjaan->gambar = $filename;
                $pekerjaan->save();

            // $fileExtension = $request->file('gambar')->getClientOriginalExtension();
            // $basename = uniqid(time());
            // $filename = $basename.'.'.$fileExtension;
    
            // $request->file('gambar')->move('gambarpekerjaan/', $filename);
            // $pekerjaan->gambar = $filename;
            // $pekerjaan->save();

            // $file = request()->file('gambar');
            // $extension = $file->getClientOriginalName();
            // $destination = 'gambarpekerjaan/';
            // $filename = uniqid() . '.' . $extension;
            // $file->move($destination, $filename);
            // $new_file = new Pekerjaan();
            // $new_file->gambar = $filename;
            // $new_file->save();
        }
        
        return redirect()->route('datapekerjaan')->with('message','Pekerjaan Berhasil diupdate!');
    }

    public function deletepekerjaan($id){
        $pekerjaan = Pekerjaan::find($id);
        $pekerjaan->delete();

        return redirect()->route('datapekerjaan')->with('message','Pekerjaan Telah dihapus!');
    }

    public function tabeluser(){
        $user = User::all();

        return view('admin.datauser', compact('user'));
    }

    public function tambahuser(){

        return view('admin.adduser');
    }

    public function insertuser(Request $request){
        // User::create($request->all());

        $user=new User;

        $user->name=$request->nama;
        $user->satker=$request->satker;
        $user->status=$request->status;
        $user->username=$request->username;
        $user->password=Hash::make($request->password);

        $user->save();

        return redirect()->route('datauser')->with('message','User Baru Berhasil ditambahkan!');
    }

    public function edituser($id){
        $user = User::find($id);
        
        return view('admin.edituser', compact('user'));
    }

    public function updateuser(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        
        return redirect()->route('datauser')->with('message','User Berhasil diupdate!');
    }

    public function deleteuser($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('datauser')->with('message','User Telah dihapus!');
    }

    public function tabelnilai_penyedia(){
        //$penyedia = Penyedia::all();
        $pekerjaan = Pekerjaan::all();

        $penyedia = Penyedia::query()->withAvg('pekerjaans', 'nilai_total')->get();

        //$totalAvg=$penyedia->pekerjaans()->avg('nilai_total');
        //$totalAvg = Pekerjaan::selectRaw("penyedia_id, AVG(nilai_total) AS avg")->groupBy('penyedia_id')->get();

        return view('admin.datanilai_penyedia', compact('penyedia', 'pekerjaan'));
    }

    public function tabelnilai_jeniskerja(){
        //$penyedia = Penyedia::all();
        $pekerjaan = Pekerjaan::all();

        $jeniskerja = Jeniskerja::query()->withAvg('pekerjaans', 'nilai_total')->get();

        //$totalAvg=$penyedia->pekerjaans()->avg('nilai_total');
        //$totalAvg = Pekerjaan::selectRaw("penyedia_id, AVG(nilai_total) AS avg")->groupBy('penyedia_id')->get();

        return view('admin.datanilai_jeniskerja', compact('penyedia', 'pekerjaan','jeniskerja'));
    }

    public function showpekerjaan(Penyedia $penyedia){
        //$pekerjaan = Penyedia::with('pekerjaans')->where('id',$penyedia->id)->get();
        $pekerjaan = $penyedia->pekerjaans;
        $jeniskerja = Jeniskerja::all();

        $totalAvg=$penyedia->pekerjaans()->avg('nilai_total');
        
        //return view('admin.showpekerjaan', compact('penyedia','pekerjaan'))->with('pekerjaan', $pekerjaan);
        return view('admin.showpekerjaan', compact('penyedia','pekerjaan','totalAvg','jeniskerja'));
    }

    public function showjenispekerjaan(Jeniskerja $jeniskerja){
        //$pekerjaan = Penyedia::with('pekerjaans')->where('id',$penyedia->id)->get();
        $pekerjaan = $jeniskerja->pekerjaans;

        $totalAvg=$jeniskerja->pekerjaans()->avg('nilai_total');
        
        //return view('admin.showpekerjaan', compact('penyedia','pekerjaan'))->with('pekerjaan', $pekerjaan);
        return view('admin.showjenispekerjaan', compact('penyedia','pekerjaan','totaljenisAvg'));
    }

    public function showpekerjaanppk(){
        if(Auth::user()->status=='super'){
            $pekerjaan = Pekerjaan::with('penyedia','user')->paginate(100);
            return view('admin.showpekerjaan', compact('pekerjaan'));
        }else{
            $pekerjaan = Auth::user()->pekerjaans;
            return view('admin.showpekerjaan', compact('pekerjaan'));
        }
        //return view('admin.showpekerjaan', compact('penyedia','pekerjaan','totalAvg'));
    }

    public function nilaipekerjaan($id){
        $pekerjaan = Pekerjaan::find($id);
        $penyedia = Penyedia::find($id);
        $personil = Personil::find($id);
        
        if (is_null($pekerjaan->bahp) || $pekerjaan->status=='Surat Pemutusan Kontrak Karena Kesalahan Penyedia'){
            return redirect()->back();
        }else{
            

            return view('admin.nilaipekerjaan', compact('pekerjaan','penyedia','personil'));
        }
        // $pekerjaan = Pekerjaan::find($id);
        // $penyedia = Penyedia::find($id);

        // return view('admin.nilaipekerjaan', compact('pekerjaan','penyedia'));
        
    }

    public function update_nilaipekerjaan(Request $request, $id){
        $pekerjaan = Pekerjaan::find($id);
        //$penyedia = Penyedia::all();
        //$pekerjaan->update($request->all());
        //$total = Pekerjaan::select(DB::raw('avg(nilai_1 + nilai_2 + nilai_3 + nilai_4) as nilai_total'))->get();

        $pekerjaan->nilai_1=$request->nilai_1;
        $pekerjaan->nilai_2=$request->nilai_2;
        $pekerjaan->nilai_3=$request->nilai_3;
        $pekerjaan->nilai_4=$request->nilai_4;
        $pekerjaan->nilai_total=$request->nilai_1+$request->nilai_2+$request->nilai_3+$request->nilai_4;
        
        
        
        // $penyedia->nilai = Pekerjaan::where('penyedia_id', $id)->avg('nilai_total');
        // Penyedia::where('id', $id)->update(['nilai'=>$penyedia->nilai]);

        $pekerjaan->update();
        
        return redirect()->back()->with('message','Nilai Pekerjaan Berhasil diupdate!');
    }

    public function bahppekerjaan($id){
        $pekerjaan = Pekerjaan::find($id);
        $penyedia = Penyedia::find($id);

        return view('admin.bahppekerjaan', compact('pekerjaan','penyedia'));
    }

    public function update_bahppekerjaan(Request $request, $id){
        $pekerjaan = Pekerjaan::find($id);
        $pekerjaan->update($request->all());
        if($request->hasFile('bahp')){
            $request->file('bahp')->move('dokumenpekerjaan/', $request->file('bahp')->getClientOriginalName());
            $pekerjaan->bahp = $request->file('bahp')->getClientOriginalName();
            $pekerjaan->save();
        }

        return redirect()->back()->with('message','BAHP Pekerjaan Berhasil diupload! Pekerjaan selesai.');

        // $pekerjaan = Pekerjaan::find($id);   
  
        // if($pekerjaan->personil->status != "tersedia"){
		// 	$pekerjaan->update([
		// 		"status" => $request->status,
		// 	]);

        //     if($request->hasFile('bahp')){
        //         $request->file('bahp')->move('dokumenpekerjaan/', $request->file('bahp')->getClientOriginalName());
        //         $pekerjaan->bahp = $request->file('bahp')->getClientOriginalName();
        //         $pekerjaan->save();
        //     }
			
        //     $pekerjaan->personil()->update([
		// 		"status" => "tersedia"
		// 	]);
				
		// 	// if you are creating a new personil relationship
		
		// 	$pekerjaan->personil()->create([
		// 		"status" => "tersedia",
		// 		//other required fields
        //     ]);

        //     return redirect()->back()->with('message','BAHP Pekerjaan Berhasil diupload! Pekerjaan selesai.');          
        // }else{
        //     return redirect()->back();
        // }   

        
    }

    public function showpenyedia(Penyedia $penyedia, Jeniskerja $jeniskerja){
        //$id = request('id');
        $pekerjaan = $penyedia->pekerjaans; //show pekerjaan(work) based on penyedia(vendor)
        //$pekerjaan = $penyedia->pekerjaans()->where('jeniskerja_id', $id)->get();
        //$totalAvgPenyedia=$jeniskerja->pekerjaans()->where('penyedia_id', $penyedia->id)->avg('nilai_total');
        
        $jeniskerja = Jeniskerja::all();
        
        return view('admin.showpenyedia', compact('penyedia','pekerjaan','jeniskerja'));
    }

    public function tabelpersonil(User $user){
        $personil = Personil::all();

        return view('admin.datapersonil', compact('personil','user'));
    }

    public function personilbaru(){
       
        return view('admin.addpersonil');
    }

    public function personilbarucheck(Request $request){
        if($request->get('nama')){
            $nama = $request->get('nama');
            $data = DB::table("personils")
             ->where('nama', $nama)
             ->count();
            if($data > 0)
            {
                return response()->json(['message' => 'not_unique']);
            }
            else
            {
                return response()->json(['message' => 'unique']);
            }
        }
    }

    public function insertpersonil(Request $request){
        //code here
        Personil::create($request->all());
        
        // $validatedData = $request->validate([
        //     'nama' => ['required', 'unique:personils', 'max:255'],
        // ]); <-Validation rule unique

         return redirect()->route('datapersonil')->with('message','Personil Baru Berhasil ditambahkan!');
    }

    public function deletepersonil($id){
        $personil = Personil::find($id);
        $personil->delete();

        return redirect()->route('datapersonil')->with('message','Personil Telah dihapus!');
    }

    public function editpersonil($id){
        $personil = Personil::find($id);
        
        return view('admin.editpersonil', compact('personil'));
    }

    public function updatepersonil(Request $request, $id){
        $personil = Personil::find($id);
        $personil->update($request->all());
        
        return redirect()->route('datapersonil')->with('message','personil Berhasil diupdate!');
    }

    public function tambahpersonil($id){
        $pekerjaan = Pekerjaan::find($id);
        $penyedia = Penyedia::find($id);
        $personil = Personil::all();

        return view('admin.personilpekerjaan', compact('pekerjaan','penyedia','personil'));
    }

    public function update_personilpekerjaan(Request $request, $id){    
        $personil = Personil::findOrFail($request->personil_id);   
  
        if($personil->status == 'tersedia'){
			$pekerjaan = Pekerjaan::findOrFail($id);

			$pekerjaan->update([
				'personil_id' => $personil->id,
			]);
			
            $personil->update([
				'status' => 'tdkTersedia'
			]);

            return redirect()->route('datapekerjaan')->with('message','Personil Pekerjaan Berhasil diupdate!');          
        }else{
            return redirect()->back();
        }   
    }

    public function rekappekerjaan(){
            $pekerjaan = Pekerjaan::with('penyedia','user')->paginate(100);
            return view('admin.rekappekerjaan', compact('pekerjaan'));
    }

    public function download($id)
{
    $pekerjaan = Pekerjaan::where('id', $id)->firstOrFail();
    $pathToFile = public_path('dokumenpekerjaan/' . $pekerjaan->bahp);
    return response()->download($pathToFile);
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        //
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
