<?php

 define('ROOT', dirname(__FILE__));

/**
 * Description of Vocabulary_txt
 *
 * @author Student
 */
class Vocabulary_txt {
    //put your code here
   private static function fopen_txt($name_vocabulary,$param) {

    @$fp = fopen(ROOT."/".$name_vocabulary.".txt", $param,1);
     if(!$fp){
           echo "<p>Your order could not be processed at this time</p>";
           exit;
       }
    return $fp;
}
    
public static function fwrite_txt() {
       $fp = Vocabulary_txt::fopen_txt("order","a");
       $output_string = $_REQUEST['english_word']."=>".$_REQUEST['russian_word'];
       fwrite($fp, $output_string."\n") or die("error.Do not write "
               . "the word in vocabulary") ;
       fclose($fp);
} 
public static function fread_txt(){
        $fp = Vocabulary_txt::fopen_txt("order","r");
        if (!$fp){
            echo "<p><strong>No orders pending."
            ."Please try again later .</strong></p></body></html>" ;
            exit;
        }
        
        while (!feof($fp)){
            $order= fgets($fp, 100);
            echo $order."<br>";
        }
        fclose($fp);
}
public static function create_vocabulary(){
        $alphabet =array('a','b','c','d',
                           'e','f','g','h',
                           'i','j','k','l',
                           'm','n','o','p',
                           'q','r','s','t',
                           'u','v','w','x',
                           'y','z');
//        for ($i = 65;$i < 91;$i++){
//            echo "&#".$i;
//            $name_vocabulary = "&#".$i;
//            $fp = fopen(ROOT."/vocabulary/$name_vocabulary".".txt", "a");
//            //echo '<br>';
//        }
        for($i=0;$i < count($alphabet);$i++){
          
           $fp = fopen(ROOT."/vocabulary/$alphabet[$i]".".txt", "a");
        }
}
      

   
}
