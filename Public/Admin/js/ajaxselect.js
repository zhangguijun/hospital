$(function(){
    var hosName = $("#addr option:selected").val();
    $.ajax({
        type:'POST',
        url:subUrl,
        data: {"hospitalname":hosName},
    
        success: function (data) { //返回json结果
            //console.log(data);
            
            //alert(data.hospitalcode);
            var h = eval(data);
           // console.log(h);
           var code =  h['0']["hospitalcode"];
          // console.log(code);
         $('#hos_code').val(code);
        }
    })
});


$("#addr").change(function(){
    var hosName = $("#addr option:selected").val();
   // console.log(hosName);
    $.ajax({
        type:'POST',
        url:subUrl,
        data: {"hospitalname":hosName},
    
        success: function (data) { //返回json结果
           // console.log(data);
            
            //alert(data.hospitalcode);
            var h = eval(data);
           // console.log(h);
           var code =  h['0']["hospitalcode"];
           //console.log(code);
         $('#hos_code').val(code);
        }
    })
    
});

