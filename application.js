$(document).ready(function()
{
  $('textarea').keyup(function()
  {
      var values = $('#counters').val();

      $.ajax
      (
        {
          type: 'POST',
          url: 'process.php',
          data: {data:values},
          success: function(data){
            $('#display').html(data);
          }
        }
      )
  })
})
