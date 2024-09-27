<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    public function index()
    {
        return view('User.home');
    }

    public function search(Request $request)
    {
        // Initialize the query
        $query = Research::query();

        if ($request->filled('title') || $request->filled('author')) {
            // Filter by title if provided
            if ($request->filled('title')) {
                $query->where('title', 'like', '%' . $request->title . '%');
            }

            // Filter by author if provided
            if ($request->filled('author')) {
                $query->where('author', 'like', '%' . $request->author . '%');
            }

            // Get the results with pagination
            $researches = $query->paginate(10);

        } else {
            // If no filters are provided, set researches to an empty collection
            $researches = collect();
        }

        // Return the main view with the results
        return view('User.home', compact('researches'));
    }
    public function downloadAbstract($id)
    {
        // Find the research record by ID
        $research = Research::findOrFail($id); // Throws a 404 if not found

        // Check if the abstract path exists
        if (!$research->abstract_path) {
            return redirect()->back()->with('error', 'Abstract PDF not available');
        }

        // Generate the full path
        $filePath = storage_path('app/' . $research->abstract_path);

        // Check if file exists
        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'File not found');
        }

        // Return the file for download
        return response()->download($filePath, $research->abstract_file_name);
    }

}
