$(document).ready(function() {

  var fields = 'input, textarea',
      currentLabel = 'current',
      focusLabel = 'focus';

$(fields).bind("hasVal",function(){
    var label = $('label[for="'+ $(this).attr('name') +'"]');
    if( $(this).val() !== ""){
      label.addClass(currentLabel);
    } else {
      label.removeClass(currentLabel);
    }
  }).on('keyup', function(){
    $(this).trigger("hasVal");
  }).on('blur', function(){
    var label = $('label[for="'+ $(this).attr('name') +'"]');
    label.removeClass(focusLabel);
    label.addClass('active');
  }).on('focus', function(){
    var label = $('label[for="'+ $(this).attr('name') +'"]');
    label.addClass(focusLabel);
  });

});
