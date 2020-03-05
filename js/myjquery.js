
  $(document).ready(function () {
      $.ajax({
         type:"GET",
         url:"includes/jsondata.inc.php",
         contentType:"application/json; charset=utf-8",
         dataType:"json",
         success:function (result){
           var table = $('#test');
            var dataTab = $.parseJSON(JSON.stringify(result));
              $.each(result,function(i,field){
                table.append('<tr> <td>' + field.id + '</td>'
                +'<td>' + field.name+'</td> </tr>' )
              })
s        },
  });
});
