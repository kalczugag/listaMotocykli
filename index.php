<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista motocykli</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h1>Lista Motocykli</h1>

        <div id="container">
            <form action="search.php" method="GET">
                <input
                    type="text"
                    name="search"
                    placeholder="Szukaj marki lub modelu"
                />
                <button type="submit">Szukaj</button>
            </form>

            <table>
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Marka</th>
                        <th>Model</th>
                        <th>Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'list.php'; ?>
                </tbody>
            </table>

            <h2>Dodaj Motocykl</h2>
            <form action="add.php" method="POST">
                <input type="text" name="make" placeholder="Marka" required />
                <input type="text" name="model" placeholder="Model" required />
                <button type="submit">Dodaj</button>
            </form>
        </div>
    </body>
</html>
