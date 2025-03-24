<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    public function chooseType()
    {
        return view('pages.choose_type');
    }

    public function selectTemplate()
    {
        $templates = ['business', 'blog', 'portfolio', 'landing'];
        return view('pages.select_template', compact('templates'));
    }

    public function create(Request $request)
    {
        $template = $request->query('template', 'default'); // Default is blank
        return view('pages.create', compact('template'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'template' => 'nullable|string|max:50'
        ]);

        Page::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'template' => $request->template ?? 'default',
        ]);

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    public function preview($template)
{
    $availableTemplates = ['blog', 'landing', 'portfolio'];
    
    if (!in_array($template, $availableTemplates)) {
        abort(404);
    }

    return view("templates.$template");
}


    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $page->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
        ]);

        return redirect()->route('pages.index')->with('success', 'Page updated successfully.');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }

    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('pages.show', compact('page'));
    }

    public function showTemplate($template)
{
    if (!view()->exists("templates.$template")) {
        abort(404, "Template not found");
    }

    return view("templates.$template");
}

}
