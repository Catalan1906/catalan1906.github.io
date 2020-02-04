srand( microtime() * 1000000 );
 $num = rand( 1, 3 );
   
 switch( $num )
 {
 case 1: $image_file = "1.jpg";
     break;
 case 2: $image_file = "2.jpg";
     break;
 case 3: $image_file = "3.jpg";
     break;
 }
 echo "Random Image : <img src=$image_file />";
