let collapse_pizza = document.querySelector("#collapse_pizza");
let collapse_desserts = document.querySelector("#collapse_desserts");
let collapse_boissons = document.querySelector("#collapse_boissons");

function change(collapse) {
  if (collapse.textContent == "+") {
    collapse.textContent = "-";
  } else {
    collapse.textContent = "+";
  }
}
