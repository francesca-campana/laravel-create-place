require('./bootstrap');
var $ = require('jquery');
var Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax(
    {
      url: 'http://127.0.0.1:8000/api/students',
      method: 'GET',
      success: function(datares){
        var studentiLista = datares.students;

        var source = $("#students-template").html();
        var template = Handlebars.compile(source);
        for (var i = 0; i < studentiLista.length; i++) {
          var thisStudent = studentiLista[i];

          var html = template(thisStudent);
          $('#lista-students').append(html);
        }

      },
      error: function() {
        alert('error');
      }
    }
  );
});
