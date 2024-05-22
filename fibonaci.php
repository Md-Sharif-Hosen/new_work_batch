  function fibonacci1($old,$new,$end){
    static $start;
    $start=$start ?? 0;
    if ($start>$end){
        return;
    }
    $start++;
    echo $old. " ";
    $_temp=$old+$new;
    $old=$new;
    $new=$_temp;
    fibonacci1($old,$new,$end);
  }
  fibonacci1(0,1,20);
