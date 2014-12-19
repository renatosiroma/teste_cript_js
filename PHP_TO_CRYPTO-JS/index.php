<script src="../lib.js"></script>
<script src="js-mcrypt/mcrypt.js"></script>
<script src="js-mcrypt/rijndael.js"></script>
<?php
$string = 'VEM MONSTROO';
$key = 'd4b494e4502a62edd695a903a94c2701';
$iv = '02f30dffbb0d084755f438f7d8be4a7d';

$encrypted = base64_encode(
    mcrypt_encrypt(
        MCRYPT_RIJNDAEL_256,
        $key,
        $string,
        MCRYPT_MODE_CBC,
        $iv
    )
);
//$encrypted results in 'nYoFAiyDARVSI09lH/IPdim5TvE51izVjk6sc2AK9Rg='
?>
<script>
window.onload = function(){
    var encrypted = '<?=$encrypted;?>';
    var key = 'd4b494e4502a62edd695a903a94c2701';
    var iv = '02f30dffbb0d084755f438f7d8be4a7d';

    var decrypted = mcrypt.Decrypt(atob(encrypted), iv, key, 'rijndael-256');

    alert(decrypted.toString(CryptoJS.enc.Utf8)); 
}
</script>