$("#hos_name").change(function(){
    var ksType = $("#hos_name option:selected").val();
   // console.log(hosName);
    $.ajax({
        type:'POST',
        url:"http://hospital.com/index.php/admin/hospital/judge",
        data: {"expertname":ksType},
    
        success: function (data) { //返回json结果
            if(data == 0){
                alert("该医生已经有坐诊信息，请选择其他医生");
            }
            else{

            }
        }
    })
    
});
