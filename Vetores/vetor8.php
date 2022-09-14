<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

        <div>
            <pre>
                <?php

                    $vetor = [
                        "Naruto",
                        "One Piece",
                        "Dragon Ball"
                    ];
                    echo var_dump($vetor) . "</br></br>";
                    array_push($vetor, "Attack on Titan"); //Adiciona no final do vetor
                    echo var_dump($vetor);

                ?>
            </pre>
        </div>
    </body>
</html>