<?php 
   //  MAKE  SCREEN BLOCK WITH FUNC  CODE PHP

    $screen =  fn($name_iden,$class_idem,$value)=> "<input type='text'  name=$name_iden  value='$value'  class=$class_idem>";

    $history =  fn($name_iden,$class_idem,$value)=> "<input type='text'  name=$name_iden  value='$value'  class=$class_idem>";

    //  MAKE  ARRAY  BUTTON  

    $array_button  =  array("operator_btn"=> array('+','-','*','/','clr'), "btn_number"=>array('1','2','3','4','5','6','7','8','9','0','00','.','='));

    //  MAKE  FUNCTION  TO SET  BUTTON CALC SYSTEME 
    
    function  setButton() 
    { 
       $btn_number =  "";
       $btn_set  =  "";
         forEach($GLOBALS["array_button"]  as  $key=>$value) 
            {
              switch($key) 
              {
                 case "operator_btn" :  
                      $btn_set.= "<article  class='btn_operator_section'>";
                     foreach($value  as  $array_value) 
                      {
                          $btn_set .= "<input type='submit'   class='btn_operator'  name='$array_value'   value='$array_value' >";
                      }
                      $btn_set.= "</article>";

                      echo  $btn_set;
                 break;
                 case "btn_number":
                   $btn_number.= "<article  class='btn_num_section'>";
                     foreach($value  as  $array_value) 
                      {
                          if($array_value ==  "=") 
                           {
                                 $btn_number .= "<input type='submit'   class='btn_num'  name='equal' value='$array_value'>";
                           }else 
                           {
                                $btn_number .= "<input type='submit'   class='btn_num'  name='$array_value' value='$array_value'>";
                           }
                      }
                      $btn_number.= "</article>";

                      echo  $btn_number;
                 break;
              }
            }
    }

    function  operation($num1,$num2,$operator) 
    {
         $result=  0;
       switch($operator) 
       {
          case  "+" :  
          $result =  $num1 +  $num2;
          break; 
          case  "-" :  
          $result =  $num1 -  $num2;
          break; 
          case  "*" :  
          $result =  $num1 *  $num2;
          break; 
          case  "/" :  
          $result =  $num1 /  $num2;
          break; 
       }

       return  $result;
    }

?>