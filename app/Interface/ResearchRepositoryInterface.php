<?php

namespace App\Interface;

interface ResearchRepositoryInterface
{
    public function getAll();
    public function findById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function getAbstractPath($id); 
    public function getFullPaperPath($id); 
}
