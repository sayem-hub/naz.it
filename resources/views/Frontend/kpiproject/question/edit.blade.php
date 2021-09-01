@extends('layouts.frontend')

@section('main')


<h2>Edit question:</h2>

<form action="{{route('admin.question.edit', $questions->id)}}" method="post">
    @csrf
            <div class="mb-3">
                <label for="question_1" class="form-label">Question 1</label>
                <input type="text" class="form-control" name="question_1" id="question_1" value="{{ $questions->question }}">
            </div>

            <div class="mb-3">
                <label for="question_2" class="form-label">Question 2</label>
                <input type="text" class="form-control" name="question_2" id="question_2">
            </div>

            <div class="mb-3">
                <label for="question_3" class="form-label">Question 3</label>
                <input type="text" class="form-control" name="question_3" id="question_3">
            </div>

            <div class="mb-3">
                <label for="question_4" class="form-label">Question 4</label>
                <input type="text" class="form-control" name="question_4" id="question_4">
            </div>

            <div class="mb-3">
                <label for="question_5" class="form-label">Question 5</label>
                <input type="text" class="form-control" name="question_5" id="question_5">
            </div>

            <div class="mb-3">
                <label for="question_6" class="form-label">Question 6</label>
                <input type="text" class="form-control" name="question_6" id="question_6">
            </div>

            <div class="mb-3">
                <label for="question_7" class="form-label">Question 7</label>
                <input type="text" class="form-control" name="question_7" id="question_7">
            </div>

            <div class="mb-3">
                <label for="question_8" class="form-label">Question 8</label>
                <input type="text" class="form-control" name="question_8" id="question_8">
            </div>

            <div class="mb-3">
                <label for="question_9" class="form-label">Question 9</label>
                <input type="text" class="form-control" name="question_9" id="question_9">
            </div>

            <div class="mb-3">
                <label for="question_10" class="form-label">Question 10</label>
                <input type="text" class="form-control" name="question_10" id="question_10">
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
            </div>

@endsection
