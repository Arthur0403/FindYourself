$.getJSON('https://api.myjson.com/bins/gufba', function(data){
    $.each(data, function(key, val){
      for(let i = 0; i < val.length; i++) {
          $('#tests').append(`<a href="${val[i].id}">${val[i].name}</a>`)
      }
    });
  });
