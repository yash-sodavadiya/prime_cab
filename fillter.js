$(document).ready(function(){
    $("#taxi").change(function(){
        var cat = $(this).find(":selected").val();
        var datastring = 'category='+ cat;
        $.get({
          
            url:"demo.php",
            dataType:"json",
            data: datastring,
            cache:false,
            success:function(taxidata){
                if(taxidata)
                {
                    $("#taxinm").text(taxidata.taxi_name);
                    $("#price").text(taxidata.price_km);
                    $("#luggage").text(taxidata.luggage);
                    $("#ac").text(taxidata.air_conditioner);
                    $("#baserate").text(taxidata.base_rate);

                }
            }
        });
    });


});