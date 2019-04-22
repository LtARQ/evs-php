<?php

$info = array(
    "Country" => array(
        "Pakistan" => array(
            "city" => array(
                "Lahore" => array(
                    "Hometown" => array(
                        "Muslimtown" => array(
                            "Std. Name" => array(
                                "Abdulraouf" => array(
                                    "Roll No. :" => "01",
                                    "Class :" => "BS(Computer Science)",
                                    "Semester :" => "05",
                                    "Gender :" => "Male"
                                ),
                                "Ali" => array(
                                    "Roll No. :" => "02",
                                    "Class :" => "BS(Algo Science)",
                                    "Semester :" => "04",
                                    "Gender :" => "Male"
                                )
                            )
                        ),
                        "Doha" => array(
                            "Std. Name" => array(
                                "Akeel Asad" => array(
                                    "Roll No. :" => "03",
                                    "Class :" => "BS(Political Science)",
                                    "Semester :" => "05",
                                    "Gender :" => "Male"
                                ),
                                "Malik" => array(
                                    "Roll No. :" => "04",
                                    "Class :" => "BS(Economic Science)",
                                    "Semester :" => "04",
                                    "Gender :" => "Male"
                                )
                            )
                        )
                    )
                )
            )
        )
        
        
        
        , 
        //"India" => array("city" => "Delhi")
    )
);

foreach($info as $keys => $values){
    foreach($values as $key => $data){
        foreach($data as $ke => $dat){
            foreach($dat as $b => $c){
                foreach($c as $d => $e){
                    foreach($e as $g => $h){
                        foreach($h as $j => $k){
                            foreach($k as $m => $n){
                                foreach($n as $p => $q){
                                    echo $keys . " = " . $key . " ------- " . $ke . " = " . $b . " ------- " . $d . " = " . $g. " ------- " .
                                     $j . " = " . $m . " ------- " . $p . " = " . $q . "<br>";
                                }
                                echo "<br>";
                            }
                            echo "<br>";
                        }
                        echo "<br>";
                    }
                    echo "<br>";
                }
                echo "<br>";
            }
            echo "<br>";            
        }
        echo "<br>";
    }
    echo "<br>";
}


?>