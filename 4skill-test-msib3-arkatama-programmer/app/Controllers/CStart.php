<?php

namespace App\Controllers;

use App\Models\MStart;

class CStart extends BaseController 
{
    public function index() {
        $startModel = new MStart();
        // $data['identitas'] = $startModel->findAll(); // array
        $data['identitas'] = $startModel->get()->getResult(); // object
        // var_dump($data['identitas']);
        // die();

        return view('VTeks', $data);
    }

    public function parseTeks() {
        $teks = $this->request->getPost('teks');
    
        if (!empty($teks)) {
            $teks = explode(' ', $teks);
    
            if (count($teks) >= 3) {
                $name = strtoupper($teks[0]);
                $age = $teks[1];
                $city = strtoupper($teks[2]);
    
                $parsed_teks = [
                    'name' => $name,
                    'age' => $age,
                    'city' => $city
                ];
    
                $startModel = new MStart();
                $startModel->insert($parsed_teks);
    
                return redirect()->to(base_url('CStart'));
            } else {
                return redirect()->to(base_url('CStart'))->with('error', 'Input tidak sesuai');
            }
        } else {
            return redirect()->to(base_url('CStart'))->with('error', 'Input tidak boleh kosong');
        }
    }
    
}