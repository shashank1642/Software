<!--   
//   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
//     function get_data() {
//       $datae = array();
//       $datae[] = array(
//         'One' => $_POST['one'],
// 		'Two' => $_POST['two'],
//         'Th
//       returee' => $_POST['three'],
//         'Four' => $_POST['four'],
//         'Five' => $_POST['five'],
//         'Six' => $_POST['six'],
//       );rn json_encode($datae);
//     }
    
//     $name = "gfg";
//     $file_name = $name . '.json';
  
//     if(file_put_contents(
//       "$file_name", get_data())) {
//         echo $file_name .' file created';
//       }
//     else {
//       echo 'There is some error';
//     }
//   } -->
<?php
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
    function get_data() {
      $name = $_POST['name'];
      $file_name='StudentsData'. '.json';
  
      if(file_exists("$file_name")) {
        $current_data=file_get_contents("$file_name");
        $array_data=json_decode($current_data, true);
                
        $extra=array(
            'One' => $_POST['one'],
            'Two' => $_POST['two'],
            'Three' => $_POST['three'],
            'Four' => $_POST['four'],
            'Five' => $_POST['five'],
            'Six' => $_POST['six'],
        );
        $array_data[]=$extra;
        echo "file exist<br/>";
        return json_encode($array_data);
      }
      else {
        $datae=array();
        $datae[]=array(
            'One' => $_POST['one'],
            'Two' => $_POST['two'],
            'Three' => $_POST['three'],
            'Four' => $_POST['four'],
            'Five' => $_POST['five'],
            'Six' => $_POST['six'],
        );
        echo "file not exist<br/>";
        return json_encode($datae);
      }
    }
  
    $file_name='StudentsData'. '.json';
    
    if(file_put_contents("$file_name", get_data())) {
      echo 'success';
    }        
    else {
      echo 'There is some error';        
    }
  }
    
  ?>
