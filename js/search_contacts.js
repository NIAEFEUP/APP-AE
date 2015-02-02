$("#search").keyup(function(){
    var searchTxt = $(this).val();
    $.post("search.php",{searchVal: searchTxt}, function(output){
    $("#output").html(output);
  });
});