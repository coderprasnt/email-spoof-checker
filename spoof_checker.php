
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $header = $_POST['header'];

    function check_spf($header) {
        if (strpos($header, 'spf=pass') !== false) {
            return "SPF: ✅ PASS";
        } elseif (strpos($header, 'spf=fail') !== false) {
            return "SPF: ❌ FAIL";
        } else {
            return "SPF: ❓ NOT FOUND";
        }
    }

    function check_dkim($header) {
        if (strpos($header, 'dkim=pass') !== false) {
            return "DKIM: ✅ PASS";
        } elseif (strpos($header, 'dkim=fail') !== false) {
            return "DKIM: ❌ FAIL";
        } else {
            return "DKIM: ❓ NOT FOUND";
        }
    }

    function check_dmarc($header) {
        if (strpos($header, 'dmarc=pass') !== false) {
            return "DMARC: ✅ PASS";
        } elseif (strpos($header, 'dmarc=fail') !== false) {
            return "DMARC: ❌ FAIL";
        } else {
            return "DMARC: ❓ NOT FOUND";
        }
    }

    function check_mismatch($header) {
        preg_match('/From: (.+)/', $header, $from);
        preg_match('/Return-Path: (.+)/', $header, $return_path);
        if ($from && $return_path && trim($from[1]) !== trim($return_path[1])) {
            return "🔴 From and Return-Path mismatch!";
        }
        return "🟢 From and Return-Path match!";
    }

    $spf = check_spf($header);
    $dkim = check_dkim($header);
    $dmarc = check_dmarc($header);
    $mismatch = check_mismatch($header);

    echo "<div style='background-color:#2B7A78;color:white;padding:15px;border-radius:10px'>";
    echo "<h3>📬 Email Spoof Check Result:</h3>";
    echo "<p>$spf</p>";
    echo "<p>$dkim</p>";
    echo "<p>$dmarc</p>";
    echo "<p>$mismatch</p>";
    echo "</div>";
}
?>

<form action="" method="post">
    <textarea name="header" rows="10" cols="60" placeholder="Paste email header here..." required></textarea><br>
    <button type="submit" style="background-color:#00b3ff;color:white;padding:10px 20px;border:none;border-radius:5px;cursor:pointer;">Check Email</button>
</form>
