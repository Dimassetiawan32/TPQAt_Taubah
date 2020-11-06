<?php

namespace App\Http\Controllers;
use App\Biodata;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BiodataController extends Controller
{
    public function __construct()
    {
        $this->biodata = new Biodata ();
    }

    public function index()
    {
        $biodatas = Biodata::all();

        return view("backend.biodata.index", compact('biodatas'));
    }

    public function create()
    {
        return view("backend.biodata.create");
    }

    public function store()
    {
        $biodata = Biodata::create($this->validateRequest());
        $this->storeImage($biodata);
        return redirect()->back()->with(['success' => 'Biodata Berhasil Dibuat']);
    }

    private function validateRequest()
    {
        return tap(request()->validate([
            'nama'          => 'required',
            'alamat'        => 'required',
            'gender'        => 'required',
            'images'        => 'file|image|max:5000',
            'agama'         => 'required',
            'tgl_lahir'     => 'required',
            'tmp_lahir'     => 'required',
            'asal_sekolah'  => 'required',
            'telpon'        => 'required',
            'nama_ibu'      => 'required',
            'nama_ayah'     => 'required',      
        ]), function(){
            if(request()->hasFile('images')){
                request()->validate([
                    'images' => 'file|image|max:5000',
                ]);
            }
        });
    }

    private function storeImage($biodata){
        if(request()->has('images')){
            $biodata->update([
                'images' => request()->images->store('uploads','public'),
            ]);
            $image = Image::make(public_path('storage/'. $biodata->images))->fit(300,300, null, 'top-left');

            $image->save();
        }
    }

    public function edit($id)
    {
        
        $biodata = Biodata::findOrFail($id);
        return view("backend.biodata.edit", compact('biodata'));
    }
    
    public function update(Biodata $biodata)
    {
        $biodata->update($this->validateRequest());
        $this->storeImage($biodata);
        return redirect()->back()->with(['success' => 'Biodata Berhasil Diperbarui']);
    }

    public function show($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view("backend.biodata.show", compact('biodata'));
    }
    
    public function destroy(Biodata $biodata)
    {
        $biodata->delete();

        if(\File::exists(public_path('storage/'. $biodata->images))){
            \File::delete(public_path('storage/'. $biodata->images));
        }

        return redirect()->back()->with(['success' => 'Data berhasil di hapus']);
    }

}

