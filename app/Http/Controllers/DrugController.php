<?php

namespace App\Http\Controllers;

use App\Models\Clasification;
use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $drug = $keyword ? Drug::where('name', 'LIKE', '%' . $keyword . '%')
        ->orWhere('description', 'LIKE', '%' . $keyword . '%')
        ->orWhere('price', 'LIKE', '%' . $keyword . '%')
        ->orWhereHas('clasification',function($q) use ($keyword){
            $q->where('name','LIKE','%' . $keyword . '%');
        })
        ->orderBy('name', 'asc')
        ->paginate(5) : Drug::paginate(5);

        $clasifications = Clasification::all();
        return view('backend.drug.index', compact('drug', 'clasifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image',
                'name' => 'required|string',
                'description' => 'required|string',
                'clasification_id' => 'required|exists:clasifications,id'
            ]);

            $data = $request->all();

            // Cek dan upload gambar ke folder storage
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('drug', 'public');
            }

            // Simpan data ke database
            Drug::create([
                'name' => $data['name'],
                'description' => $data['description'],
                'image' => $data['image'],
                'clasification_id' => $data['clasification_id'],
                'price' => $data['price'],
            ]);

            return redirect()->route('drug.index')->with('success', 'Data berhasil ditambahkan!');

        } catch (\Exception $e) {
            // Kalau ada error, kita tangkap dan kembalikan pesan error
            return redirect()->back()->with('error', 'Gagal menambahkan data: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drug $drug)
    {
        $clasifications = Clasification::all();
        return view('backend.drug.edit', compact('drug','clasifications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drug $drug)
    {
        try {
            $request->validate([
                'image' => 'nullable|image',
                'name' => 'required|string',
                'description' => 'required|string',
                'clasification_id' => 'required|exists:clasifications,id',
                'price' => 'required|numeric'
            ]);

            $data = $request->all();

            if ($request->hasFile('image')) {
                if ($drug->image) {
                    Storage::delete('public/' . $drug->image);
                }

                $data['image'] = $request->file('image')->store('drug', 'public');
            }

            $drug->update([
                'name' => $data['name'],
                'description' => $data['description'],
                'image' => $data['image'] ?? $drug->image,
                'clasification_id' => $data['clasification_id'],
                'price' => $data['price'],
            ]);

            return redirect()->route('drug.index')->with('success', 'Data berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengupdate data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drug $drug)
    {
        try {
            if($drug->image){
                Storage::delete('public/' . $drug->image);
            }
            $drug->delete();

            return redirect()->route('drug.index')->with('success','Data Berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data gagal dihapus: ' . $e->getMessage());
        }
    }
}
