<?php

//$conn = new mysqli("localhost", "root", "", "kiatxt");
$conn = new mysqli("127.0.0.1", "dguzman", "", "kiatxt");
$listar = null;
    $directorio = opendir("./10044/");
    while($elementos = readdir($directorio)) {
        if($elementos!= "." && $elementos!= "..") {
            if(is_dir("./10044/".$elementos)){
                $listar .= $elementos;
            }
            else {
                $listar .= $elementos;


            echo $listar;
//$prueba = fopen("100442011120222200.txt", "r") or die("error");
$prueba2 = fopen($listar, "r") or die("error");
/* 
while (!feof($prueba)) {

    $linea = fgets($prueba);
    $saltodelinea = nl2br($linea);
    // echo $saltodelinea;

    $carray = explode("|", $linea);


    list($letra) = $carray;
    //var_dump($letra,$codigo,$sucursal);

    if ($letra == "C2") {
        list($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var12, $var13, $var14) = $carray;
       // list($var1, $var2, $var3, $vin, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var12, $var13) = $carray;
        //var_dump($var1,$var2,$var3,$vin,$var5,$var6,$var7,$var8,$var9,$var10,$var11,$var12,$var13);


        $vinl= $var8;
 */
        while (!feof($prueba2)) {
            $linea2 = fgets($prueba2);
            $saltodelinea2 = nl2br($linea2);
            // echo $saltodelinea;
            $carray2 = explode("|", $linea2);
            list($letra2) = $carray2;
            //echo $vinl;


            if ($letra2 == "A0") {
                list($letra2, $codigo2, $sucursal2) = $carray2;
                var_dump($letra2, $codigo2, $sucursal2);
                //echo $vinl;
                echo "<pre>";


            }

            if ($letra2 == "C2") {
              //  echo $vinl;

                list($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var12, $var13, $var14) = $carray2;
                var_dump($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var12, $var13, $var14);
                $sql = "INSERT INTO C2(email,var2,var3,var4,var5,var6,var7,var8,var9,var10,var11,var12,var13,var14) VALUES ('$var8','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10','$var11','$var12','$var13','$var14' )";
                $conn->query($sql);
                $email= $var8;

            }
            if ($letra2 == "D3") {
                //echo $vin;
                list($var1, $var2, $var3, $vin, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var12, $var13) = $carray2;
                var_dump($var1, $var2, $var3, $vin, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var12, $var13);
                $sql = "INSERT INTO D3(email,var2,var3,vin,var5,var6,var7,var8,var9,var10,var11,var12,var13) VALUES ('$email','$var2','$var3','$vin','$var5','$var6','$var7','$var8','$var9','$var10','$var11','$var12','$var13')";
                $conn->query($sql);
                // echo $vin;

            }


            if ($letra2 == "E4") {
                list($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10) = $carray2;
                var_dump($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10);
                $sql = "INSERT INTO E4(email,var2,var3,var4,var5,var6,var7,var8,var9,var10) VALUES ('$email','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10')";
                $conn->query($sql);

            }

            if ($letra2 == "F5") {
                list($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9) = $carray2;
                var_dump($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9);
                $sql = "INSERT INTO F5(email,var2,var3,var4,var5,var6,var7,var8,var9) VALUES ('$email','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9')";
                $conn->query($sql);

            }

            if ($letra2 == "G6") {
                list($var1, $var2, $var3, $var4, $var5, $var6) = $carray2;
                var_dump($var1, $var2, $var3, $var4, $var5, $var6);
                $sql = "INSERT INTO G6(email,var2,var3,var4,var5,var6) VALUES ('$email','$var2','$var3','$var4','$var5','$var6')";
                $conn->query($sql);

            }

            if ($letra2 == "H7") {
                list($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9) = $carray2;
                var_dump($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9);
                $sql = "INSERT INTO H7(email,var2,var3,var4,var5,var6,var7,var8,var9) VALUES ('$email','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9')";
                $conn->query($sql);
                $sql = "INSERT INTO a0(email,letra, codigo, sucursal) VALUES ('$email','$letra2', '$codigo2','$sucursal2')";
                $conn->query($sql);
            }


        }

//    }

//}

fclose($prueba2);

}
}
}


?>
