$(document).ready(function(){
  $('#rent-table').DataTable({

  });
});

$(document).ready(function(){
  $('#dt-length-0').attr('class', function(i, origValue){
    return origValue + " w-[60px]";
  });
  $('.dt-layout-row').attr('class', function(i, origValue){
    return origValue + " px-[10px] pt-[10px]";
  });
  $('#rent-table_wrapper').attr('class', function(i, origValue){
    return origValue + " !static";
  });
  $('thead>tr>th').attr('class', function(i, origValue){
    return origValue + " !static";
  });
  $('.dt-column-order').attr('class', function(i, origValue){
    return origValue + " !hidden";
  });
});