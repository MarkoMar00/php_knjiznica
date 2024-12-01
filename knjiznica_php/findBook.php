<?php
$name = $_POST['name'] ?? '';

$bookToFind = str_replace(' ', '+', strtolower($name));

$url = "https://openlibrary.org/search.json?q=" . $bookToFind . "&limit=1";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 4);
$json = curl_exec($ch);
if(!$json) {
    echo curl_error($ch);
}
curl_close($ch);
$data = json_decode($json, true);

$amountFound = $data['num_found'];

if ($amountFound > 0 ) {
    $author = $data['docs']['0']['author_name']['0'];
    header("Location: admin.php?author=" . urlencode($author));
} else {
    header("Location: admin.php?author=nepostojeci");
}
?>
