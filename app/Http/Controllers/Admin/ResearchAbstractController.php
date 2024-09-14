<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ResearchAbstract;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Validators\ResearchAbstractValidator;

class ResearchAbstractController extends Controller
{
    private function ValidateAbstract(Request $request){

        return ResearchAbstractValidator::validate($request->all());
    }
    
    public function index(){
        
        return view('Admin.Research-Abstract.index');
    }
    public function store(Request $request){
        
        //to validate the input fields
        $validator = $this->ValidateAbstract($request);
        

        //if the field is error or faild it return the error message in json
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
            $path = $file->store('abstract-documents'); // Store the file in 'storage/app/documents'
            $originalName = $file->getClientOriginalName();

            //Create or store the research abstract
            ResearchAbstract::create([

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
                'msg' => 'Research abstract created successfully.',
                
            ]);

        } catch (\Exception $e) {

            // Rollback the transaction
            DB::rollBack();

            return response()->json([
                'status' => 0,
                'msg' => 'Failed to create research abstract. ' . $e->getMessage(),
            ]);
        }

    }

    public function AllRecord() {

        //Display All the Research abstract 
        $datas = ResearchAbstract::all();

        $i = 1;
        if ($datas->count() > 0) {
            $output = '<table class="table table-striped table-row-bordered gy-5 gs-7" id="all_abstract_table">
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
                                            <li><a class="dropdown-item abstract_edit" href="#" id="' .$data->id. '" data-bs-toggle="modal" data-bs-target="#edit_abstract_modal">Edit</a></li>
                                            <li><a class="dropdown-item abstract_view" href="#" id="' .$data->id. '" data-bs-toggle="modal" data-bs-target="#view_abstract">View</a></li>
                                            <li><a class="dropdown-item abstract_delete" href="#" id="' .$data->id. '">Delete</a></li>
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

        //find the ID of the selected Research Abstract 
        $data = ResearchAbstract::find($request->id);
		return response()->json($data);
    }

    public function view_pdf($id){

        // Find the research abstract by ID
        $document = ResearchAbstract::findOrFail($id);

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

        //find the ID of the selected Research Abstract 
        $data = ResearchAbstract::find($request->id);
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

            $update_abstract = ResearchAbstract::findOrFail($request->edit_abstract_id);
            $update_abstract->title = $request->title;
            $update_abstract->author = $request->author;
            $update_abstract->adviser = $request->adviser;
            $update_abstract->course = $request->course;
            $update_abstract->major = $request->major;
            $update_abstract->academic_year = $request->academic_year;
            $update_abstract->publication = $request->publication;
            $update_abstract->description = $request->description;

            if ($request->hasFile('document')) {

                // Delete the old file if exists
                if (Storage::exists($update_abstract->path)) {
                    Storage::delete($update_abstract->path);
                }
    
                // Store the new file
                $file = $request->file('document');
                $path = $file->store('abstract-documents');
                $originalName = $file->getClientOriginalName();

                $update_abstract->file_name = $originalName;
                $update_abstract->path = $path;
            }
           
            $update_abstract->update();

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

                //Find the ID of Research Abstract
                $data = ResearchAbstract::findOrFail($request->id);

                // Check if the file exists in storage
                if (Storage::exists($data->path)) {
                    Storage::delete($data->path); // Delete the file from storage
                }

                //Delete The selected Research Abstract
                $data->delete();

                DB::commit();
                return response()->json([
                    'status' => 200,
                    'msg' => 'Research Abstract Deleted Successfully',
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
