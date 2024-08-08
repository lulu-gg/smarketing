<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SPGProgram;

class SPGProgramController extends Controller
{
    public function index()
    {
        $spgPrograms = SPGProgram::all();
        return view('user.spg_programs.index', compact('spgPrograms'));
    }

    public function show($id)
    {
        $spgProgram = SPGProgram::findOrFail($id);
        return view('user.spg_programs.show', compact('spgProgram'));
    }

    public function create()
    {
        return view('user.spg_programs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ecc' => 'required|integer',
            'ps' => 'required|integer',
            'usia' => 'required|integer',
        ]);

        SPGProgram::create($request->only(['ecc', 'ps', 'usia']));

        return redirect()->route('user.spg_programs.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $spgProgram = SPGProgram::findOrFail($id);
        return view('user.spg_programs.edit', compact('spgProgram'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ecc' => 'required|integer',
            'ps' => 'required|integer',
            'usia' => 'required|integer',
        ]);

        $spgProgram = SPGProgram::findOrFail($id);
        $spgProgram->update($request->only(['ecc', 'ps', 'usia']));

        return redirect()->route('user.spg_programs.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $spgProgram = SPGProgram::findOrFail($id);
        $spgProgram->delete();

        return redirect()->route('user.spg_programs.index')->with('success', 'Data berhasil dihapus');
    }
}
