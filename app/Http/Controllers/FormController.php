<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class FormController extends Controller
{

    public function submit(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'parents_name'      => 'required|string|max:255',
                'kids_name'         => 'required|string|max:255',
                'phone_number'      => 'required|numeric|digits_between:10,15',
                'email'             => 'required|email|max:255',
                'province'          => 'required|string|max:255',
                // 'prev_curriculum'   => 'required|string|max:255',
                'school_choice'     => 'required|string|max:255',
                'grade_interested'  => 'required|string|max:255',
                'timeframe_visit'   => 'required|string|max:255',
                'comment'           => 'string',
            ]);

            $sanitizedData = array_map(function ($value, $key) {
                if (is_string($value)) {
                    $value = strip_tags(trim($value)); // Strip HTML tags and trim whitespace
                    if ($key === 'comment') {
                        // Replace newlines with a space in the comment field
                        $value = str_replace(["\r\n", "\n", "\r"], ' ', $value);
                    }
                }
                return $value;
            }, $validatedData, array_keys($validatedData));
            Lead::create($sanitizedData);
            // dd($validatedData);
            return redirect()->back()->with('success', 'Data successfully saved!')->withFragment('#formSection');
        } catch (\Exception $e) {
            // Log error untuk debugging (opsional)
            // Log::error($e->getMessage());
            // dd($e->getMessage());
            return redirect()->back()->with('error', 'Failed to save data. Please try again.')->withFragment('#formSection');
        }


        // Proses data yang diterima dari form
        //$validatedData = $request->all(); // Ambil semua data form tanpa validasi

    }
}


// <?php

// namespace App\Http\Controllers;

// use App\Models\Lead;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Log;


// class FormController extends Controller
// {

//     public function submit(Request $request)
//     {
//         try {
//             $validatedData = $request->validate([
//                 'parents_name'      => 'required|string|max:255',
//                 'kids_name'         => 'required|string|max:255',
//                 'phone_number'      => 'required|numeric|digits_between:10,15',
//                 'email'             => 'required|email|max:255',
//                 'province'          => 'required|string|max:255',
//                 // 'prev_curriculum'   => 'required|string|max:255',
//                 'school_choice'     => 'required|string|max:255',
//                 'grade_interested'  => 'required|string|max:255',
//                 'timeframe_visit'   => 'required|string|max:255',
//                 'comment'           => 'string',
//             ]);
//             Lead::create($validatedData);
//             // dd($validatedData);
//             return redirect()->back()->with('success', 'Data successfully saved!')->withFragment('#formSection');
//         } catch (\Exception $e) {
//             // Log error untuk debugging (opsional)
//             // Log::error($e->getMessage());
//             // dd($e->getMessage());
//             return redirect()->back()->with('error', 'Failed to save data. Please try again.')->withFragment('#formSection');
//         }


//         // Proses data yang diterima dari form
//         //$validatedData = $request->all(); // Ambil semua data form tanpa validasi

//     }
// }
