<!doctype html>
<html lang="en">

<head>
    <title>PHP Hotel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous" defer></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous" defer></script>
</head>

<body>
    <header>
    </header>
    <main>

        <?php

        $hotels = [

            [
                'name' => 'Hotel Belvedere',
                'description' => 'Hotel Belvedere Descrizione',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 10.4
            ],
            [
                'name' => 'Hotel Futuro',
                'description' => 'Hotel Futuro Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 2
            ],
            [
                'name' => 'Hotel Rivamare',
                'description' => 'Hotel Rivamare Descrizione',
                'parking' => false,
                'vote' => 1,
                'distance_to_center' => 1
            ],
            [
                'name' => 'Hotel Bellavista',
                'description' => 'Hotel Bellavista Descrizione',
                'parking' => false,
                'vote' => 5,
                'distance_to_center' => 5.5
            ],
            [
                'name' => 'Hotel Milano',
                'description' => 'Hotel Milano Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 50
            ],

        ];
        ?>

        <div class="container mt-3">
            <h1>PHP Hotels</h1>
            <!-- tabella con bootstrap -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>Parcheggi</th>
                        <th>Voto</th>
                        <th>Distanza dal centro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // ciclo foreach per l'array di tutti gli hotel
                    foreach ($hotels as $hotel) {
                        // stampo solo il tag di apertura così posso inserire tutto il contenuto
                        echo "<tr>";
                        // foreach per il singolo array associativo dell'hotel
                        foreach ($hotel as $key => $value) {
                            // if per aggiungere i km se la chiave è la distanza dal centro
                            if ($key == "distance_to_center") {
                                echo "<td>$value km</td>";
                            } elseif ($key == "parking") {
                                echo $value == true ? "<td>Sì</td>" : "<td>No</td>";
                            } elseif ($key == "vote") {
                                echo "<td>$value/5</td>";
                            } else {
                                echo "<td>$value</td>";
                            }
                        }
                        // una volta riempita chiudo il tag
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>



    </main>
    <footer>
    </footer>

</body>

</html>