/*global $, document, CbunnyObj */
$(document).ready(function () {
//$.fn.modal.Constructor.prototype.enforceFocus = function() {};
  $('#item-select2').select2({
      minimumInputLength: 1,
      placeholder:'Faire une Recherche',
      allowClear: false,
      dropdownAutoWidth:false,
    ajax: {
      url: CbunnyObj.APP_PATH + 'boutiques/search',
      dataType: 'json',
      data: function (term, page) {
        return {
          q: term
        };
      },
      results: function (data, page) {
        return { results: data };
      }
    }
  });
$("#item-select2")
.on("select2-selecting", function(e) { document.location.href=CbunnyObj.APP_PATH+"boutiques/view/"+e.val;});

});
