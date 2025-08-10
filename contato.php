<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Coleta os dados do formulário
    $nome = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $mensagem = htmlspecialchars(trim($_POST["message"]));

    // Verifica se os campos foram preenchidos
    if (!empty($nome) && !empty($email) && !empty($mensagem)) {
        
        // Cria uma string com os dados
        $dados = "Nome: $nome\nEmail: $email\nMensagem: $mensagem\n\n";

        // Define o caminho do arquivo onde será salvo
        $arquivo = "mensagens_contato.txt";

        // Salva os dados no arquivo
        file_put_contents($arquivo, $dados, FILE_APPEND);

        // Retorno de sucesso
        echo "<script>
        alert('Mensagem enviada com sucesso! Obrigada pelo contato, $nome!');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Por favor, preencha todos os campos.');
        window.location.href = 'index.php#contato';
        </script>";
    }

} else {
    // Se o formulário não foi enviado via POST
    echo "<script>
    alert('Método de envio inválido. Tente novamente');
    window.location.href = 'index.php#contato';
    </script>";
}
?>
