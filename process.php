<?php
//var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars$_POST['email']);
	
	echo "These are the datam that the user submitted"
    echo "<br>";
	echo $name;
	echo "<br>";
	echo $email;
}	
 $to = "mercyoyewole48@gmail.com";
    // Email subject
    $subject = "New Form Submission";

   
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "The message I want to tell them is that they should try and do their best."; 

   
    if (mail($to, $subject, $message)) {
        echo "Thank you for contacting us, $name. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
       header("Location: index.html");
    exit;
}
?>
}
  

