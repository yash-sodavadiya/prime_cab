$(document).ready(function () {
$("#bike").click(function(){
    flag = 1;
if(flag == 1)
{
    $("#bike").addClass("active");
    $("#auto").removeClass("active");
    $("#car").removeClass("active");
}
else
{
    $("#bike").removeClass("active");
}
});

$("#auto").click(function(){
    flag = 1;
if(flag == 1)
{
    $("#bike").removeClass("active");
    $("#auto").addClass("active");
    $("#car").removeClass("active");
}
else
{
    $("#auto").removeClass("active");
}
});
   
$("#car").click(function(){
    flag = 1;
if(flag == 1)
{
    $("#bike").removeClass("active");
    $("#auto").removeClass("active");
    $("#car").addClass("active");
}
else
{
    $("#car").removeClass("active");
}
});
   

    
});