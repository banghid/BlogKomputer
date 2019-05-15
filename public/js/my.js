$(document).ready(function(){
  setInterval(function(){
        console.log(5555)
        let url = "<?php echo site_url('Pegawai/updateLastActivity'); ?>";
      $.ajax({
          type: "POST",
          url: url,
          data: {action : "fetch_data"},
          success: function(data)
          {
              let mydata = JSON.parse(data);
              console.log(mydata.data)
              $('#dropdownOnlineuser').empty()
              jQuery.each( mydata.data, function( i, val ) {

                  console.log(val)
                    $('#dropdownOnlineuser').append('<li style="padding-left:40px;">'+ val.nama_pengguna+'</li>')
              });


          },
          error : function(data){

              console.log(JSON.stringify(data));

          }
        });
        $.ajax({
            type: "POST",
            url: url,
            data: {action : "update_time"},
            success: function(data)
            {

            },
            error : function(data){

                console.log(JSON.stringify(data));

            }
          });
      },3000);



})
