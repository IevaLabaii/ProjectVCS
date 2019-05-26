<?php

$Name = filter_input(INPUT_POST, 'Name');
$Surname = filter_input(INPUT_POST, 'Surname');
$Email = filter_input(INPUT_POST, 'Email');
$Country = filter_input(INPUT_POST, 'Country');
$Message = filter_input(INPUT_POST, 'Message');

if (!empty($Name) || !empty($Surname) || !empty($Email) || !empty($Country) || !empty($Message)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbname = "travel_form";
    
    $conn= new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
        die ('Connect Error('. mysqli_connect_errno().') '. mysqli_connect_error());
    } else {
        $sql = "INSERT INTO travelaskme (Name, Surname, Email, Country, Message) values('$Name', '$Surname', '$Email', '$Country', '$Message')";
    if ($conn->query($sql)) {
        echo "Thank You for Your message. We will contact You as soon as possible.";
    } else {
        echo "Error: ". $sql ."<br>". $conn->error;
    }
       $conn->close();
    }

} else {
    echo "Name should not be empty!";
    die ();
}
} else {
    echo "Surname should not be empty!";
    die ();
}
} else {
    echo "Email should not be empty!";
    die ();
}
} else {
    echo "Country should not be empty!";
    die ();
}
} else {
    echo "Message should not be empty!";
    die ();
}
?>
