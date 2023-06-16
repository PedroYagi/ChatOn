var url;
url = "verban.php";
jQuery.get(url,function(data) {
	$("#duvidas").empty().append(data);
});
