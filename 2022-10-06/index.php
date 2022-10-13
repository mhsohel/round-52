<?php
$data=10;
// echo "hello ".$data;
// $d=sprintf('hello %x',$data);
// echo $d;
// heredoc
// newdoc 
// $r=<<<t
// Sultan's Dine
// t;
// $d=<<<Dhaka
// Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nam, nesciunt libero aliquam quidem eius maiores quae numquam vitae corporis dolores eaque $data molestias eveniet sunt voluptas debitis consectetur beatae repellat?
// Dhaka;
// echo $d;

// Numeric Array 
$t=157;
$data=array("Test",1570,'CSE');
// echo "<pre>";
// print_r($data);
// echo $data[2];

// Associative array (key value pair)
$student=array(
    'name'=>'Test',
    "roll"=>1578,
    'dpt'=>'CSE',
    'semester'=>array(
        '1st'=>array(
            'Bangla'=>array(
                'quiz'=>50,
                'mid'=>46,
                'final'=>75
            ),
            'english'=>array(
                'quiz'=>50,
                'mid'=>46,
                'final'=>75
            ),
            'math'=>array(
                'quiz'=>50,
                'mid'=>46,
                'final'=>75
            )
        ),
        '2nd'=>array(
            'Discrete-math'=>array(
                'quiz'=>50,
                'mid'=>46,
                'final'=>75
            ),
            'Operating-system'=>array(
                'quiz'=>50,
                'mid'=>46,
                'final'=>75
            ),
            'Nural-Network'=>array(
                'quiz'=>50,
                'mid'=>46,
                'final'=>75
            )
        )
    )
);
echo "<pre>";
// print_r ($student);


// $data='Dhaka';
// $d=&$data;
// $d='Rangpur';
// echo $d;


// $dhaka='Welcome to dhaka';
// $data='dhaka';
// $d=$$data;
// echo $d;

// $dhaka=10;
// $rangpur=24;
// $sylhet=58;

$dist=array('dhaka','rangpur','sylhet','Bogra','Pabna');
// for($i=0;$i<count($dist);$i++){
//     $r=$dist[$i];
//     echo $$r.'<br>';
// }

// echo $dhaka;
// echo $rangpur;
// echo $sylhet;


for ($i=count($dist)-1; $i >=0 ; $i--) { 
    echo $dist[$i].'<br>';
}
