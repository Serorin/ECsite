$(function(){

  $("button").on('click',function(){
  $.ajax({
    type:'GET',
    url:'/api/test',
    success:function(response){
      console.log(response);
    }
  });
});
})
