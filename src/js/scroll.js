$(document).ready(function () {
  $("a").on("click", function (event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top
        },
        800,
        function () {
          window.location.hash = hash;
        }
      );
    }
  });

  $("i").data("bounce", true);
  bounce($("i"));

  function bounce($elem) {
    $elem.effect("bounce", { times: 1, distance: 10 }, 760, function () {
      if ($(this).data("bounce")) bounce($elem);
      else $elem.stop();
    });
  }
});
