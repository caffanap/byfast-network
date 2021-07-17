$(document).ready(function (){
  console.log(baseUrl)
  $.get(`${apiUrl}/get-paket`, (data) => {
    // $( ".result" ).html( data );
    // alert( "Load was performed." );
  });
});