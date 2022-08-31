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
                    array_unshift($vetor, "One Punch Man"); //Adiciona no ínicio do vetor
                    echo var_dump($vetor);

                ?>
            </pre>
        </div>
    </body>
</html>