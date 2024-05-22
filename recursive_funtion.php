    function PrintNumber1($counter,$end,$stepping_1=1){
        if($counter>$end){
            return;
        }
        echo "$counter \n";
        $counter+=$stepping_1;
        PrintNumber1($counter,$end,$stepping_1);
    }
    PrintNumber1(50,60,7);
