<html>
<form action="submit" method="post">
    @csrf
    <input type="text" id="question_name" name="question_name">
    <label for="question_name">Question</label><br>
    <input type="text" id="option_A" name="option_A">
    <label for="option_A">Option A</label><br>
    <input type="text" id="option_B" name="option_B">
    <label for="option_B">Option B</label><br>
    <input type="text" id="option_C" name="option_C">
    <label for="option_C">Option C</label><br>
    <input type="text" id="option_D" name="option_D">
    <label for="option_D">Option D</label><br>


    <input type="submit" name="submit" id="submit">
    <label for="submit">Submit</label>

</form>
</html>
