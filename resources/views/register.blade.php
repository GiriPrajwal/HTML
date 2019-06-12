@extends('layouts.app')
@section('content')
<section class="row">
    <div class="container fluid">
        <div class="row">
<div class="d-flex justify-content-start col-lg-8">
<section class="col">
    <h2> Purchase a pass</h2>
    <h5> 100 for one pass</h5>
    <p> Purchase your Styles conference pass using form on right </p>
    <h4> Why attended?</h4>

    <ul class="why-attend">
        <li>One-twenty world class speakers</li>
        <li>One full day of workshops</li>
        <li>Hosted at theatre,the landmark</li>
    </ul>
</section></div>
<div class="d-flex justify-content-end col-lg-3">
<form class="col-lg-3" action="#" method="post">
    <fieldset class="register-group">
        <label>
            Name
            <input type="text" name="name" placeholder="FullName" required>
        </label>

        <label>
            Email
            <input type="email" name="email" placeholder="Email address" required>
        </label>

        <label>
            Number of Passes
            <select name="quantity" required>
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </label>

        <label>
            Comments
            <textarea name="comments"></textarea>
        </label>

    </fieldset>

    <input type="submit" name="submit" value="Purchase">

</form>
</div>
</div>
    </div>
</section>
@endsection


