$(document).ready(function(){
  if($('div').is('#list')) {
    $.getJSON('https://api.myjson.com/bins/pzvni', function(data){
      $.each(data, function(key, val){
        for(let i = 0; i < val.length; i++) {
            $('#list').append(`<a href="${val[i].url}" data-id="${val[i].id}">${val[i].name}</a></br>`)
        }
      });
    });
  }

  if($('div').is('#types')) {
    $.getJSON('https://api.myjson.com/bins/jzefy', function(data){
      $.each(data, function(key, val){
        for(let i = 0; i < val.length; i++) {
            $('#types').append(`<a href="${val[i].url}" data-id="${val[i].id}">${val[i].name}</a></br>`)
        }
      });
    });
  }

});
