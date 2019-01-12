<?php

    function biodata() {

        $school  = ['highSchool' => 'Ar-Ridho', 'university' => 'Pamulang University'];
        $skill[] = ['skill'      => 'Array of Obj'];

        $data = [
            'name'       => 'Ahmad Muharik Al Ansori',
            'address'    => 'KP Pondok serut RT 002 RW 010 Kel. Pondok Kacang Barat',
            'hobbies'    => ['Coding','Nonton Film','Baca Buku'],
            'is_married' => TRUE,
            'school'     => $school,
            'skill'      => $skill
        ];

        return json_encode($data);
    }
    
    echo biodata();

?>
