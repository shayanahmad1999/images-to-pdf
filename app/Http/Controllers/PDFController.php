<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generate(Request $request)
    {
        $request->validate([
            'images.*' => 'image|max:2048',
        ]);

        $paths = collect($request->file('images'))->map(function ($image) {
            return $image->store('images', 'public');
        });

        $filename = 'images_' . now()->format('Ymd_His') . '.pdf';

        return Pdf::loadView('pdf.images', ['paths' => $paths])
                ->download($filename);
    }
}
