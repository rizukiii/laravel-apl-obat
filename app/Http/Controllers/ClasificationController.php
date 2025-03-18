<?php

namespace App\Http\Controllers;

use App\Models\Clasification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClasificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        if ($keyword) {
            $clasification = Clasification::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('description', 'LIKE', '%' . $keyword . '%')->orderBy('name', 'asc')->paginate(5);
        } else {
            $clasification = Clasification::paginate(5);
        }


        return view('backend.clasification.index', compact('clasification'));
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
            ]);

            $data = $request->all();

            // Cek dan upload gambar ke folder storage
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('clasification', 'public');
            }

            // Simpan data ke database
            Clasification::create([
                'name' => $data['name'],
                'description' => $data['description'],
                'image' => $data['image']
            ]);

            return redirect()->route('clasification.index')->with('success', 'Data berhasil ditambahkan!');

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
    public function edit(Clasification $clasification)
    {
        return view('backend.clasification.edit', compact('clasification'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clasification $clasification)
    {
        try {
            $request->validate([
                'image' => 'nullable|image',
                'name' => 'nullable|string',
                'description' => 'nullable|string'
            ]);

            $data = $request->all();

            // cek apakah ada gambar baru yg di upload
            if ($request->hasFile('image')) {
                // hapus gambar lama kalau ada
                if ($clasification->image && storage_path('app/public/' . $clasification->image)) {
                    Storage::delete('public/' . $clasification->image);
                }
                // upload gambar baru
                $data['image'] = $request->file('image')->store('clasification', 'public');
            }

            // update data ke database
            $clasification->update($data);
            // save
            $clasification->save();

            return redirect()->route('clasification.index')->with('success', 'Data Berhasil Diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal Memperbarui data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clasification $clasification)
    {
        try {
            if ($clasification->image) {
                Storage::delete('public/' . $clasification->image);
            }

            $clasification->delete();

            return redirect()->route('clasification.index')->with('success', 'Data Berhasil dihapus!');
        } catch (Exception $e) {
            return redirect()->route('clasification.index')->with('error', 'Data Gagal Di hapus: ' . $e->getMessage());
        }

    }
}
