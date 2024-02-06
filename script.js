 $(document).ready(function() {

$("#search").watermark("Begin Typing to Search");

$("#searchButton").click(function()
{
var search = $(this).val();
var dataString = 'search='+ faq_search_input;
if(search.length>3)
{
$.ajax({
type: "GET",
url: "content.php",
data: dataString,
beforeSend:  function() {

$('.loading').css('visibility', 'visible');

},
success: function(server_response)
{

$('#content #maincontent').html(server_response).show();
$('#content #maincontent .loading').css('visibility', 'hidden');




}
});
}return false;
});
});
	  


