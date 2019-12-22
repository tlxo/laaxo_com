<style>
h2 {
	padding-left: 4px; 
	color: red;
	font-weight: bold;
	font-size: 18px;
}
</style>

<?php
$act = $_POST['act'];
if($act == "post") {
    $name = $_POST['name'];
	$date = date('jS \of F Y');
    $message  = $_POST ['message'];
    @$fp = fopen("gb_entries.php", 'a');
    if (!$fp) {
        //The file could not be opened
        echo "There was an error posting to the guestbook! Please try again later!";
        exit;
    } else {
        //The file was successfully opened, lets write the comment to it.
        $outputstring = "<div class='entry'><p><strong>Name:</strong> " .$name. "</p> <p><strong>Date:</strong> " .$date. "</p> <p><strong>Comment:</strong> " .$message. "</p></div>" ."\n";
        
        //Write to the file
        fwrite($fp, $outputstring, strlen($outputstring));
        
        //Close the file
        fclose($fp);
        
        //Post the success message
        echo "Your entry was posted successfully. Click <a href='guestbook.php'>here</a> to continue.";
    }
} else {
    //Show the form.
?>

<h2>Post an entry:</h2>
<form action="guestbook.php" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value=""></input></td>
        </tr>
        <tr>
            <td>Comment:</td>
            <td><textarea name="message"></textarea></td>
        </tr>
    </table>
    <input type="hidden" name="act" value="post"></input>
    <input type="submit" name="submit" value="Submit"></input>
</form>

<h2>Previous entries:</h2>
<?php include("gb_entries.php"); ?>

<?php
}
?>