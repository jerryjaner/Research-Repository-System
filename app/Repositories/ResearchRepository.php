<?php

namespace App\Repositories;

use App\Models\Research;
use Illuminate\Support\Facades\Storage;
use App\Interface\ResearchRepositoryInterface;

class ResearchRepository implements ResearchRepositoryInterface
{
    public function getAll()
    {
        return Research::all();
    }

    public function findById($id)
    {
        return Research::findOrFail($id);
    }

    public function create(array $data)
    {
        return Research::create($data);
    }

    public function update($id, array $data)
    {
        $research = Research::findOrFail($id);
        
        if (isset($data['abstract_document'])) {
            // Delete the old abstract file if it exists
            if (Storage::exists($research->abstract_path)) {
                Storage::delete($research->abstract_path);
            }

            $abstract_file = $data['abstract_document']->store('abstract-file');
            $data['abstract_path'] = $abstract_file;
            $data['abstract_file_name'] = $data['abstract_document']->getClientOriginalName();
        }

        if (isset($data['full_paper_file'])) {
            // Delete the old full paper file if it exists
            if (Storage::exists($research->research_paper_path)) {
                Storage::delete($research->research_paper_path);
            }

            $paper_file = $data['full_paper_file']->store('complete-research-file');
            $data['research_paper_path'] = $paper_file;
            $data['research_paper_file_name'] = $data['full_paper_file']->getClientOriginalName();
        }

        $research->update($data);
        return $research;
    }

    public function delete($id)
    {
        $research = Research::findOrFail($id);

        if (Storage::exists($research->abstract_path)) {
            Storage::delete($research->abstract_path);
        }

        if (Storage::exists($research->research_paper_path)) {
            Storage::delete($research->research_paper_path);
        }

        return $research->delete();
    }

    public function getAbstractPath($id)
    {
        $research = Research::findOrFail($id);
        return $research->abstract_path;
    }

    public function getFullPaperPath($id)
    {
        $research = Research::findOrFail($id);
        return $research->research_paper_path;
    }

}
