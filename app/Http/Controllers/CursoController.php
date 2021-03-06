<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Support\Str;


class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function store(StoreCurso $request)
    {
        $request->request->add(['slug' => Str::slug($request->name, '-')]);
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(StoreCurso $request, Curso $curso)
    {
        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function delete(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
