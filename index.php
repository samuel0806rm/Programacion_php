<?php
echo "HOLA MUNDO";
echo '<br>';
echo "HOLA MUNDO";

$nombre = 'Pepe';
$apellido = "Gomez";
echo '<br> Hola '. $nombre. ' ' .$apellido;
echo "<br>Hola $nombre $apellido";
$Edad = 25;
$estatura =1.75;
$mayorEdad = true;
$prueba = null;
$prueba = array(1,2,3,4,5,6);
$prueba = [[],2.6,3,true,5,"a"];
echo '<br>' . $prueba[2];

$persona = [
    "nombre" => "Pepe",
    "apellido" => "Gomez",
    "edad" => 30,
    "numerosSuerte" => [20,12,6],
];
echo '<br>' . $persona["nombre"];

$numeros =[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
for ($i=0; $i <12 ; $i++) { 
    $parOImpar = "";
    if (($numeros[$i]%2)==0) {
        $parOImpar ="Par";
     } else {
            $parOImpar = "Impar";
        }
        echo "<br>$numeros[$i] es $parOImpar";

}
echo "<br>";
$i =0;
$estado = true;
while ($estado) {
    if ($i==1) {
        $i++;
        continue;
    }
    $parOImpar = "";
    if (($numeros[$i]%2)==0) {
        $parOImpar ="Par";
     } else {
            $parOImpar = "Impar";
        }
        echo "<br>$numeros[$i] es $parOImpar";
        $i++;
        if ($i > 11) {
            // $estado=false;
            break;
        }
        
}
echo "<br>";
$i=0;
do {
    $parOImpar = "";
    if (($numeros[$i]%2)==0) {
        $parOImpar ="Par";
     } else {
            $parOImpar = "Impar";
        }
        echo "<br>$numeros[$i] es $parOImpar";
        $i++;

} while ($i < 12);

echo "<br>";
foreach($numeros as $i=>$n){
$parOImpar = "";
if (($n%2)==0) {
    $parOImpar ="Par";
 } else {
        $parOImpar = "Impar";
 }
 echo "<br>$i: $n es $parOImpar";
}

/**
 * & and
 * || or
 * ! negacion
 * > mayor que
 * < menor que
 * >= mayor o igual
 * <= menor o igual
 * != diferente
 * == igual que
 */

 if ($numeros[0] == 0 && $numeros[0] < 10) {
 
 }elseif ($numeros[0] == 0 && $numeros[0] < 20){

 } elseif ($numeros[0] == 0 && $numeros[0] < 30){
    
 }else {
 }
$catg = 'a';
switch ($variable) {
    case 'a':
        # code...
        break;
    
    default:
        # code...
        break;
}  
function saludar($nombre){
    echo "Hola $nombre";
}
saludar("Pepe");
function getSaludo($nombre){
    return"<br>Hola $nombre";
}
echo getSaludo("Ana");

function saludarDos(string $nombre, $apellido){
    echo "<br>Hola $nombre $apellido";
}
 saludarDos("Pepe",'Gomez');
 saludarDos("Pepe",12);
 saludarDos(12, 12);

 function saludarTres($nombre, $apellido= "Perez"){
    echo"<br>Hola $nombre $apellido";
 }
 saludarTres("Ana");
 saludarTres("Ana", "Gomez");

 function saludarCuatro(...$args){
    $nombre =$args[0];
    $apellido= empty($args[1]) ? '': $args[1];
    echo"<br>Hola $nombre $apellido";

 }
 saludarCuatro("Pedro");
 saludarCuatro("Pedro", "Picapiedra");
 saludarCuatro("Pedro", "Picapiedra", 40);
 saludarCuatro("Pedro", "Picapiedra", 40, [1, 2, 3, 4]);
 saludarCuatro("Pedro", "Picapiedra", 40, [1, 2, 3, 4], true);

 define("MICONSTANTE", "Prueba");
 echo MICONSTANTE;

 class Persona {
    private $nombre = null;
    private $apellido;

    function getNombre(){
        return $this->nombre;
    }
    function setNombre($val){
        $this-> nombre = $val;
    }
 }
 $persona = new Persona();
 $persona->setNombre("Pablo");
 echo "<br>" . $persona->getNombre();
 
?>