
<?php
if(isset($_POST['submit'])){
    $to = "richard.horsford@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $subject = $_POST["subject_field"];
    $subject2 = $_POST["subject_field"];
    $message = $first_name . " " . $last_name . $subject_field ." " . " wrote the following:" . "\n\n" . $_POST['details'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['details'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
      ?>
<script type="text/javascript">
window.location = "http://rhproduction.co.uk/#/home";
</script>      
    <?php
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
}
?>