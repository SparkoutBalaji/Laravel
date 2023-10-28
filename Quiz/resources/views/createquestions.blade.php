@extends('admin.adminpanel')
@section('admin-content')
<style>
    table, tr, th, td {
        border: 1px solid black;
        text-align: center;
    }
    button {
        text-align: center;
    }
    .button {
        margin-top: 20px;
        padding-left: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    h1 {
        text-align: center;
    }
</style>
<form action="{{ url('/store/questions') }}" method="post">
    <h1>Create Questions</h1>
    <table>
        <tr>
            <th>Question</th>
            <th>Option 1</th>
            <th>Option 2</th>
            <th>Option 3</th>
            <th>Answer</th>
            <th>Action</th>
        </tr>
        <tr id="template" style="display:none;">
            <td><input type="text" name="question[0]" placeholder="Enter Question"></td>
            <div>
                @error('question.*')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <td><input type="text" id="option1" name="option[0][]"  placeholder="Option 1"></td>
            <td><input type="text"  id="option2" name="option[0][]"  placeholder="Option 2"></td>
            <td><input type="text"  id="option3" name="option[0][]" placeholder="Option 3"></td>
            <div>
                @error('option.*.*')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <td>
                <input type="radio" id="one" name="answer[0]" value="1" > 1
                <input type="radio" id="two" name="answer[0]" value="2" > 2
                <input type="radio" id="three" name="answer[0]" value="3" > 3
            </td>
            <div>
                @error('answer.*')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <td>
                <button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button>
            </td>
        </tr>
    </table>
    @csrf
    <div class="button">
        <button type="button" class="btn btn-success" onclick="addContent()">+ Add</button>
        <button type="submit" class="btn btn-success">SUBMIT</button>
    </div>
</form>
<script>
    let counter = 1;

    addContent();

    function addContent() {
        const template = document.querySelector("table").rows[1].cloneNode(true);
        template.style.display = "";

        // Update name attributes with the current counter value
        const inputs = template.querySelectorAll('input');
        console.log(inputs)
        inputs.forEach((input) => {
            if (input.name.includes('question')) {
                input.name = `question[${counter}]`;
            } else if (input.name.includes('option')) {
                const optionIndex = input.name.substr(-1);
                input.name = `option[${counter}][${optionIndex}]`;
            } else if (input.name.includes('answer')) {
                input.name = `answer[${counter}]`;
            }
        });

        document.querySelector("table").appendChild(template);
        counter++;
    }

    function removeRow(button) {
        const row = button.parentNode.parentNode;
        console.log(row);
        row.parentNode.removeChild(row);
    }

</script>

@endsection



