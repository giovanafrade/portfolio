<?php
    // Nome do arquivo de texto
    $briefhome = 'briefhome.txt';

    // Verifica se o arquivo existe antes de tentar ler
    if (file_exists($briefhome)) {
        // Lê todo o conteúdo do arquivo para uma string
        $briefhome = file_get_contents($briefhome);
        
        // Exibe o conteúdo dentro do elemento
        echo $briefhome;
    } else {
        // Mensagem de erro se o arquivo não for encontrado
        echo 'O arquivo ' . htmlspecialchars($nome_arquivo) . ' não foi encontrado.';
    }
    // $produtos =
    // [
    //     [
    //         "nome do produto" => "Gloss Lip Bunny - Franciny Ehlke",
    //         "imagem do produto" => "lipbunny.png",
    //         "descricao" => "Gloss com efeito brilhoso e embalagem única e colecionável", 
    //         "preco" => "60,00"
            
    //     ],
    //     [
    //         "nome do produto" => "Kit de Caneta com 15 cores - Stabilo ",
    //         "imagem do produto" => "stabilo.jpg", 
    //         "descricao" => "Kit com cores vívidas",
    //         "preco" => "130,00"
    //     ],
    //     [
    //         "nome do produto" => "Creme de Pentear Encaracolando a Juba - Widi Care",
    //         "imagem do produto" => "creme.jpg",
    //         "descricao" => "Cachos definidos, brilhosos e sem frizz.", 
    //         "preco" => "43,00"
    //     ],
    //     [
    //         "nome do produto" => "Máscara de Cílios Sky High - Maybelline NY",
    //         "imagem do produto" => "rimel.jpg",
    //         "descricao" => "Fornece cílios longos e cheios. À Prova d'água.", 
    //         "preco" => "65,00"
    //     ],
    //     [
    //         "nome do produto" => "Loção Hidratante Corporal - Cerave",
    //         "imagem do produto" => "hidratante.jpg",
    //         "descricao" => "Limpa, hidrata e ajuda a restaurar as barreiras da pele", 
    //         "preco" => "37,00"
    //     ],
    //     [
    //         "nome do produto" => " Corretivo Líquido - Maybelline NY",
    //         "imagem do produto" => "corretivo.jpg",
    //         "descricao" => "Apaga olheiras, inchaço e linhas finas", 
    //         "preco" => "68,00"
    //     ]
    // ];

    // foreach ($produtos as $produto) 
    //     {

    //         echo '<div class="card">';
    //         echo '<h1>' . $produto['nome do produto'] . '</h1>';
    //         echo '<h3>' . $produto['descricao'] . '</h3>';
    //         echo '<h2>R$ ' . $produto['preco'] . '</h2>';
    //         echo "<img src='imagens/{$produto['imagem do produto']}' alt='{$produto['nome do produto']}' style='width:150px'><hr>";
    //     }

?>