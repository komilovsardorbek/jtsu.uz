setTimeout(() => {
    document.getElementById("toast").style.display = "block";
<<<<<<< HEAD

  }, 9000)

  function myFunction() {
}, 9000)

=======
  }, 9000)

>>>>>>> b127b5bb9b7d9036850a3a58b42368cdf2fcaaa9
function myFunction() {
    document.getElementById("toast").style.display = "none";
    $.cookie("toast", true, {expires: 30});
}

function myFunction1() {
    document.getElementById("demo").style.transform = "rotate(180deg)";
}