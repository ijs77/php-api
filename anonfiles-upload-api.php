function anon($path) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.anonfiles.com/upload');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        'file' => new CURLFile($path),
    ]);
    $res = json_decode(curl_exec($ch), 1);
    curl_close($ch);
    return $res;
}



$path = anon('anime.mp4');
var_dump($path);
