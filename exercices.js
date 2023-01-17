/* MAIN JAVASCRIPT FOR EXERCICES.PHP */


const exercice_index_btn = document.getElementById("exercice_index_btn");
const exercice_index = document.getElementById("exercice_index");

exercice_index_btn.addEventListener("change", (event) => {
	if (event.currentTarget.checked) {
		exercice_index.style.display = "flex";
	} else {
		exercice_index.style.display = "none";
	}
})