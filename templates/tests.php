<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="results"></div>
		<input type="submit" id="buttons">
<script>
let result = document.getElementByID('results');
let button = document.getElementByID('buttons');
button.addEventListener('click', function() {
	// выполним AJAX запрос
    let promise = fetch('//templates/tests.php//');
    promise.then(
		response => {
        return    console.log(response.text());
		}
    ).then(
        text => {
            result.innerHTML = text;
        }
    )
});
</script>

</body>
</html>