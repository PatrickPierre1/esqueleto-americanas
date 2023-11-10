<?php 
    include "header.php";
    include "config.php";

    $id = $_GET["id"];
    $sql = "SELECT * FROM produto WHERE id = $id";
    $consulta = $pdo->prepare($sql);
    $consulta->execute();
    $produtos = $consulta->fetch(PDO::FETCH_ASSOC);
    
?>

<main>
    <div class="grid-2">
        <div class="coluna">
            <img src="imagens/<?=$produtos["imagem"]?>" alt="<?=$produtos["nome"]?>">
        </div>
        <div class="coluna">
            <h2><?= $produtos["nome"]?></h2>
            <p>R$: <?= $produtos["valor"]?></p>
        </div>
    </div>
</main>

<?php 
    include "footer.php";
?>
