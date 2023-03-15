function kirimdata(){
    var dataInput = $("#inputBox").val();
    console.log("ASHOIA");
    $.get("./tampilData.php?data="+dataInput,function(data){
        $(".tampildata").html(data);
    })
}

setInterval(function(){
    $(".tampildata").load("./tampilData.php");
},1000)

