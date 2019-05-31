

$(document).ready(function() {
           
    // Setup - add a text input to each footer cell
$('#example tfoot th').each( function () {
var title = $(this).text();
$(this).html( '<input type="text" placeholder="Search '+title+'" />' );


} );
    
    
// DataTable
var table = $('#example').DataTable( {
"processing": true,
"serverSide": true,
"ajax": "server.php"


} );      
    



  
 
     $("#example tbody, #btnEnviar").on('click','tr',  function(e){

         e.preventDefault();

         //#tipo, #cor, #tamanho, #sexo, #produto, #local
         var bolso = $('#bolso').val();
         var capuz = $('#capuz').val();
         var tipo = $("#tipo").val();
         var busto = $("#busto").val();
         var altura = $("#altura").val();
         var adicional = $("#adicional").val();
         var cor = $("#cor").val();
         var tamanho = $("#tamanho").val();
         var sexo = $("#sexo").val();

         var produto = $("#produto").val();
       // var codigo = $('#codigo').val();
         var local = $("#local").val();
         var ordem = $("#ordem").val();
         var id = $(this).attr('td');
         var data = table.row( this ).data();

         if(confirm("Deseja efetuar o cadastro?")){
             e.preventDefault();
            
             $.ajax({
                 type:'post',		//Definimos o método HTTP usado
                 dataType: 'json',	//Definimos o tipo de retorno
                 data: {adicional, cor, tipo, tamanho, sexo, produto, local, data, ordem, altura, busto, bolso, capuz},
                 url: 'post.php',//Definindo o arquivo onde serão buscados os dados
                 success: function(dados){
                     
                    // $("#response").html(dados)

                     alert(dados)
                 }
                 
            
                 
                  
                     
             }),
             $("#tipo").val("");
             $("#adicional").val("");
              $("#cor").val("");
              $("#tamanho").val("");
             $("#sexo").val("");
              $("#produto").val("");
              $("#local").val("");
             $("#ordem").val("");



                 $(':input',this)
                     .not(':button, :submit, :reset, :hidden')
                     .val('')
                     .removeAttr('checked')
                     .removeAttr('selected');
            

         }


       
     
     });

 
   

     


     // Apply the search
     table.columns().every( function () {
         var that = this;
  
         $( 'input', this.footer() ).on( 'keyup change', function () {
             if ( that.search() !== this.value ) {
                 that.search( this.value ).draw();

                

             }
         } );
         $( "#tipo, #cor, #tamanho, #sexo, #produto, #local, #adicional, #ordem").on( 'keyup change', function (e) {
             var tipo = $("#tipo").val();
             var adicional = $("#adicional").val();
             var cor = $("#cor").val();
             var tamanho = $("#tamanho").val();
             var sexo = $("#sexo").val();
             var produto = $("#produto").val();
             var local = $("#local").val();
             var ordem = $("#ordem").val();
               
             
         } );
        
               


     } );
  



 } );

