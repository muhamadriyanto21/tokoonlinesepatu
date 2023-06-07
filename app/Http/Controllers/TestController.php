<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function testgambar(Request $request)
    {
        $image = $request->file('image');
        $path = $image->store('public/images'); // Gambar akan disimpan di direktori "storage/app/public/images"

        // Lanjutkan dengan logika lain yang Anda butuhkan, misalnya menyimpan path gambar ke database
        // ...

        return "Gambar berhasil diunggah";
    }
}
