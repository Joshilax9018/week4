<?php

$obj = new main();

class main
{

	private $html; 

	public function __construct()
	{

		$date =  date('Y-m-d', time());
		echo "The value of \$date: ".$date."<br>";

		$tar = "2017/05/24";		
		echo "The value of \$tar: ".$tar."<br>";

		$year = array(2012, 396, 300,2000, 1100, 1089);
		echo "The value of \$year: ";
		print_r($year);
		
		$this->html .= htmltags::horizontalRule();

		$this->html .= htmltags::heading3("Replace String Example");
		$this->html .= stringman::stringReplace('-','/',$date);
		$this->html .= htmltags::horizontalRule();

		$this->html .= htmltags::heading3("Compare String Example");
		$this->html .= stringman::stringCompare($date,$tar);
		$this->html .= htmltags::horizontalRule();

		$this->html .= htmltags::heading3("Word Count Example");
		$this->html .= stringman::stringWordcount($date);
		$this->html .= htmltags::horizontalRule();

		$this->html .= htmltags::heading3("String Length Example");
		$this->html .= stringman::stringLength($date);
		$this->html .= htmltags::horizontalRule();

		$this->html .= htmltags::heading3("ASCII Value Example");
		$this->html .= stringman::stringASCII('2');
		$this->html .= htmltags::horizontalRule();

		$this->html .= htmltags::heading3("Last two characters of the string are: ");
		$this->html .= stringman::stringCharacter($date,8);
		$this->html .= htmltags::horizontalRule();

		$this->html .= htmltags::heading3("String into Array Example:");
		$this->html .= stringman::stringExplode("-",$date);
        $this->html .= htmltags::horizontalRule();
        
        $this->html .= htmltags::heading3("Leap Year");
        $this->html .= LeapYear::find_leap_year($year);
        $this->html .= htmltags::horizontalRule();
	}
 	
 	 public function __destruct() 
 	{
 		print($this->html);
 	}
}


class stringMan
{

	 static public function stringReplace($src,$target,$str)
	 {
	 	return str_replace($src,$target,$str);
	 }

	 static public function stringCompare($string1,$string2)
	 {
	 	if($string1==$string2)
	 	{
	 		echo "Oops";
	 	}
	 		else if($string1>$string2)
	 		{
	 			return "Future";
	 		}
	 			else if($string1<$string2)
	 			{
	 				return "Past";
	 			}
	 }

	 static public function stringWordcount($string1)
	 {
	 	return str_word_count($string1);
	 }

	 static public function stringLength($string1)
	 {
	 	return strlen($string1);
	 }

	 static public function stringASCII($string1)
	 {
	 	return ord($string1);
	 }

	 static public function stringCharacter($string1,$value)
	 {
	 	return substr($string1,$value);
	 }

	 static public function stringExplode($value,$string1)
	 {
	 	print_r (explode($value,$string1));
	 }


}

class LeapYear{

	static public function find_leap_year($array1){
	for($i=0;$i<6;$i++){	
                        if ($array1[$i]%100==0)
                    {
                if ($array1[$i]%4==0)
                    
                    {
                        $Result = "True";

                    }
                    else
                    {
                        $Result = "False";

                    }  
                }

                    elseif($array1[$i]%4==0){
                        $Result = "True";
                                }

                    else
                    {
                        $Result = "False";
                    
                }
                                
                                

                switch ($Result) 
                {
                    case "True":
                        echo "Year is Leap Year <br>";
                    break;
                    case "False":
                        echo "Year is Not a Leap Year <br>";
                    break;
                }

                }

            }


			

}


 


class htmltags
{
  static public function horizontalRule() 
  {
      return '<hr>';
    }
    static public function heading1($text) 
    {
      return '<h1>' . $text . '</h1>';
  }
    static public function heading3($text)
    {
      return '<h3>' .$text . '</h3>';
    }
    
}