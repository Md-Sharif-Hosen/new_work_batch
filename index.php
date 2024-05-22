
    function taskB(){
        echo "task B \n";
    }
    
    function taskD(){
        echo "task D \n";
    }
    
    function taskC(){
        echo "task C \n";
    }

    function toLarge(){
        taskA();
        taskB();
        taskC();
        taskD();
    }
    toLarge();
