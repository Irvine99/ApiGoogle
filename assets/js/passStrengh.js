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
                requirementItem.classList.remove("text-red-500");

                requirementItem.classList.add("text-green-500");


                           
        }else {
            requirementItem.firstElementChild.className ="fa-sharp fa-solid fa-xmark";
            requirementItem.classList.remove("valid");
            requirementItem.classList.remove("text-green-500");
            requirementItem.classList.add("text-red-500");
           
        }
    });
});
    // const passwordInput = document.querySelector(".pass-field input");
    // const requirementList = document.querySelectorAll(".requirement-list li");

    // const requirements = [
    // { regex: /.{8,}/ },
    // { regex: /[0-9]/ },
    // { regex: /[^A-Za-z0-9]/ },
    // ];

    // passwordInput.addEventListener("input", (e) => {
    // const password = e.target.value;
    // for (let i = 0; i < requirements.length; i++) {
    //     const isValid = requirements[i].regex.test(password);
    //     const requirementItem = requirementList[i];
    //     requirementItem.firstElementChild.className = isValid ? "fa-solid fa-square-check" : "fa-regular fa-square-check";
    //     requirementItem.classList.toggle("valid", isValid);
    // }
    // });
