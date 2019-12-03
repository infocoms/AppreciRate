<?php
declare(strict_types=1);

require 'header.php';

$_SESSION["Progress"] = 80;
?>

<section>
    <div class="radioBox text-center">
        <input type="radio" name="image_radio" value="1" id="radioOne">
        <label class="image_radio r_one" for="radioOne"></label>
        <input type="radio" name="image_radio" value="2" id="radioTwo">
        <label class="image_radio r_two" for="radioTwo"></label>
        <input type="radio" name="image_radio" value="1" id="radioThree">
        <label class="image_radio r_three" for="radioThree"></label>
        <input type="radio" name="image_radio" value="2" id="radioFour">
        <label class="image_radio r_four" for="radioFour"></label>
        <input type="radio" name="image_radio" value="1" id="radioFive">
        <label class="image_radio r_five" for="radioFive"></label>
    </div>
</section>
    &nbsp;
<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['image_radio'])) {

        $rating = $_POST['image_radio']; // import value from radio selector

    }
}

// $_SESSION['Review rating'] = $rating;
$tourist = $_SESSION['Tourist Name'];
$company = $_SESSION['Company'];
$department = $_SESSION['Department'];
$review = $_SESSION['Review'];
?>

&nbsp;
<section>
    <h3><?php echo $company . ', ' . $department ?></h3>
    <h3><?php echo $tourist ?><br></h3>
    <fieldset>
        <legend>Review:</legend>
        <p><?php echo $review ?></p>
    </fieldset>
    <form method="post">
        <input type="submit" value="Confirm" name="Confirm">
    </form>
</section>

<?php
if (isset($_POST['submit'])) {

    $tourist->updateTouristField();
    $company->updateCompanyField();
    $department->updateDepartmentField();
    $review->updateDepartmentField();
    $rating->updateReviewField();

}
?>