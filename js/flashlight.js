$(document).ready(function () {
  $(this)
    .mousemove(function (e) {
      $("#light").css({
        top: e.pageY - 165,
        left: e.pageX - 165
      });
    })
    .mousedown(function (e) {
      switch (e.which) {
        case 1:
          $("#light").toggleClass("light-off");
          break;
        case 2:
          console.log("Middle Mouse Button");
          break;
        case 3:
          console.log("Right Mouse Button");
          break;
        default:
          console.log("New Mouse Button");
      }
    });
});