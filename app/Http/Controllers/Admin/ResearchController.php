<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Interface\ResearchRepositoryInterface;

class ResearchController extends Controller
{
    protected $researchRepository;

    public function __construct(ResearchRepositoryInterface $researchRepository)
    {
        $this->researchRepository = $researchRepository;
    }

    public function index()
    {
        return view('Admin.Research.index');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
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
        ]);
    
        // Return validation errors if any
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->errors()->toArray()
            ]);
        }
    
        DB::beginTransaction();
    
        try {
            
            $data = $request->all();
    
            // Handle abstract file upload
            if ($request->hasFile('abstract_document')) {
                $abstract_file = $request->file('abstract_document');
                $abstract_path = $abstract_file->store('abstract-file'); // Store in storage/app/abstract-file
                $data['abstract_path'] = $abstract_path;
                $data['abstract_file_name'] = $abstract_file->getClientOriginalName();
            }
    
            // Handle full research paper file upload
            if ($request->hasFile('full_paper_file')) {
                $paper_file = $request->file('full_paper_file');
                $paper_path = $paper_file->store('complete-research-file'); // Store in storage/app/complete-research-file
                $data['research_paper_path'] = $paper_path;
                $data['research_paper_file_name'] = $paper_file->getClientOriginalName();
            }
    
            // Create a new research record via repository
            $this->researchRepository->create($data);
    
            DB::commit();
    
            return response()->json([
                'status' => 200,
                'msg' => 'Research created successfully.',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
    
            return response()->json([
                'status' => 500,
                'msg' => 'Failed to create research. ' . $e->getMessage(),
            ]);
        }
    }
    
    public function record()
    {
        $datas = $this->researchRepository->getAll();

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

    public function view(Request $request)
    {
        $data = $this->researchRepository->findById($request->id);
        return response()->json($data);
    }

    public function view_abstract_pdf($id)
    {
        $path = $this->researchRepository->getAbstractPath($id);

        if (Storage::exists($path)) {
            return Storage::response($path); // This will stream the file in the browser
        }

        return response()->json(['status' => 404, 'msg' => 'File not found'], 404);
    }

   

    public function edit(Request $request)
    {
        $data = $this->researchRepository->findById($request->id);
        return response()->json($data);
    }

    public function view_research_pdf($id)
    {
        $path = $this->researchRepository->getFullPaperPath($id);

        if (Storage::exists($path)) {
            return Storage::response($path); // This will stream the file in the browser
        }

        return response()->json(['status' => 404, 'msg' => 'File not found'], 404);
    }


    public function update(Request $request)
    {
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

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->errors()->toArray()
            ]);
        }

        DB::beginTransaction();

        try {
            $this->researchRepository->update($request->id, $request->all());
            DB::commit();

            return response()->json([
                'status' => 200,
                'msg' => 'Research Updated Successfully',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => 500,
                'msg' => 'Failed to update research. ' . $e->getMessage(),
            ]);
        }
    }

    public function delete(Request $request)
    {
        DB::beginTransaction();

        try {
            $this->researchRepository->delete($request->id);
            DB::commit();

            return response()->json([
                'status' => 200,
                'msg' => 'Research Deleted Successfully',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => 500,
                'msg' => 'Something went wrong. ' . $e->getMessage(),
            ]);
        }
    }
}
