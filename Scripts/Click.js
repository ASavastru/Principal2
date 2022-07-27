//function alertman(clicked) {
//    alert("You clicked " + clicked);
//}

document.querySelectorAll(".inMonth").forEach(alertman => {
    alertman.addEventListener("click", e => {
        alert(e.target.dataset.date);
    })
});