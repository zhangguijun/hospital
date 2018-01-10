$(function(){
    var ksType = $("#ks_type option:selected").val();
    $.ajax({
        type:'POST',
        url:"http://hospital.com/index.php/admin/hospital/code_item",
        data: {"value":ksType},
    
        success: function(data){ 
            var json = eval(data); //数组
            var str = '';
            for(var i = 0,len=json.length;i<len;i++) {
                console.log(json[i]["item"]);
           
            str += '<option value="'+json[i]["item"]+'">'+json[i]["item"]+'</option>';
            }
            $('#ks_item').html(str);
        }
    
});
});


$("#ks_type").change(function(){
    var ksType = $("#ks_type option:selected").val();
   // console.log(hosName);
    $.ajax({
        type:'POST',
        url:"http://hospital.com/index.php/admin/hospital/code_item",
        data: {"value":ksType},
    
        success: function (data) { //返回json结果
            console.log(data);
            
            var json = eval(data); //数组
            var str = '';
            for(var i = 0,len=json.length;i<len;i++) {
                console.log(json[i]["item"]);
            
            str += '<option value="'+json[i]["item"]+'">'+json[i]["item"]+'</option>';
               
            }
            $('#ks_item').html(str);
        }
    })
    
});
