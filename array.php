<html>
   <body>

      <?php
         $footballteam = array(
            "1" => array (
               "name" => "Jeff",
               "age" => 22,
               "height" => "6'5''",
               "weight" => "220lbs",
               "position" => "linebacker"
            ),

            "2" => array (
               "name" => "Fred",
               "age" => 21,
               "height" => "5'11''",
               "weight" => "195lbs",
               "position" => "safety"
            ),

            "3" => array (
               "name" => "Sam",
               "age" => 22,
               "height" => "6'0",
               "weight" => "202lbs",
               "position" => "tight end"
            ),

            "4" => array (
               "name" => "Justin",
               "age" => 21,
               "height" => "5'8''",
               "weight" => "220lbs",
               "position" => "defensive end"
            )
         );

        foreach ($footballteam as $key => $row) {
            $weight[$key]  = $row['weight'];
            $name[$key] = $row['name'];
          }

        array_multisort($weight, SORT_ASC, $name, SORT_ASC, $footballteam);

        echo "Here is my array output:<br><br>" ;
        foreach($footballteam as $key => $value)
        {
          echo $value['name']." - ".$value['age']." - ".$value['height']." - ".$value['weight']." - ".$value['position']."<br>";
        }
      ?>

   </body>
</html>
