<script>
    buttons = document.querySelectorAll(".package-buttons button");
    packages = document.querySelectorAll(".package");

    i = 0;
    buttons.forEach((button) => {
        button.addEventListener("click", onClick(button, i));
        i++;
    });

    function onClick(button, i) {
        return function () {
            buttons.forEach((button) => {
                button.classList.remove("iispmun-button-selected");
            });
            button.classList.add("iispmun-button-selected");

            packages.forEach((pkg) => {
                pkg.style.display = "none";
            });
            packages[i].style.display = "block";
        };
    }

    onClick(buttons[0], 0)();
</script>
