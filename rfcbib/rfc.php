<?php require("rfc-inc.php");?>

<!DOCTYPE html>
<html>

<head>
<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:600px;
    width:180px;
    float:left;
    padding:10px;	      
}
#section {
    margin-left: 220px;
	height:600px;
    padding:10px;	 	 
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
</style>
</head>

<body>

<div id="header">
<h1>Bibtex Information for IETF RFC files</h1>
</div>

<div id="nav">
Bibtex of RFC <br/>
Visit me at <br/>
<a href="http://blog.csdn.net/yinqingwang">CSDN</a>, <a href="http://yinqingwang.wordpress.com/">Wordpress</a><br/>

 <hr/>
 
</div>

<div id="section">
<h2>Bibtex Information for RFC files</h2>
<p>
If you're frequently citing RFCs as reference, you might want to have a bibtex file of all RFCs.
</p>
<p>
So I wrote an script to translate the XML-based rfc index, which is provided by the RFC editor, into a bibtex format. It may be far from being perfect. However, I think it works well enough for most purposes. Okay, I hope I saved a little bit of your valuable time, so enjoy...
</p>
<form action="rfc.php" method="POST">
RFC Number ( <b>1 - <?php echo RFC_MAX; ?> </b>) :<br>
<input type="text" name="rfcnumber"> <input type="submit" value="Submit">
<br>
<hr/>

</form>
<?php
$rfcnumber =  $_POST["rfcnumber"];
$rfcResult = NULL;
if( !is_null( $rfcnumber) ){
	$rfcResult = getBibItem($rfcnumber);
	echo "<pre><br/>";
	echo $rfcResult['BIB'];
	echo "</pre><br/>";
}

if( !is_null($rfcResult['URL']) ){
	$rfcurl = $rfcResult['URL'];
	echo "<P> The IETF  file is : <a href=\"$rfcurl \"> RFC $rfcnumber </a></P>";
}

?>
<p>
Total Bibtex of all IETF files is <a href="http://github.com/siwind/rfc-bibtex"> Here! </a>
</p>
</div>

<div id="footer">

<p> YinqingWang has written this which you can use it. </p>

</div>

</body>
</html>
