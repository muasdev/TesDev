<?php
   class JsonData {
      public $itemId = "";
      public $itemName  = "";
      public $price = "";
      public $ratings = "";
      public $freeShiping  = "";
      public $color = "";
   }
	
   $data = new JsonData();
   $data->itemId = "12341822";
   $data->itemName  = "desk";
   $data->price = intval(7000);
   $data->ratings  = array("rater = akmal, score=4", "rater = andi, score=5");  	
   $data->freeShiping = true;
   $data->color  = array("brown", "black");

   echo json_encode($data);
?>
