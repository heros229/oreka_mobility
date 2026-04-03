document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".select-menu1").forEach((optionMenu) => {
        const selectBtn = optionMenu.querySelector(".select-btn1");
        const optionsList = optionMenu.querySelector(".options1");
        const options = optionMenu.querySelectorAll(".option2");
        const sBtn_text = optionMenu.querySelector(".sBtn-text");

        // Ouvrir et fermer le menu
        selectBtn.addEventListener("click", (event) => {
            event.stopPropagation(); // Empêche la fermeture immédiate
            document.querySelectorAll(".select-menu1").forEach((menu) => {
                if (menu !== optionMenu) {
                    menu.classList.remove("active");
                    menu.querySelector(".options1").style.display = "none";
                }
            });

            optionMenu.classList.toggle("active");
            optionsList.style.display = optionMenu.classList.contains("active") ? "block" : "none";
        });

        // Sélectionner une option et fermer le menu
        options.forEach((option) => {
            option.addEventListener("click", (event) => {
                event.stopPropagation();
                let selectedOption = option.querySelector(".option-text1").innerText;
                sBtn_text.innerText = selectedOption;

                optionMenu.classList.remove("active");
                optionsList.style.display = "none";
            });
        });

        // Fermer le menu en cliquant ailleurs
        document.addEventListener("click", (event) => {
            if (!optionMenu.contains(event.target)) {
                optionMenu.classList.remove("active");
                optionsList.style.display = "none";
            }
        });
    });
});
