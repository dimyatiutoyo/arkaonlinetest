<?php

class School {
    public $highSchool = "SMAN 1 Jakenan";
    public $university = "Universitas Muria Kudus";
}

class Skill {
    public $name;
    public $score;
    
    function __construct($name = null, $score = null) {
        $this->name = $name;
        $this->score = $score;
    }
}

function get_bio() {
    $name = "Dimyati Utoyo";

    $address = "Ds. Pelemgede 9/2 Jl. Raya Pucakwangi - Jakenan, Pati, Jawa Tengah";

    $hobbies = array("Badminton", "Nonton Film", "Main Game");

    $is_married = false;

    $school = new School();

    $arr_skill_obj = [];
    $arr_skill_obj[] = new Skill("Badminton", 80);
    $arr_skill_obj[] = new Skill("Membaca pikiran orang lain", 20);


    $data = array(
        'name' => $name,
        'address' => $address,
        'hobbies' => $hobbies,
        'is_married' => $is_married,
        'school' => $school,
        'skilss' => $arr_skill_obj
    );

    return json_encode($data);
}

echo '<pre>';
echo get_bio();;