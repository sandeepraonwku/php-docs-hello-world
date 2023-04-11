<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
$url = "https://docs.google.com/forms/d/e/1FAIpQLSfDFJTp7d9piY6RHUzBeCf5D3r_EfXcup-zy3bOs0azD-ojjQ/formResponse?usp=pp_url&submit=Submit&entry.1412737491==234234242";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($curl);
curl_close($curl);

echo $resp;
?>



</body>
</html>