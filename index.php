<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json tutorial</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <script>
        function getDetails(){
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET", "http://localhost/json/mobile.json",false);
            xmlhttp.send();
            if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
                var result=xmlhttp.responseText;
                //alert(result);
                //document.getElementById("show").innerHtml=result;
                var o=json.parse(result);
                //alert(o.length);
                var data="";
                for(var i=0;i<0.length;i++){
                    data+='<table>\
                    <tr><th>model</th><td>'+o[i]["model"]+'</td><td rowspan=8><img src="https://m.media-amazon.com/images/I/810GQ7CWdDL._SL1500_.jpg"
>'+o[i]["image"]+' class=img></td></tr>\
                    <tr><th>brand</th><td>'+o[i]["brand"]+'</td></tr>\
                    <tr><th>mrp</th><td>'+o[i]["mrp"]+'</td></tr>\
                    <tr><th>price</th><td>'+o[i]["price"]+'</td></tr>\
                    <tr><th>ram</th><td>'+o[i]["ram"]+'</td></tr>\
                    <tr><th>storage</th><td>'+o[i]["storage"]+'</td></tr>\
                    <tr><th>camera</th><td>'+o[i]["camera"]+'</td></tr>\
                    <tr><th>is Available</th><td>'+o[i]["isAvailable"]+'</td></tr>\
                    </table>\
                    ';


                }
                document.getElementById("show").innerHtml=data;



            }
            

        }
        </script>
</head>
<body onload="getDetails();">
<h3>jarvin bai mobile gallery by json file</h3>
<div id="show">

</div>
    
</body>
</html>