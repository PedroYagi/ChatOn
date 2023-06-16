var url;
url = "verduvida.php";
jQuery.get(url,function(data) {
	$("#duvidas").empty().append(data);
});
