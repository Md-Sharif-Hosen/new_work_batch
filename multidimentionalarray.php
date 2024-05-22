$stu_result = [
    "sharif" => [
        "math" => 80,
        "English" => 70,
        "Bangla" => 90,
        "Coding" => 86,
    ],
    "Esusuf" => [
        "math" => 85,
        "English" => 60,
        "Bangla" => 90,
        "Coding" => 76,
    ],
    "Mehedi" => [
        "math" => 60,
        "English" => 40,
        "Bangla" => 90,
        "Coding" => 76,
    ],
];
function calculation($marks)
{
    if ($marks >= 90) {
        return "A+";
    } elseif ($marks >= 80) {
        return "A";
    } elseif ($marks >= 70) {
        return "A-";
    } elseif ($marks >= 60) {
        return "B";
    } else {
        return "Fail";
    }
}

foreach ($stu_result as $student => $subject) {
    echo "]\n \nStudent:$student \n[ \n";
    foreach ($subject as $subjects => $stu_mark) {
        $grade = calculation($stu_mark);
        echo "  Subject: $subjects \n";
        echo "  Marks: $stu_mark.\n";
        echo "  Grade: $grade\n\n";
    }
}
