<?php

//$conn = new mysqli("localhost", "root", "", "kiatxt");
$conn = new mysqli("127.0.0.1", "kiatxt", "pYBD23p9MIT*", "kiatxt");
//$listar = "100442011120222200.txt";


$ruta[0] = "./10044/";
//$ruta[1] = "./10063/";
//$ruta[2] = "./10160/";

for($i=0; $i <count($ruta); $i++){

 //    echo  $ruta[$i];


/* ---------------------------------------------- - */

$directorio = opendir($ruta[$i]);
while($elementos = readdir($directorio)) {
  //  $list = null;
    if($elementos!= "." && $elementos!= "..") {
       
    $listar = array($elementos);
      /*   $list = $elementos;*/
      
    
  
    foreach($listar as $row){


    $sql30 = "SELECT * FROM  validator WHERE archivo='$row'";
    $resultado3 = $conn->query($sql30); 
    $fila  = $resultado3->fetch_assoc();


    if ($fila <> "") {

                echo "Ya esta cargados";
            } else {
                echo "Adelante";
            
          


        $sql20 = "INSERT INTO validator(archivo) VALUES ('$row' )";
        $conn->query($sql20);
  
        $prueba2 = fopen($ruta[$i].$row, "r") or die("error");

        while (!feof($prueba2)) {
            $linea2 = fgets($prueba2);
            $saltodelinea2 = nl2br($linea2);

            $carray2 = explode("|", $linea2);
            list($letra2) = $carray2;



            if ($letra2 == "A0") {
                list($letra2, $codigo2, $sucursal2) = $carray2;
                var_dump($letra2, $codigo2, $sucursal2);

                echo "<pre>";


            }

            if ($letra2 == "C2") {


                list($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var12, $var13, $var14) = $carray2;
                var_dump($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var12, $var13, $var14);
                $sql = "INSERT INTO c2(email,var2,var3,var4,var5,var6,var7,var8,var9,var10,var11,var12,var13,var14) VALUES ('$var8','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10','$var11','$var12','$var13','$var14' )";
                $conn->query($sql);
                $email= $var8;

            }
            if ($letra2 == "D3") {

                list($var1, $var2, $var3, $vin, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var12, $var13) = $carray2;
                var_dump($var1, $var2, $var3, $vin, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var12, $var13);
                $sql = "INSERT INTO d3(email,var2,var3,vin,var5,var6,var7,var8,var9,var10,var11,var12,var13) VALUES ('$email','$var2','$var3','$vin','$var5','$var6','$var7','$var8','$var9','$var10','$var11','$var12','$var13')";
                $conn->query($sql);


            }


            if ($letra2 == "E4") {
                list($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10) = $carray2;
                var_dump($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10);
                $sql = "INSERT INTO e4(email,var2,var3,var4,var5,var6,var7,var8,var9,var10) VALUES ('$email','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10')";
                $conn->query($sql);

            }

            if ($letra2 == "F5") {
                list($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9) = $carray2;
                var_dump($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9);
                $sql = "INSERT INTO f5(email,var2,var3,var4,var5,var6,var7,var8,var9) VALUES ('$email','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9')";
                $conn->query($sql);

            }

            if ($letra2 == "G6") {
                list($var1, $var2, $var3, $var4, $var5, $var6) = $carray2;
                var_dump($var1, $var2, $var3, $var4, $var5, $var6);
                $sql = "INSERT INTO g6(email,var2,var3,var4,var5,var6) VALUES ('$email','$var2','$var3','$var4','$var5','$var6')";
                $conn->query($sql);

            }

            if ($letra2 == "H7") {
                list($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9) = $carray2;
                var_dump($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9);
                $sql = "INSERT INTO h7(email,var2,var3,var4,var5,var6,var7,var8,var9) VALUES ('$email','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9')";
                $conn->query($sql);
                $sql = "INSERT INTO a0(email,letra, codigo, sucursal) VALUES ('$email','$letra2', '$codigo2','$sucursal2')";
                $conn->query($sql);
            }


        } 

        fclose($prueba2);
    }





}
}
}


}

?>