<div class="container">
    <h1>Create Questions</h1>
        <form action="" id="question-form">
            <div id="question-container">

            </div>
            <button type="button" id="add-question">Add Question</button>
            <button type="submit">Submit</button>
            @csrf
        </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const questionContainer = document.getElementById('question-container');
    const addQuestionButton = document.getElementById('add-question');

    let questionSetCounter = 0; // Initialize a counter for unique names

    addQuestionButton.addEventListener('click', function () {
        // Create a new question set
        const questionSet = document.createElement('div');
        questionSet.classList.add('question-set');

        questionSetCounter++; // Increment the counter

        questionSet.innerHTML = `
            <input type="text" name="questions[]" placeholder="Enter your question" required>
            <input type="text" name="options[]" placeholder="Option 1" required>
            <input type="text" name="options[]" placeholder="Option 2" required>
            <input type="text" name="options[]" placeholder="Option 3" required>
            <label>
                <input type="radio" name="answers-${questionSetCounter}" value="0" required> Option 1
            </label>
            <label>
                <input type="radio" name="answers-${questionSetCounter}" value="1" required> Option 2
            </label>
            <label>
                <input type="radio" name="answers-${questionSetCounter}" value="2" required> Option 3
            </label>
            <button type="button" class="remove-question">Remove</button>
        `;

        questionContainer.appendChild(questionSet);

        // Add a click event to the "Remove" button
        const removeButtons = document.querySelectorAll('.remove-question');
        removeButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                questionSet.remove();
            });
        });
    });
});    </script>
