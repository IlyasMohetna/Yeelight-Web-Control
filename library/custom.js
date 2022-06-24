         $('#lightSwitch').change(function(){
            switch($("#lightSwitchvalue").val()){
               case'on':
               Power('off');
               $('#lightSwitchvalue').val('off');
               break;
               case'off':
               Power('on');
               $('#lightSwitchvalue').val('on');
               break;
            }
         })
         function Power(status){
            $.ajax({
               url:'./function/exec.php',
               method:'POST',
               data:'action=power&status='+status
            })
         }
         function ChangeColor(hex){
               $.ajax({
                  url:'./function/exec.php',
                  method:'POST',
                  data:'action=color&color='+$('#finalcolor').val(),
                  success:function(){
                     return true;
                  }
               })
         }
         window.setInterval(function(){
            var lastcolor = $('#lastcolor').val();
            var finalcolor = $('#finalcolor').val();
            if(lastcolor !== finalcolor){
               $('#lastcolor').val(finalcolor);
               ChangeColor(finalcolor);
            }
         },100);