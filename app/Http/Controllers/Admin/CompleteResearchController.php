<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\CompleteResearch;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Validators\CompleteResearchValidator;

class CompleteResearchController extends Controller
{
    private function ValidateCompleteResearch(Request $request){

        return CompleteResearchValidator::validate($request->all());
    }
    
    public function index(){

        return view('Admin.Complete-Research.index');
    }

    public function store(Request $request){

        $validator = $this->ValidateCompleteResearch($request);
        
        //if the field is error or failed it return the error message in json
        if($validator -> fails()){

            return response()->json([
                'status' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        } 

        try {
            // Begin transaction
            DB::beginTransaction();

            $file = $request->file('document');
            $path = $file->store('complete-research-documents'); // Store the file in 'storage/app/complete-research-documents'
            $originalName = $file->getClientOriginalName();

            //Create or store the research 
            CompleteResearch::create([

               'title'   =>  $request->title,
               'author'  =>  $request->author,
               'adviser' =>  $request->adviser,
               'course'  =>  $request->course,
               'major'   =>  $request->major,
               'academic_year'  =>  $request->academic_year,
               'publication'    =>  $request->publication,
               'description'    =>  $request->description,
               'file_name' => $originalName,
               'path' => $path,

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

    public function AllResearchRecord() {

        //Display All the Research abstract 
        $datas = CompleteResearch::all();
    
        $i = 1;
        if ($datas->count() > 0) {
            $output = '<table class="table table-striped table-row-bordered gy-5 gs-7" id="all_complete_research_table">
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
                                <td>'. $i++ .'</td>
                                <td>'.$data->title.'</td>
                                <td>'.$data->author.'</td>
                                <td>'.$data->adviser.'</td>
                                <td>'.$data->course.'</td>
                                <td>'.$data->major.'</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton' . $data->id . '" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton' . $data->id . '">
                                            <li><a class="dropdown-item complete_research_edit" href="#" id="' .$data->id. '" data-bs-toggle="modal" data-bs-target="#edit_complete_research_modal">Edit</a></li>
                                            <li><a class="dropdown-item complete_research_view" href="#" id="' .$data->id. '" data-bs-toggle="modal" data-bs-target="#view_complete_research">View</a></li>
                                            <li><a class="dropdown-item complete_research_delete" href="#" id="' .$data->id. '">Delete</a></li>
                                        </ul>
                                    </div>
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

        //find the ID of the selected Research  
        $data = CompleteResearch::find($request->id);
		return response()->json($data);
    }

    public function view_pdf($id){

        // Find the research abstract by ID
        $document = CompleteResearch::findOrFail($id);

        // Check if the file exists in storage
        if (Storage::exists($document->path)) {

            // Get the file content and its MIME type
            $file = Storage::get($document->path);
            $type = Storage::mimeType($document->path);

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

        //find the ID of the selected Research  
        $data = CompleteResearch::find($request->id);
		return response()->json($data);
    }

    public function update(Request $request){
        
        $validator = \Validator::make($request -> all(),[

            'title' => 'required',
            'author' => 'required',
            'adviser' => 'required',
            'course' => 'required',
            'major' => 'required',
            'academic_year' => 'required',
            'publication' => 'required',
            'description' => 'required',
            'document' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        }

        try {

            DB::beginTransaction();

            $update_research = CompleteResearch::findOrFail($request->edit_research_id);
            $update_research->title = $request->title;
            $update_research->author = $request->author;
            $update_research->adviser = $request->adviser;
            $update_research->course = $request->course;
            $update_research->major = $request->major;
            $update_research->academic_year = $request->academic_year;
            $update_research->publication = $request->publication;
            $update_research->description = $request->description;

            if ($request->hasFile('document')) {

                // Delete the old file if exists
                if (Storage::exists($update_research->path)) {
                    Storage::delete($update_research->path);
                }
    
                // Store the new file
                $file = $request->file('document');
                $path = $file->store('complete-research-documents');
                $originalName = $file->getClientOriginalName();

                $update_research->file_name = $originalName;
                $update_research->path = $path;
            }
           
            $update_research->update();

            DB::commit();

            return response()->json([
                'status' => 200,
                'msg' => 'Research Abstract Updated Successfully',
            ]);

        } catch (\Exception $e) {

            DB::rollBack();
            return response()->json([
                'status' => 0,
                'msg' => 'Failed To Update Research Abstract. ' . $e->getMessage(),
            ]);
        }
        

    }

    public function delete(Request $request){

        DB::beginTransaction();
        try {

            if (!empty($request->id)) {

                //Find the ID of Research 
                $data = CompleteResearch::findOrFail($request->id);

                // Check if the file exists in storage
                if (Storage::exists($data->path)) {
                    Storage::delete($data->path); // Delete the file from storage
                }

                //Delete The selected Research 
                $data->delete();

                DB::commit();
                return response()->json([
                    'status' => 200,
                    'msg' => 'Research Deleted Successfully',
                ]);
            }

        } catch(\Exception $e) {
            DB::rollback();

            return response()->json([
                'status' => 0,
                'msg' => 'Something went wrong. ' . $e->getMessage(), // Optionally include error message
            ]);

        }
    }
}
