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
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Por favor, preencha todos os campos.";
    }

} else {
    // Se o formulário não foi enviado via POST
    echo "Método de envio inválido.";
}
?>
