<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        return view('admin.about.index', [
            'about' => About::query()
                ->latest()
                ->paginate(10),
        ]);
    }
}
