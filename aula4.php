<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Média dos Alunos</title>
</head>
<body>
    <h1>Calcula a Média dos Alunos</h1>
    <hr>
    
    <form method="POST">
        
        Nome do Aluno:
        <br>
        <input type="text" name="txtnome" > <br>
        <br>

        Nota1:
        <br>
        <input type="text" name="txtnota1"> <br>
        <br>
    
        Nota2:
        <br>
        <input type="text" name="txtnota2"> <br>
        <br>

        Nota3:
        <br>
        <input type="text" name="txtnota3"> <br>
        <br>
        
        <input type="submit" name="btncalcular" value="Calcular Média" >
        
    </form>

    <?php
    
        if ($_POST) {
        
            //Recebe dados do formulário
            $nome=$_POST['txtnome'];
            $nota1=$_POST['txtnota1'];
            $nota2=$_POST['txtnota2'];
            $nota3=$_POST['txtnota3'];

            // Calcula Média
            $media = ($nota1+$nota2+$nota3)/3;
            

            // Mostrando Resultado
            
            echo "<br> <hr> A Média do Aluno $nome é $media";
            echo "<hr>";
        
        }
    ?>

</body>
</html>
