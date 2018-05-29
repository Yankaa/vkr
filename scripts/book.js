<script type="text/javascript">
var total = 0;
function add_new_image(){
   total++;
   $('<tr>')
   .attr('id','tr_image_'+total)
   .css({lineHeight:'20px'})
   .append (
       $('<td>')
       .attr('id','td_title_'+total)
       .css({paddingRight:'5px',width:'200px'})
       .append(
           $('<input type="text" />')
           .css({width:'200px'})
           .attr('id','input_title_'+total)
           .attr('name','input_title_'+total)
       )                              
                               
    )
    .append(
        $('<td>')
        .css({width:'60px'})
        .append(
           $('<span id="progress_'+total+'" class="padding5px"><a href="#" onclick="$(\'#tr_image_'+total+'\').remove();" class="ico_delete"><img src="delete.png" alt="del" border="0"></a></span>')
         )
     )
     .appendTo('#table_container');                 
}
$(document).ready(function() {
    add_new_image();
});
</script>