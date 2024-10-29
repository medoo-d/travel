const inputs = document.querySelectorAll(".txtb input");

inputs.forEach(input => {
    input.addEventListener("focus", () => {
        input.classList.add("focus");
    });

    input.addEventListener("blur", () => {
        if (input.value === "") {
            input.classList.remove("focus");
        }
    });
});
