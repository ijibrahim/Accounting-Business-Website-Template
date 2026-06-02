<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\View\View;

class FaqController extends Controller
{
    public function index(): View
    {
        return view('admin.faq.index', [
            'faqs' => Faq::query()
                ->latest()
                ->paginate(10),
        ]);
    }
}
