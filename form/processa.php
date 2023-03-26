<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <title></title>

    </head>

    <body>

        <?php

        $date = $_POST['date'];

        $name = $_POST['name'];

        $email = $_POST['email'];

        $RG = $_POST['RG'];
        
        $CPF = $_POST['CPF'];

        $namePai = $_POST['namePai'];

        $nameMae = $_POST['nameMae'];

        $rua = $_POST['rua'];

        $numcasa = $_POST['numcasa'];

        $bairro = $_POST['bairro'];

        $cidade = $_POST['cidade'];

        $estado = $_POST['estado'];

        $profissao = $_POST['profissao'];

        $renda = $_POST['renda'];

        $escolaridade = $_POST['escolaridade'];

        $modalidade = $_POST['modalidade'];

        $cultural = $_POST['cultural'];


        require 'vendor/autoload.php';



        $from = new SendGrid\Email(null, "cliente@luhmarsnails.com.br");

        $subject = "$name";

        $to = new SendGrid\Email(null, "athoseducacaoservicos@gmail.com");

        $content = new SendGrid\Content("text/html", "Olá Matheus, <br>você tem um novo integrante. 
        <br><br><br>Nascimento: $date<br>Nome pessoal: $name<br>Email pessoal $email<br>
        <br>Rg pessoal: $RG<br>CPF pessoal: $CPF<br>Nome do pai: $namePai<br>Nome da mãe: $nameMae<br>
        Moradia: $rua, $numcasa, $bairro, $cidade, $estado<br>
        profissao: $profissao<br> renda: $renda<br> escolaridade: $escolaridade <br>modalidade: $modalidade <br>area cultural: $cultural"
    
    );

        $mail = new SendGrid\Mail($from, $subject, $to, $content);

        

        //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

        //franciscaluciagomessilva@gmail.com

        /// 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//

        //Necessário inserir a chave

        $apiKey = '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';

        $sg = new \SendGrid($apiKey);



        $response = $sg->client->mail()->send()->post($mail);

        echo "<script>alert('Cadastrado com Sucesso!!');</script>";

		

        ?>

    </body>

    <script>window.location.replace("http://institutoathos.org/");</script>

</html>

