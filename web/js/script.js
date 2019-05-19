$.getJSON('https://api.myjson.com/bins/gufba', function(data){
    $.each(data, function(key, val){
      for(let i = 0; i < val.length; i++) {
          $('#list').append(`<a href="${val[i].id}">${val[i].name}</a></br>`)
      }
    });
  });

$.getJSON('https://api.myjson.com/bins/c5rjy', function(data){
    $.each(data, function(key, val){
      for(let i = 0; i < val.length; i++) {
          $('#types').append(`<a href="${val[i].id}">${val[i].name}</a></br>`)
      }
    });
  });