<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function data()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tasks');

        $totalData = $builder->countAllResults();
        $totalFiltered = $totalData;

        // where disini
        if ($_POST['search']['value']) {
            $builder->like('judul', $_POST['search']['value']);
            $totalFiltered = $builder->countAllResults();
            $builder->limit($_POST['length'], $_POST['start']);
            $data = $builder->like('judul', $_POST['search']['value'])->get()->getResult();   
        } else {
            $builder->limit($_POST['length'], $_POST['start']);
            $data = $builder->get()->getResult();  
        }

        return json_encode([
            "draw" => $_POST['draw'],
            "recordsTotal" => $totalData,
            "recordsFiltered" => $totalFiltered,
            "data" => $data,
        ]);
    }

    public function create()
    {
        $data = [
            'judul'  => $_POST['title']
        ];
        
        $db      = \Config\Database::connect();
        $builder = $db->table('tasks');
        $builder->insert($data);

        return json_encode(['message' => 'success insert data']);
    }

    public function update($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tasks');
        $builder->set('judul', $_POST['title']);
        $builder->set('status', $_POST['status']);
        $builder->where('id', $id);
        $builder->update();

        return json_encode(['message' => 'success update data']);
    }

    public function delete($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tasks');
        $builder->where('id', $id);
        $builder->delete();

        return json_encode(['message' => 'success delete data']);
    }
}
