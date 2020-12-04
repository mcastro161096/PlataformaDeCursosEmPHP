<?php
$param = $_POST;
$idUsuario = $param['idUsuario'];
$idCurso = $param['idCurso'];
$situacao = "Cursando";
$nomeUsuario = $param['nomeUsuario'];
$nomeCurso = $param['nomeCurso'];
$duracao = $param['duracao'];

if (isset($param['escolher'])) 
{
    $conexao = new mysqli("localhost", "root", "", "dbphp7");
    $query = $conexao->prepare("INSERT INTO USUARIOCURSO(IdUsuario, IdCurso, Situacao)
    VALUES (?, ?, ?);");
                    $query->bind_param("sss",
                $idUsuario, $idCurso, $situacao);
                if($query->execute()) 
              {
                header('Location: /PlataformaDeCursosEmPHP/View/Home.php');
            }    
              else
                echo "Não foi posível efetuar a matrícula";
}
if (isset($param['Concluir'])) 
{
    $conexao = new mysqli("localhost", "root", "", "dbphp7");
    $resutaldo = $conexao->query("UPDATE USUARIOCURSO SET Situacao = 'Concluído' WHERE IdUsuario = $idUsuario AND IdCurso = $idCurso;");
    if ($resutaldo == true) 
    {
        header('Location: /PlataformaDeCursosEmPHP/View/Home.php');
    }
    else 
    echo "Não foi possível concluir";
}
if (isset($param['Emitir_Certificado']))
 {
//imagecreatefromjpeg(filename)
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

$font1= realpath('BevanRegular.ttf');
$font2= realpath('PlayballRegular.ttf');
//imagettftext(image, size, angle, x, y, color, fontfile, text)

imagettftext($image, 32, 0, 320, 250, $titleColor,$font1,"CERTIFICADO");
imagettftext($image, 32, 0, 100, 350, $titleColor,$font2, $nomeUsuario." concluíu o curso\n "
. $nomeCurso."\ncom carga horária total de ".$duracao." horas"."\n\nConcluído em: ".date("d/m/Y"));

//imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"),$titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image);
imagejpeg($image, "certificado-".date("Y-m-d").".jpg");

imagedestroy($image);
 }


?>