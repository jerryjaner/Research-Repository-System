<?php

namespace App\Http\Controllers\Admin;

use App\Models\Research;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BackupResearchController extends Controller
{
    public function index(){

        return view('Admin.Research.index');
    }

    public function store(Request $request){
        
        $validator = Validator::make($request -> all(),[

            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'adviser' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'academic_year' => 'required|string|max:255',
            'publication' => 'required|string|max:255',
            'description' => 'required|string',
            'abstract_document' => 'required|file|mimes:pdf|max:10240', 
            'full_paper_file' => 'required|file|mimes:pdf|max:10240', 
            ],
            [
                'title.required' => 'The title field is required.',
                'author.required' => 'The author field is required.',
                'adviser.required' => 'The adviser field is required.',
                'course.required' => 'The course field is required.',
                'major.required' => 'The major field is required.',
                'academic_year.required' => 'The academic year field is required.',
                'publication.required' => 'The publication field is required.',
                'description.required' => 'The description field is required.',
                'abstract_document.required' => 'The abstract document field is required.',
                'abstract_document.file' => 'The abstract document must be a valid file.',
                'abstract_document.mimes' => 'The abstract document must be a PDF file.',
                'abstract_document.max' => 'The abstract document may not be greater than 10MB.',
                'full_paper_file.required' => 'The research paper field is required.',
                'full_paper_file.file' => 'The research paper must be a valid file.',
                'full_paper_file.mimes' => 'The research paper must be a PDF file.',
                'full_paper_file.max' => 'The research paper may not be greater than 10MB.',
            ]);


        if ($validator->fails()) {

            return response()->json([
                'status' => 422,
                'error' => $validator->errors()->toArray()
            ]);
        }

        // Begin transaction
        DB::beginTransaction();


        try {
            
            //For the abstract file
            $abstract_document_file = $request->file('abstract_document');
            $abstract_path = $abstract_document_file->store('abstract-file'); // Store the file in 'storage/app/documents'
            $AbstractFileOriginalName = $abstract_document_file->getClientOriginalName();


            //For the full paper research file
            $file = $request->file('full_paper_file');
            $path = $file->store('complete-research-file'); // Store the file in 'storage/app/documents'
            $originalName = $file->getClientOriginalName();


            //Create or store the research 
            Research::create([

               'title'   =>  $request->title,
               'author'  =>  $request->author,
               'adviser' =>  $request->adviser,
               'course'  =>  $request->course,
               'major'   =>  $request->major,
               'academic_year'  =>  $request->academic_year,
               'publication'    =>  $request->publication,
               'description'    =>  $request->description,
               'abstract_file_name' => $AbstractFileOriginalName,
               'abstract_path' => $abstract_path,
               'research_paper_file_name' => $originalName,
               'research_paper_path' => $path,

            ]);
            
            //Commit the transactions
            DB::commit();

            return response()->json([
                'status' => 200,
                'msg' => 'Research created successfully.',
                
            ]);

        } catch (\Exception $e) {

            // Rollback the transaction
            DB::rollBack();

            return response()->json([
                'status' => 0,
                'msg' => 'Failed to create research. ' . $e->getMessage(),
            ]);
        }

    }

    public function record() {
        $datas = Research::all();
    
        $i = 1;
        if ($datas->count() > 0) {
            $output = '<table class="table table-striped table-row-bordered gy-5 gs-7" id="all_research_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Research Title</th>
                                    <th>Author</th>
                                    <th>Adviser</th>
                                    <th>Course</th>
                                    <th>Major</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>';
    
            foreach ($datas as $data) {
                $output .= '<tr style="font-size: 1rem; vertical-align: middle;">
                                <td>' . $i++ . '</td>
                                <td>' . $data->title . '</td>
                                <td>' . $data->author . '</td>
                                <td>' . $data->adviser . '</td>
                                <td>' . $data->course . '</td>
                                <td>' . $data->major . '</td>
                                <td>
                                    <button class="btn btn-primary btn-sm mt-1 research_edit" id="' . $data->id . '" data-bs-toggle="modal" data-bs-target="#edit_research_modal">Edit</button>
                                    <button class="btn btn-info btn-sm mt-1 research_view" id="' . $data->id . '" data-bs-toggle="modal" data-bs-target="#view_research">View</button>
                                    <button class="btn btn-danger btn-sm mt-1 research_delete" id="' . $data->id . '">Delete</button>
                                </td>
                            </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-black my-5">No record present in the database!</h1>';
        }
    }

    public function view(Request $request){

        //find the ID of the selected Research Abstract 
        $data = Research::find($request->id);
		return response()->json($data);
    }

    public function view_abstract_pdf($id) {
        // Find the research abstract by ID
        $document = Research::findOrFail($id);
    
        // Check if the file exists in storage
        if (Storage::exists($document->abstract_path)) { // Use abstract_path for the abstract file
            // Get the file content and its MIME type
            $file = Storage::get($document->abstract_path);
            $type = Storage::mimeType($document->abstract_path);
    
            // Return the file as a response with the appropriate content type
            return response($file, 200)
                ->header('Content-Type', $type);
        } else {
            // If the file does not exist, return a 404 error
            return response()->json([
                'message' => 'File not found.'
            ], 404);
        }
    }

    public function view_research_pdf($id) {
        // Find the research abstract by ID
        $document = Research::findOrFail($id);
    
        // Check if the file exists in storage
        if (Storage::exists($document->research_paper_path)) { // Use abstract_path for the abstract file
            // Get the file content and its MIME type
            $file = Storage::get($document->research_paper_path);
            $type = Storage::mimeType($document->research_paper_path);
    
            // Return the file as a response with the appropriate content type
            return response($file, 200)
                ->header('Content-Type', $type);
        } else {
            // If the file does not exist, return a 404 error
            return response()->json([
                'message' => 'File not found.'
            ], 404);
        }
    }
    
    public function edit(Request $request){

        $data = Research::find($request->id);
        return response()->json($data);
    }

        
    
    public function update(Request $request) {
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'adviser' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'academic_year' => 'required|string|max:255',
            'publication' => 'required|string|max:255',
            'description' => 'required|string',
            'abstract_document' => 'nullable|file|mimes:pdf|max:10240',
            'full_paper_file' => 'nullable|file|mimes:pdf|max:10240',
        ]);
    
        // Return validation errors if any
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->errors()->toArray()
            ]);
        }
    
        try {
            DB::beginTransaction();
    
            // Find the Research record to update
            $data = Research::findOrFail($request->id);
            $data->title = $request->title;
            $data->author = $request->author;
            $data->adviser = $request->adviser;
            $data->course = $request->course;
            $data->major = $request->major;
            $data->academic_year = $request->academic_year;
            $data->publication = $request->publication;
            $data->description = $request->description;
    
            // Update abstract document if provided
            if ($request->hasFile('abstract_document')) {
                // Delete the old abstract file if it exists
                if (isset($data->abstract_path) && Storage::exists($data->abstract_path)) {
                    Storage::delete($data->abstract_path);
                }
    
                // Store the new abstract file
                $abstract_file = $request->file('abstract_document');
                $data->abstract_path = $abstract_file->store('abstract-file');
                $data->abstract_file_name = $abstract_file->getClientOriginalName();
            }
    
            // Update full paper file if provided
            if ($request->hasFile('full_paper_file')) {
                // Delete the old full paper file if it exists
                if (isset($data->research_paper_path) && Storage::exists($data->research_paper_path)) {
                    Storage::delete($data->research_paper_path);
                }
    
                // Store the new full paper file
                $full_paper_file = $request->file('full_paper_file');
                $data->research_paper_path = $full_paper_file->store('complete-research-file');
                $data->research_paper_file_name = $full_paper_file->getClientOriginalName();
            }
    
            // Save the updated record
            $data->save();
    
            DB::commit();
    
            return response()->json([
                'status' => 200,
                'msg' => 'Research Updated Successfully',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 0,
                'msg' => 'Failed to update research. ' . $e->getMessage(),
            ]);
        }
    }
    
    


    public function delete(Request $request) {

        DB::beginTransaction();

        try {
            if (!empty($request->id)) {
                // Find the ID of Research
                $data = Research::findOrFail($request->id);
    
                // Check if the abstract file exists in storage
                if (isset($data->abstract_path) && Storage::exists($data->abstract_path)) {
                    Storage::delete($data->abstract_path); // Delete the abstract file
                }
    
                // Check if the research paper file exists in storage
                if (isset($data->research_paper_path) && Storage::exists($data->research_paper_path)) {
                    Storage::delete($data->research_paper_path); // Delete the research paper file
                }
    
                // Delete the selected Research
                $data->delete();
    
                DB::commit();

                return response()->json([
                    'status' => 200,
                    'msg' => 'Research Deleted Successfully',
                ]);
            }

        } 
        catch (\Exception $e) {

            DB::rollback();

            return response()->json([
                'status' => 0,
                'msg' => 'Something went wrong. ' . $e->getMessage(),
            ]);
        }
    }
    
    
}
