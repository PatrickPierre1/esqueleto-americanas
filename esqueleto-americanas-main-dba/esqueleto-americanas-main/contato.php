<?php 
    include "header.php";
    include "config.php";

    $nome = $_POST["name"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $sql = "INSERT INTO `contato`(`nome`, `email`, `mensagem`) VALUES ('$nome','$email','$mensagem')";

    $inserir = $pdo->prepare($sql);
    $inserir->execute();
?>

<main>
    <h1>Entre em Contato:</h1>
    <form name="form1" method="post">

        <label for="nome">Seu nome:</label>
        <input type="text" name="nome" id="nome" >
        <br>
        <label for="email">Seu e-mail:</label>
        <input type="text" name="email" id="email" >
        <br>
        <label for="mensagem">Sua mensagem:</label>
        <textarea name="mensagem" rows="5"></textarea>
        <br>
        <button type="submit">Enviar Mensagem</button>

    </form>
</main>

<?php 
    include "footer.php";
?>
