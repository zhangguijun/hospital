$(function(){
    var ksType = $("#ks_type option:selected").val();
    $.ajax({
        type:'POST',
        url:"http://hospital.com/index.php/admin/hospital/type_code",
        data: {"value":ksType},
    
        success: function (data) { //返回json结果
            //console.log(data);
            var h = eval(data);
            //console.log(h);
           var code =  h['0']["code"];
         // console.log(code);
         $('#ks_code').val(code);
        }
    })
});


$("#ks_type").change(function(){
    var ksType = $("#ks_type option:selected").val();
   // console.log(hosName);
    $.ajax({
        type:'POST',
        url:"http://hospital.com/index.php/admin/hospital/type_code",
        data: {"value":ksType},
    
        success: function (data) { //返回json结果
           // console.log(data);
            
            //alert(data.hospitalcode);
            var h = eval(data);
           // console.log(h);
           var code =  h['0']["code"];
           //console.log(code);
         $('#ks_code').val(code);
        }
    })
    
});

