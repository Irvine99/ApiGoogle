const passwordInput = document.querySelector(".pass-field input");
const requirementList = document.querySelectorAll(".requirement-list li");

const requirements = [
    { regex: /.{8,}/, index: 2 },
    { regex: /[0-9]/, index: 0 },
    { regex: /[^A-Za-z0-9]/, index: 1 },
]

passwordInput.addEventListener("keyup", (e) => {
    requirements.forEach(item => {
            const isValid = item.regex.test(e.target.value);
            const requirementItem = requirementList[item.index];

            if (isValid) {
                requirementItem.firstElementChild.className ="fa-solid fa-square-check";
                requirementItem.classList.add("valid");            
        }else {
            requirementItem.firstElementChild.className ="fa-sharp fa-solid fa-xmark";
            requirementItem.classList.remove("valid");
        }
    });
});