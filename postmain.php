<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Names: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

$url = 'https://docs.google.com/spreadsheets/d/1NELcsymwPWRIYTULIuGyK50OPAQiGcpMYk-Vk9_ZVB0/formResponse';


//--------------------------------------------------------
//The url you wish to send the POST request to
//$url = $file_name;

//The data you want to send via POST
$fields = [
    'entry.1412737491' => $name,
     'btnSubmit'         => 'Submit'
];

//url-ify the data for the POST
$fields_string = http_build_query($fields);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);
echo $result;

?>

</body>
</html>