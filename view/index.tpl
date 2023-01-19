{include file="view/inicio.tpl"}


<h1>Upload do Arquivo para o Servidor FTP</h1>
    
    
<form action="envia.php" method="post" enctype="multipart/form-data">
    Arquivo: <input type="file" name="arquivo">
    <input type="submit" value="Enviar">
</form>


{include file="view/fim.tpl"}