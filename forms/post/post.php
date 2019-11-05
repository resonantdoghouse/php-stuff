<?php require_once './inc/header.php';

$name = '';
$email = '';

if (!empty($_POST['name'])) {
    $name = $_POST['name'];
    echo "<p>Name: {$name}</p>";
}

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    echo "<p>Email: {$email}</p>";
}

if (!empty($_POST['name']) && !empty($_POST['email'])) {
    write_file();
}

function write_file()
{
    global $email;
    global $name;
    $file = 'contacts.txt';
    $current = file_get_contents($file);
    $current .= 'name: ' . $name . ', email: ' . $email . "\n";
    file_put_contents($file, $current);
}

require_once './inc/footer.php';
