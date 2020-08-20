<?php
//var_dump($_POST);

require_once('connect.php');

switch ($_POST['action']) {
    case "insert":
        $sql = "INSERT INTO messages VALUES(NULL,NOW(),?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute(array($_POST['pseudo'], $_POST['message']));
        $tab['lastID'] = $pdo->lastInsertId();
        break;

    case "getLastId":
        $sql = "SELECT MAX(id_message) AS lastID FROM messages";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $result = $statement->fetch();
        $tab['lastID'] = $result['lastID'];
        break;

    case "getMessages":
        $sql = "SELECT * FROM messages WHERE id_message > ?";
        $statement = $pdo->prepare($sql);
        $statement->execute(array($_POST['lastID']));
        $tab['listeMessages'] = $statement->fetchAll();
        break;

}

echo json_encode($tab); //reponse transmise à JS