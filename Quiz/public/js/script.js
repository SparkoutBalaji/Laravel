<script>
    let questionCounter = 1;

    function addQuestion() {
        const questionContainer = document.createElement("div");
        questionContainer.className = "question-container";

        // Question input
        const questionInput = document.createElement("input");
        questionInput.type = "text";
        questionInput.name = "question[" + questionCounter + "]";
        questionInput.required = true;
        questionInput.placeholder = "Enter your question";
        questionContainer.appendChild(questionInput);

        // Option inputs
        for (let i = 1; i <= 3; i++) {
            const optionInput = document.createElement("input");
            optionInput.type = "text";
            optionInput.name = "option[" + questionCounter + "][" + i + "]";
            optionInput.required = true;
            optionInput.placeholder = "Enter option " + i;
            questionContainer.appendChild(optionInput);
        }

        // Radio buttons for answers
        const answerLabel = document.createElement("label");
        answerLabel.textContent = "Select the correct answer:";
        questionContainer.appendChild(answerLabel);

        for (let i = 1; i <= 3; i++) {
            const answerInput = document.createElement("input");
            answerInput.type = "radio";
            answerInput.name = "answer[" + questionCounter + "]";
            answerInput.value = "option" + i;

            const answerOptionLabel = document.createElement("label");
            answerOptionLabel.textContent = "Option " + i;

            questionContainer.appendChild(answerInput);
            questionContainer.appendChild(answerOptionLabel);
        }

        const deleteIcon = document.createElement("span");
        deleteIcon.className = "delete-icon";
        deleteIcon.innerHTML = "&#10060;";
        deleteIcon.onclick = function () {
            document.getElementById("question-form").removeChild(questionContainer);
        };

        questionContainer.appendChild(deleteIcon);
        document.getElementById("question-form").appendChild(questionContainer);

        questionCounter++;
    }
</script>
