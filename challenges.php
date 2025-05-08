<?php
// List of challenges (example)
$challenges = [
    "Challenge 1: SQL Injection" => "flag{sql_inject_1}",
    "Challenge 2: Cryptography" => "flag{crypto_flag_2}",
    "Challenge 3: Reverse Engineering" => "flag{reverse_me_3}",
    "Challenge 4: Web Exploitation" => "flag{web_exploit_4}"
];

echo "<h2>Challenges</h2>";
echo "<ul>";
foreach ($challenges as $challenge => $flag) {
    echo "<li>$challenge</li>";
}
echo "</ul>";
?>