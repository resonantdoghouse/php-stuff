<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pirate Talk PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Pirata+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <main>
        <section>
            <h1>Convert yer text to Pirate Talk</h1>
            <form method="get" class="pirate-talk-form">
                <textarea name="text-to-convert" id="" cols="30" rows="10" placeholder="enter non pirate sentence"></textarea>
                <input type="submit">
            </form>
        </section>
        <section>
            <h2>Thar should be Pirate Talk below!</h2>
            <?php

                $text_to_convert = '';

                if (!empty($_GET['text-to-convert'])) {
                    $text_to_convert = $_GET['text-to-convert'];
                }

                $words_to_replace = [
                    ['hello', 'friend', 'there'],
                    ['ahoy', 'matey', 'thar']
                ];

                $pirate_text = str_ireplace($words_to_replace[0], $words_to_replace[1], $text_to_convert);
            ?>
            <div class="pirate-talk-output">
                <p><?php echo $pirate_text; ?></p>
            </div>
        </section>
    </main>

</body>

</html>