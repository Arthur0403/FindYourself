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

  if($('div').is('#test')) {
    $.getJSON('https://api.myjson.com/bins/123eny', function(data){
        $('.test-name').text(`${data.name}`);
          for(let i = 0; i < data.questions.length; i++) {
            if(typeof(data.questions[i]) === 'string') {
              $('#test').append(`<p>${data.questions[i]}</p>`);
            } else {
              for(let j = 0; j < data.questions[i].length; j++) {
                $('#test').append(`<input type="checkbox" class="radio" id="${data.questions[i][j].id}"><label for="${data.questions[i][j].id}">${data.questions[i][j].answer}</label>`);
              }
          }
        }
    });
  }

});
