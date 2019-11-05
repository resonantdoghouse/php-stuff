<?php require_once("data.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Search</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h1>Search</h1>
    <form method="get" class="search-form">
        <input type="text" name="search">
        <input type="submit">
    </form>

    <?php
    /**
     * Search Function searching for the 'key' value of 'name'
     *
     * @param [type] $name
     * @param [type] $array
     * @return void
     */
    function searchName($name, $array)
    {
        foreach ($array as $key => $val) {
            if (strtolower($val['name']) === strtolower($name)) {
                return $key;
            }
        }
        return null;
    }

    $string_to_search = $_GET['search'];

    if (!empty($string_to_search)) {
        // $search_result =  array_search($string_to_search, $data);
        // var_dump($search_result);
        $found_index = searchName($string_to_search, $data);

        if (!is_null($found_index)) {
            echo "<pre class='search-results'>";
            var_dump($data[$found_index]);
            echo "</pre>";
        } else {
            echo '<p>no results found</p>';
        }
    }

    ?>

</body>

</html>