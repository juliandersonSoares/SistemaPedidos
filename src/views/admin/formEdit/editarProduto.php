<?php
include("../../../../database/conn.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$tabela = $conn->prepare("SELECT * FROM produtos WHERE id= :id ;");
$tabela->execute(array(':id' => $id));
$rowTable = $tabela->fetch();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../styles/RealizarPedido.css">
    <link rel="stylesheet" href="../../../styles/menu.css">
    <link rel="stylesheet" href="../../../styles/GoogleFonts/GoogleFonts.css">
    <link rel="stylesheet" href="../../../styles/cadastroProdutos.css">
    <title>Editar Produto</title>
</head>

<body>
    <div class="container">
        <form method="post" action="../../../controllers/products/productController.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value='<?php echo $rowTable['id']; ?>' />
            <label>Nome do Produto <input type="text" name="nome" value='<?php echo $rowTable['nome']; ?>' /></label>
            <label>Descrição <input type="text" name="descricao"
                    value='<?php echo $rowTable['descricao']; ?>' /></label>
            <label>Preço <input type="text" name="preco" value='<?php echo $rowTable['preco']; ?>' /></label>
            <label>Adicionais <input type="text" name="adicionais"
                    value='<?php echo $rowTable['adicionais']; ?>' />
            </label>
            <input id="image" name="imagem" type="file"  accept="image/png, image/jpeg">
            <div>
                <img width="250px" height="150px" src="../../../controllers/products/<?php echo $rowTable['path_imagem']; ?>" id="preview-image">
            </div>

            <button type="submit" name="updateProduct">Editar Produto</button>
        </form>
    </div>
    </div>
    <script src="../../../js/FileRead.js" type="text/javascript"></script>
</body>

</html>