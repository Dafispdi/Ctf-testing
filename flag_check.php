<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $submitted_flag = $_POST['flag'];
    
    // Verify the flag (in this case, we'll hard-code some flags for simplicity)
    $flags = [
        "flag{sql_inject_1}",
        "flag{crypto_flag_2}",
        "flag{reverse_me_3}",
        "flag{web_exploit_4}"
    ];
    
    if (in_array($submitted_flag, $flags)) {
        echo "<p>Correct! Flag: $submitted_flag</p>";
    } else {
        echo "<p>Incorrect flag. Try again!</p>";
    }
}
?>

<form action="flag_check.php" method="POST">
    <label for="flag">Enter your flag:</label>
    <input type="text" name="flag" id="flag" required>
    <button type="submit">Check Flag</button>
</form>