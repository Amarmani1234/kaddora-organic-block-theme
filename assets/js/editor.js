document.addEventListener("DOMContentLoaded", () => {
    const el = document.querySelector("#my-element");
    if (el) {
        el.addEventListener("click", () => {
            console.log("clicked");
        });
    }
});
