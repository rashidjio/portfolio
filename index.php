
<!DOCTYPE html>
<html><meta name="viewport" content="width=device-width, initial-scale=1.0"  >
<head>
    <title>Love</title>
   <h2 class="mybg2"> Made by Rashid</h2>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Montserrat+Alternates|Philosopher" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
</head>
<style>
body{
text-align: center;
           

}

  h2{
            background-color:white; 
            color:#ff66a3;
            padding-top:5px;
            padding-bottom: 5px;
            font-family: 'Cinzel Decorative', cursive;
            font-weight: bold;
            border-radius:8px;
        }








        .fa-heart{
            font-size:30px;
            color:#ff66a3;
            animation-name:beat;
            animation-duration:0.5s;
            animation-iteration-count: infinite; 
        }
        @keyframes beat{
            50%{font-size: 35px;}
        }
        .hrt{
            height:40px;
            width:50px;
            
        }
        h1{
            background-color:white; 
            color:#ff66a3;
            padding-top:5px;
            padding-bottom: 5px;
            font-family: 'Cinzel Decorative', cursive;
            font-weight: bold;
            border-radius:8px;
        }
        input[type="text"]{
            border:2px solid #ff66a3;
            color:#ff66a3;
            border-radius:15px;
            padding-left:10px;
            padding:5px;
        }
        input[type="text"]:focus{
            box-shadow:2px 2px 5px #ffb3d1;

        }
        .b1{
            background-color:#ff66a3;
            color:white;
            border-radius:5px;
            border:none;
            padding: 5px;
            font-size:20px


        }
        .fill{
            display:block;
            margin-left:8%;
            margin-right: 8%;
            background-color: white;
            padding-left:15px;
            padding-right:15px;
            padding-top:10px;
            padding-bottom: 10px;
            color:#ff66a3;
            border-radius:18px;
            font-family: 'Montserrat Alternates', sans-serif;
            font-weight: bold;
            font-size:20px;
        }
        .res{
            display:block;
            margin-left:8%;
            margin-right: 8%;
            background-color: white;
            padding-left:15px;
            padding-right:15px;
            padding-top:10px;
            padding-bottom: 10px;
            color:#ff66a3;
            border-radius:18px;
            visibility:hidden;
            font-family: 'Philosopher', sans-serif;
            font-size:20px;
        }
        input[type="text"]:focus{
            outline:none;
        }




.mybg{
    width:100%;
    height:100%;
    color:black;
    font-weight:bold;
    animation:myanimation 10s infinite ;
}

@keyframes myanimation{
    0%{background-color:red;}
    25%{background-color:yellow;}
    50%{background-color:green;}
    75%{background-color:brown;}
    100%{background-color:red;}
    
    
}

.mybg2{
    width:100%;
    height:100%;
    color:black;
    font-weight:bold;
    animation:myanimation 5s infinite ;
}

@keyframes myanimation{
    0%{background-color:red;}
    25%{background-color:yellow;}
    50%{background-color:green;}
    75%{background-color:brown;}
    100%{background-color:red;}
    
    
}








</style>



<body    class="mybg"background-color change in time >  
    <h1>Love Calculator</h1>
    <div class="fill">Your Name:<br>


<form action="connect.php" method="post" id='insertform'>


        <input type="text" id="a" name="lovefrom" placeholder="Your Name.">
        <br><br>
        <center>
            <div class="hrt">
                <i class="fa fa-heart" ></i><div class="hrt">
                <i class="fa fa-heart" ></i>
            </div>
        </center>
        <br>
        Your Love Name:<br>
        <input type="text" id="b" name="loveto" placeholder="His/Her Name.">
        <br><br>
        <button type="submit" class="b1"  id='insert'>Calculate</button>


    </form>

    </div>
    <br>
    <div class="res" name="resullt" >
        <p id="p"></p>
        <p id="q" ></p>
    </div>
    <script>


$('#insertform').submit(function(){
	return false;
});
$('#insert').click(function(){
	$.post(		
		$('#insertform').attr('action'),
		$('#insertform :input').serializeArray(),
		function(result){
			$('#result').html(result);
		}
	);
});







$(document).ready(function() {
            $(".b1").click(function(){
                var her=$("#a").val();
                var his=$("#b").val();
                var comm=[];
                var sum=0;
                var new1=her+his;
                var count=1;
                var arr=[];
                $(".res").css('visibility', 'visible');
                if(her=="" || his==""){
                    $("#p").text("Enter Valid Names.");
                }
                else{
                for(var i=0;i<new1.length-1;i++){
                    if(new1.charAt(i)=="a" || new1.charAt(i)=="e" || new1.charAt(i)=="i" || new1.charAt(i)=="o" || new1.charAt(i)=="u" ){
                        comm.push(6);
                    }
                    else if(new1.charAt(i)=="x" || new1.charAt(i)=="w" || new1.charAt(i)=="z" ){
                        comm.push(10);
                    }    
                    else{
                        comm.push(3);
                    }
                }
            for(var j=0;j<comm.length;j++){
                sum+=comm[j];
            }
            if(sum>100){
                sum=100;
            }
            if(sum<25){
                $("#p").text(sum+"%");
                $("#q").text("Your relation might work out but the chances are very few.But dont stop working on your relation")
            }
            else if(sum<50){
                $("#p").text(sum+"%");
                $("#q").text("The chance of a relationship working out is not very big, but a relationship is very well possible.");
            }
            else if(sum<75){
                $("#p").text(sum+"%");
                $("#q").text("You have a reasonable chance of working out, but on the other hand, it might not.");
            }
            else if(sum<95){
                $("#p").text(sum+"%");
                $("#q").text("You have a very good chance of being successful.You are \"Flawless\" together.");
            }
            else{
                $("#p").text(sum+"%");
                $("#q").text("You are PERFECT couple.You seem to be made for each other.");
            }
            }
            });
        });



</script>
</body>
</html>
