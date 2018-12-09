<?php
/*Terminal Node 1*/
$afc = 'AFC'; 
$amh = 'AMH';
$homem_tem_filhos = 'HOMEM_TEM_FILHOS'; 
$idadeelementofeminino = 'IDADEELEMENTOFEMININO'; 
$m_etnia = 'M_ETNIA'; 
$m_tabaco = 'M_TABACO';
$mulher_tem_filhos = 'MULHER_TEM_FILHOS';
$class = 'class';
$terminalNode = 'terminalNode';


$class=0;


if (isset($_GET['operation']) AND $_GET['operation']=='fertilitytest'){   /////write whatever you need to get to this page


/*Terminal Node 1*/
if
(
  (
       $_POST['m_etnia'] == 1 ||
       $_POST['m_etnia'] == 2 ||
       $_POST['m_etnia'] == 5 ||
       $_POST['m_etnia'] == 6 
  ) &&
    ($_POST['amh'] <= 1.24909 
){
   $class = 0;
}

/*Terminal Node 2*/
else if
(
  (
       $_POST['m_etnia'] == 3 ||
       $_POST['m_etnia'] == 4 
  ) &&
    ($_POST['amh'] <= 1.24909 
)
{
   $class = 1;
}

/*Terminal Node 3*/
else if
(
    ($_POST['afc'] <= 10.50000) &&
    ($_POST['amh'] > 1.24909) &&
    ($_POST['amh'] <= 1.47585) 
)

{
 
   $class = 0;
}

/*Terminal Node 4*/
else if
(
    ($_POST['afc'] <= 10.50000 ) &&
    ($_POST['amh'] > 1.47585 ) &&
    ($_POST['amh'] <= 1.80207)  
)

{

   $class = 1;
}

/*Terminal Node 5*/
else if
(
    ($_POST['afc'] <= 10.50000 ) &&
    ($_POST['amh'] > 1.80207 ) &&
    ($_POST['amh'] <= 4.04339 )
)

{
   $class = 0;
}

/*Terminal Node 6*/
else if
(
    ($_POST['afc'] <= 10.50000 ) &&
    ($_POST['amh'] > 4.04339 )
)

{
   $class = 1;
}

/*Terminal Node 7*/
else if
(
  (
       $_POST['m_etnia'] == 1 ||
       $_POST['m_etnia'] == 2 ||
       $_POST['m_etnia'] == 3 ||
       $_POST['m_etnia'] == 4 ||
       $_POST['m_etnia'] == 6 
  ) &&
    ($_POST['afc'] > 10.50000 ) &&
    ($_POST['idadeelementofeminino'] <= 39.50000 ) &&
    ($_POST['amh'] > 1.24909 ) &&
    ($_POST['amh'] <= 3.61561 ) 
)

{
   $class = 1;
}

/*Terminal Node 8*/
else if
(
  (
       $_POST['m_etnia'] == 1 ||
       $_POST['m_etnia'] == 2 ||
       $_POST['m_etnia'] == 3 ||
       $_POST['m_etnia'] == 4 ||
       $_POST['m_etnia'] == 6 
  ) &&
    ($_POST['afc'] > 10.50000 ) &&
    ($_POST['idadeelementofeminino'] <= 39.50000 ) &&
    ($_POST['amh'] > 3.61561 ) &&
    ($_POST['amh'] <= 3.80646 )
)

{
   $class = 0;
}

/*Terminal Node 9*/
else if
(
  (
       $_POST['m_etnia'] == 1 ||
       $_POST['m_etnia'] == 2 ||
       $_POST['m_etnia'] == 3 ||
       $_POST['m_etnia'] == 4 ||
       $_POST['m_etnia'] == 6 
  ) &&
    ($_POST['afc'] > 10.50000 ) &&
    ($_POST['idadeelementofeminino'] <= 39.50000 ) &&
    ($_POST['amh'] > 3.80646 ) &&
    ($_POST['amh'] <= 5.33774 )
)

{
   $class = 1;
}

/*Terminal Node 10*/
else if
(
  (
       $_POST['m_etnia'] == 1 ||
       $_POST['m_etnia'] == 2 ||
       $_POST['m_etnia'] == 3 ||
       $_POST['m_etnia'] == 4 ||
       $_POST['m_etnia'] == 6 
  ) &&
    ($_POST['amh'] > 5.33774 ) &&
    ($_POST['afc'] > 10.50000 )&&
    ($_POST['afc'] <= 18.50000 ) &&
    ($_POST['idadeelementofeminino'] <= 35.50000 )
)

{
   $class = 1;
}

/*Terminal Node 11*/
else if
(
  (
       $_POST['m_etnia'] == 1 ||
       $_POST['m_etnia'] == 2 ||
       $_POST['m_etnia'] == 3 ||
       $_POST['m_etnia'] == 4 ||
       $_POST['m_etnia'] == 6 
  ) &&
    ($_POST['amh'] > 5.33774 ) &&
    ($_POST['afc'] > 10.50000 ) &&
    ($_POST['afc'] <= 18.50000 ) &&
    ($_POST['idadeelementofeminino'] > 35.50000 ) &&
    ($_POST['idadeelementofeminino'] <= 39.50000 )
)

{
   $class = 0;
}

/*Terminal Node 12*/
else if
(
  (
       $_POST['m_etnia'] == 1 ||
       $_POST['m_etnia'] == 2 ||
       $_POST['m_etnia'] == 3 ||
       $_POST['m_etnia'] == 4 ||
       $_POST['m_etnia'] == 6 
  ) &&
    ($_POST['idadeelementofeminino'] <= 39.50000 ) &&
    ($_POST['amh'] > 5.33774 ) &&
    ($_POST['afc'] > 18.50000 ) &&
    ($_POST['afc'] <= 22.50000 )
)

{
   $class = 0;
}

/*Terminal Node 13*/
else if
(
  (
       $_POST['m_etnia'] == 1 ||
       $_POST['m_etnia'] == 2 ||
       $_POST['m_etnia'] == 3 ||
       $_POST['m_etnia'] == 4 ||
       $_POST['m_etnia'] == 6 
  ) &&
    ($_POST['idadeelementofeminino'] <= 39.50000 ) &&
    ($_POST['amh'] > 5.33774 ) &&
    ($_POST['afc'] > 22.50000 )
)

{
   $class = 1;
}

/*Terminal Node 14*/
else if
(
  (
       $_POST['m_etnia'] == 5 
  ) &&
    ($_POST['amh'] > 1.24909 ) &&
    ($_POST['afc'] > 10.50000 ) &&
    ($_POST['idadeelementofeminino'] <= 39.50000 )
)

{
   $class = 1;
}

/*Terminal Node 15*/
else if
(
    ($_POST['amh'] > 1.24909 ) &&
    ($_POST['afc'] > 10.50000 ) &&
    ($_POST['idadeelementofeminino'] > 39.50000 )
)

{
   $class = 0;
}

}

if ($class==0){
	echo 'Recommended for treatment';
}

else if ($class==1){
	echo 'No need for treatment.';
}

?>